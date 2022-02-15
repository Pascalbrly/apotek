<?php
	include('koneksi.php');
    include('header.php');
    include('menu.php');
    $no_urut = 0;
    $sqlstr = "select * from obat";
    $result = mysqli_query($koneksi, $sqlstr);

    if (empty($_SESSION["keranjang"])) {
    	
    	echo "<script> 
	alert('Keranjang belanja kosong, beli dulu');
	location='obat.php';
	</script>";
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Keranjang Belanja</title>
	<link rel="stylesheet" type="text/css" href="tabel.css">
</head>
<body>

<div>
	<table class="tabel">
	  <tr>
	    <th>NO</th>
	    <th>Nama Obat</th>
	    <th>Harga</th>
	    <th>Jumlah</th>
	    <th>SubHarga</th>
	    <th>Opsi</th>
	  </tr>
	  <tbody>
	  	<?php 
	  	$nomor = 1;
	  	foreach ($_SESSION["keranjang"] as $id => $jumlah) 
	  	{ ?>
	  		
	  		<?php 
	  		$ambildata = mysqli_query($koneksi, "SELECT * FROM obat WHERE id_obat = '$id'");
	  		$data = mysqli_fetch_assoc($ambildata);
	  		$subharga = $data["harga"]*$jumlah;
	  		?>

	  		<tr>
	  			<td><?php echo $nomor; ?></td>
	  			<td><?php echo $data ['nama_obat']; ?></td>
	  			<td>Rp. <?php echo number_format($data['harga']) ;?></td>
	  			<td><?php echo $jumlah ?></td>
	  			<td>Rp. <?php echo number_format($subharga); ?></td>
	  			<td>
	  				<button><a href="hapuskeranjang.php?id=<?php echo $id ?>">Hapus</a> </button>
	  			</td>
	  		</tr>
	  		<?php $nomor++?>

	  <?php }
	  	?>
	  </tbody>
	</table>
	<br><br>
	  <button><a href="obat.php">Lanjut Belanja</a></button>
  <button><a href="checkout.php">Checkout</a></button>
</div>


</body>
</html>