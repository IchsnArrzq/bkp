<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Rapot,Siswa,User};
class RapotController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function rapotSiswa()
    {
        $guru = User::find(auth()->user()->id)->guru;
        foreach ($guru as $data) {
            $id = $data->id;
        }
        $rapot = Rapot::where('guru_id',$id)->get();
        return view('guru.rapotSiswa',[
            'siswa' => Siswa::all(),
            'guru_id' => $id,
            'rapot' => $rapot
        ]);
    }
    public function rapotSiswaStore(Request $request)
    {
        $this->validate($request,[
            'user_id' => 'required',
            'guru_id' => 'required',
            'nilai' => 'required',
            'kkm' => 'required'
        ]);
        if(Rapot::where('user_id',$request->user_id)->exists() && Rapot::where('guru_id',$request->guru_id)->exists()){
            return back()->with('failed','Anda Sudah Memasukannya Silahkan Edit Kembali');
        }else{
            Rapot::create([
                'user_id' => $request->user_id,
                'guru_id' => $request->guru_id,
                'nilai' => $request->nilai,
                'kkm' => $request->kkm
            ]);
            return back()->with('success','Berhasil Menambahkan Nilai Rapot');
        }
    }
}
