<?php
include 'koneksi.php';

$kd_barang=$_POST['kd_barang'];
$nama_barang=$_POST['nama_barang'];
$jml_stok=$_POST['jml_stok'];

$query=mysqli_query($koneksi,"INSERT INTO gudang(kd_barang, nama_barang, jml_stok) VALUES ('$kd_barang', '$nama_barang','$jml_stok')")
or die(mysqli_error($koneksi));

if ($query){
    header("Location: tambah.php");
}else{
    echo" Data Gagal di Input";
}

?>