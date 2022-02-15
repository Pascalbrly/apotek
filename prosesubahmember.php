<?php
include('koneksi.php');

$id_member=$_POST['id_member'];
$nama_member=$_POST['nama_member'];
$alamat_member=$_POST['alamat_member'];
$no_telp=$_POST['no_telp'];
$password=$_POST['password'];

$update="UPDATE member SET id_member='$id_member', nama_member='$nama_member', alamat_member='$alamat_member', no_telp='$no_telp', password='$password' WHERE id_member='$id_member'";
//echo $update;
$query=mysqli_query($koneksi, $update);
header ('location:member.php');
?>