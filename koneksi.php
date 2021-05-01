<?php
$host="localhost";
$user="root";
$password="";
$db="gudang_002";

$koneksi=mysqli_connect($host, $user, $password, $db);

if (empty($_SESSION["email"])){
    $_SESSION["alert"] = "anda harus login terlebih dahulu";
    header("Location: login.php");
}
?>