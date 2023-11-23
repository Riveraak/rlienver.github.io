<?php
include 'connect.php';

$id= $_GET['id'];
mysqli_query($connect, "delete from user where id_kartu='$id'");

header("location:user.php");
?>