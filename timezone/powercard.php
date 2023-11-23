<html>
<head>
<link rel="stylesheet" type="text/css" href="input-edit.css"></head>
    tabel powercard
    <table border="1">
        <tr>
            <td>username</td>
            <td>id kartu</td>
            <td>jenis kartu</td>
            <td>nominal</td>
            <td>payment</td>
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
$data=mysqli_query($connect,"select * from powercard");
while($tampil=mysqli_fetch_array($data)){
?>

<tr>
    <td> <?php echo $tampil['username'] ?> </td>
    <td> <?php echo $tampil['id_kartu'] ?> </td>
    <td> <?php echo $tampil['jenis_kartu'] ?> </td>
    <td> <?php echo $tampil['nominal'] ?> </td>
    <td> <?php echo $tampil['payment'] ?> </td>
    <td> <a href="hapus-powercard.php?username=<?php echo $tampil['username']; ?>">Hapus </a>
    <a href="edit-powercard.php?username=<?php echo $tampil['username']; ?>">Edit </a>
</td>
</tr>
<?php
}
?>

</table>
<a href="input-powercard.php"> Tambahkan Data Baru</a>
</html>