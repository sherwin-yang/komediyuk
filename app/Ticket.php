<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function CartDetail(){
        return $this->belongsTo(CartDetail::class);
    }
    public function Komika(){
        return $this->hasMany(Komika::class);
    }
    public function OrderDetail(){
        return $this->belongsTo(OrderDetail::class);
    }
}
