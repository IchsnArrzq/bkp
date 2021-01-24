<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = ['user_id','nama','mata_pelajaran'];
    public function rapot()
    {
        return $this->hasMany(rapot::class);
    }
    public function sikap()
    {
        return $this->hasMany(sikap::class);
    }
    public function tugas()
    {
        return $this->hasMany(tugas::class);
    }
    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
