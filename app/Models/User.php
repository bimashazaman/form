<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable 
{
    use HasApiTokens, HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    // protected $fillabe = [
    //         'name',
    //         'Profile_created_by' ,
    //         'Gender' ,
    //         'Marital_Status' ,
    //         'Religion',
    //         'Sect' ,
    //         'Country_living_in' ,
    //         'Country_Code' ,
    //         'Mobile_No',
    //         'password' ,
    // ];

    protected $guarded=[''];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
}
