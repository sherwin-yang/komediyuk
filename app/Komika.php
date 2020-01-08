<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komika extends Model
{
    //kalo udah dibikin migration sama model tiket, uncomment aja
    // public function tiket(){
    //     return $this->hasMany(Tiket::class);
    // }

    public function video(){
        return $this->hasMany(Video::class);
    }
}
