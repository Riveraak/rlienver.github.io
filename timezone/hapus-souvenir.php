<?php
include 'connect.php';

$nomor= $_GET['nomor'];
mysqli_query($connect, "delete from souvenir where nomor='$nomor'");

header("location:souvenir.php");
?>