<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function komika(){
        return $this->belongsTo(Komika::class);
    }
}
