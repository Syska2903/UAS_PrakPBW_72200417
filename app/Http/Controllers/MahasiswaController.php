<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use App\Mahasiswa;


class MahasiswaController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function mahasiswa()
    {
        $mahasiswa = Mahasiswa::paginate(10);
        return view ('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function pencarian (Request $request)
    {
        $cari = $request->cari;
        $mahasiswa = Mahasiswa::where('nim', 'like', '%'.$cari.'%')->orWhere('nama', 'like', '%'.$cari.'%')
        ->orWhere('gender', 'like', '%'.$cari.'%')->orWhere('bidang_minat', 'like', '%'.$cari.'%')->paginate(7);
        return view ('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function formulirMhs()
    {
        return view('formulirMhs');
    }

    public function saveMhs(Request $request){

        $minat = implode(",", $request->get('minat'));
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidang_minat' => $minat
        ]);
        return redirect('/mahasiswa')->with('alert_saveMhs', 'Data berhasil di SAVE');
    }

    public function editMhs($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view ('editMhs', ['mahasiswa' => $mahasiswa]);
        
    }

    public function updateMhs($id, Request $request)
    {
        $minat= implode(',', $request->minat);
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->gender = $request->gender;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->bidang_minat = $minat;
        $mahasiswa->save();
        return redirect('/mahasiswa')->with('alert_updateMhs', 'Data berhasil di UBAH');
    }

    public function hapusMhs($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa')->with('alert_hapusMhs', 'Data berhasil di HAPUS');
    }
}
