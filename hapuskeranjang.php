<?php 
session_start();
$id = $_GET["id"];
unset($_SESSION["keranjang"][$id]);

echo "<script> 
	alert('Barang telah dihapus dalam keranjang belanja');
	location='keranjang.php';
	</script>";
?>