<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Tambah Barang</h3>
                        
                        <form method="post">
                            <div class="mb-3">
                                <label class="form-label">ID Barang</label>
                                <input type="text" class="form-control" name="id_barang" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nomor Barcode</label>
                                <input type="text" class="form-control" name="nomor_barcode" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Jumlah Jual</label>
                                <input type="number" class="form-control" name="jumlah_jual" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nama Barang</label>
                                <input type="text" class="form-control" name="nama_barang" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Stok</label>
                                <input type="number" class="form-control" name="stok" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Harga</label>
                                <input type="number" class="form-control" name="harga" required>
                            </div>

                            <div class="d-grid">
                                <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['simpan'])) {
        $id_barang     = $_POST['id_barang'];
        $nomor_barcode = $_POST['nomor_barcode'];
        $jumlah_jual   = $_POST['jumlah_jual'];
        $nama_barang   = $_POST['nama_barang'];
        $stok          = $_POST['stok'];
        $harga         = $_POST['harga'];

        $sql = "INSERT INTO toko_dika (id_barang, nomor_barcode, jumlah_jual, nama_barang, stok, harga) 
                VALUES ('$id_barang','$nomor_barcode','$jumlah_jual','$nama_barang','$stok','$harga')";
        
        if (mysqli_query($koneksi, $sql)) {
            header("Location: index.php");
            exit;
        } else {
            echo "<div class='alert alert-danger text-center'>Error: " . mysqli_error($koneksi) . "</div>";
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>