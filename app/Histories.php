<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Histories extends Model
{
    public function squad(){
        return $this->belongsToMany(Squad::class);
    }

    public function event(){
        return $this->belongsTo(Event::class);
    }
}
