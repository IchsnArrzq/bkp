<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skor extends Model
{
    public function kode()
    {
        return $this->belongsTo(Kode::class);
    }
    public function sikap()
    {
        return $this->hasMany(Sikap::class);
    }
}
