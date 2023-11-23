<?php
include 'connect.php';

$no = $_POST['no'];
$game = $_POST['game'];
$jenis_game = $_POST['jenis'];
$durasi = $_POST['time'];
$harga = $_POST['harga'];

mysqli_query($connect, "insert into game values('$no', '$game', '$jenis_game', '$durasi', '$harga')");
header("location:game.php");
?>
