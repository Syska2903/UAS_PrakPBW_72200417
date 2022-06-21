<!doctype html>
<html lang="en">
    <head>
    <title>72200417_UKDW</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
 <body>
    <div class="container-fluid">
        <div class="row p-1 bg-primary">
            <div class="col-md-2 text-center py-2">
                <img height="70" width="70" src="{{ ('img/logo-ukdw.png') }}">
            </div>
            <div class="col-md-9 text-center">
                <a class="text-black "> <h1> UNIVERSITAS KRISTEN DUTA WACANA </h1> </a>
                <i class="text-black"> <h6> (Jalan Doktor Wahidin Sudirohusodo No. 5 25, Kotabaru, Gondokusuman, Kota Yogyakarta, 
                    Daerah Istimewa Yogyakarta 55224, Indonesia) </h6> </i>
            </div> 
            <div class="col-md-1 p-3">
               <div class="dropdown float-right">
                   <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class="material-icons">supervisor_account</i> User </button>
                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                       <a class="dropdown-item" href="#">{{ Auth::User()->nama_user ?? '' }}</a>
                       <a class="dropdown-item" href="/user">Data User</a>
                       <a class="dropdown-item" href="/logout">Logout</a>
                    </div> 
                </div> 
            </div> 
        </div>
        <div class="row p-2">
            <div class="col-2 text-left">
                <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical" >
                    <a class="nav-link rounded-2 p-2 border  " href="/home"><i class="material-icons">home</i> Home</a>
                    <a class="nav-link rounded-2 p-2 border  " href="/dosen"><i class="material-icons">account_box</i> Dosen</a>
                    <a class="nav-link rounded-2 p-2 border  " href="/mahasiswa"><i class="material-icons">account_circle</i> Mahasiswa</a>
                    <a class="nav-link rounded-2 p-2 border  " href="/fakuljur"><i class="material-icons">dns</i>Fakultas/Jurusan</a>
                    <a class="nav-link rounded-2 p-2 border  " href="/matakuliah"><i class="material-icons">list</i> Matakuliah</a>
                    <a class="nav-link rounded-2 p-2 border  " href="/skripsi"><i class="material-icons">school</i> Skripsi</a>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <div class="col-md-3 text-left">
                            Data User 
                        <a name="" class="btn btn-primary" href="/user/formulirUser" role="button">
                        <i class="material-icons" style="font-size:20px;">add_circle_outline</i> Add</a>
                        </div> 
                        <form class="form-inline my-3 my-lg-0 float-right" method="GET" action="/user/cari">
                            <input class="form_control mr-sm-3" name="cari" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-primary my-3 my-sm-0" type="submit">
                            <i class="material-icons" style="font-size:20px;">search</i> Search</button>
                        </form>
                    </div>
                    <div class="card-body">
                        @if (session('alert_saveUser'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{ session('alert_saveUser') }}</strong>
                                    <button type ="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                @elseif (session('alert_updateUser'))
                                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                    <strong>{{ session('alert_updateUser') }}</strong>
                                    <button type ="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @elseif (session('alert_hapusUser'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>{{ session('alert_hapusUser') }}</strong>
                                    <button type ="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div> 
                        @endif
                    <table class="table table-hover ">
                        <thead>
                            <tr>
                                <th scope="col">No.Urut</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama</th>
                                <th scope="col">No Handphone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $no_urut => $u)
                            <tr>
                                <th scope="row">{{ $user->firstItem() + $no_urut }}</th>
                                <td>{{$u->nik_user}}</td>
                                <td>{{$u->nama_user}}</td>
                                <td>{{$u->no_hp}}</td>
                                <td>{{$u->email}}</td>
                                <td>{{$u->password}}</td>
                                <td>
                                    <a href="/user/editUser/{{ $u->id }}" class="btn btn-outline-success">
                                        <i class="material-icons" style="font-size:15px;">create</i>
                                    <a href="/user/hapusUser/{{ $u->id }}" class="btn btn-outline-danger" 
                                        onclick="return confirm('DATA AKAN DIHAPUS! Apakah anda YAKIN ingin menghapus data ini?') ">
                                        <i class="bi bi-trash"><i class="material-icons" style="font-size:15px;">delete</i>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <span class="float-right">{{ $user->links() }}</span>
                </div>
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
