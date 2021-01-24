<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = ['user_id','nis','nama','rombel','rayon','alamat','telepon','foto'];
    protected $primaryKey = 'user_id';
    public function sikap()
    {
        return $this->hasMany(sikap::class);
    }
    public function rapot()
    {
        return $this->hasMany(rapot::class);
    }
    public function user()
    {
        return $this->belongsTo(user::class);
    }
    public function sholat()
    {
        return $this->hasMany(Sholat::class);
    }
}
