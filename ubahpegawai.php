<?php 
include('header.php');
include('menuadmin.php');
include('koneksi.php');
$idpegawai=$_GET['id_pegawai'];
$view= "SELECT * FROM pegawai WHERE id_pegawai='$idpegawai'";
$query=mysqli_query($koneksi, $view);
$data=mysqli_fetch_array($query);
?>
<html>
<center>
<div class="judulinsert">
	<h1>Ubah Data Pegawai</h1></div>
<form name="form1" method="POST" action="prosesubahpegawai.php">
<table>
	<tr>
		<td>ID PEGAWAI</td>
		<td>: <input type="text" name="id_pegawai" id="id_pegawai" value="<?php echo $data['id_pegawai'];?>"readonly></input></td>
	</tr>
	<tr>
		<td>NAMA PEGAWAI</td>
		<td>: <input type="text" name="nama_pegawai" id="nama_pegawai" value="<?php echo $data['nama_pegawai']; ?>"></input></td>
	</tr>
	<tr>
		<td>ALAMAT PEGAWAI</td>
		<td>: <input type="text" name="alamat_pegawai" id="alamat_pegawai" value="<?php echo $data['alamat_pegawai']; ?>"></input></td>
	</tr>
	<tr>
		<td>PASSWORD</td>
		<td>: <input type="password" name="password" id="password" value="<?php echo $data['password']; ?>"></input></td>></td>
	</tr>
</table>
<br>
<button><a href="pegawai.php">KEMBALI</a></button><input type="submit" name="simpan" value="Simpan Data"></input>
</form>
</center>
</html>