<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegistrationRequest;
use Illuminate\Http\Request;
use App\User;
use App\Bloodbank;
class RegistrationController extends Controller
{
    public function registration()
    {
        return view('login-registration.registration');
    }

   
    public function dregister()
    {
        return view('login-registration.doctorregister');
    }
    public function dstore(Request $request)
    {
        $registration=new User(array(
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'password'=>bcrypt($request->get('password')),
            'role'=>'3'
        ));
        $data = array('email'=>$request->get('email'),'name'=>$request->get('name'),'password'=>$request->get('password'));
        \Mail::send('front.pages.register.reply', ['data'=>$data], function($message) use($data)
        {
            $message->to($data['email'], '')->subject
            ('registration Details of Organ Trasplant');
            $message->from('organtransplant1@gmail.com','Organ Trasplant');
        });

        $registration->save();
        $notification = array(
            'message' => 'Regisration successfully!!.', 
            'alert-type' => 'success'
                );
        return redirect()->back()->with('notification',$notification);
  
    }
    public function hregister()
    {
        return view('login-registration.hospitalregister');
    }
    public function hstore(Request $request)
    {
        $registration=new User(array(
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'password'=>bcrypt($request->get('password')),
            'role'=>'2'
        ));
        $data = array('email'=>$request->get('email'),'name'=>$request->get('name'),'password'=>$request->get('password'));
        \Mail::send('front.pages.register.reply', ['data'=>$data], function($message) use($data)
        {
            $message->to($data['email'], '')->subject
            ('registration Details of Organ Trasplant');
            $message->from('organtransplant1@gmail.com','Organ Trasplant');
        });
        $registration->save();
        $notification = array(
            'message' => 'Regisration successfully!!.', 
            'alert-type' => 'success'
                );
        return redirect()->back()->with('notification',$notification);
  
    }
   
    public function bregister()
    {
        return view('login-registration.bloodbankregister');
    }
    public function bstore(Request $request)
    {
        $registration=new User(array(
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'password'=>bcrypt($request->get('password')),
            'role'=>'4',
        ));
        $data = array('email'=>$request->get('email'),'name'=>$request->get('name'),'password'=>$request->get('password'));
        \Mail::send('front.pages.register.reply', ['data'=>$data], function($message) use($data)
        {
            $message->to($data['email'], '')->subject
            ('registration Details of Organ Trasplant');
            $message->from('organtransplant1@gmail.com','Organ Trasplant');
        });

        $registration->save();
        $notification = array(
            'message' => 'Regisration successfully!!.', 
            'alert-type' => 'success'
                );
        return redirect()->back()->with('notification',$notification);
  
    }
    
}
