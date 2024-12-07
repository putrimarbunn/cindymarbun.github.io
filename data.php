<?php
include 'koneksi.php';

$nim        = "";
$nama       = "";
$alamat     = "";
$fakultas   = "";
$sukses     = "";
$error      = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

if (isset($_POST['simpan'])) {
    $nim        = $_POST['nim'];
    $nama       = $_POST['nama'];
    $alamat     = $_POST['alamat'];
    $fakultas   = $_POST['fakultas'];

    if ($nim && $nama && $alamat && $fakultas) {
        if ($op == 'edit') {
            $sql1       = "update mahasiswa set nim = '$nim',nama='$nama',alamat = '$alamat',fakultas='$fakultas' where id = '$id'";
            $q1         = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Data berhasil diupdate";
            } else {
                $error  = "Data gagal diupdate";
            }
        } else {
            $sql1   = "insert into mahasiswa(nim,nama,alamat,fakultas) values ('$nim','$nama','$alamat','$fakultas')";
            $q1     = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses     = "Data berhasil masuk";
            } else {
                $error      = "Data gagal masuk";
            }
        }
    } else {
        $error = "Silakan masukkan semua data";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <!-- Input Data Mahasiswa -->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="card mt-3">
                    <div class="card-header text-white bg-primary text-center">
                        <strong>INPUT DATA MAHASISWA</strong>
                    </div>

                    <div class="card-body">
                        <?php if ($error) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $error ?>
                            </div>
                            <?php header("refresh:4;url=hasil.php"); ?>
                        <?php } ?>
                        <?php if ($sukses) { ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $sukses ?>
                            </div>
                            <?php header("refresh:4;url=hasil.php"); ?>
                        <?php } ?>
                        <form action="" method="POST">
                            <div class="mb-3 row">
                                <label for="nim" class="col-sm-3 col-form-label">NIM</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $nim ?>">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat ?>">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="fakultas" class="col-sm-3 col-form-label">Fakultas</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="fakultas" id="fakultas">
                                        <option value="">- Pilih Fakultas -</option>
                                        <option value="Fakultas Kedokteran" <?php if ($fakultas == "Fakultas Kedokteran") echo "selected" ?>>Fakultas Kedokteran</option>
                                        <option value="Fakultas Ekonomi" <?php if ($fakultas == "Fakultas Ekonomi") echo "selected" ?>>Fakultas Ekonomi</option>
                                        <option value="Fakultas Ilmu Komputer" <?php if ($fakultas == "Fakultas Ilmu Komputer") echo "selected" ?>>Fakultas Ilmu Komputer</option>
                                        <option value="Fakultas Pertanian" <?php if ($fakultas == "Fakultas Pertanian") echo "selected" ?>>Fakultas Pertanian</option>
                                        <option value="Fakultas Sastra" <?php if ($fakultas == "Fakultas Sastra") echo "selected" ?>>Fakultas Sastra</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
</body>

</html>