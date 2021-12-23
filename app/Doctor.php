<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'hospital_id',
        'city_id',
        'name', 
        'bdate',
        'gender', 
        'contact_no',
        'specialization',
        'degree',
        'experience',
        'email',
        'description',
        'image',
        'user_id',
        'status',
    ];
    public function hospital()
    {
        return $this->belongsTo('App\Hospital','hospital_id');
    }
    public function cities()
    {
        return $this->belongsTo('App\City','city_id');
    }
}