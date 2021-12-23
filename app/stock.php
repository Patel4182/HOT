<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    
    protected $fillable = [
        'groupname', 'no_of_bottle', 'remaining_bottle','summary','bloodbank_id'
    ];
}
