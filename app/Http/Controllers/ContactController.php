<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Http\Requests\ContactRequest;


class ContactController extends Controller
{
    public function add()
    {
         return view('front.pages.contact');
    }
    public function store(ContactRequest $request)
    {
        $contact=new Contact(array(
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'contact'=>$request->get('contact'),
            'subject'=>$request->get('subject')
        ));
        $data = array('subject'=>$request->get('subject'),'email'=>$request->get('email'),'messages'=>$request->get('editor1'));
            \Mail::send('front.pages.contact.reply', $data, function($message) use($data)
            {
                $message->to($data['email'], '')->subject
                ('Thanks for Contacting to Organ Trasplant');
                $message->from('organtransplant1@gmail.com','Organ Trasplant');
            });

        $contact->save();
        $notification = array(
            'message' => 'Data inserted successfully!!.', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with('notification',$notification);
    }
    public function view()
    {
        $contact=Contact::all();
        return view('admin.pages.contact.view',compact('contact'));
    }
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        $notification = array(
            'message' => 'Your Data Deleted Successfully.',
            'alert-type' => 'success'
        );
        return \Redirect::route('viewcontact')->with('notification',$notification);
    }
        public function reply($id)
        {
        $contact=Contact::where('id','=',$id)->get();
        return view('admin.pages.contact.contactreply',compact('contact'));
        
        }
        public function sendreply(Request $request)
        {
            $data = array('subject'=>$request->get('subject'),'email'=>$request->get('email'),'messages'=>$request->get('editor1'));
            \Mail::send('admin.pages.reply', ['data'=>$data], function($message) use($data)
            {
                $message->to($data['email'])->subject ($data['subject']);
                $message->SetBody($data['messages']);
                $message->from('organtransplant1@gmail.com','Organ Trasplant');
            });
    
            $notification = array(
                'message' => 'Mail Sent successfully.', 
                'alert-type' => 'success'
            );
            return \Redirect::route('viewcontact')->with('notification',$notification);
        }

}
