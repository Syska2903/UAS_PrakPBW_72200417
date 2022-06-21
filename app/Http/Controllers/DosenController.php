<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use App\Dosen;


class DosenController extends Controller
{
    public function dosen()
    {
        $dosen = Dosen::paginate(10);
        return view ('dosen', ['dosen' => $dosen]);
    }

    public function pencarian (Request $request)
    {
        $cari = $request->cari;
        $dosen = Dosen::where('nidn', 'like', '%'.$cari.'%')->orWhere('nama', 'like', '%'.$cari.'%')
        ->orWhere('jafung', 'like', '%'.$cari.'%')->orWhere('pakar', 'like', '%'.$cari.'%')->paginate(10);
        return view ('dosen', ['dosen' => $dosen]);
    }

    public function formulirDosen()
    {
        return view('formulirDosen');
    }

    public function saveDosen(Request $request){

        $pakar = implode(",", $request->get('pakar'));
        Dosen::create([
            'nidn' => $request->nidn,
            'nama' => $request->nama,
            'status' => $request->status,
            'jafung' => $request->jafung,
            'pakar' => $pakar
        ]);
        return redirect('/dosen')->with('alert_saveDosen', 'Data berhasil di SAVE');
    }

    public function editDosen($id)
    {
        $dosen = Dosen::find($id);
        return view ('editDosen', ['dosen' => $dosen]);
        
    }

    public function updateDosen($id, Request $request)
    {
        $pakar= implode(',', $request->pakar);
        $dosen = Dosen::find($id);
        $dosen->nidn = $request->nidn;
        $dosen->nama = $request->nama;
        $dosen->status = $request->status;
        $dosen->jafung = $request->jafung;
        $dosen->pakar = $pakar;
        $dosen->save();
        return redirect('/dosen')->with('alert_updateDosen', 'Data berhasil di UBAH');
    }

    public function hapusDosen($id)
    {
        $dosen = Dosen::find($id);
        $dosen->delete();
        return redirect('/dosen')->with('alert_hapusDosen', 'Data berhasil di HAPUS');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('alert-logout','Anda Telah Berhasil Logout');
    }
}
