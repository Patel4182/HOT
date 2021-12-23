<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organ extends Model
{
    protected $fillable = [
        'hospital_id',
        'doctor_id',
        'organ_name', 
        'description',
        'organ_image', 
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
