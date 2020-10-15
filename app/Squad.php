<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Squad extends Model
{
    protected $fillable = ['nama_squad','logo_squad','status','id_user'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function histories(){
        return $this->belongsToMany(Histories::class);
    }

    public function event(){
        return $this->belongsToMany(\App\Event::class,'daftar_events','id_squad','id_event');
    }
}
