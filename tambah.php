<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Data</h1>
        <div class="col-md-6">
            <form action="prosestambah.php" method="post">
                <label for="kd_barang">Kode Barang</label>
                <input type="text" class="form-control" name="kd_barang">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang">
                <label for="jml_stok">Jumlah Stok</label>
                <input type="number" class="form-control" name="jml_stok">
                <button class="btn btn-success mt-1" type="submit" name="button">Tambah</button>
            </form>
        </div>
    </div>
</body>
</html>