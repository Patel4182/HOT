<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Doctor;
use App\Organ;
use App\Organrequest;
use App\Appointment;
use App\Hospital;
use App\City;
use App\User;
use App\Http\Requests\DoctorRequest;

class DoctorController extends Controller
{
    public function add()
    {
       
        $cities=City::all();
        $hospital=Hospital::all();
        return view('admin.pages.doctor.add',compact('cities','hospital'));
    }
    public function store(Request $request)
    {
        $user=new User(array(
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'password'=>bcrypt($request->get('password')),
            'role'=>'3',
        ));
        
        $user->save();
        
        $user_id=$user->id;
        $image=\Input::file('image');
        $picName = str_random(30).'.'.$image->getClientOriginalExtension(); //Insert path in database
        $image->move(base_path().'/public/images/doctor/logo/',$picName); 

        $doctor=new Doctor(array(
            'hospital_id'=>$request->get('hname'),
            'city_id'=>$request->get('city'),
            'name'=>$request->get('name'),
            'bdate'=>$request->get('bdate'),
            'gender'=>$request->get('gender'),
            'address'=>$request->get('address'),
            'contact_no'=>$request->get('contact_no'),
            'degree'=>$request->get('degree'),
            'experience'=>$request->get('experience'),
            'email'=>$request->get('email'),
            'description'=>$request->get('description'),
            'image'=>$picName,
            'specialization'=>$request->get('specialization'),
            'user_id'=>$user_id,
            'status'=>'0',
        ));
        $doctor->save();

        $data = array('email'=>$request->get('email'), 'password'=>$request->get('password'));
            \Mail::send('admin.pages.dmail',['data'=>$data], function($message) use($data)
            {
                $message->to($data['email'], 'Your data Successfully added to organtrasplant')->subject
                ('Login Dtails of Organ Trasplant');
                $message->from('organtransplant1@gmail.com','Organ Trasplant');
            });

        
        $notification = array(
            'message' => ' Doctor Data Inserted Successfully.', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with('notification',$notification);
    }
    public function view()
    {
        $doctor=Doctor::all();
        return view('admin.pages.doctor.view',compact('doctor'));
    }
    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
        $notification = array(
            'message' => 'Doctor Data Deleted Successfully.', 
            'alert-type' => 'success'
        );
        return \Redirect::route('viewdoctor')->with('notification',$notification);
    }
    public function edit($id)
    {
        $doctor=Doctor::where('id','=',$id)->get();
        $hospital=Hospital::all();
        $cities=City::all();
        return view('admin.pages.doctor.edit',compact('cities','hospital','doctor'));
    }
    public function update(DoctorRequest $request,$id)
    {
        \DB::table('doctors')
        ->where('id','=',$id)
        ->update([
            'hospital_id'=>$request->get('name'),
            'city_id'=>$request->get('city'),
            'name'=>$request->get('name'),
            'bdate'=>$request->get('bdate'),
            'gender'=>$request->get('gender'),
            'contact_no'=>$request->get('contact_no'),
            'specialization'=>$request->get('specialization'),
            'degree'=>$request->get('degree'),
            'experience'=>$request->get('experience'),
            'email'=>$request->get('email'),
            'description'=>$request->get('description'),
            'image'=>$request->get('image')
        ]);
        $notification = array(
            'message' => 'Doctor Data Updated Successfully.', 
            'alert-type' => 'success'
        );
        return \Redirect::route('viewdoctor')->with('notification',$notification);    
    }

    //dashboard
    public function dashboard()
    {
    
        $uid=Auth::user()->id;
        $did=Doctor::where('user_id','=',$uid)->pluck('id')->first();
        $app=Appointment::where('doctor_id','=',$did)->get();
        $organ=Organrequest::all();
        return view('doctor.pages.dashboard.dashboard',compact('app','organ'));
    }
    public function doctorprofile()
    {
        $hospital=Hospital::all();
        $cities=City::all();
        return view('doctor.pages.dprofile',compact('cities','hospital'));
    }
    public function sdprofile(Request $request)
    {
      $id=\Auth::user()->id;
      $password=\Auth::user()->password;
      
      $logo=\Input::file('image');
      $logoName = str_random(30).'.'.$logo->getClientOriginalExtension(); //Insert path in database
      $logo->move(base_path().'/public/images/doctor/logo/',$logoName); 
      

      $doctor=new Doctor(array(
        'hospital_id'=>$request->get('hname'),
        'city_id'=>$request->get('city'),
        'name'=>$request->get('name'),
        'bdate'=>$request->get('bdate'),
        'gender'=>$request->get('gender'),
        'address'=>$request->get('contact_no'),
        'contact_no'=>$request->get('specialization'),
        'degree'=>$request->get('degree'),
        'experience'=>$request->get('experience'),
        'email'=>$request->get('email'),
        'description'=>$request->get('description'),
        'image'=>$logoName,
        'specialization'=>$request->get('specialization'),
        'user_id'=>$id,
        'status'=>'0',
      ));
      $doctor->save();
      return back();
    }
    public function docprofile()
    {
        $data=Doctor::where('user_id','=',\Auth::user()->id)->get();
        return view('doctor.pages.profile',compact('data'));
    }
    public function editdocprofile($id)
    {
        $id=\Auth::user()->id;
        $data=Doctor::where('user_id','=',$id)->get();
        $cities=City::all();
        return view('doctor.pages.editprofile',compact('data','cities'));
    }
    public function updatedocprofile(Request $request,$id)
    {
        \DB::table('doctors')
        ->where('id','=',$id)
        ->update([
            'city_id'=>$request->get('city'),
            'name'=>$request->get('name'),
            'bdate'=>$request->get('bdate'),
            'gender'=>$request->get('gender'),
            'contact_no'=>$request->get('contact_no'),
            'specialization'=>$request->get('specialization'),
            'degree'=>$request->get('degree'),
            'experience'=>$request->get('experience'),
            'email'=>$request->get('email'),
            'description'=>$request->get('description'),
            'image'=>$request->get('image')
         
        ]);

        $notification = array(
            'message' => 'Doctor profile updated successfully.', 
            'alert-type' => 'success'
        );
        return \Redirect::route('docprofile')->with('notification',$notification); 
    }
    public function viewdoctor()
    {
        $doctor=Doctor::all();
        return view('admin.pages.all.doctor',compact('doctor'));
    }
    public function dprofile($id)
    {
        $organ=Organ::where('doctor_id','=',$id)->get();
        $appointment=Appointment::where('doctor_id','=',$id)->get();
        $doctor=Doctor::where('id','=',$id)->get();
        $organ=Organrequest::all();
        return view('admin.pages.all.dprofile',compact('doctor','appointment','organ'));
    }
    public function dappointment()
    {
        $uid=Auth::user()->id;
        $did=Doctor::where('user_id','=',$uid)->pluck('id')->first();
       
        $app=Appointment::where('doctor_id','=',$did)->get();
        return view('doctor.pages.appointment',compact('app'));
    }
    public function vieworgan()
    {
        $organ=Organrequest::all();
        return view('doctor.pages.organ',compact('organ'));
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
