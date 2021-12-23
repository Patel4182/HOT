<?php

namespace App\Http\Controllers;
use App\City;
use App\Hospital;
use App\Doctor;
use App\Appointment;
use App\Contact;
use App\Inquiry;
use App\Bloodbank;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard($id)
    {
        $city=City::all();
        $hospital=Hospital::all();
        $doctor=Doctor::all();
        $blood=Bloodbank::all();
        $appointment=Appointment::all();
        $contact=Contact::all();
        $inquiry=Inquiry::all();
        return view('admin.pages.dashboard.dashboard', compact('id','city','hospital','doctor','appointment','contact','inquiry','blood'));
    }

    //$hid=Hospital::where('user_id','=',Auth::user()->id)->pluck('id')->first();
    //$app=Appoinments::where('hospital_id','=',$hid->get();

}
