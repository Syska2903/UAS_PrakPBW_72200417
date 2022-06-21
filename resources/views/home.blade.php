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
        <div class="row p-2 bg-primary">
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
                        <a class="dropdown-item" href="#">{{ Auth::user()->nama_user ?? '' }}</a>
                       <a class="dropdown-item" href="/user">Data User</a>
                       <a class="dropdown-item" href="/logout">Logout</a>
                    </div> 
                </div> 
            </div> 
        </div>
        <div class="row p-2">
            <div class="col-2 text-left">
                <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical" >
                    <a class="nav-link rounded-2 p-2 border active " href="/home"><i class="material-icons">home</i> Home</a>
                    <a class="nav-link rounded-2 p-2 border  " href="/dosen"><i class="material-icons">account_box</i> Dosen</a>
                    <a class="nav-link rounded-2 p-2 border  " href="/mahasiswa"><i class="material-icons">account_circle</i> Mahasiswa</a>
                    <a class="nav-link rounded-2 p-2 border  " href="/fakuljur"><i class="material-icons">dns</i>Fakultas/Jurusan</a>
                    <a class="nav-link rounded-2 p-2 border  " href="/matakuliah"><i class="material-icons">list</i> Matakuliah</a>
                    <a class="nav-link rounded-2 p-2 border  " href="/skripsi"><i class="material-icons">school</i> Skripsi</a>
                </div>
            </div>  
            <div class="col-lg-10">
                <img height="300" width="1480" src="{{ ('img/kampus-ukdw.jpg') }}"> 
                <a class="text-black p-2"> <h3> Profil Kampus </h3> </a></br>
                <a class="text-black"> <h7>Universitas Kristen Duta Wacana Yogyakarta (UKDW) Yogyakarta didirikan pada tahun 1985 
                    sebagai pengembangan dari Sekolah Tinggi Theologia (S.T.T.) Duta Wacana. S.T.T. Duta Wacana sendiri didirikan pada 
                    tahun 1962 sebagai penggabungan dari Akademi Theologia Jogjakarta dan Sekolah Theologia Bale Wiyata Malang. 
                    Pada tanggal 31 Oktober 1985 didirikanlah Universitas Kristen Duta Wacana Yogyakarta sebagai perluasan dari S.T.T. Duta Wacana. 
                    UKDW Yogyakarta adalah komunitas pembelajar yang punya cita-cita dan berjuang mewujudkan proses pendidikan dan pembelajaran 
                    seutuhnya atau whole person education. Hal ini sejalan dengan visi UKDW yaitu “Menjadi universitas Kristen unggul dan 
                    terpercaya yang melahirkan generasi profesional mandiri bagi dunia pluralistik berdasarkan kasih”. </h7> </a> </br>
                
                <a class="text-black p-2"> <h3> 6 Prestasi terbaru Universitas Kristen Duta Wacana (UKDW) Yogyakarta:</h3> </a></br>
                <a class="text-black "> <h7>1.  Peringkat 4 - AWS DeepRacer Women's League Asia Tenggara</h7> </a></br>
                <a class="text-black "> <h7>2.  Juara 1 - MEPandemic Competition Cabang Ilmu Neuropsikiatri</h7> </a></br>
                <a class="text-black "> <h7>3.  Juara 2 dan Best Paper - Lomba Esai Nasional SCREEN 2021</h7> </a></br>
                <a class="text-black "> <h7>4.  Juara 1 - Kategori Essay dalam Lomba World Metrology Day 2021</h7> </a></br>
                <a class="text-black "> <h7>5.  Juara 3 - International Design Competition for Health Protocol Supporting Product 2021</h7> </a></br>
                <a class="text-black "> <h7>6.  Juara 3 - Liga Ekonomi Mahasiswa (LEM) 2021</h7> </a></br>
                                            
                                        
                
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
