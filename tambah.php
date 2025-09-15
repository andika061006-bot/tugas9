<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<head>
    <title>Tambah Barang</title>
</head>

<body>
    <div class="container py-4 px-3 mx-auto">
      <!-- <h1>Hello, Bootstrap and Parcel!</h1>
      <button class="btn btn-primary">Primary button</button> -->
    <div class="row justify-content-start">
    <div class="col-4"></div>
    <div class="col-4">
      <div class="card text-center d-flex justify-content-center align-items-center vh-100" style="width: 18rem;">
    <div class="card-body">
    <h3 class="card-title">Tambah Barang</h3>
    <form method="post">
        ID Barang: <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_barang" required><br><br>
        Nama Barang: <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_barang" required><br><br>
        Stok: <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="stok" required><br><br>
        Harga: <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="harga" required><br><br>
        <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
    </form>
    </div>
    </div>
    </div>
    </div>
  </div>
    

    <?php
    if (isset($_POST['simpan'])) {
        $id_barang = $_POST['id_barang'];
        $nama_barang = $_POST['nama_barang'];
        $stok = $_POST['stok'];
        $harga = $_POST['harga'];

        $sql = "INSERT INTO toko_dika (id_barang, nama_barang, stok, harga) VALUES ('$id_barang','$nama_barang','$stok','$harga')";
        if (mysqli_query($koneksi, $sql)) {
            header("Location: index.php");
        } else {
            echo "Error: " . mysqli_error($koneksi);
        }
    }
    ?>
</body>
</html>