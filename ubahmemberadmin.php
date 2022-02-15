<?php 
include('header.php');
include('menuadmin.php');
include('koneksi.php');
$idmember=$_GET['id_member'];
$view= "SELECT * FROM member WHERE id_member='$idmember'";
$query=mysqli_query($koneksi, $view);
$data=mysqli_fetch_array($query);
?>
<html>
<center>
<div class="judulinsert">
	<h1>Ubah Data Member</h1>
</div>
<form name="form1" method="POST" action="prosesubahmemberadmin.php">
<table>
	<tr>
		<td>ID MEMBER</td>
		<td>: <input type="text" name="id_member" id="id_member" value="<?php echo $data['id_member'];?>"readonly></input></td>
	</tr>
	<tr>
		<td>NAMA MEMBER</td>
		<td>: <input type="text" name="nama_member" id="nama_member" value="<?php echo $data['nama_member']; ?>"></input></td>
	</tr>
	<tr>
		<td>ALAMAT MEMBER</td>
		<td>: <input type="text" name="alamat_member" id="alamat_member" value="<?php echo $data['alamat_member']; ?>"></input></td>
	</tr>
	<tr>
		<td>NO TELP</td>
		<td>: <input type="text" name="no_telp" id="no_telp" value="<?php echo $data['no_telp']; ?>"></input></td></td>
	</tr>
	<tr>
		<td>PASSWORD</td>
		<td>: <input type="password" name="password" id="password" value="<?php echo $data['password']; ?>"></input></td>></td>
	</tr>
</table>
<br>
<button><a href="memberadmin.php">KEMBALI</a></button><input type="submit" name="simpan" value="Simpan Data"></input>
</form>
</center>
</html>