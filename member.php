<?php
    include('koneksi.php');
    include('header.php');
    include('menu.php');
    $no_urut = 0;
    $sqlstr = "select * from member";
    $result = mysqli_query($koneksi, $sqlstr);
?>
<html>
<link rel="stylesheet" type="text/css" href="tabel.css">
<head>
  <title>Member</title>
</head>
<body>
<center>
<h1>Tabel Member</h1></center>
<form action="" method="post">
  <input type="text" name="katakunci" placeholder="search" size="20" autocomplete="off">
  <button type="submit" name="cari">Cari</button> | <button><a href="inputmember.php">Daftar Member</a></button>
  </div>
</form>
<?php
if (isset($_POST['cari'])) {
    $cari = $_POST['katakunci'];
    $query = "select * from member where id_member like '%$cari%' or  
              nama_member like '%$cari%' or
              alamat_member like '%$cari%' or
              no_telp like '%$cari%'";
    $result = mysqli_query($koneksi, $query);
}
?>
<table class="tabel">
  <tr>
    <th>NO</th>
    <th>Foto</th>
    <th>Id Member</th>
    <th>Nama Member</th>
    <th>Alamat Member</th>
     <th>No Telp</th>
    <th></th>
  </tr>
<?php
  while($hasil = mysqli_fetch_array($result)){
  $no_urut++;
?>
  <tr>
    <td><?php echo $no_urut ?></td>
    <td><img src="<?php echo('gambar/upload/'.$hasil['foto'])?>" width="50" height="50"></td>
    <td><?php echo $hasil['id_member'];?></td>
    <td><?php echo $hasil['nama_member'];?></td>
    <td><?php echo $hasil['alamat_member'];?></td>
    <td><?php echo $hasil['no_telp'];?></td>
    <td><button><a href="ubahmember.php?id_member=<?php echo $hasil['id_member'];?>">Ubah</a></button></td>
  </tr>
  <?php
}
?>
</table>
<br><br><br>
<?php
include('footer.php');
?>