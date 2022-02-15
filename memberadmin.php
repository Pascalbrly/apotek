<?php
    include('koneksi.php');
    include('header.php');
    include('menuadmin.php');
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
<button><a href="inputmemberadmin.php">Daftar Member</a></button>
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
    <td><button><a href="hapusmember.php?id_member=<?php echo $hasil['id_member']; ?>">Hapus</a></button> | <button><a href="ubahmemberadmin.php?id_member=<?php echo $hasil['id_member'];?>">Ubah</a></button></td>
  </tr>
  <?php
}
?>
</table>
<br><br><br>
<?php
include('footer.php');
?>