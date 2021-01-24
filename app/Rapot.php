<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rapot extends Model
{
    protected $fillable = ['user_id','guru_id','nilai','kkm'];
    public function siswa()
    {
        return $this->belongsTo(siswa::class,'user_id');
    }
    public function guru()
    {
        return $this->belongsTo(guru::class);
    }
}
