<?php
include 'koneksi.php';
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
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <form>
                    <div class="card mt-3">
                        <div class="card-header bg-info text-white text-center">
                            <strong>DATA MAHASISWA</strong>
                        </div>
                        <div class="card-body">
                            <?php
                            $sql3   = "SELECT * FROM mahasiswa ORDER BY id DESC LIMIT 1";
                            $q3     = mysqli_query($koneksi, $sql3);
                            $r3     = mysqli_fetch_array($q3);
                            if ($r3) {
                                $nim_terbaru    = $r3['nim'];
                                $nama_terbaru   = $r3['nama'];
                                $alamat_terbaru = $r3['alamat'];
                                $fakultas_terbaru = $r3['fakultas'];
                            ?>
                                <table class="table table-striped">
                                    <tr>
                                        <th>NIM</th>
                                        <td><?php echo $nim_terbaru; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nama</th>
                                        <td><?php echo $nama_terbaru; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td><?php echo $alamat_terbaru; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Fakultas</th>
                                        <td><?php echo $fakultas_terbaru; ?></td>
                                    </tr>
                                </table>
                            <?php
                            } else {
                                echo "<p>Belum ada data terbaru yang diinput.</p>";
                            }
                            ?>

                            <div class="d-flex justify-content-end mt-3">
                                <a href="data.php" class="btn btn-info me-2 text-white">Kembali</a>
                                <a href="index.php" class="btn btn-success">Selesai</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
</body>

</html>