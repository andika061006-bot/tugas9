<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <div class="card shadow">
            <div class="card-body">
                <h2 class="card-title mb-3">Daftar Barang</h2>
                <a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Barang</a>

                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>ID Barang</th>
                            <th>Nomor Barcode</th>
                            <th>Jumlah Jual</th>
                            <th>Nama Barang</th>
                            <th>Stok</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = mysqli_query($koneksi, "SELECT * FROM toko_dika");
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                                    <td>".$row['id_barang']."</td>
                                    <td>".$row['nomor_barcode']."</td>
                                    <td>".$row['jumlah_jual']."</td>
                                    <td>".$row['nama_barang']."</td>
                                    <td>".$row['stok']."</td>
                                    <td>".$row['harga']."</td>
                                    <td>
                                        <a href='ubah.php?id=".$row['id_barang']."' class='btn btn-sm btn-warning'>Ubah</a>
                                        <a href='delete.php?id=".$row['id_barang']."' class='btn btn-sm btn-danger' onclick='return confirm(\"Yakin hapus?\")'>Hapus</a>
                                    </td>
                                  </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>