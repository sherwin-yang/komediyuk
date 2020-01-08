<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function cartDetail(){
        return $this->belongsTo(CartDetail::class);
    }

    public function user(){
        return $this->hasMany(User::class);
    }
}
