<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Rememberable\Rememberable;

class Product extends Model
{
    //
    use Rememberable;

    protected $hidden = ['created_at','updated_at'];


    public function brand(){
        return $this->belongsTo("App\Brand");
    }

    public function shops(){
        return $this->belongsToMany("App\Shop");
    }

}
