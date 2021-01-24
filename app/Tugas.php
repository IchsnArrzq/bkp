<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    protected $fillable = [
        'guru_id',
        'tugas',
        'kkm',
        'deadline',
        'file'
    ];
    public function guru()
    {
        return $this->belongsTo(guru::class);
    }
}
