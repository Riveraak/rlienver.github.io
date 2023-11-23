<html>
<head>
<link rel="stylesheet" type="text/css" href="input-edit.css"></head>
    tabel souvenir
    <table border="1">
        <tr>
            <td>nomor</td>
            <td>hadiah</td>
            <td>jumlah</td>
            <td>aksi</td>
</tr>
<div class="main">
	<div class="navbar">

		<ul>
			<li><a href="home.php">home</a></li>
			<li><a href="game.php">game</a></li>
			<li><a href="souvenir.php">souvenir</a></li>
			<li><a href="powercard.php">powercard</a></li>
			<li><a href="user.php">user</a></li>
			<li><a href="converticket.php">exchange</a></li>
		</ul>
	</div>
<?php
include "connect.php";
$data=mysqli_query($connect,"select * from souvenir");
while($tampil=mysqli_fetch_array($data)){
?>

<tr>
    <td> <?php echo $tampil['nomor'] ?> </td>
    <td> <?php echo $tampil['hadiah'] ?> </td>
    <td> <?php echo $tampil['jumlah'] ?> </td>
    <td> <a href="hapus-souvenir.php?nomor=<?php echo $tampil['nomor']; ?>">Hapus </a>
    <a href="edit-souvenir.php?nomor=<?php echo $tampil['nomor']; ?>">Edit </a>
</td>
</tr>
<?php
}
?>

</table>
<a href="input-souvenir.php"> Tambahkan Data Baru</a>
</html>