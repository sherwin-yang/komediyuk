<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    public function ticket(){
        return $this->hasMany(Ticket::class);
    }

    public function order(){
        return $this->hasMany(Order::class);
    }
}
