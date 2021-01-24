<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sikap extends Model
{
    protected $fillable = ['user_id','guru_id','kode_id','tipe_id','skor_id'];
    public function siswa()
    {
        return $this->belongsTo(Siswa::class,'user_id');
    }
    public function guru()
    {
        return $this->belongsTo(guru::class);
    }
    public function tipe()
    {
        return $this->belongsTo(Tipe::class);
    }
    public function kode()
    {
        return $this->belongsTo(Kode::class);
    }
    public function skor()
    {
        return $this->belongsTo(Skor::class);
    }
}
