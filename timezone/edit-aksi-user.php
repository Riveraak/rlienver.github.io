<?php
include 'connect.php';

$id=$_POST['id_kartu'];
$jenis_kartu=$_POST['jenis'];
$username=$_POST['nama'];
$password=$_POST['password'];

mysqli_query($connect, "UPDATE user SET id_kartu='$id',jenis_kartu='$jenis',username='$nama' ,password='$password' WHERE id_kartu='$id'");
header("location: user.php");
?>