<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Rapot, Siswa, Sholat, Sikap};
use File;
class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.siswa.index', [
            'siswa' => Siswa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, []);
        Siswa::create([]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.siswa.show', [
            'siwa' => Siswa::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.siswa.edit', [
            'siswa' => Siswa::findOrFail($id)
        ]);
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
            'nis' => 'required',
            'nama' => 'required',
            'rombel' => 'required',
            'rayon' => 'required',
            'alamat' => 'required',
            'telepon'  => 'required'
        ]);
        if (isset($request->foto)) {
            $extensi = ['image/png', 'image/jpg','image/jpeg'];
            $file = $request->file('foto');
            if (in_array($file->getMimeType(), $extensi)) {
                $siswa = Siswa::find($request->nis);
                File::delete('fotoSiswa/'.$siswa->foto);
                Siswa::where('id', $id)->update([
                    'nis' => $request->nis,
                    'nama' => $request->nama,
                    'rombel' => $request->rombel,
                    'rayon' => $request->rayon,
                    'alamat' => $request->alamat,
                    'telepon'  => $request->telepon,
                    'foto' => $request->nis.'_'.$file->getClientOriginalName()
                ]);
                $file->move('fotoSiswa',$request->nis.'_'.$file->getClientOriginalName());
                return back()->with('success','Berhasil Update Siswa Dan Menambahkan foto');
            } else {
                return back()->with('failed', 'Extensi File Tidak Sesuai');
            }
        } else {
            Siswa::where('id', $id)->update([
                'nis' => $request->nis,
                'nama' => $request->nama,
                'rombel' => $request->rombel,
                'rayon' => $request->rayon,
                'alamat' => $request->alamat,
                'telepon'  => $request->telepon
            ]);
            return back()->with('success', 'Berhasil Mengupdate profile');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return back();
    }

    public function jadwalSholat()
    {
        return view('siswa.jadwalSholat', [
            'siswa' => Siswa::findOrFail(auth()->user()->id),
            'sholat' => Sholat::where('user_id', auth()->user()->id)->paginate(5)
        ]);
    }
    public function rewardPunishment()
    {

        return view('siswa.rewardPunishment', [
            'sikap' => Sikap::where('user_id', auth()->user()->id)->paginate(5),
        ]);
    }
    public function rapot()
    {
        return view('siswa.rapot', [
            'rapot' => Rapot::where('user_id', auth()->user()->id)->get()
        ]);
    }
    public function profil()
    {
        return view('siswa.profil', [
            'siswa' => Siswa::find(auth()->user()->id)
        ]);
    }
}
