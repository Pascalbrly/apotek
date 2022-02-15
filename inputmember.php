<?php
	
    include('koneksi.php');
    include('header.php');
    include('menu.php');
?>
<form method="POST" enctype="multipart/form-data">
	<center>
		<h1>Daftar Member</h1>
	<table>
		<tr>
			<td>ID MEMBER</td>
			<td>: <input type="" name="id_member" placeholder="id member"></td>
		</tr>
		<tr>
			<td>NAMA MEMBER</td>
			<td>: <input type="" name="nama_member" placeholder="nama member"></td>
		</tr>
		<tr>
			<td>ALAMAT MEMBER</td>
			<td>: <input type="" name="alamat_member" placeholder="alamat member"></td>
		</tr>
		<tr>
			<td>NO TELP</td>
			<td>: <input type="" name="no_telp" placeholder="no telp"></td>
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
	<button><a href="member.php">KEMBALI</a></button><input type="submit" name="simpan" value="simpan data"></input>
</form>
<?php
include('koneksi.php');
if (isset($_POST['simpan'])) {
	$id_member=$_POST['id_member'];
	$nama_member=$_POST['nama_member'];
	$alamat_member=$_POST['alamat_member'];
	$no_telp=$_POST['no_telp'];
	$password=$_POST['password'];
	$foto               = $_FILES['foto'] ['name'];
    $tmp                = $_FILES['foto'] ['tmp_name'];
	$fotobaru = date('dmYHis').$foto;
	$path = "gambar/upload/".$fotobaru;

    if(move_uploaded_file($tmp, $path))
    {

	if(!empty($_POST['id_member']) || !empty($_POST['foto']) || !empty($_POST['nama_member']) || !empty($_POST['alamat_member']) || !empty($_POST['no_telp']) || !empty($_POST['password']) ){
		
		$insert= "INSERT INTO member VALUES ('$id_member','$nama_member','$alamat_member','$no_telp','$fotobaru','$password')";
		$query=mysqli_query($koneksi, $insert);
		if ($query) {
			echo "<script>alert('Data Disimpan'); location.href='member.php';</script>";
		}
	}
	else {
		echo "<script>alert('Field Belum Diisi');</script>";
	}
	}
}
?>
</center>
<br><br>
<?php
include('footer.php');
?>