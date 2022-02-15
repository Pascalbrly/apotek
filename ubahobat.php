<?php 
include('header.php');
include('menu.php');
include('koneksi.php');
$idobat=$_GET['id_obat'];
$view= "SELECT * FROM obat WHERE id_obat='$idobat'";
$query=mysqli_query($koneksi, $view);
$data=mysqli_fetch_array($query);
?>
<html>
<center>
<div class="judulinsert">
	<h1>Ubah Data Obat</h1>
</div>
<form name="form1" method="POST" action="prosesubahobat.php">
<table>
	<tr>
		<td>ID OBAT</td>
		<td>: <input type="text" name="id_obat" id="id_obat" value="<?php echo $data['id_obat'];?>"readonly></input></td>
	</tr>
	<tr>
		<td>NAMA OBAT</td>
		<td>: <input type="text" name="nama_obat" id="nama_obat" value="<?php echo $data['nama_obat']; ?>"></input></td>
	</tr>
	<tr>
		<td>HARGA</td>
		<td>: <input type="text" name="harga" id="harga" value="<?php echo $data['harga']; ?>"></input></td>
	</tr>
	<tr>
		<td>STOK</td>
		<td>: <input type="text" name="stok" id="stok" value="<?php echo $data['stok']; ?>"></input></td></td>
	</tr>
</table>
<br>
<button><a href="obatadmin.php">KEMBALI</a></button><input type="submit" name="simpan" value="Simpan Data"></input>
</form>
</center>
</html>