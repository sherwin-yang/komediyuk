<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    public function cartDetail(){
        return $this->belongsTo(CartDetail::class);
    }

    public function komika(){
        return $this->hasMany(Komika::class);
    }

    public function orderDetail(){
        return $this->belongsTo(OrderDetail::class);
    }

    public function showById($id){
        $tiket = Tiket::find($id);

        return view('')->with('tiket', $tiket);
    }
}
