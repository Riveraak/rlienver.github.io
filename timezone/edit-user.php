<a href="user.php">kembali</a>
    <h3> Edit Data User </h3>
<?php
include 'connect.php';
$id = $_GET['id'];
$data = mysqli_query($connect,"select * from user where id_kartu='$id'");
while ($tampil= mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-user.php">
    <table>
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
          <td>username</td>
          <td>
            <input type="text" name="nama" value="<?php echo $tampil['username']; ?>">
          </td>
       </tr>
       <tr>
          <td>password</td>
          <td>
            <input type="password" name="password" value="<?php echo $tampil['password']; ?>">
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
