<?php
include 'connect.php';

$nomor= $_GET['nomor'];
mysqli_query($connect, "delete from converticket where nomor='$nomor'");

header("location:converticket.php");
?>