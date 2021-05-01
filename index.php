<?php
    session_start();
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <center>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GUDANG</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>STOK BARANG</h1>
        <table border="2" class="text-center">
            <thead>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Jumlah Stok</th>
                <th>Opsi</th>
            </thead>
            <tbody>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "SELECT * FROM gudang") or die(mysqli_error($koneksi));
            foreach($data as $baris){ ?>
            <tr>
                <td><?php echo $baris['kd_barang'] ?></td>
                <td><?php echo $baris['nama_barang'] ?></td>
                <td><?php echo $baris['jml_stok'] ?></td>
                <td>
                    <a href="update.php?kd_barang=<?php echo $baris['kd_barang'] ?>" class="update_btn">Update Data</a>
                    <a href="delete.php?kd_barang=<?php echo $baris['kd_barang'] ?>" class="delete_btn">Hapus Data</a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
        <p><a href="tambah.php" class="tambah">+ Tambah Data</a></p>
        <p><a href="login.php" class="login"><?php echo $_SESSION["email"]?></a><p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>