<!DOCTYPE html>
<?php

    include('koneksi.php');
    include('header.php');
    include('menu.php');
    $no_urut = 0;
    $sqlstr = "select * from obat";
    $result = mysqli_query($koneksi, $sqlstr);
?>
<html>
<link rel="stylesheet" type="text/css" href="tabel.css">
<head>
  <title>Obat</title>
</head>
<body>
<center>
<h1>Tabel Obat</h1>
</center>
<form action="" method="post">
  <input type="text" name="katakunci" placeholder="search" size="20" autocomplete="off">
  <button type="submit" name="cari">Cari</button>
</form>
<?php
if (isset($_POST['cari'])) {
    $cari = $_POST['katakunci'];
    $query = "select * from obat where id_obat like '%$cari%' or 
              nama_obat like '%$cari%' or 
              stok like '%$cari%' or
              harga like '%$cari%'";
    $result = mysqli_query($koneksi, $query);
}
?>
<table class="tabel">
  <tr>
    <th>NO</th>
    <th>Foto</th>
    <th>Id Obat</th>
    <th>Nama Obat</th>
    <th>Stok</th>
    <th>Harga</th>
    <th></th>
  </tr>
<?php
  while($hasil = mysqli_fetch_array($result)){
  $no_urut++;
?>
  <tr>
    <td><?php echo $no_urut ?></td>
    <td><img src="<?php echo('gambar/upload/'.$hasil['foto'])?>" width="50" height="50"></td>
    <td><?php echo $hasil['id_obat'];?></td>
    <td><?php echo $hasil['nama_obat'];?></td>
    <td><?php echo $hasil['stok'];?></td>
    <td>Rp. <?php echo number_format($hasil['harga']);?></td>
    <td><button><a href="beli.php?id=<?php echo $hasil['id_obat'] ?>">Beli</a></button></td>
  </tr>
  <?php
}
?>
</table>
<?php
include('footer.php');
?>