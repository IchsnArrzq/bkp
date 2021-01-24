<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Guru,Sikap,Siswa,User,Tipe,Skor, Tugas};


class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.guru.index', [
            'guru' => Guru::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'mata_pelajaran' => 'required',
        ]);
        Guru::where('id', $id)->update([
            'nama' => $request->nama,
            'mata_pelajaran' => $request->mata_pelajaran
        ]);
        return back()->with('success','Berhasil Mengupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function profil()
    {
        $user = Guru::where('user_id', auth()->user()->id)->get();
        foreach ($user as $data) {
            $id = $data->id;
        }
        return view('guru.profil', [
            'guru' => Guru::find($id)
        ]);
    }
    public function rewardPunishment()
    {
        $siswa = User::find(auth()->user()->id)->guru;
        foreach ($siswa as $data) {
            $id = $data->id;
        }
        return view('guru.rewardPunishment', [
            'siswa' => Siswa::all(),
            'guru' => $id,
            'tipe' => Tipe::all(),
            'skor' => Skor::all()
        ]);
    }
    public function tugasBK()
    {

        foreach(User::find(auth()->user()->id)->guru as $data)
        {
            $id = $data->id;
        }
        return view('guru.tugasBK',[
            'guru_id' => $id,
            'tugas' => Tugas::where('guru_id',$id)->get()
        ]);
    }
    public function tugasBKStore(Request $request)
    {
        $this->validate($request,[
            'guru_id' => 'required',
            'tugas' => 'required',
            'kkm' => 'required',
            'deadline' => 'required'
        ]);
        if(isset($request->file)){
            $rand = rand();
            $extensi = ['image/png','image/jpg','application/pdf'];
            $file = $request->file('file');
            if(in_array($file->getMimeType(),$extensi)){
                Tugas::create([
                    'guru_id' => $request->guru_id,
                    'tugas' => $request->tugas,
                    'kkm' => $request->kkm,
                    'deadline' => $request->deadline,
                    'file' => $rand.'_'.auth()->user()->id.'_'.$file->getClientOriginalName()
                ]);
                $file->move('folderTugas',$rand.'_'.auth()->user()->id.'_'.$file->getClientOriginalName());
                return back()->with('success','Berhasil Menambahkan Tugas BK');
            }else{
                return back()->with('failed','Ekstensi tidak tersebut');
            }
        }else{
            Tugas::create([
                'guru_id' => $request->guru_id,
                'tugas' => $request->tugas,
                'kkm' => $request->kkm,
                'deadline' => $request->deadline
            ]);
            return back()->with('success','Berhasil Menambahkan Tugas BK');
        }
    }
    public function rewardPunishmentStore(Request $request)
    {
        $this->validate($request, [
            'guru_id' => 'required',
            "siswa" => "required",
            "tipe" => "required",
            "kode" => 'required',
            "skor" => "required"
        ]);
        Sikap::create([
            'user_id' => $request->siswa,
            'guru_id' => $request->guru_id,
            'tipe_id' => $request->tipe,
            'kode_id' => $request->kode,
            'skor_id' => $request->skor
        ]);
        return back()->with('success','Berhasil Menambahkan '.$request->tipe);
    }
}
