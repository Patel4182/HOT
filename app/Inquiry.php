<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $table="inquiries";
    protected $fillable = [
        'fullname',
        'email',
        'subject',
        'contact_no',
        'message',
        'role'
    ];
}