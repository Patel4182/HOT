<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table="appoinments";
    protected $fillable = [
        'hospital_id',
        'doctor_id',
        'fullname', 
        'email',
        'contact_no', 
        'gender',
        'age',
        'city',
        'prefer_date',
        'prefer_time',
        'message',
        'status'
    ];
    public function hospital()
    {
        return $this->belongsTo('App\Hospital','hospital_id');
    }
    public function doctor()
    {
        return $this->belongsTo('App\Doctor','doctor_id');
    }
}
