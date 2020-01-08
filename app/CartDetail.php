<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    public function cart(){
        return $this->hasMany(Cart::class);
    }

    public function tiket(){
        return $this->hasMany(Tiket::class);
    }
}
