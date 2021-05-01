<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Update Data Barang</h1>
        <?php
            include 'koneksi.php';
            $kd_barang=$_GET['kd_barang'];
            $data=mysqli_query($koneksi, "SELECT * FROM gudang WHERE kd_barang='$kd_barang' ") or die(mysqli_error($koneksi));
            $baris=mysqli_fetch_array($data);
        ?>
        <div class="col-md-6">
            <form action="prosesupdate.php?kd_barang=<?php echo $kd_barang ?>" method="post">
                <label for="kd_barang">Kode Barang</label>
                <input type="text" class="form-control" name="kd_barang">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang">
                <label for="jml_stok">Jumlah Stok</label>
                <input type="number" class="form-control" name="jml_stok">
                <button class="btn btn-primary" type="submit" name="button">Update</button>
            </form>
        </div>
    </div>
</body>
</html>