<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\LoginRequest;
use App\Hospital;
use App\Bloodbank;
use App\Doctor;

class LoginController extends Controller
{
    public function login()
    {
        return view('login-registration.login');
    }
    
    public function logout()
    {
        \Auth::logout();
         return \Redirect::route('login');
    }

    public function store(LoginRequest $request)
    {

      if(User::loginuser($request->email,$request->password))//Check UserName and Password
      {
        $role=User::where('email','=',$request->email)->pluck('role')->first();
        if($role=="1")
        {            
            $id=User::where('email','=',$request->email)->pluck('id')->first();
            $notification = array(
                'message' => 'login successfully!!.', 
                'alert-type' => 'success'
                    );


            // return response()->json(['id'=>$id,'name'=>'pooja']);
              return \Redirect::route('dashboard',['id'=>$id])->with('notification',$notification);
        }  
        elseif($role=="2")
        {
            $user_id=User::where('email','=',$request->email)->pluck('id')->first();
            // return $user_id;
            $data=Hospital::where('user_id','=',$user_id)->pluck('id')->first();
            
            if($data=="")
            {
                $notification = array(
                    'message' => 'login successfully!!.', 
                    'alert-type' => 'success'
                        );
                  return \Redirect::route('hospitalprofile',['id'=>$user_id])->with('notification',$notification);
            }
            else
            {
                $notification = array(
                'message' => 'login successfully!!.', 
                'alert-type' => 'success'
                    );
              return \Redirect::route('profile',['id'=>$data])->with('notification',$notification);
            }
           
        } 
        elseif($role=="3")
        {
            $user_id=User::where('email','=',$request->email)->pluck('id')->first();
            $data=Doctor::where('user_id','=',$user_id)->pluck('id')->first();
            if($data=="")
            {
               
                $notification = array(
                    'message' => 'login successfully!!.', 
                    'alert-type' => 'success'
                        );
                  return \Redirect::route('doctorprofile',['id'=>$user_id])->with('notification',$notification);
            }
            else
            {
            $notification = array(
                'message' => 'login successfully!!.', 
                'alert-type' => 'success'
                    );
              return \Redirect::route('docprofile',['id'=>$data])->with('notification',$notification);
            }  
        } 
        elseif($role=="4")
        {
            $uid=User::where('email','=',$request->email)->pluck('id')->first();
            $data=Bloodbank::where('userid','=',$uid)->pluck('id')->first();
            if($data=="")
            {
                $notification = array(
                    'message' => 'login successfully!!.', 
                    'alert-type' => 'success'
                        );
                  return \Redirect::route('bprofile')->with('notification',$notification);
            }
            else{
                $notification = array(
                    'message' => 'login successfully!!.', 
                    'alert-type' => 'success'
                        );
                  return \Redirect::route('stock')->with('notification',$notification);
            }
            
        } 
        else
        {
            $notification = array(
                'message' => 'wrong email_id or password!!.', 
                'alert-type' => 'danger'
                    );
              return redirect()->back()->with('notification',$notification);
        } 

      

          
      }
      else
      {
        $notification = array(
            'message' => 'wrong email_id or password!!.', 
            'alert-type' => 'danger'
                );
          return redirect()->back()->with('notification',$notification);
      }
   }

}
