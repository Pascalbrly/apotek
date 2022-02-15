<?php
    include('koneksi.php');
    include('header.php');
    include('menuadmin.php');
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
<h1>Tabel Obat</h1></center>
<button><a href="inputobat.php">Daftar Obat</a></button>
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
    <td><?php echo $hasil['harga'];?></td>
    <td><button><a href="hapusobat.php?id_obat=<?php echo $hasil['id_obat']; ?>">Hapus</a></button> | <button><a href="ubahobat.php?id_obat=<?php echo $hasil['id_obat'];?>">Ubah</a></button></td>
  </tr>
  <?php
}
?>
</table>
<br><br><br>
<?php
include('footer.php');
?>