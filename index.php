<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<head>
    <title>Data Barang</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <div class="container py-4 px-3 mx-auto">
    <div class="row justify-content-start">
    <div class="col-4"></div>
    <div class="col-md-6 offset-md-3">
    <div class="card">
    <h2 class="card-title">Daftar Barang</h2>
    <a href="tambah.php">+ Tambah Barang</a>
    <br><br>
    <table style="width='20px';" border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID Barang</th>
            <th>nomor_barcode</th>
            <th>jumlah_jual</th>
            <th>Nama Barang</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php
        $result = mysqli_query($koneksi, "SELECT * FROM toko_dika");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>".$row['id_barang']."</td>
                    <td>".$row["nomor_barcode"]."</td>
                    <td>".$row["jumlah_jual"]."</td>
                    <td>".$row['nama_barang']."</td>
                    <td>".$row['stok']."</td>
                    <td>".$row['harga']."</td>
                    <td>
                        <a href='ubah.php?id=".$row['id_barang']."'>Ubah</a> | 
                        <a href='delete.php?id=".$row['id_barang']."' onclick='return confirm(\"Yakin hapus?\")'>Hapus</a>
                    </td>
                  </tr>";
        }
        ?>
    </table>
    </div>
    </div>
    </div>
    </div>
</body>
</html>
