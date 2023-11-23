<?php
include 'connect.php';

$no=$_POST['no'];
$game=$_POST['game'];
$jenis_game=$_POST['jenis'];
$durasi=$_POST['time'];
$harga=$_POST['harga'];

mysqli_query($connect, "UPDATE game SET no='$no', game='$game', jenis_game='$jenis', durasi='$time', harga='$harga' WHERE no='$no'");
header("location: game.php");
?>