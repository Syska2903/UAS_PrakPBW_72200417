<!doctype html>
<html lang="en">
    <head>
    <title>Data Mahasiswa</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
<body>
<!-- HEADER -->
<div class="row p-1 bg-primary">
    <div class="col-md-12 text-center py-2">
        <a class="text-black "> <h5> EDIT DATA MAHASISWA </h5> </a>
    </div>
</div>

<!-- Navigation -->
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-2 text-left">
            <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                <a class="nav-link rounded-2 p-2 border  " href="/home"><i class="material-icons">home</i> Home</a>
                <a class="nav-link rounded-2 p-2 border  " href="/dosen"><i class="material-icons">account_box</i> Dosen</a>
                <a class="nav-link rounded-2 p-2 border active " href="/mahasiswa"><i class="material-icons">account_circle</i> Mahasiswa</a>
                <a class="nav-link rounded-2 p-2 border  " href="/fakuljur"><i class="material-icons">dns</i>Fakultas/Jurusan</a>
                    <a class="nav-link rounded-2 p-2 border  " href="/matakuliah"><i class="material-icons">list</i> Matakuliah</a>
                    <a class="nav-link rounded-2 p-2 border  " href="/skripsi"><i class="material-icons">school</i> Skripsi</a>
            </div>
        </div>
<!-- Form -->
    <div class="col-lg-10 ">
        @php
            $minat = explode(',', $mahasiswa->minat);
        @endphp
        <form action="/mahasiswa/updateMhs/{{ $mahasiswa->id }}" method="POST" class="pt-2 pb-2">
            @csrf
            @method('PUT')
            <div class="form-group w-25">
                <label><b> NIM : </b></label>
                <input type="number" name="nim" class="form-control" value="{{ $mahasiswa->nim }}">
            </div>
            <div class="form-group w-25">
                <label><b> Nama Mahasiswa : </b></label>
                <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}">
            </div>
            <label><b> Gender : </b></label>
            <div class="form-check w-25">
                <input type="radio" name="gender" value="Laki-Laki" {{ $mahasiswa->gender = 'Laki-laki' ? 'checked':''}} 
                class="form-check-input">
                <label> Laki-Laki </label>
            </div>
            <div class="form-check w-25">
                <input type="radio" name="gender" value="Perempuan" {{ $mahasiswa->gender = 'Perempuan' ? 'checked':''}}
                class="form-check-input">
                <label> Perempuan </label>
            </div>
            <div class="form-group w-25">
                <label><b> Jurusan : </b></label>
                <select name="jurusan" class="form-control">
                        <option value="0">-Pilih Jurusan-</option> 
                        <option value="Arsitektur" {{$mahasiswa->jurusan = 'Arsitektur' ? 'selected':''}}> Arsitektur</option> 
                        <option value="Akuntansi" {{$mahasiswa->jurusan = 'Akuntansi' ? 'selected':''}}> Akuntansi</option> 
                        <option value="Bioteknologi" {{$mahasiswa->jurusan = 'Bioteknolog' ? 'selected':''}}> Bioteknologi</option> 
                        <option value="Desain Produk" {{$mahasiswa->jurusan = 'Desain Produk' ? 'selected':''}}> Desain Produk</option>
                        <option value="Filsafat Keilahian" {{$mahasiswa->jurusan = 'Filsafat Keilahian' ? 'selected':''}}> Filsafat Keilahian</option> 
                        <option value="Informatika" {{$mahasiswa->jurusan = 'Informatika' ? 'selected':''}}> Informatika</option> 
                        <option value="Manajemen" {{$mahasiswa->jurusan = 'Manajemen' ? 'selected':''}}> Manajemen</option> 
                        <option value="Pendidikan Bahasa Inggris" {{$mahasiswa->jurusan = 'Pendidikan Bahasa Inggris' ? 'selected':''}}> 
                            Pendidikan Bahasa Inggris</option> 
                        <option value="Sistem Infromasi" {{$mahasiswa->jurusan = 'Sistem Infromasi' ? 'selected':''}}> Sistem Infromasi</option>
                    </select>       
            </div> 
            <label><b> Bidang Minat : </b></label>
            <div class="form-check w-25">
                    <input type="checkbox" name="minat[]" value="Apoteker" {{ in_array( 'Apoteker', $minat) ? 'checked':''}}
                     class="form-check-input">
                    <label> Apoteker </label>
                </div>
                <div class="form-check w-25">
                    <input type="checkbox" name="minat[]" value="Arsitek" {{ in_array('Arsitek', $minat) ? 'checked':''}}
                     class="form-check-input">
                    <label> Arsitek </label>
                </div>
                <div class="form-check w-25">
                    <input type="checkbox" name="minat[]" value="Perawat" {{ in_array('Perawat', $minat) ? 'checked':''}}
                     class="form-check-input">
                    <label> Perawat </label>
                </div>
                <div class="form-check w-25">
                    <input type="checkbox" name="minat[]" value="Pramugari" {{ in_array('Pramugari', $minat) ? 'checked':''}}
                     class="form-check-input">
                    <label> Pramugari </label>
                </div>
                <div class="form-check w-25">
                    <input type="checkbox" name="minat[]" value="Presiden" {{ in_array('Presiden', $minat) ? 'checked':''}}
                     class="form-check-input">
                    <label> Presiden </label>
                </div>
                <div class="form-check w-25">
                    <input type="checkbox" name="minat[]" value="Penyiar_Radio" {{ in_array('Penyiar_Radio', $minat) ? 'checked':''}}
                     class="form-check-input">
                    <label> Penyiar_Radio </label>
                </div>
                <div class="form-check w-25">
                    <input type="checkbox" name="minat[]" value="Penulis" {{ in_array('Penulis', $minat) ? 'checked':''}}
                     class="form-check-input">
                    <label> Penulis </label>
                </div>
                <div class="form-group pt-4">
                    <input type="submit" value="SAVE" class="btn btn-primary">
                </div>
        </form>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"crossorigin="anonymous"></script>

</body>
</html>