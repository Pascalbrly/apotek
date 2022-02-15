<?php
    include('koneksi.php');
    include('header.php');
    include('menuadmin.php');
?>
<form method="POST" enctype="multipart/form-data">
	<center>
		<h1>Daftar Obat</h1>
	<table>
		<tr>
			<td>ID OBAT</td>
			<td>: <input type="" name="id_obat" placeholder="id obat"></td>
		</tr>
		<tr>
			<td>NAMA OBAT</td>
			<td>: <input type="" name="nama_obat" placeholder="nama obat"></td>
		</tr>
		<tr>
			<td>STOK</td>
			<td>: <input type="" name="stok" placeholder="stok"></td>
		</tr>
		<tr>
			<td>HARGA</td>
			<td>: <input type="" name="harga" placeholder="harga"></td>
		</tr>
		<tr>
			<td>Foto</td>
			<td>: <input type="file" name="foto"></td>
		</tr>
	</table>
	<br>
	<button><a href="obatadmin.php">KEMBALI</a></button><input type="submit" name="simpan" value="simpan data"></input>
</form>
<?php
include('koneksi.php');
if (isset($_POST['simpan'])) {
	$id_obat=$_POST['id_obat'];
	$nama_obat=$_POST['nama_obat'];
	$stok=$_POST['stok'];
	$harga=$_POST['harga'];
	$foto               = $_FILES['foto'] ['name'];
    $tmp                = $_FILES['foto'] ['tmp_name'];
	$fotobaru = date('dmYHis').$foto;
	$path = "gambar/upload/".$fotobaru;

    if(move_uploaded_file($tmp, $path))
    {

	if(!empty($_POST['id_obat']) || !empty($_POST['foto']) || !empty($_POST['nama_obat']) || !empty($_POST['stok']) || !empty($_POST['harga'])){
		
		$insert= "INSERT INTO obat VALUES ('$id_obat','$nama_obat','$stok','$harga','$fotobaru')";
		$query=mysqli_query($koneksi, $insert);
		if ($query) {
			echo "<script>alert('Data Disimpan'); location.href='obatadmin.php';</script>";
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