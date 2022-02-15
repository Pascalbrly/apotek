<?php
if (!isset($_SESSION)) {
session_start();
}
include('koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="menu.css">
</head>
<body>
<ul>
<li><a href="indexadmin.php">Home</a></li>
<li><a href="keranjang.php">Keranjang</a></li>
<li class="dropdown">
  <a href="#" class="dropbtn">Informasi</a>
     <div class="dropdown-isi">
        <a href="obatadmin.php">Obat</a>
        <a href="memberadmin.php">Member</a>
     </div>
</li>
<li><a href="pegawai.php">Pegawai</a></li>
<li><?php
  		if (!empty($_SESSION['admin'])) {
  			?><button class="login"><li><a id="logout" href="logout.php">Log Out</a></li></button>
  			<script type="text/javascript">document.getElementById(".logout").style.visibility = 'hidden';</script>
  			<?php
  		}
  		else{
  			?><button class="login"><li><a id="login" href="logout.php">Log Out</a></li></button>
  			<script type="text/javascript">document.getElementById(".login").style.visibility = 'hidden';</script>
  			<?php
  		}?></li>
</ul>
</body>
</html>