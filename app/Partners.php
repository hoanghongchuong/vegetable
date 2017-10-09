<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partners extends Model
{
    protected $table = 'partner';

    public static function getList(){
    	return Partners::get();
    }
}
