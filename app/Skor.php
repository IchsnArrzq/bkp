<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skor extends Model
{
    protected $fillable = ['kode_id','skor'];
    public function kode()
    {
        return $this->belongsTo(Kode::class);
    }
    public function sikap()
    {
        return $this->hasMany(Sikap::class);
    }
}
