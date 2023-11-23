<?php
include 'connect.php';

$id_kartu = $_POST['id'];
$jenis_kartu = $_POST['jenis'];
$username = $_POST['nama'];
$password = $_POST['password'];

mysqli_query($connect, "insert into user values('$id_kartu', '$jenis_kartu', '$username', '$password')");
header("location:user.php");
?>
