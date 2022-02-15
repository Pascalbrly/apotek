<?php
	
	include('koneksi.php');

	$id_obat = $_GET["id_obat"];
	$hpsobat = "delete from obat where id_obat='$id_obat'";
	$query = mysqli_query($koneksi, $hpsobat);
	if ($query) {
			echo "<script>alert('Data Berhasil Dihapus'); location.href='obatadmin.php';</script>";
		}
?>