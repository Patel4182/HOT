<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\City;
use App\Http\Requests\CityRequest;

class CityController extends Controller
{
    public function add()
    {
        return view('admin.pages.cities.add');
    }
    public function store(CityRequest $request)
    {
        $city=new City(array(
            'city'=>$request->get('city'),
        ));
        $city->save();
        $notification = array(
            'message' => 'Data inserted successfully!!.', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with('notification',$notification);
    }
    public function view()
    {
        $city=City::all();
        return view('admin.pages.cities.view',compact('city'));
    }
    public function destroy($id)
    {
        $city = City::find($id);
        $city->delete();
        $notification = array(
            'message' => 'Data deleted successfully!!.', 
            'alert-type' => 'success'
        );
        return \Redirect::route('viewcities')->with('notification',$notification);
    }
    public function edit($id)
    {
        $city=City::where('id','=',$id)->get();
        return view('admin.pages.cities.edit',compact('city'));
    }
    public function update(CityRequest $request,$id)
    {
        \DB::table('cities')
        ->where('id','=',$id)
        ->update([
            'city'=>$request->get('city')
        ]);
        $notification = array(
            'message' => 'Data updated successfully!!.', 
            'alert-type' => 'success'
        );
        return \Redirect::route('viewcities')->with('notification',$notification);    
    }
   


}