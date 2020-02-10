<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    //
    protected $fillable = array('nama', 'nipd');
    // fillable -> untuk menunjukan file ini diisi

    public function mahasiswa() {
        return $this->hasMany('App\Mahasiswa', 'id_dosen');
        // hasMany -> 
    }
}