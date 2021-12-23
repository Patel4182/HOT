<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\stock;
use App\Bloodbank;
use App\User;
use App\Http\Requests\StockRequest;

class BloodbankController extends Controller
{
    public function dashboard()
        {
            $bid=Bloodbank::where('userid','=',\Auth::user()->id)->pluck('id')->first();
            $stock=stock::where('bloodbank_id','=',$bid)->get();
            $blood=Bloodbank::where('id','=',$bid)->get();
            return view('bloodbank.pages.dashboard.dashboard',compact('stock','blood'));
        }
        public function stock()
        {
            $bid=Bloodbank::where('userid','=',\Auth::user()->id)->pluck('id')->first();
            $stock=stock::where('bloodbank_id','=',$bid)->get();
            $blood=Bloodbank::where('id','=',$bid)->get();
            return view('bloodbank.pages.stock',compact('stock','blood'));
        }
        public function bprofile()
        {
         
        return view('bloodbank.pages.editprofile');
        }
        public function add(Request $request)
        {
            $id=User::where('id','=',\Auth::user()->id)->pluck('id')->first();
            $bid=Bloodbank::where('userid','=',$id)->pluck('id')->first();
            $bloodbank=new stock(array(
                'bloodbank_id'=> $bid,
                'groupname'=>$request->get('groupname'),
                'no_of_bottle'=>$request->get('no_of_bottle'),
                'remaining_bottle'=>$request->get('remaining_bottle'),
                'summary'=>$request->get('summary')
            ));
            $bloodbank->save();
            $notification = array(
                'message' => 'Your Data Inserted Successfully.',
                'alert-type' => 'success'
            );
            return redirect()->back()->with('notification',$notification);
        }
        public function sbprofile(Request $request)
        {
          $id=\Auth::user()->id;
          $password=\Auth::user()->password;
          
          $logo=\Input::file('image');
          $logoName = str_random(30).'.'.$logo->getClientOriginalExtension(); //Insert path in database
          $logo->move(base_path().'/public/images/bloodbank/logo/',$logoName); 

          $blood=new Bloodbank(array(
                'userid'=>$id,
                'name'=>$request->get('name'),
                'email'=>$request->get('email'),
                'contactno'=>$request->get('contactno'),
                'address'=>$request->get('address'),
                'password'=>$password,
                'contact_person_name'=>$request->get('contact_person_name'),
                'contact_person_mobile_no'=>$request->get('contact_person_mobile_no'),
                'description'=>$request->get('description'),
                'image'=>$logoName,
                'status'=>'0',
          ));
          $blood->save();
          return \Redirect::route('stock');
        }
        public function allblood()
        {
            $blood=Bloodbank::all();
          return view('admin.pages.all.bloodbank',compact('blood'));
        }
        public function destroy($id)
        {
            $blood = Bloodbank::find($id);
            $blood->delete();
            $notification = array(
                'message' => 'Data deleted successfully!!.', 
                'alert-type' => 'success'
            );
            return \Redirect::route('allblood')->with('notification',$notification);
        }

}