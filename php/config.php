<?php
$host = "localhost";
$user = "root";
$pass = "v1ritaErt4rahiri";
$db = "pw_akhdan_alex";

$con = mysqli_connect($host, $user, $pass, $db);
$message = [];

if (mysqli_connect_errno()) {
    echo 'Koneksi Gagal: ' . mysqli_connect_error();
}
?>