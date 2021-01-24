<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sholat extends Model
{
    protected $fillable = ['nama','user_id','sholat','tanggal','waktu'];
    public function siswa()
    {
        return $this->belongsTo(Siswa::class,'user_id');
    }
}
