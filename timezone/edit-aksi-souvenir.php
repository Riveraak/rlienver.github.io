<?php
include 'connect.php';

$nomor=$_POST['nomor'];
$hadiah=$_POST['hadiah'];
$jumlah=$_POST['jumlah'];

mysqli_query($connect, "UPDATE souvenir SET nomor='$nomor', hadiah='$hadiah', jumlah='$jumlah' WHERE nomor='$nomor'");
header("location: souvenir.php");
?>