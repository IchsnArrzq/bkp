<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sholat;
class SholatController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'siswa_id' => 'required',
            'sholat' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required'
        ]);
        Sholat::create([
            'user_id' => $request->siswa_id,
            'nama' => $request->nama,
            'sholat' => $request->sholat,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu
        ]);
        return back()->with('success','Berhasil Menambahkan Ke Jadwal Sholat');
    }
}
