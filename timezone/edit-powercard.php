<a href="powercard.php">kembali</a>
    <h3> Edit Data Powercard </h3>
<?php
include 'connect.php';
$username= $_GET['username'];
$data = mysqli_query($connect,"select * from powercard where username='$username'");
while ($tampil= mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-powercard.php">
    <table>
       <tr>
          <td>username</td>
          <td>
            <input type="text" name="username" value="<?php echo $tampil['username']; ?>">
          </td>
       </tr>
       <tr>
          <td>id kartu</td>
          <td>
            <input type="number" name="id" value="<?php echo $tampil['id_kartu']; ?>">
          </td>
       </tr>
       <tr>
          <td>jenis kartu</td>
          <td>
            <input type="text" name="jenis" value="<?php echo $tampil['jenis_kartu']; ?>">
          </td>
       </tr>
       <tr>
          <td>nominal</td>
          <td>
            <input type="number" name="jumlah" value="<?php echo $tampil['nominal']; ?>">
          </td>
       </tr>
       <tr>
         <td>payment</td>
         <td>
            <input type="text" name="payment" value="<?php echo $tampil['payment']; ?>">
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
