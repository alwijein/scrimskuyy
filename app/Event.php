<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'nama_event',
        'total_pertandingan',
        'id_user',
        'slug',
        'peraturan',
        'total_point',
        'thumbnail',
        'grup_wa',
        'jadwal',
    ];


    public function histories(){
        return $this->belongsToMany(Histories::class);
    }

    public function daftarEvents(){
        return $this->belongsToMany(DaftarEvents::class);
    }

    public function squad(){
        return $this->belongsToMany(Squad::class,'daftar_events','id_event','id_squad');
    }

    public function takeImage(){
        return "storage/" . $this->thumbnail;
    }
}
