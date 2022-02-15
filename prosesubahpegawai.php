<?php
include('koneksi.php');

$id_pegawai=$_POST['id_pegawai'];
$nama_pegawai=$_POST['nama_pegawai'];
$alamat_pegawai=$_POST['alamat_pegawai'];
$password=$_POST['password'];

$update="UPDATE pegawai SET id_pegawai='$id_pegawai', nama_pegawai='$nama_pegawai', alamat_pegawai='$alamat_pegawai', password='$password' WHERE id_pegawai='$id_pegawai'";
//echo $update;
$query=mysqli_query($koneksi, $update);
header ('location:pegawai.php');
?>