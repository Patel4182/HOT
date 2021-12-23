<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inquiry;
use App\Http\Requests\InquiryRequest;

class InquiryController extends Controller
{
    public function add()
    {
        return view('front.pages.home');
    }
    public function organinquiry(InquiryRequest $request)
    {
        $inquiry=new Inquiry(array(
            'fullname'=>$request->get('fullname'),
            'email'=>$request->get('email'),
            'subject'=>$request->get('subject'),
            'contact_no'=>$request->get('contact_no'),
            'message'=>$request->get('message'),
            'role'=>'1'
        ));
        $data = array('subject'=>$request->get('subject'),'email'=>$request->get('email'),'messages'=>$request->get('editor1'));
        \Mail::send('admin.pages.inquirymail', $data, function($message) use($data)
        {
            $message->to($data['email'], 'Your data Successfully added to organtrasplant')->subject
            ('Your Inquiry Details of Organ Trasplant');
            $message->from('organtransplant1@gmail.com','Organ Trasplant');
        });

        $inquiry->save();
        $notification = array(
            'message' => 'Your Data Inserted Successfully.',
            'alert-type' => 'success'
        );
        return redirect()->back()->with('notification',$notification);
    }
    public function bloodinquiry(InquiryRequest $request)
    {
        $inquiry=new Inquiry(array(
            'fullname'=>$request->get('fullname'),
            'email'=>$request->get('email'),
            'subject'=>$request->get('subject'),
            'contact_no'=>$request->get('contact_no'),
            'message'=>$request->get('message'),
            'role'=>'2'
        ));
        $inquiry->save();
        $notification = array(
            'message' => 'Your Data Inserted Successfully.',
            'alert-type' => 'success'
        );
        return redirect()->back()->with('notification',$notification);
    }
    public function view()
    {
        $inquiry=Inquiry::all();
        $blood=Inquiry::where('role','=',2)->get();
        $organ=Inquiry::where('role','=',1)->get();
        return view('admin.pages.inquiry.view',compact('blood','inquiry','organ'));
    }
    public function destroy($id)
    {
        $inquiry = Inquiry::find($id);
        $inquiry->delete();
        $notification = array(
            'message' => 'Your Data Deleted Successfully.', 
            'alert-type' => 'success'
        );
        return \Redirect::route('viewinquiry')->with('notification',$notification);
    }
    public function reply($id)
    {
    $inquiry=Inquiry::where('id','=',$id)->get();
    return view('admin.pages.inquiry.reply',compact('inquiry'));
    
    }
    public function sendreply(Request $request)
    {
        $data = array('subject'=>$request->get('subject'),'email'=>$request->get('email'),'messages'=>$request->get('editor1'));
        \Mail::send('admin.pages.reply', $data, function($message) use($data)
        {
            $message->to($data['email'])->subject ($data['subject']);
            $message->SetBody($data['messages']);
            $message->from('organtransplant1@gmail.com','Organ Trasplant');
        });

        $notification = array(
            'message' => 'Mail Sent successfully.', 
            'alert-type' => 'success'
        );
        return \Redirect::route('viewinquiry')->with('notification',$notification);
    }
}