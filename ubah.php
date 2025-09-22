<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
    // Ambil data berdasarkan ID
    $id = $_GET['id'];
    $result = mysqli_query($koneksi, "SELECT * FROM toko_dika WHERE id_barang='$id'");
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Ubah Barang</h3>

                        <form method="post">
                            <div class="mb-3">
                                <label class="form-label">ID Barang</label>
                                <input type="text" class="form-control" name="id_barang" 
                                    value="<?php echo $row['id_barang']; ?>" readonly>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nomor Barcode</label>
                                <input type="text" class="form-control" name="nomor_barcode" 
                                    value="<?php echo $row['nomor_barcode']; ?>" readonly>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Jumlah Jual</label>
                                <input type="number" class="form-control" name="jumlah_jual" 
                                    value="<?php echo $row['jumlah_jual']; ?>" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nama Barang</label>
                                <input type="text" class="form-control" name="nama_barang" 
                                    value="<?php echo $row['nama_barang']; ?>" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Stok</label>
                                <input type="number" class="form-control" name="stok" 
                                    value="<?php echo $row['stok']; ?>" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Harga</label>
                                <input type="number" class="form-control" name="harga" 
                                    value="<?php echo $row['harga']; ?>" required>
                            </div>

                            <div class="d-grid">
                                <input type="submit" class="btn btn-warning" name="ubah" value="Ubah">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['ubah'])) {
        $id_barang     = $_POST['id_barang'];
        $nomor_barcode = $_POST['nomor_barcode'];
        $jumlah_jual   = $_POST['jumlah_jual'];
        $nama_barang   = $_POST['nama_barang'];
        $stok          = $_POST['stok'];
        $harga         = $_POST['harga'];

        $sql = "UPDATE toko_dika 
                SET nama_barang='$nama_barang', 
                    stok='$stok', 
                    harga='$harga',
                    nomor_barcode='$nomor_barcode',
                    jumlah_jual='$jumlah_jual'
                WHERE id_barang='$id_barang'";
        
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