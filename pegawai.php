<?php
    include('koneksi.php');
    include('header.php');
    include('menuadmin.php');
    $no_urut = 0;
    $sqlstr = "select * from pegawai";
    $result = mysqli_query($koneksi, $sqlstr);
?>
<html>
<link rel="stylesheet" type="text/css" href="tabel.css">
<head>
  <title>Pegawai</title>
</head>
<body>
<center>
<h1>Tabel Pegawai</h1></center>
<button><a href="inputpegawai.php">Daftar Pegawai</a></button>
<table class="tabel">
  <tr>
    <th>NO</th>
    <th>Foto</th>
    <th>Id Pegawai</th>
    <th>Nama Pegawai</th>
    <th>Alamat Pegawai</th>
    <th></th>
  </tr>
<?php
  while($hasil = mysqli_fetch_array($result)){
  $no_urut++;
?>
  <tr>
    <td><?php echo $no_urut ?></td>
    <td><img src="<?php echo('gambar/upload/'.$hasil['foto'])?>" width="50" height="50"></td>
    <td><?php echo $hasil['id_pegawai'];?></td>
    <td><?php echo $hasil['nama_pegawai'];?></td>
    <td><?php echo $hasil['alamat_pegawai'];?></td>
    <td><button><a href="hapuspegawai.php?id_pegawai=<?php echo $hasil['id_pegawai']; ?>">Hapus</a></button> | <button><a href="ubahpegawai.php?id_pegawai=<?php echo $hasil['id_pegawai'];?>">Ubah</a></button></td>
  </tr>
  <?php
}
?>
</table>
<br><br><br>
<?php
include('footer.php');
?>