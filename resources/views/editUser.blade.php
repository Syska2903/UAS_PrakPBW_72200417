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
        <a class="text-black "> <h5> EDIT DATA USER </h5> </a>
    </div>
</div>

<!-- Navigation -->
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-2 text-left">
            <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                <a class="nav-link rounded-2 p-2 border  " href="/home"><i class="material-icons">home</i> Home</a>
                <a class="nav-link rounded-2 p-2 border  " href="/dosen"><i class="material-icons">account_box</i> Dosen</a>
                <a class="nav-link rounded-2 p-2 border  " href="/mahasiswa"><i class="material-icons">account_circle</i> Mahasiswa</a>
                <a class="nav-link rounded-2 p-2 border  " href="/fakuljur"><i class="material-icons">dns</i>Fakultas/Jurusan</a>
                    <a class="nav-link rounded-2 p-2 border  " href="/matakuliah"><i class="material-icons">list</i> Matakuliah</a>
                    <a class="nav-link rounded-2 p-2 border  " href="/skripsi"><i class="material-icons">school</i> Skripsi</a>
            </div>
        </div>
<!-- Form -->
    <div class="col-lg-10 ">
        @php
            $password = explode(',', $user->password);
        @endphp
        <form action="/user/updateUser/{{ $user->id }}" method="POST" class="pt-2 pb-2">
            @csrf
            @method('PUT')
            <div class="form-group w-25">
                <label><b> NIK : </b></label>
                <input type="number" name="nik_user" class="form-control" value="{{ $user->nik_user }}">
            </div>
            <div class="form-group w-25">
                <label><b> Nama User : </b></label>
                <input type="text" name="nama_user" class="form-control" value="{{ $user->nama_user }}">
            </div>
            <div class="form-group w-25">
                <label><b> No. Handphone: </b></label>
                <input type="number" name="no_hp" class="form-control" value="{{ $user->no_hp }}">
            </div>
            <div class="form-group w-25">
                <label><b> Email : </b></label>
                <input type="email" name="email" class="form-control" value="{{ $user->email }}">
            </div>
            <div class="form-group w-25">
                <label><b> Password: </b></label>
                <input type="password" name="password" class="form-control" value="{{ $user->password }}">
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