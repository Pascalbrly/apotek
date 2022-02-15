<?php
include('session-member.php');
?>
<?php 

$id = $_GET['id'];

if(isset($_SESSION['keranjang'][$id])){

	$_SESSION['keranjang'][$id]+=1;
}
else{

	$_SESSION['keranjang'][$id]=1;
}
?>
<script> 
	alert('Barang telah masuk di keranjang belanja');
	location='keranjang.php';
	</script>;

