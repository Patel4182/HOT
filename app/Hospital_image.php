<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital_image extends Model
{
    protected $fillable = [
        'hospital_id',
        'image'
    ];
    public function hospital()
    {
        return $this->belongsTo('App\Hospital','hospital_id');
    }
}
