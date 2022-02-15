<?php
include('koneksi.php');

$id_obat=$_POST['id_obat'];
$nama_obat=$_POST['nama_obat'];
$harga=$_POST['harga'];
$stok=$_POST['stok'];

$update="UPDATE obat SET id_obat='$id_obat', nama_obat='$nama_obat', harga='$harga', stok='$stok' WHERE id_obat='$id_obat'";
//echo $update;
$query=mysqli_query($koneksi, $update);
header ('location:obatadmin.php');
?>