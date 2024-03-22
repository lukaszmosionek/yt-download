<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    //
    
    public static function getLastLink(){
        
        return Self::orderBy('created_at', 'desc')->limit(25)->get();

    }
}
