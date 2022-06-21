<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class APIController extends Controller
{
    public function tampil()
    {
        $maha = Mahasiswa::all();
        return response()->json([
            'success' => true,
            'message' => 'Data mahasiswa berhasil ditampilkan',
            'data'    => $maha
        ], 200);
    }

    public function createMhs (Request $request)
    {
        $maha = Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidang_minat' => $request->bidang_minat
        ]);

        if($maha){
            return response()->json([
                'success' => true,
                'message' => 'Data mahasiswa BERHASIL Disimpan',
            ], 200);

        }else{
            return response()->json([
                'success' => false,
                'message' => 'Data mahasiswa GAGAL Disimpan',
            ], 401);
        }
        
    }

    public function updateMhs(Request $request)
    {
        $maha = Mahasiswa::whereId($request->id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidang_minat' => $request->bidang_minat
        ]);

        if($maha){
            return response()->json([
                'success' => true,
                'message' => 'Data mahasiswa BERHASIL Diubah',
            ], 200);

        }else{
            return response()->json([
                'success' => false,
                'message' => 'Data mahasiswa GAGAL Diubah',
            ], 400);
        }
        
    }

    public function readUpdateMhs($id, Request $request)
    {
        $maha = Mahasiswa::whereId($id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidang_minat' => $request->bidang_minat
        ]);

        if($maha){
            return response()->json([
                'success' => true,
                'message' => 'Data mahasiswa BERHASIL Diubah',
            ], 200);

        }else{
            return response()->json([
                'success' => false,
                'message' => 'Data mahasiswa GAGAL Diubah',
            ], 400);
        }
        
    }

    public function deleteMhs($id)
    {
        $maha = Mahasiswa::find($id);
        $maha->delete();

        if($maha){
            return response()->json([
                'success' => true,
                'message' => 'Data mahasiswa BERHASIL Dihapus',
            ], 200);

        }else{
            return response()->json([
                'success' => false,
                'message' => 'Data mahasiswa GAGAL Dihapus',
            ], 400);
        }
        
    }
}
