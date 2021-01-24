<?php

namespace App\Http\Controllers;

use App\{User,Siswa,Guru};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        return view('admin.user.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required','string','max:50'],
        ]);
        $rand = $request->password;
        User::create([
            'id' => $rand,
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
        ]);
        if($request->role === 'siswa'){
            Siswa::create(['id'=> $rand,'user_id'=> $rand]);
        }elseif($request->role === 'guru'){
            Guru::create(['id'=> $rand,'user_id'=> $rand]);
        }
        return back()->with('success','Berhasil Menambahkan User');
    }
}
