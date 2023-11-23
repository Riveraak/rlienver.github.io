<?php
include 'connect.php';

$username= $_GET['username'];
mysqli_query($connect, "delete from powercard where username='$username'");

header("location:powercard.php");
?>