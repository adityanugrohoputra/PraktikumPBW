<?php
session_start();
unset($_SESSION["email"]);
$_SESSION["alert"] = "Anda Berhasil Logout";
header("Location:login.php");
?>