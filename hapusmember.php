<?php
	
	include('koneksi.php');

	$id_member = $_GET["id_member"];
	$hpsmember = "delete from member where id_member='$id_member'";
	$query = mysqli_query($koneksi, $hpsmember);
	if ($query) {
			echo "<script>alert('Data Berhasil Dihapus'); location.href='memberadmin.php';</script>";
		}
?>