<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable = [
        'city_id','user_id','name', 'email', 'contact_no','address','contact_person_name','contact_person_mobile_no','description','image','status'
    ];
    public function cities()
    {
        return $this->belongsTo('App\City','city_id');
    }
}
