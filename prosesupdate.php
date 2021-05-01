<?php
include 'koneksi.php';
$kd_baranglama=$_GET['kd_barang'];
$kd_barang=$_POST['kd_barang'];
$nama_barang=$_POST['nama_barang'];
$jml_stok=$_POST['jml_stok'];

$query=mysqli_query($koneksi, "UPDATE gudang SET kd_barang='$kd_barang', nama_barang='$nama_barang', 
jml_stok='$jml_stok' WHERE kd_barang='$kd_baranglama' ") or die(mysqli_error($koneksi));

if($query){
    header("Location: index.php");
} else{
    echo "Data Gagal di Update";
}
?>