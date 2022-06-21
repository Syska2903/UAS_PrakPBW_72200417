<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/cek', function () {
    return view('cekKoneksi');
});

Route::middleware(['auth'])->group(function () {
    
});

// HOME
Route::get('/home', function (){
    return view('home');
});
// MAHASISWA
Route::get('/mahasiswa', 'MahasiswaController@mahasiswa');
Route::get('/mahasiswa/cari', 'MahasiswaController@pencarian');
Route::get('/mahasiswa/formulirMhs', 'MahasiswaController@formulirMhs');
Route::post('/mahasiswa/saveMhs', 'MahasiswaController@saveMhs');
Route::get('/mahasiswa/editMhs/{id}', 'MahasiswaController@editMhs');
Route::put('/mahasiswa/updateMhs/{id}', 'MahasiswaController@updateMhs');
Route::get('/mahasiswa/hapusMhs/{id}', 'MahasiswaController@hapusMhs');
Route::get('/logout', 'MahasiswaController@logout');
//DOSEN
Route::get('/dosen', 'DosenController@Dosen');
Route::get('/dosen/cari', 'DosenController@pencarian');
Route::get('/dosen/formulirDosen', 'DosenController@formulirDosen');
Route::post('/dosen/saveDosen', 'DosenController@saveDosen');
Route::get('/dosen/editDosen/{id}', 'DosenController@editDosen');
Route::put('/dosen/updateDosen/{id}', 'DosenController@updateDosen');
Route::get('/dosen/hapusDosen/{id}', 'DosenController@hapusDosen');
Route::get('/logout', 'DosenController@logout');
//USER
Route::get('/user', 'AuthController@user');
Route::get('/user/formulirUser', 'AuthController@formulirUser');
Route::get('/user/cari', 'AuthController@pencarian');
Route::post('/user/saveUser', 'AuthController@saveUser');
Route::get('/user/editUser/{id}', 'AuthController@editUser');
Route::put('/user/updateUser/{id}', 'AuthController@updateUser');
Route::get('/user/hapusUser/{id}', 'AuthController@hapusUser');
Route::get('/logout', 'AuthController@logout');

Route::get('/login', 'AuthController@login')->middleware('guest')->name('login');
Route::post('user/cekLogin', 'AuthController@cekLogin')->middleware('guest');
