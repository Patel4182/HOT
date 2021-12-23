<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];
   
    public static function loginuser($email,$password)
    {           
         return \Auth::attempt(array('email' => $email, 'password' => $password));
    }
    public function isAdmin()
    {
    return ($this->role == '1');
     }
     public function isDoctor()
     {
     return ($this->role == '3');
      }
      public function isHospital()
      {
      return ($this->role == '2');
       }
       public function isBlood()
       {
       return ($this->role == '4');
        }
 
}
