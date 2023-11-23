<html>
    <head>
    <link rel="stylesheet" type="text/css" href="input-edit.css">
</head>
    tabel game
    <table border="1">
        <tr>
            <td>no</td>
            <td>game</td>
            <td>jenis game</td>
            <td>durasi</td>
            <td>harga</td>
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
$data=mysqli_query($connect,"select * from game");
while($tampil=mysqli_fetch_array($data)){
?>

<tr>
<td> <?php echo $tampil['no'] ?> </td>
    <td> <?php echo $tampil['game'] ?> </td>
    <td> <?php echo $tampil['jenis_game'] ?> </td>
    <td> <?php echo $tampil['durasi'] ?> </td>
    <td> <?php echo $tampil['harga'] ?> </td>
    <td> <a href="hapus-game.php?no=<?php echo $tampil['no']; ?>">Hapus </a>
    <a href="edit-game.php?no=<?php echo $tampil['no']; ?>">Edit </a>
</td>
</tr>
<?php
}
?>

</table>
<a href="input-game.php"> Tambahkan Data Baru</a>
</html>