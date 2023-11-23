<?php
include 'connect.php';

$nomor=$_POST['nomor'];
$username=$_POST['username'];
$jumlah_ticket=$_POST['jumlah'];
$hadiah=$_POST['hadiah'];

mysqli_query($connect, "UPDATE converticket SET nomor='$nomor', username='$username', jumlah_ticket='$jumlah', hadiah='$hadiah' WHERE nomor='$nomor'");
header("location: converticket.php");
?>