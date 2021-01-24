<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kode extends Model
{
    public function tipe()
    {
        return $this->belongsTo(Tipe::class);
    }
    public function skor()
    {
        return $this->hasMany(Skor::class);
    }
    public function sikap()
    {
        return $this->hasMany(Sikap::class);
    }
}
