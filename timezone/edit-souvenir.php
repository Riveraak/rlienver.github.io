<a href="souvenir.php">kembali</a>
    <h3> Edit Data Souvenir </h3>
<?php
include 'connect.php';
$nomor= $_GET['nomor'];
$data = mysqli_query($connect,"select * from souvenir where nomor='$nomor'");
while ($tampil= mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-souvenir.php">
    <table>
       <tr>
          <td>nomor</td>
          <td>
            <input type="number" name="nomor" value="<?php echo $tampil['nomor']; ?>">
          </td>
       </tr>
       <tr>
          <td>hadiah</td>
          <td>
            <input type="text" name="hadiah" value="<?php echo $tampil['hadiah']; ?>">
          </td>
       </tr>
       <tr>
          <td>jumlah</td>
          <td>
            <input type="text" name="jumlah" value="<?php echo $tampil['jumlah']; ?>">
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
