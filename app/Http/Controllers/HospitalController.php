<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Hospital;
use App\Doctor;
use App\Organrequest;
use App\Organ;
use App\Hospital_image;
use App\User;
use App\City;
use App\Bloodbank;
use App\stock;
use App\Appointment;
use App\Http\Requests\HospitalRequest;

class HospitalController extends Controller
{
    public function create()
    {
        $id=Hospital::where('user_id','=',\Auth::user()->id)->pluck('id')->first();
        $doctor=Doctor::where('hospital_id','=',$id)->get();
        $app=Appointment::where('hospital_id','=',$id)->get();
        $attend=Appointment::where('hospital_id','=',$id)->get();
        $pending=Appointment::where('hospital_id','=',$id)->get();
        return view('hospital.pages.dashboard.dashboard',compact('doctor','app'));
    }
    public function add()
    {
        $cities=City::all();
        return view('admin.pages.hospital.add',compact('cities'));
    }
    public function store(HospitalRequest $request)
    {
        $user=new User(array(
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'password'=>bcrypt($request->get('password')),
            'role'=>'2',
        ));
        
        $user->save();
        
        $user_id=$user->id;
        
        //LOGO IMAGE
        $logo=\Input::file('image');
        $logoName = str_random(30).'.'.$logo->getClientOriginalExtension(); //Insert path in database
        $logo->move(base_path().'/public/images/hospital/logo/',$logoName); 

        $hospital=new Hospital(array(
            'city_id'=>$request->get('city'),
            'user_id'=>$user_id,
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'contact_no'=>$request->get('contact_no'),
            'address'=>$request->get('address'),
            'contact_person_name'=>$request->get('contact_person_name'),
            'contact_person_mobile_no'=>$request->get('contact_person_mobile_no'),
            'description'=>$request->get('description'),
            'image'=>$logoName,
            'status'=>'0',
        ));
        $hospital->save();

        $hid=$hospital->id;
        $mimages=\Input::file('images');

        foreach($mimages as $files)
        {
            $picName = str_random(30).'.'.$files->getClientOriginalExtension(); //Insert path in database
            $files->move(base_path().'/public/images/hospital/images/',$picName); 
            $pimage = new Hospital_image(array(
                'hospital_id' => $hid,
                'image' => $picName
            ));
            $pimage->save();
        }

        $data = array('email'=>$request->get('email'),'password'=>$request->get('password'));
        \Mail::send('admin.pages.hmail', ['data'=>$data], function($message) use($data){
            $message->to($data['email'], 'Successfully register in organtrasplant')->subject
                ('Login Dtails of Organ Trasplant');
            $message->from('organtransplant1@gmail.com','OrganTrasplant');
        });

        $notification = array(
            'message' => 'Hospital Data inserted successfully. ', 
            'alert-type' => 'success'
        );
        return back()->with('notification',$notification);
    }
    public function view()
    {
        $hospital=Hospital::all();
        // return $hospital;
        return view('admin.pages.hospital.view',compact('hospital'));
    }
    public function destroy($id)
    {
        $hospital = Hospital::find($id);
        $hospital->delete();
        $notification = array(
            'message' => 'Hospital Data deleted successfully.', 
            'alert-type' => 'success'
        );
        return \Redirect::route('viewhospital')->with('notification',$notification);
    }
    public function edit($id)
    {
        $hospital=Hospital::where('id','=',$id)->get();
        $cities=City::all();
        return view('admin.pages.hospital.edit',compact('cities','hospital'));
    }
    public function update(Request $request,$id)
    {
        \DB::table('hospitals')
        ->where('id','=',$id)
        ->update([
            'city_id'=>$request->get('city'),
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'contact_no'=>$request->get('contact_no'),
            'address'=>$request->get('address'),
            'password'=>bcrypt($request->get('password')),
            'contact_person_name'=>$request->get('contact_person_name'),
            'contact_person_mobile_no'=>$request->get('contact_person_mobile_no'),
            'description'=>$request->get('description'),
            'image'=>$request->get('image')
        ]);

        $notification = array(
            'message' => 'Hospital Data updated successfully.', 
            'alert-type' => 'success'
        );
        return back()->with('notification',$notification);    
    }
    public function show($id)
    {
        $hospital=Hospital::all();
        $img=Hospital_image::where('hospital_id','=',$id)->get();
        return view('admin/pages/hospital/viewimage',compact('img','id','hospital'));
    }
    public function viewhospital()
    {
        $hospital=Hospital::all();
        return view('admin.pages.all.hospital',compact('hospital'));  
    }

    //dashboard
    public function profile()
    {
        $data=Hospital::where('user_id','=',\Auth::user()->id)->get();
        $hid=Hospital::where('user_id','=',\Auth::user()->id)->pluck('id')->first();
       
        return view('hospital.pages.profile',compact('data'));
    }
    public function editprofile($id)
    {
        $hospital=Hospital::where('id','=',$id)->get();
        $cities=City::all();
        return view('hospital.pages.editprofile',compact('hospital','cities'));
    }
    public function updateprofile(Request $request,$id)
    {
        \DB::table('hospitals')
        ->where('id','=',$id)
        ->update([
            'city_id'=>$request->get('city'),
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'contact_no'=>$request->get('contact_no'),
            'address'=>$request->get('address'),
            'contact_person_name'=>$request->get('contact_person_name'),
            'contact_person_mobile_no'=>$request->get('contact_person_mobile_no'),
            'description'=>$request->get('description'),
            'image'=>$request->get('image')
         
        ]);

        $notification = array(
            'message' => 'Hospital profile updated successfully.', 
            'alert-type' => 'success'
        );
        return \Redirect::route('profile')->with('notification',$notification);     
    }
    public function doctors()
    {
        $hid=Hospital::where('user_id','=',\Auth::user()->id)->pluck('id')->first();
        $data=Doctor::where('hospital_id','=',$hid)->get();
        return view('hospital.pages.doctors',compact('data'));
    }
    public function hprofile($id)
    {

        $doctor=Doctor::where('hospital_id','=',$id)->get();
        $hospital=Hospital::where('id','=',$id)->get();
       $organ=Organrequest::all();
        $app=Appointment::where('hospital_id','=',$id)->get();
        return view('admin.pages.all.hprofile',compact('hospital','doctor','organ','app'));
    }
    public function hospitalprofile()
    {
        $cities=City::all();
        return view('hospital.pages.hprofile',compact('cities'));
    }
    public function shprofile(Request $request)
    {
      $id=\Auth::user()->id;
      $password=\Auth::user()->password;
      
      $logo=\Input::file('image');
      $logoName = str_random(30).'.'.$logo->getClientOriginalExtension(); //Insert path in database
      $logo->move(base_path().'/public/images/doctor/logo/',$logoName); 

      $hospital=new Hospital(array(
        'city_id'=>$request->get('city'),
            'user_id'=>$id,
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'contact_no'=>$request->get('contact_no'),
            'address'=>$request->get('address'),
            'contact_person_name'=>$request->get('contact_person_name'),
            'contact_person_mobile_no'=>$request->get('contact_person_mobile_no'),
            'description'=>$request->get('description'),
            'image'=>$logoName,
            'status'=>'0',
      ));
      $data = array('email'=>$request->get('email'));
      \Mail::send('hospital.pages.reply', $data, function($message) use($data)
      {
          $message->to($data['email'], '')->subject
          ('profile Details of Organ Trasplant');
          $message->from('organtransplant1@gmail.com','Organ Trasplant');
      });
      $hospital->save();
      return back();
    }
    public function happointment()
    {
        $uid=Auth::user()->id;
        $hid=Hospital::where('user_id','=',$uid)->pluck('id')->first();
       
        $app=Appointment::where('hospital_id','=',$hid)->get();
        return view('hospital.pages.appointment',compact('app'));
    }

    public function docdestroy($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
        $notification = array(
            'message' => 'Doctor Data Deleted Successfully.', 
            'alert-type' => 'success'
        );
        return back()->with('notification',$notification);
    }

    public function happrove($id,$status)
    {
       \DB::table('hospitals')
       ->where('id','=',$id)
       ->update(['status'=>$status]);

       $notification = array(
        'message' => 'Hospital Status Update Sucessfully', 
        'alert-type' => 'success'
        );
        return redirect()->back()->with('notification',$notification);
    }
   
    public function dapprove($id,$status)
    {
       \DB::table('doctors')
       ->where('id','=',$id)
       ->update(['status'=>$status]);

       $notification = array(
        'message' => 'Doctor Status Update Sucessfully', 
        'alert-type' => 'success'
        );
        return redirect()->back()->with('notification',$notification);
    }
    public function docapprove($id,$status)
    {
       \DB::table('doctors')
       ->where('id','=',$id)
       ->update(['status'=>$status]);

       $notification = array(
        'message' => 'Doctor Status Update Sucessfully', 
        'alert-type' => 'success'
        );
        return redirect()->back()->with('notification',$notification);
    }
    public function bapprove($id,$status)
    {
       \DB::table('bloodbanks')
       ->where('id','=',$id)
       ->update(['status'=>$status]);

       $notification = array(
        'message' => 'Bloodbank Status Update Sucessfully', 
        'alert-type' => 'success'
        );
        return redirect()->back()->with('notification',$notification);
    }
    public function bprofile($id)
    {
        $blood=Bloodbank::where('id','=',$id)->get();
        $stock=stock::where('bloodbank_id','=',$id)->get();
        return view('admin.pages.all.bprofile',compact('blood','stock'));
    }
   
    public function hospitalorg()
    {
        $organ=Organrequest::all();
        return view('hospital.pages.organ',compact('organ'));
    }
    public function destroyorgan($id)
    {
        $organ = Organrequest::find($id);
        $organ->delete();
        $notification = array(
            'message' => 'Your Data Deleted Successfully.', 
            'alert-type' => 'success'
        );
        return back()->with('notification',$notification);
    }
   
    
}