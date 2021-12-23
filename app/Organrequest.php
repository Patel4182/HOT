<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organrequest extends Model
{
    protected $fillable = [
       
        'organ_name', 
        'status', 
        'name', 
        'email', 
        'contact_no',
        'description',
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
