<?php
include 'koneksi.php';

$nama= $_GET['nama'];
mysqli_query($koneksi, "delete from area where nama='$nama'");

header("location:area1.php");
?>