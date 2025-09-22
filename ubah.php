<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<head>
    <title>Ubah Barang</title>
</head>
<body>
    <?php
    $id = $_GET['id'];
    $result = mysqli_query($koneksi, "SELECT * FROM toko_dika WHERE id_barang='$id'");
    $row = mysqli_fetch_assoc($result);
    ?>
    <div class="container py-4 px-3 mx-auto">
    <div class="row justify-content-start">
    <div class="col-4"></div>
    <div class="col-4">
    <div class="card text-center d-flex justify-content-center align-items-center vh-100" style="width: 18rem;">
    <div class="card-body">
    <form method="post">
    <h3 class="card-title">Ubah</h3>
        ID Barang: <input type="text" name="id_barang" value="<?php echo $row['id_barang']; ?>" readonly><br><br>
        nomor_barcode: <input type="text" name="nomor_barcode" value="<?php echo $row['nomor_barcode']; ?>" readonly><br><br>
        jumlah_jual: <input type="text" name="jumlah_jual" value="<?php echo $row['jumlah_jual']; ?>" required><br><br>
        Nama Barang: <input type="text" name="nama_barang" value="<?php echo $row['nama_barang']; ?>" required><br><br>
        Stok: <input type="number" name="stok" value="<?php echo $row['stok']; ?>" required><br><br>
        Harga: <input type="number" name="harga" value="<?php echo $row['harga']; ?>" required><br><br>
        <input type="submit" name="ubah" value="Ubah">
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    <?php
    if (isset($_POST['ubah'])) {
        $id_barang = $_POST['id_barang'];
        $nomor_barcode = $_POST['nomor_barcode'];
        $jumlah_jual = $_POST['jumlah_jual'];
        $nama_barang = $_POST['nama_barang'];
        $stok = $_POST['stok'];
        $harga = $_POST['harga'];

        $sql = "UPDATE toko_dika 
        SET nama_barang='$nama_barang', 
            stok='$stok', 
            harga='$harga',
            nomor_barcode='$nomor_barcode',
            jumlah_jual='$jumlah_jual'
        WHERE id_barang='$id_barang'";
        if (mysqli_query($koneksi, $sql)) {
            header("Location: index.php");
        } else {
            echo "Error: " . mysqli_error($koneksi);
        }
    }
    ?>
</body>
</html>
