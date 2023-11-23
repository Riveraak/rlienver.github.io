<html>
<head>
<link rel="stylesheet" type="text/css" href="input-edit.css"></head>
    tabel user
    <table border="1">
        <tr>
            <td>id kartu</td>
            <td>jenis kartu</td>
            <td>username</td>
            <td>password</td>
            <td>aksi</td>
</tr>
<div class="main">
	<div class="navbar">

		<ul>
			<li><a href="">home</a></li>
			<li><a href="game.php">game</a></li>
			<li><a href="souvenir.php">souvenir</a></li>
			<li><a href="powercard.php">powercard</a></li>
			<li><a href="user.php">user</a></li>
			<li><a href="converticket.php">exchange</a></li>
		</ul>
	</div>
<?php
include "connect.php";
$data=mysqli_query($connect,"select * from user");
while($tampil=mysqli_fetch_array($data)){
?>

<tr>
    <td> <?php echo $tampil['id_kartu'] ?> </td>
    <td> <?php echo $tampil['jenis_kartu'] ?> </td>
    <td> <?php echo $tampil['username'] ?> </td>
    <td> <?php echo $tampil['password'] ?> </td>
    <td> <a href="hapus-user.php?id=<?php echo $tampil['id_kartu']; ?>">Hapus </a>
    <a href="edit-user.php?id=<?php echo $tampil['id_kartu']; ?>">Edit </a>
</td>
</tr>
<?php
}
?>

</table>
<a href="input-user.php"> Tambahkan Data Baru</a>
</html>