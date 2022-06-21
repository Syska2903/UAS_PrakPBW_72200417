<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('formLogin');
    }

    public function user()
    {
        $user = User::paginate(5);
        return view('user', ['user' => $user]);
    }
    
    public function pencarian (Request $request)
    {
        $cari = $request->cari;
        $user = User::where('nik_user', 'like', '%'.$cari.'%')->orWhere('nama_user', 'like', '%'.$cari.'%')->paginate(5);
        return view ('user', ['user' => $user]);
    }

    public function formulirUser()
    {
        return view('formulirUser');
    }

    public function saveUser(Request $request)
    {
        $validatedData = $request->validate([
            'nik_user' => 'required|max:16',
            'no_hp' => 'required|max:12',
            'password' => 'required|max:8',
            'email' => 'required',
        ]);
        $user = User::create([
            'nik_user' => $request -> nik_user,
            'nama_user' => $request -> nama_user,
            'no_hp' => $request -> no_hp,
            'email' => $request -> email,
            'password' => md5 ($request -> password)
        ]);
        return redirect('/user')->with('alert_saveUser', 'Data berhasil di SAVE');
    }

    public function editUser($id)
    {
        $user = User::find($id);
        return view ('editUser', ['user' => $user]); 
    }

    public function updateUser($id, Request $request)
    {
        $user = User::find($id);
        $user->nik_user = $request -> nik_user;
        $user->nama_user = $request->nama_user;
        $user->no_hp = $request -> no_hp;
        $user->email = $request->email;
        $user->password = md5 ($request->password);
        $user->save();
        return redirect('/user')->with('alert_updateUser', 'Data berhasil di UBAH');
    }

    public function hapusUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user')->with('alert_hapusUser', 'Data berhasil di HAPUS');
    }

    public function cekLogin (Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect('/login');
        }
        else
        {
            return redirect('/home');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('alert-logout','Anda Telah Berhasil Logout');
    }
}
