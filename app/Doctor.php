<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Doctor extends Authenticatable
{
    use Notifiable;
    
    /**
     * The attributes that that are mass asignable.
     * 
     * @var array
     */
    protected $fillable = [
        'fullname', 'email_address', 'password',
        'license', 'phone_number', 'home_address', 'work_address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
