<?php
    include('koneksi.php');
    include('header.php');
    include('menuadmin.php');
?>
<form method="POST" enctype="multipart/form-data">
	<center>
		<h1>Daftar Pegawai</h1>
	<table>
		<tr>
			<td>ID PEGAWAI</td>
			<td>: <input type="" name="id_pegawai" placeholder="id pegawai"></td>
		</tr>
		<tr>
			<td>NAMA PEGAWAI</td>
			<td>: <input type="" name="nama_pegawai" placeholder="nama pegawai"></td>
		</tr>
		<tr>
			<td>ALAMAT PEGAWAI</td>
			<td>: <input type="" name="alamat_pegawai" placeholder="alamat pegawai"></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td>: <input type="password" name="password" placeholder="password"></td>
		</tr>
		<tr>
			<td>Foto</td>
			<td>: <input type="file" name="foto"></td>
		</tr>
	</table>
	<br>
	<button><a href="pegawai.php">KEMBALI</a></button><input type="submit" name="simpan" value="simpan data"></input>
</form>
<?php
include('koneksi.php');
if (isset($_POST['simpan'])) {
	$id_pegawai=$_POST['id_pegawai'];
	$nama_pegawai=$_POST['nama_pegawai'];
	$alamat_pegawai=$_POST['alamat_pegawai'];
	$password=$_POST['password'];
	$foto               = $_FILES['foto'] ['name'];
    $tmp                = $_FILES['foto'] ['tmp_name'];
	$fotobaru = date('dmYHis').$foto;
	$path = "gambar/upload/".$fotobaru;

    if(move_uploaded_file($tmp, $path))
    {

	if(!empty($_POST['id_pegawai']) || !empty($_POST['foto']) || !empty($_POST['nama_pegawai']) || !empty($_POST['alamat_pegawai']) || !empty($_POST['password']) ){
		
		$insert= "INSERT INTO pegawai VALUES ('$id_pegawai','$nama_pegawai','$password','$alamat_pegawai','$fotobaru')";
		$query=mysqli_query($koneksi, $insert);
		if ($query) {
			echo "<script>alert('Data Disimpan'); location.href='pegawai.php';</script>";
		}
	}
	else {
		echo "<script>alert('Field Belum Diisi');</script>";
	}
	}
}
?>
</center>
<br><br><br><br>
<?php
include('footer.php');
?>