<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Rememberable\Rememberable;

class Brand extends Model
{
    //
    use Rememberable;

    protected $hidden = ['created_at','updated_at'];


    public function products(){
        return $this->hasMany("App\Product");
    }
}
