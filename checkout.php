<?php 
include('koneksi.php');
include('header.php');
include('menu.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Checkout</title>
	 <link rel="stylesheet" type="text/css" href="tabel.css">
</head>
<body>

	<table class="tabel">
		<tr>
			<th>NO</th>
		    <th>Nama Obat</th>
		    <th>Harga</th>
		    <th>Jumlah</th>
		    <th>SubHarga</th>
		</tr>
		<tbody>
			<?php 
			$nomor = 1;
			$totalbelanja = 0;
			foreach (@$_SESSION["keranjang"] as $id => $jumlah)
			{ ?>

				<?php 
				$ambildata = mysqli_query($koneksi, "SELECT*FROM obat WHERE id_obat = '$id'");
				$data = mysqli_fetch_assoc($ambildata);
	  			$subharga = $data["harga"]*$jumlah;
	  		?>

	  		<tr>
	  			<td><?php echo $nomor; ?></td>
	  			<td><?php echo $data ['nama_obat']; ?></td>
	  			<td>Rp. <?php echo number_format($data['harga']) ?></td>
	  			<td><?php echo $jumlah ?></td>
	  			<td>Rp. <?php echo number_format($subharga); ?></td>
	  		</tr>
				<?php $nomor++; ?>
				<?php $totalbelanja+=$subharga ?>
		<?php } ?>
		</tbody>
		<tfoot>
			<tr>
				<th colspan="4">Total Belanja</th>
				<th>Rp. <?php echo number_format($totalbelanja) ?></th>
			</tr>
		</tfoot>
	</table>

	<br>
	<form method="post">
		<button name="checkout">Selesai</button>
	</form>

	<?php
	if(empty($_SESSION['keranjang'])){
		echo "<script>alert('keranjang belanja kosong, beli dulu bro!');
		location.href='obat.php';</script>";
	}
	if(isset($_POST["checkout"]))
	{
	foreach (@$_SESSION["keranjang"] as $id => $jumlah){
		$ambildata = mysqli_query($koneksi, "SELECT*FROM obat WHERE id_obat = '$id'");
		$data = mysqli_fetch_assoc($ambildata);
		$id_pem = $data['id_obat']."-".date("Y-m-d-H:i:s");
	  	$subharga = $data["harga"]*$jumlah;
		$nama = $data['nama_obat'];
	  	$hrt = $data['harga'];
	  	$jumlah;
	  	$th = $subharga;
	  	$tambah = mysqli_query($koneksi,"INSERT INTO pembelianobat VALUES('$id_pem','$id','$nama','$hrt','$th','$jumlah')");
	  	if($tambah){
	  		unset($_SESSION["keranjang"]);
	  		echo "<script>alert('Terima Kasih Telah Membeli Barang Kami');
	  		location.href='obat.php';</script>";
	  	} else {
	  		echo "<script>alert('Error');</script>";
	  	}
	}
}	
	?> 
</body>
</html>