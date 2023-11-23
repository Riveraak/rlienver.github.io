<?php
include 'connect.php';

$no= $_GET['no'];
mysqli_query($connect, "delete from game where no='$no'");

header("location:game.php");
?>