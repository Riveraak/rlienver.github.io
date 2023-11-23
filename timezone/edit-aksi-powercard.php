<?php
include 'connect.php';

$username=$_POST['username'];
$id_kartu=$_POST['id'];
$jenis_kartu=$_POST['jenis'];
$nominal=$_POST['jumlah'];
$payment=$_POST['payment'];

mysqli_query($connect, "UPDATE powercard SET username='$username', id_kartu='$id', jenis_kartu='$jenis', nominal='$jumlah', payment='$payment' WHERE username='$username'");
header("location: powercard.php");
?>