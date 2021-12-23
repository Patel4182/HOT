<?php

//Front
//Home with Pages

Route::get('data',array('as'=>'home','uses'=>'PageController@data'));

Route::get('/',array('as'=>'home','uses'=>'PageController@home'));
Route::get('front/organ',array('as'=>'org','uses'=>'PageController@org'));
Route::post('front/organ',array('as'=>'org','uses'=>'OrganController@addorg'));
Route::get('front/about',array('as'=>'about','uses'=>'PageController@about'));
Route::get('front/contact',array('as'=>'contact','uses'=>'PageController@contact'));
Route::get('front/doctor',array('as'=>'doctor','uses'=>'PageController@doctor'));
Route::get('front/bloodbank',array('as'=>'bloodbank','uses'=>'PageController@bloodbank'));
Route::get('front/hospital',array('as'=>'hospital','uses'=>'PageController@hospital'));
Route::get('front/services',array('as'=>'services','uses'=>'PageController@service'));
Route::get('front/appointment',array('as'=>'appointment','uses'=>'AppointmentController@add'));
Route::post('front/appointment',array('as'=>'appointment','uses'=>'AppointmentController@store'));
Route::post('front/organ/view',array('as'=>'fstock','uses'=>'PageController@fstock'));
Route::get('front/login',array('as'=>'logins','uses'=>'LoginController@login'));

//Password reset link request routes...
Route::get('password/email', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.email');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');

//Password reset routes...
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.request');
Route::post('password/reset', 'Auth\ResetPasswordController@postReset')->name('password.reset');


//subscribe
Route::post('sub',array('as'=>'sub','uses'=>'PageController@sub'));

//contact
Route::get('front/contact',array('as'=>'addcontact','uses'=>'ContactController@add'));
Route::post('front/contact',array('as'=>'addcontact','uses'=>'ContactController@store'));
Route::get('paywithrazorpay', 'RazorpayController@payWithRazorpay')->name('paywithrazorpay');

//Post Route For Makw Payment Request
Route::post('payment', 'RazorpayController@payment')->name('payment');

//login
Route::get('login-registration/login',array('as'=>'login','uses'=>'LoginController@login'));
Route::post('login-registration/login',array('as'=>'login','uses'=>'LoginController@store'));
//registration
Route::get('registration',array('as'=>'registration','uses'=>'RegistrationController@registration'));
Route::get('doctorregister',array('as'=>'dregister','uses'=>'RegistrationController@dregister'));
Route::post('doctorregister',array('as'=>'dregister','uses'=>'RegistrationController@dstore'));
Route::get('hospitalregister',array('as'=>'hregister','uses'=>'RegistrationController@hregister'));
Route::post('hospitalregister',array('as'=>'hregister','uses'=>'RegistrationController@hstore'));
Route::get('Bloodbankregister',array('as'=>'bregister','uses'=>'RegistrationController@bregister'));
Route::post('Bloodbankregister',array('as'=>'bregister','uses'=>'RegistrationController@bstore'));


//Organs

//logout
Route::get('logout',array('as'=>'logout','uses'=>'LoginController@logout'));


//middleware
Route::group(['middleware' => 'admin'], function()
{
            //all
            Route::get('admin/hospital',array('as'=>'viewhospital','uses'=>'HospitalController@viewhospital'));
            Route::get('hospital/view',array('as'=>'hospitalall','uses'=>'HospitalController@view'));
            Route::get('doctor/view',array('as'=>'doctorall','uses'=>'DoctorController@view'));
            Route::get('hospital/profile/{id}', array('as'=>'hprofile','uses'=>'HospitalController@hprofile'));
            Route::get('profile/bloodbank/{id}', array('as'=>'bprofile','uses'=>'HospitalController@bprofile'));
            Route::get('status/bloodbank/{id}/{status}',array('as'=>'bapprove','uses'=>'HospitalController@bapprove'));
            Route::get('Bloodbank/delete/{id}',array('as'=>'deletebloodbank','uses'=>'BloodbankController@destroy'));
            Route::get('admin/doctor',array('as'=>'viewdoctor','uses'=>'DoctorController@viewdoctor'));
            Route::get('doctor/profile/{id}', array('as'=>'dprofile','uses'=>'DoctorController@dprofile'));
            Route::get('admin/bloodbank',array('as'=>'allblood','uses'=>'BloodbankController@allblood'));
            Route::get('admin/dashboard/{id}',array('as'=>'dashboard','uses'=>'DashboardController@dashboard'));
         
          //Cities
          Route::get('cities/add',array('as'=>'addcities','uses'=>'CityController@getStateList'));
          Route::get('cities/add',array('as'=>'addcities','uses'=>'CityController@getCityList'));
          Route::get('cities/add',array('as'=>'addcities','uses'=>'CityController@add'));
          Route::post('cities/add',array('as'=>'addcities','uses'=>'CityController@store'));
          Route::get('cities/view',array('as'=>'viewcities','uses'=>'CityController@view'));
          Route::get('cities/delete/{id}',array('as'=>'deletecities','uses'=>'CityController@destroy'));
          Route::get('cities/edit/{id}', array('as'=>'editcities','uses'=>'CityController@edit'));
          Route::post('cities/edit/{id}', array('as'=>'editcities','uses'=>'CityController@update'));

          //hospitals
          Route::get('hospital/add',array('as'=>'addhospital','uses'=>'HospitalController@add'));
          Route::post('hospital/add',array('as'=>'addhospital','uses'=>'HospitalController@store'));
          Route::get('hospital/delete/{id}',array('as'=>'deletehospital','uses'=>'HospitalController@destroy'));
          Route::get('hospital/edit/{id}', array('as'=>'edithospital','uses'=>'HospitalController@edit'));
          Route::post('hospital/edit/{id}', array('as'=>'edithospital','uses'=>'HospitalController@update'));
          Route::get('hospital/viewimage/{id}',array('as'=>'viewimage','uses'=>'HospitalController@show'));
          Route::get('hospital/{id}/{status}',array('as'=>'happrove','uses'=>'HospitalController@happrove'));

          //Doctor
          Route::get('doctor/add',array('as'=>'adddoctor','uses'=>'DoctorController@add'));
          Route::post('doctor/add',array('as'=>'adddoctor','uses'=>'DoctorController@store'));
          Route::get('doctor/{id}/{status}',array('as'=>'dapprove','uses'=>'HospitalController@dapprove'));
          Route::get('doctor/delete/{id}',array('as'=>'deletedoctor','uses'=>'DoctorController@destroy'));
          Route::get('doctor/edit/{id}', array('as'=>'editdoctor','uses'=>'DoctorController@edit'));
          Route::post('doctor/edit/{id}', array('as'=>'editdoctor','uses'=>'DoctorController@update'));

          //Inquiry
          Route::post('inquiry/organ',array('as'=>'addorganinquiry','uses'=>'InquiryController@organinquiry'));
          Route::post('inquiry/blood',array('as'=>'addbloodinquiry','uses'=>'InquiryController@bloodinquiry'));
          Route::get('inquiry/view',array('as'=>'viewinquiry','uses'=>'InquiryController@view'));
          Route::get('inquiry/delete/{id}', array('as'=>'deleteinquiry','uses'=>'InquiryController@destroy'));
          Route::get('inquiry/reply/{id}', array('as'=>'inquiryreply','uses'=>'InquiryController@reply'));
          Route::post('inquiry/reply/{id}', array('as'=>'inquiryreply','uses'=>'InquiryController@sendreply'));

          //contact
          Route::get('contact/view',array('as'=>'viewcontact','uses'=>'ContactController@view'));
          Route::get('contact/delete/{id}', array('as'=>'deletecontact','uses'=>'ContactController@destroy'));
          Route::get('contact/reply/{id}', array('as'=>'contactreply','uses'=>'ContactController@reply'));
          Route::post('contact/reply/{id}', array('as'=>'contactreply','uses'=>'ContactController@sendreply'));

          //APPOINTMENT
          Route::get('appointment/view',array('as'=>'viewappointment','uses'=>'AppointmentController@view'));
          Route::get('appointment/delete/{id}', array('as'=>'deleteappointment','uses'=>'AppointmentController@destroy'));
          Route::get('appointment/reply/{id}', array('as'=>'appreply','uses'=>'AppointmentController@reply'));
          Route::post('appointment/reply/{id}', array('as'=>'appreply','uses'=>'AppointmentController@sendreply'));
         
          //organ
          Route::get('organs/view',array('as'=>'organview','uses'=>'OrganController@vieworgan'));
          Route::get('organs/delete/{id}', array('as'=>'deleteorgan','uses'=>'OrganController@destroy'));
          }
);

Route::get('Appointment/{id}/{status}',array('as'=>'appapprove','uses'=>'AppointmentController@appapprove'));

Route::group(['middleware' => 'doctor'], function()
      {
      Route::get('doctor/dashboard',array('as'=>'docdashboard','uses'=>'DoctorController@dashboard'));
      Route::get('doctor/profile',array('as'=>'docprofile','uses'=>'DoctorController@docprofile'));
      Route::get('profile/Doctor',array('as'=>'doctorprofile','uses'=>'DoctorController@doctorprofile'));
      Route::post('profile/Doctor',array('as'=>'doctorprofile','uses'=>'DoctorController@sdprofile'));
      Route::get('doctor/edit/profile/{id}',array('as'=>'editdocprofile','uses'=>'DoctorController@editdocprofile'));
      Route::post('doctor/edit/profile/{id}',array('as'=>'editdocprofile','uses'=>'DoctorController@updatedocprofile'));
      Route::get('Doctor/appointment',array('as'=>'dappointment','uses'=>'DoctorController@dappointment'));
      Route::get('Doctor/organs/view',array('as'=>'vieworgan','uses'=>'DoctorController@vieworgan'));
      Route::get('Doctor/organs/delete/{id}', array('as'=>'organdelete','uses'=>'DoctorController@destroyorgan'));
      Route::post('doctor/logo/update/{id}', array('as'=>'updatedlogo','uses'=>'OrganController@updatedlogo'));
}
);

Route::group(['middleware' => 'hospital'], function()
{   
    //hospital dashboard
    Route::get('hospital/dashboard',array('as'=>'hospitaldashboard','uses'=>'HospitalController@create'));
    Route::get('hospital/profile',array('as'=>'profile','uses'=>'HospitalController@profile'));
    Route::get('profile/Hospital',array('as'=>'hospitalprofile','uses'=>'HospitalController@hospitalprofile'));
    Route::post('profile/Hospital',array('as'=>'hospitalprofile','uses'=>'HospitalController@shprofile'));
    Route::get('hospital/edit/profile/{id}',array('as'=>'edit-profile','uses'=>'HospitalController@editprofile'));
    Route::post('hospital/edit/profile/{id}',array('as'=>'edit-profile','uses'=>'HospitalController@updateprofile'));
    Route::get('hospital/doctor/{id}/{status}',array('as'=>'docapprove','uses'=>'HospitalController@docapprove'));
    Route::get('hospital/doctors',array('as'=>'doctors','uses'=>'HospitalController@doctors'));
    Route::get('hospital/appointment',array('as'=>'happointment','uses'=>'HospitalController@happointment'));
    Route::get('hospital/doctor/delete/{id}',array('as'=>'hdeletedoctor','uses'=>'HospitalController@docdestroy'));
    Route::get('hospitalorg',array('as'=>'hospitalorg','uses'=>'HospitalController@hospitalorg'));
    Route::get('Hospital/organs/delete/{id}', array('as'=>'horgandelete','uses'=>'HospitalController@destroyorgan'));
    Route::get('hospital/organs/delete/{id}', array('as'=>'delorgan','uses'=>'HospitalController@delorgan'));
}
);

Route::group(['middleware' => 'blood'], function()
{ 
          //Bloodbank
      Route::get('dashboard/bloodbank',array('as'=>'bdashboard','uses'=>'BloodbankController@dashboard'));
      Route::get('stock/bloodbank',array('as'=>'stock','uses'=>'BloodbankController@stock'));
      Route::get('profile/blood',array('as'=>'bprofile','uses'=>'BloodbankController@bprofile'));
      Route::post('profile/blood',array('as'=>'bprofile','uses'=>'BloodbankController@sbprofile'));
      Route::post('/add/stock',array('as'=>'addstock','uses'=>'BloodbankController@add'));
      Route::get('cities/delete/{id}',array('as'=>'deletecities','uses'=>'CityController@destroy'));
}
);



