<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>cindmarbunn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <!-- navigasi -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><strong>DataMahasiswa</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-right" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">LOGIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- banner -->
    <div class="container-fluid banner">
        <div class="container text-center" id="beranda">
        </div>
    </div>

    <!-- tentang -->
    <div class="container-fluid pt-5 pb-5">
        <div class="container">
            <h2 class="display-3 text-center" id="tentang">Tentang</h2>
            <div class="clearfix pt-5">
                <img src="https://img.freepik.com/free-vector/about-us-website-banner-concept-with-thin-line-flat-design_56103-96.jpg?size=626&ext=jpg" class="col-md-6 float-md-end mb-3 crop-img" width="300" height="300" />
                <p>Data mahasiswa merupakan informasi yang berkaitan dengan entitas mahasiswa di lingkungan Kampus / Universitas. <br><br>
                    Informasi tersebut mencakup data penting seperti: <br>
                    1. NIM (Nomor Induk Mahasiswa) : <br> Identitas unik yang diberikan kepada setiap mahasiswa. Biasanya berupa angka. <br>
                    2. Nama : Nama lengkap mahasiswa <br>3. Alamat : Alamat tempat tinggal mahasiswa <br>
                    4. Fakultas : terdapat 5 fakultas yang ada di Universitas, yaitu <br>
                    * Fakultas Kedokteran <br> * Fakultas Ekonomi <br> * Fakultas Ilmu Komputer <br> * Fakultas Pertanian <br> * Fakultas Sastra </p>
            </div>
        </div>
    </div>

    <div class="container text-center pt-5 pb-5" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
        All Rights Reserved &copy; 2023
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>