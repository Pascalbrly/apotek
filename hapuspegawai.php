<?php
	
	include('koneksi.php');

	$id_pegawai = $_GET["id_pegawai"];
	$hpspegawai = "delete from pegawai where id_pegawai='$id_pegawai'";
	$query = mysqli_query($koneksi, $hpspegawai);
	if ($query) {
			echo "<script>alert('Data Berhasil Dihapus'); location.href='pegawai.php';</script>";
		}
?>