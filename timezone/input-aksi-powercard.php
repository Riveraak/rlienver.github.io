<?php
include 'connect.php';

$username = $_POST['username'];
$id_kartu = $_POST['id'];
$jenis_kartu = $_POST['jenis'];
$nominal = $_POST['jumlah'];
$payment = $_POST['payment'];

mysqli_query($connect, "insert into powercard values('$username', '$id_kartu', '$jenis_kartu', '$nominal', '$payment')");
header("location:powercard.php");
?>
