<a href="game.php">kembali</a>
    <h3> Edit Data Game </h3>
<?php
include 'connect.php';
$no= $_GET['no'];
$data = mysqli_query($connect,"select * from game where no='$no'");
while ($tampil= mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-game.php">
    <table>
    <tr>
          <td>no</td>
          <td>
            <input type="number" name="no" value="<?php echo $tampil['no']; ?>">
          </td>
       </tr>
       <tr>
          <td>game</td>
          <td>
            <input type="text" name="game" value="<?php echo $tampil['game']; ?>">
          </td>
       </tr>
       <tr>
          <td>jenis_game</td>
          <td>
            <input type="text" name="jenis" value="<?php echo $tampil['jenis_game']; ?>">
          </td>
       </tr>
       <tr>
          <td>durasi</td>
          <td>
            <input type="text" name="time" value="<?php echo $tampil['durasi']; ?>">
          </td>
       </tr>
       <tr>
          <td>harga</td>
          <td>
            <input type="number" name="harga" value="<?php echo $tampil['harga']; ?>">
          </td>
       </tr>
       <tr>
        <td>
            <input type="submit" value="simpan">
        </td>
       </tr>
    </table>
</form>
<?php
}
?>
