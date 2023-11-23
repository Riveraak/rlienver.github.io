<?php
include 'connect.php';

$nomor = $_POST['nomor'];
$username = $_POST['username'];
$jumlah_ticket = $_POST['jumlah'];
$hadiah = $_POST['hadiah'];

mysqli_query($connect, "insert into converticket values('$nomor', '$username', '$jumlah_ticket', '$hadiah')");
header("location:converticket.php");
?>
