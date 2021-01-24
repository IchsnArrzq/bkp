<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    public function kode()
    {
        return $this->hasMany(Kode::class);
    }
    public function sikap()
    {
        return $this->hasMany(Sikap::class);
    }
}
