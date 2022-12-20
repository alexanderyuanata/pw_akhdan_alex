<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "account";

$con = mysqli_connect($host, $user, $pass, $db);
$message = [];

if (mysqli_connect_errno()) {
    echo 'Koneksi Gagal: ' . mysqli_connect_error();
}
?>