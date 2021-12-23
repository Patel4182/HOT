<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Appointment;
use App\Hospital;
use App\Doctor;
use App\Organ;
use App\Stock;
use App\Inquiry;
use App\Organrequest;
use App\Bloodbank;
use App\City;

class PageController extends Controller
{
    public function data()
    {
        return view('datatable');
    }
    public function home()
    {
        $doctor=Doctor::where('status','=',1)->get();
        $hospital=Hospital::where('status','=',1)->get();
        $app=Appointment::where('status','=','finished')->get();
        $blood=Bloodbank::where('status','=',1)->get();   
        $city=City::all();     
        $i=Inquiry::all();   
        return view('front.pages.home',compact('doctor','hospital','blood','city','app','i'));
    }
    public function about()
    {
        return view('front.pages.about');
    }
    public function contact()
    {
        return view('front.pages.contact');
    }
    public function doctor()
    {
        $doctor=Doctor::where('status','=',1)->get();;
        return view('front.pages.doctor',compact('doctor'));
    }
    public function org()
    {
        $doctors=Doctor::where('status','=',1)->get();
        $hospitals=Hospital::where('status','=',1)->get(); 
        $app=Appointment::where('status','=','finished')->get(); 
        $i=Inquiry::all();
        $organ=Organrequest::all();
        return view('front.pages.organ',compact('organ','doctors','hospitals','app','i'));
    }
   
    public function bloodbank()
    {
        $blood=Bloodbank::where('status','=',1)->get();  
        $id=Auth::user()->id;
        $bid=Bloodbank::where('userid','=',$id)->pluck('id')->first();
       
        $stock=Stock::where('bloodbank_id','=',$bid)->get(); 
        return view('front.pages.bloodbank',compact('blood','stock'));
    }
    public function fstock()
    {
        $id=Auth::user()->id;
        $bid=Bloodbank::where('userid','=',$id)->pluck('id')->first();
       
        $stock=Stock::where('bloodbank_id','=',$bid)->get();
        return view('front.pages.viewstock',compact('stock'));
    }
    public function hospital()
    {
        $hospital=Hospital::where('status','=',1)->get();
        return view('front.pages.hospital',compact('hospital'));
    }
    public function service()
    {
        return view('front.pages.services');
    }
    public function appointment()
    {
        $doctors=Doctor::where('status','=',1)->get();
        $hospitals=Hospital::where('status','=',1)->get(); 
        $app=Appointment::where('status','=','finished')->get(); 
        $i=Inquiry::all();
        return view('front.pages.appointment',compact('doctors','hospitals','app','i'));
    }
    public function sub(Request $request)
    {
        $data = array('emails'=>$request->get('email'));
       \ Mail::send('front.pages.email', $data, function ($message) use($data)
        {
            $message->from('organtransplant1@gmail.com', 'Subscribe.');
            $message->SetBody($data['emails']);
            $message->to('organtransplant1@gmail.com')->subject ('subscribe contact.');

        });
        $data = array('email'=>$request->get('email'));
        \Mail::send('front.pages.reply', $data, function($message) use($data)
        {
            $message->to($data['email'], '')->subject
            ('Thanks for subscribe us');
            $message->from('organtransplant1@gmail.com','Organ Trasplant');
        });

        return back();
    }
}