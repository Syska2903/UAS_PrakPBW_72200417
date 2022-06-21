<!doctype html>
<html lang="en">
    <head>
    <title>Formulir Mahasiswa</title>
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
        <a class="text-black "> <h5> ISI DATA DOSEN </h5> </a>
    </div>
</div>

<!-- Navigation -->
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-2 text-left">
            <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                <a class="nav-link rounded-2 p-2 border  " href="/home"><i class="material-icons">home</i> Home</a>
                <a class="nav-link rounded-2 p-2 border active " href="/dosen"><i class="material-icons">account_box</i> Dosen</a>
                <a class="nav-link rounded-2 p-2 border  " href="/mahasiswa"><i class="material-icons">account_circle</i> Mahasiswa</a>
                <a class="nav-link rounded-2 p-2 border  " href="/matakuliah"><i class="material-icons">list</i> Matakuliah</a>
            </div>
        </div>
<!-- Form -->
    <div class="col-lg-10 ">
        @php
            $pakar = explode(',', $dosen->pakar);
        @endphp
        <form action="/dosen/updateDosen/{{ $dosen->id }}" method="POST" class="pt-2 pb-2">
            @csrf
            @method('PUT')
            <div class="form-group w-25">
                <label><b> NIDN : </b></label>
                <input type="number" name="nidn" class="form-control" value="{{ $dosen->nidn }}">
            </div>
            <div class="form-group w-25">
                <label><b> Nama Dosen : </b></label>
                <input type="text" name="nama" class="form-control" value="{{ $dosen->nama }}">
            </div>
            <label><b> Status : </b></label>
            <div class="form-check w-25">
                <input type="radio" name="status" value="Dosen Tetap" {{ $dosen->status = 'Dosen Tetap' ? 'checked':''}}
                class="form-check-input">
                <label> Dosen Tetap </label>
            </div>
            <div class="form-check w-25">
                <input type="radio" name="status" value="Dosen Tidak Tetap" {{ $dosen->status = 'Dosen Tidak Tetap' ? 'checked':''}}
                class="form-check-input">
                <label> Dosen Tidak Tetap </label>
            </div>
            <div class="form-group w-25">
                <label><b> Jabatan Fungsional : </b></label>
                <select name="jafung" class="form-control">
                        <option value="0">-Pilih Jabatan Fungsional-</option> 
                        <option value="Tenaga Pengajar" {{$dosen->jafung = 'Tenaga Pengajar' ? 'selected':''}}> Tenaga Pengajar</option> 
                        <option value="Asisten Ahli" {{$dosen->jafung = 'Asisten Ahli' ? 'selected':''}}> Asisten Ahli</option> 
                        <option value="Lektor" {{$dosen->jafung = 'Lektor' ? 'selected':''}}> Lektor</option> 
                        <option value="Lektor Kepala" {{$dosen->jafung = 'Lektor Kepala' ? 'selected':''}}> Lektor Kepala</option>
                        <option value="Guru Besar" {{$dosen->jafung = 'Guru Besar' ? 'selected':''}}> Guru Besar</option> 
                    </select>       
            </div> 
            <label><b> Bidang Keahlian : </b></label>
            <div class="form-check w-25">
                    <input type="checkbox" name="pakar[]" value="AI" {{ in_array( 'AI', $pakar) ? 'checked':''}}
                    class="form-check-input">
                    <label> AI </label>
                </div>
                <div class="form-check w-25">
                    <input type="checkbox" name="pakar[]" value="WEB" {{ in_array( 'WEB', $pakar) ? 'checked':''}}
                    class="form-check-input">
                    <label> WEB </label>
                </div>
                <div class="form-check w-25">
                    <input type="checkbox" name="pakar[]" value="DBMS" {{ in_array( 'DBMS', $pakar) ? 'checked':''}}
                    class="form-check-input">
                    <label> DBMS </label>
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