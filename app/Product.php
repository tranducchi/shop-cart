<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    protected  $table = 'products';
    public function category(){
        return $this->belongsTo('App\Categories', 'id_cat', 'id');
    }
    public function comments(){
        return $this->hasMany('App\Comment', 'id_product', 'id');
    }
}
