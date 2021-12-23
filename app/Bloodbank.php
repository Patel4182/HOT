<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bloodbank extends Model
{
    protected $fillable = [
        'name',
        'email',
        'userid',
        'contactno',
        'address',
        'password',
        'contact_person_name',
        'contact_person_mobile_no',
        'description',
        'image',
        'status',
    ];
}
