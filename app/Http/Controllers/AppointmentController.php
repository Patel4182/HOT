<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use App\Hospital;
use App\Doctor;
//use App\Http\Requests\AppointmentRequest;

class AppointmentController extends Controller
{
    public function add()
    {
        $doctor=Doctor::all();
        $hospital=Hospital::all();
        return view('front.pages.appointment',compact('doctor','hospital'));
    }
    public function store(Request $request)
    {
        $appointment=new Appointment(array(
            'hospital_id'=>$request->get('hname'),
            'doctor_id'=>$request->get('doctor'),
            'fullname'=>$request->get('fullname'),
            'email'=>$request->get('email'),
            'contact_no'=>$request->get('contact_no'),
            'gender'=>$request->get('gender'),
            'age'=>$request->get('age'),
            'city'=>$request->get('city'),
            'prefer_date'=>$request->get('prefer_date'),
            'prefer_time'=>$request->get('prefer_time'),
            'message'=>$request->get('message'),
            'status'=>'pending',
        ));
        $data = array('email'=>$request->get('email'),'prefer_date'=>$request->get('prefer_date'),'prefer_time'=>$request->get('prefer_time'), 'fullname'=>$request->get('fullname'));
        \Mail::send('admin.pages.appoinmail',['data'=> $data], function($message) use($data)
        {
            $message->to($data['email'], '')->subject
            ('Appoinment message From Organ Trasplant');
            $message->from('organtransplant1@gmail.com','Organ Trasplant');
        });

        $appointment->save();
        $notification = array(
            'message' => 'Your Data Inserted Successfully.', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with('notification',$notification);
    }
    public function view()
    {
        $appointment=Appointment::all();
        return view('admin.pages.appointment.view',compact('appointment'));
    }
    public function destroy($id)
    {
        $appointment = Appointment::find($id);
        $appointment->delete();
        $notification = array(
            'message' => 'Your Data Deleted Successfully.', 
            'alert-type' => 'success'
        );
        return \Redirect::route('viewappointment')->with('notification',$notification);
    }
    public function appapprove($id,$status)
    {
       \DB::table('appoinments')
       ->where('id','=',$id)
       ->update(['status'=>$status]);

       $notification = array(
        'message' => 'Appointment Status Update Sucessfully', 
        'alert-type' => 'success'
        );
        return redirect()->back()->with('notification',$notification);
    }
    public function reply($id)
        {
        $appointment=Appointment::where('id','=',$id)->get();
        return view('admin.pages.appointment.reply',compact('appointment'));
        
        }
        public function sendreply(Request $request)
        {
            $data = array('subject'=>$request->get('subject'),'email'=>$request->get('email'),'messages'=>$request->get('editor1'));
            \Mail::send('admin.pages.reply', ['data'=> $data], function($message) use($data)
            {
                $message->to($data['email'])->subject ($data['subject']);
                $message->SetBody($data['messages']);
                $message->from('organtransplant1@gmail.com','Organ Trasplant');
            });
    
            $notification = array(
                'message' => 'Mail Sent successfully.', 
                'alert-type' => 'success'
            );
            return \Redirect::route('viewappointment')->with('notification',$notification);
        }

}
