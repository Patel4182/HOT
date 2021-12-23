<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Hospital;
use App\Organ;
use App\Organrequest;

class OrganController extends Controller
{
   
    public function addorg(Request $request)
    {
       
        $organ=new Organrequest(array(
            'organ_name'=>$request->get('organ_name'),
            'status'=>$request->get('status'),
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'contact_no'=>$request->get('contact_no'),
            'description'=>$request->get('description'),   
        ));
        $data = array('email'=>$request->get('email'),'status'=>$request->get('status'),'contact_no'=>$request->get('contact_no'),
        'description'=>$request->get('description'),'organ_name'=>$request->get('organ_name') );
        \Mail::send('admin.pages.organ', ['data'=>$data], function($message) use($data){
            $message->to($data['email'], '')->subject
                ('Organ Request Dtails of Organ Trasplant');
            $message->from('organtransplant1@gmail.com','OrganTrasplant');
        });

        $organ->save();
        $notification = array(
            'message' => 'Your Data Inserted Successfully.',
            'alert-type' => 'success'
        );
        return back()->with('notification',$notification);
    }
  
    public function vieworgan()
    {
        $organ=Organrequest::all();
        return view('admin.pages.organ.view',compact('organ'));
    }
    public function destroy($id)
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
