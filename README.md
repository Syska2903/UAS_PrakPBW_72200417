<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
</p>

## Ujian Akhir Semester Praktikum Pemrograman Berbasis Web

NIM     : 72200417
Nama    : Syska Finalia Moreng

Dalam project Ujian Akhir Semester Praktikum Pemrograman Berbasis Web ini dapat menampilkan fitur-fitur sebagai berikut:
- LOGIN
- HOME
- DOSEN
- MAHASISWA
- DATA USER
- LOGOUT
- REST API

## LOGIN
Pada file ini, saya berhasil melakukan login dengan data user yang sudah terdaftar dalam data user saya. Login ini dilengkapi dengan middleware untuk bisa membatasi akses kepada pengguna atau user yang tidak dikenal.
## HOME
Pada tampilan home ini berisi tentang Profil Kampus yang menceritakan secara singkat sejarah berdirinya Universitas Kristen Duta Wacana
## DOSEN
Tampilan dosen ini berisi data dosen yang sudah dibuat menggunakan migration dan juga seeding yang menggunakan data Faker(Dummy).Pada data dosen ini sudah dapat menggunakan fitur ADD, EDIT, dan DELETE. Fitur-fitur ini dilengkapi dengan alert save, update dan delete. Semua metode tersebut dimulai dari tampil hingga logout terdapat dalam DosenController. 
## MAHASISWA
Tampilan mahasiswa ini berisi data mahasiswa yang sudah dibuat menggunakan migration dan juga seeding yang menggunakan data Faker(Dummy).Pada data mahasiswa ini sudah dapat menggunakan fitur ADD, EDIT, dan DELETE.Fitur-fitur ini dilengkapi dengan alert save, update dan delete. Semua metode tersebut dimulai dari tampil hingga logout terdapat dalam MahasiswaController. 
## DATA USER
Tampilan user ini berisi data user  yang sudah dibuat menggunakan migration saja. Pada data user ini sudah dapat menggunakan fitur ADD, EDIT, dan DELETE. Fitur-fitur ini dilengkapi dengan alert save, update dan delete. Semua metode tersebut dimulai dari tampil hingga logout terdapat dalam AuthController. 
## LOGOUT
Pada fitur logout ini sudah dpat dijalankan bisa pada fitur home, dosen, mahasiswa, maupun data user. Metode logout terdapat pada setiap file home, dosen, mahasiswa dan data user yang dilengkapi dengan alert-logout.
