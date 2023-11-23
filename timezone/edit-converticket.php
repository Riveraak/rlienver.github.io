<a href="converticket.php">kembali</a>
    <h3> Edit Data Converticket </h3>
<?php
include 'connect.php';
$nomor= $_GET['nomor'];
$data = mysqli_query($connect,"select * from converticket where nomor='$nomor'");
while ($tampil= mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-converticket.php">
    <table>
       <tr>
          <td>nomor</td>
          <td>
            <input type="number" name="nomor" value="<?php echo $tampil['nomor']; ?>">
          </td>
       </tr>
       <tr>
          <td>username</td>
          <td>
            <input type="text" name="username" value="<?php echo $tampil['username']; ?>">
          </td>
       </tr>
       <tr>
          <td>jumlah ticket</td>
          <td>
            <input type="number" name="jumlah" value="<?php echo $tampil['jumlah_ticket']; ?>">
          </td>
       </tr>
       <tr>
          <td>hadiah</td>
          <td>
            <input type="text" name="hadiah" value="<?php echo $tampil['hadiah']; ?>">
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
