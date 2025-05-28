<?php

// Frontend Routes

Route::get('data', ['as' => 'front.data', 'uses' => 'PageController@data']);

Route::get('/', ['as' => 'front.home', 'uses' => 'PageController@home']);
Route::get('front/organ', ['as' => 'front.organ.get', 'uses' => 'PageController@org']);
Route::post('front/organ', ['as' => 'front.organ.post', 'uses' => 'OrganController@addorg']);
Route::get('front/about', ['as' => 'front.about', 'uses' => 'PageController@about']);
Route::get('front/contact', ['as' => 'front.contact.get', 'uses' => 'PageController@contact']);
Route::post('front/contact', ['as' => 'front.contact.post', 'uses' => 'ContactController@store']);
Route::get('front/doctor', ['as' => 'front.doctor', 'uses' => 'PageController@doctor']);
Route::get('front/bloodbank', ['as' => 'front.bloodbank', 'uses' => 'PageController@bloodbank']);
Route::get('front/hospital', ['as' => 'front.hospital', 'uses' => 'PageController@hospital']);
Route::get('front/services', ['as' => 'front.services', 'uses' => 'PageController@service']);
Route::get('front/appointment', ['as' => 'front.appointment.get', 'uses' => 'AppointmentController@add']);
Route::post('front/appointment', ['as' => 'front.appointment.post', 'uses' => 'AppointmentController@store']);
Route::post('front/organ/view', ['as' => 'front.fstock', 'uses' => 'PageController@fstock']);
Route::get('front/login', ['as' => 'front.login', 'uses' => 'LoginController@login']);


// Password reset
Route::get('password/email', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.email');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');

Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.request');
Route::post('password/reset', 'Auth\ResetPasswordController@postReset')->name('password.reset');


// Subscribe
Route::post('sub', ['as' => 'subscribe', 'uses' => 'PageController@sub']);

// Payment
Route::get('paywithrazorpay', 'RazorpayController@payWithRazorpay')->name('paywithrazorpay');
Route::post('payment', 'RazorpayController@payment')->name('payment');

// Login & Registration
Route::get('login-registration/login', ['as' => 'auth.login.get', 'uses' => 'LoginController@login']);
Route::post('login-registration/login', ['as' => 'auth.login.post', 'uses' => 'LoginController@store']);

Route::get('registration', ['as' => 'auth.registration', 'uses' => 'RegistrationController@registration']);
Route::get('doctorregister', ['as' => 'auth.doctorregister.get', 'uses' => 'RegistrationController@dregister']);
Route::post('doctorregister', ['as' => 'auth.doctorregister.post', 'uses' => 'RegistrationController@dstore']);
Route::get('hospitalregister', ['as' => 'auth.hospitalregister.get', 'uses' => 'RegistrationController@hregister']);
Route::post('hospitalregister', ['as' => 'auth.hospitalregister.post', 'uses' => 'RegistrationController@hstore']);
Route::get('Bloodbankregister', ['as' => 'auth.bloodbankregister.get', 'uses' => 'RegistrationController@bregister']);
Route::post('Bloodbankregister', ['as' => 'auth.bloodbankregister.post', 'uses' => 'RegistrationController@bstore']);

// Logout
Route::get('logout', ['as' => 'auth.logout', 'uses' => 'LoginController@logout']);


// Admin Middleware group
Route::group(['middleware' => 'admin'], function() {

    // Hospitals
    Route::get('admin/hospital', ['as' => 'admin.viewhospital', 'uses' => 'HospitalController@viewhospital']);
    Route::get('hospital/view', ['as' => 'admin.hospitalall', 'uses' => 'HospitalController@view']);
    Route::get('hospital/profile/{id}', ['as' => 'admin.hprofile', 'uses' => 'HospitalController@hprofile']);

    // Bloodbanks
    Route::get('profile/bloodbank/{id}', ['as' => 'admin.bprofile', 'uses' => 'HospitalController@bprofile']);
    Route::get('status/bloodbank/{id}/{status}', ['as' => 'admin.bapprove', 'uses' => 'HospitalController@bapprove']);
    Route::get('Bloodbank/delete/{id}', ['as' => 'admin.deletebloodbank', 'uses' => 'BloodbankController@destroy']);
    Route::get('admin/bloodbank', ['as' => 'admin.allblood', 'uses' => 'BloodbankController@allblood']);

    // Doctors
    Route::get('admin/doctor', ['as' => 'admin.viewdoctor', 'uses' => 'DoctorController@viewdoctor']);
    Route::get('doctor/view', ['as' => 'admin.doctorall', 'uses' => 'DoctorController@view']);
    Route::get('doctor/profile/{id}', ['as' => 'admin.dprofile', 'uses' => 'DoctorController@dprofile']);
    Route::get('doctor/{id}/{status}', ['as' => 'admin.dapprove', 'uses' => 'HospitalController@dapprove']);
    Route::get('doctor/delete/{id}', ['as' => 'admin.deletedoctor', 'uses' => 'DoctorController@destroy']);
    Route::get('doctor/edit/{id}', ['as' => 'admin.editdoctor', 'uses' => 'DoctorController@edit']);
    Route::post('doctor/edit/{id}', ['as' => 'admin.editdoctor.post', 'uses' => 'DoctorController@update']);

    // Dashboard
    Route::get('admin/dashboard/{id}', ['as' => 'admin.dashboard', 'uses' => 'DashboardController@dashboard']);

    // Cities
    Route::get('cities/add', ['as' => 'admin.addcities', 'uses' => 'CityController@add']);
    Route::post('cities/add', ['as' => 'admin.addcities.post', 'uses' => 'CityController@store']);
    Route::get('cities/view', ['as' => 'admin.viewcities', 'uses' => 'CityController@view']);
    Route::get('cities/delete/{id}', ['as' => 'admin.deletecities', 'uses' => 'CityController@destroy']);
    Route::get('cities/edit/{id}', ['as' => 'admin.editcities', 'uses' => 'CityController@edit']);
    Route::post('cities/edit/{id}', ['as' => 'admin.editcities.post', 'uses' => 'CityController@update']);

    // Hospitals CRUD
    Route::get('hospital/add', ['as' => 'admin.addhospital', 'uses' => 'HospitalController@add']);
    Route::post('hospital/add', ['as' => 'admin.addhospital.post', 'uses' => 'HospitalController@store']);
    Route::get('hospital/delete/{id}', ['as' => 'admin.deletehospital', 'uses' => 'HospitalController@destroy']);
    Route::get('hospital/edit/{id}', ['as' => 'admin.edithospital', 'uses' => 'HospitalController@edit']);
    Route::post('hospital/edit/{id}', ['as' => 'admin.edithospital.post', 'uses' => 'HospitalController@update']);
    Route::get('hospital/viewimage/{id}', ['as' => 'admin.viewimage', 'uses' => 'HospitalController@show']);
    Route::get('hospital/{id}/{status}', ['as' => 'admin.happrove', 'uses' => 'HospitalController@happrove']);

    // Inquiries
    Route::post('inquiry/organ', ['as' => 'admin.addorganinquiry', 'uses' => 'InquiryController@organinquiry']);
    Route::post('inquiry/blood', ['as' => 'admin.addbloodinquiry', 'uses' => 'InquiryController@bloodinquiry']);
    Route::get('inquiry/view', ['as' => 'admin.viewinquiry', 'uses' => 'InquiryController@view']);
    Route::get('inquiry/delete/{id}', ['as' => 'admin.deleteinquiry', 'uses' => 'InquiryController@destroy']);
    Route::get('inquiry/reply/{id}', ['as' => 'admin.inquiryreply.get', 'uses' => 'InquiryController@reply']);
    Route::post('inquiry/reply/{id}', ['as' => 'admin.inquiryreply.post', 'uses' => 'InquiryController@sendreply']);

    // Contacts
    Route::get('contact/view', ['as' => 'admin.viewcontact', 'uses' => 'ContactController@view']);
    Route::get('contact/delete/{id}', ['as' => 'admin.deletecontact', 'uses' => 'ContactController@destroy']);
    Route::get('contact/reply/{id}', ['as' => 'admin.contactreply.get', 'uses' => 'ContactController@reply']);
    Route::post('contact/reply/{id}', ['as' => 'admin.contactreply.post', 'uses' => 'ContactController@sendreply']);

    // Appointments
    Route::get('appointment/view', ['as' => 'admin.viewappointment', 'uses' => 'AppointmentController@view']);
    Route::get('appointment/delete/{id}', ['as' => 'admin.deleteappointment', 'uses' => 'AppointmentController@destroy']);
    Route::get('appointment/reply/{id}', ['as' => 'admin.appreply.get', 'uses' => 'AppointmentController@reply']);
    Route::post('appointment/reply/{id}', ['as' => 'admin.appreply.post', 'uses' => 'AppointmentController@sendreply']);

    // Organs
    Route::get('organs/view', ['as' => 'admin.organview', 'uses' => 'OrganController@vieworgan']);
    Route::get('organs/delete/{id}', ['as' => 'admin.deleteorgan', 'uses' => 'OrganController@destroy']);
});

// Appointment approval route outside middleware
Route::get('Appointment/{id}/{status}', ['as' => 'appapprove', 'uses' => 'AppointmentController@appapprove']);


// Doctor Middleware Group
Route::group(['middleware' => 'doctor'], function() {
    Route::get('doctor/dashboard', ['as' => 'doctor.dashboard', 'uses' => 'DoctorController@dashboard']);
    Route::get('doctor/profile', ['as' => 'doctor.profile.get', 'uses' => 'DoctorController@docprofile']);
    Route::post('profile/Doctor', ['as' => 'doctor.profile.post', 'uses' => 'DoctorController@sdprofile']);
    Route::get('doctor/edit/profile/{id}', ['as' => 'doctor.editprofile.get', 'uses' => 'DoctorController@editdocprofile']);
    Route::post('doctor/edit/profile/{id}', ['as' => 'doctor.editprofile.post', 'uses' => 'DoctorController@updatedocprofile']);
    Route::get('Doctor/appointment', ['as' => 'doctor.appointment', 'uses' => 'DoctorController@dappointment']);
    Route::get('Doctor/organs/view', ['as' => 'doctor.organ.view', 'uses' => 'DoctorController@vieworgan']);
    Route::get('Doctor/organs/delete/{id}', ['as' => 'doctor.organ.delete', 'uses' => 'DoctorController@destroyorgan']);
    Route::post('doctor/logo/update/{id}', ['as' => 'doctor.logo.update', 'uses' => 'OrganController@updatedlogo']);
});

// Hospital Middleware Group
Route::group(['middleware' => 'hospital'], function() {
    Route::get('hospital/dashboard', ['as' => 'hospital.dashboard', 'uses' => 'HospitalController@create']);
    Route::get('hospital/profile', ['as' => 'hospital.profile.get', 'uses' => 'HospitalController@profile']);
    Route::get('profile/Hospital', ['as' => 'hospital.profile', 'uses' => 'HospitalController@hospitalprofile']);
    Route::post('profile/Hospital', ['as' => 'hospital.profile.post', 'uses' => 'HospitalController@shprofile']);
    Route::get('hospital/edit/profile/{id}', ['as' => 'hospital.editprofile.get', 'uses' => 'HospitalController@editprofile']);
    Route::post('hospital/edit/profile/{id}', ['as' => 'hospital.editprofile.post', 'uses' => 'HospitalController@updateprofile']);
    Route::get('hospital/doctor/{id}/{status}', ['as' => 'hospital.docapprove', 'uses' => 'HospitalController@docapprove']);
    Route::get('hospital/doctors', ['as' => 'hospital.doctors', 'uses' => 'HospitalController@doctors']);
    Route::get('hospital/appointment', ['as' => 'hospital.appointment', 'uses' => 'HospitalController@happointment']);
    Route::get('hospital/doctor/delete/{id}', ['as' => 'hospital.deletedoctor', 'uses' => 'HospitalController@docdestroy']);
    Route::get('hospitalorg', ['as' => 'hospital.org', 'uses' => 'HospitalController@hospitalorg']);
    Route::get('Hospital/organs/delete/{id}', ['as' => 'hospital.organ.delete', 'uses' => 'HospitalController@destroyorgan']);
    Route::get('hospital/organs/delete/{id}', ['as' => 'hospital.organ.del', 'uses' => 'HospitalController@destroyorgan']);
});


Route::group(['middleware' => 'blood'], function()
{ 
          //Bloodbank
      Route::get('dashboard/bloodbank',array('as'=>'bdashboard','uses'=>'BloodbankController@dashboard'));
      Route::get('stock/bloodbank',array('as'=>'stock','uses'=>'BloodbankController@stock'));
      Route::get('profile/blood',array('as'=>'bprofile.get','uses'=>'BloodbankController@bprofile'));
      Route::post('profile/blood',array('as'=>'bprofile.post','uses'=>'BloodbankController@sbprofile'));
      Route::post('/add/stock',array('as'=>'addstock','uses'=>'BloodbankController@add'));
      Route::get('cities/delete/{id}',array('as'=>'deletecities','uses'=>'CityController@destroy'));
}
);



