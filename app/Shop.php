<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Watson\Rememberable\Rememberable;

class Shop extends Model
{
    //
    use Rememberable;

    protected $hidden = ['created_at','updated_at'];


    public function products(){
        return $this->belongsToMany("App\Product");
    }
}
