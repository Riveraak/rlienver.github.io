<?php
include 'koneksi.php';

$nomor_parkir = $_POST['nomer'];
$jenis_kendaraan = $_POST['jenis kendaraan'];
$merk = $_POST['merk'];
$nomor_polisi = $_POST['nomor'];
$warna = $_POST['warna'];
$jam_masuk = $_POST['jam masuk'];
$jam_keluar = $_POST['jam keluar'];
$id_petugas = $_POST['id'];

mysqli_query($koneksi, "insert into parking values('$nomor_parkir', '$jenis_kendaraan', '$merk', '$nomor_polisi', '$warna', '$jam_masuk', '$jam_keluar', '$id_petugas')");
header("location:parking.php");
?>
