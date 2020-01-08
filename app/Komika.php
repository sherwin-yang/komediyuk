<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komika extends Model
{
    public function video(){
        return $this->hasMany(video::class);
    }

    public function tiekt(){
        return $this->hasMany(Tiket::class);
    }
}
