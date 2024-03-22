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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public static function Location(){
        //$http_lang = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
        //if($http_lang=='pl'){
        //    return 'pl';
        //}else{
            return 'en';
       // }        
    }
}
