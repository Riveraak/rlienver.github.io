<?php
include 'connect.php';

$nomor = $_POST['nomor'];
$hadiah = $_POST['hadiah'];
$jumlah = $_POST['jumlah'];

mysqli_query($connect, "insert into souvenir values('$nomor', '$hadiah', '$jumlah')");
header("location:souvenir.php");
?>