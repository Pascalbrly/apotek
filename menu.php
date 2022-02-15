<?php
session_start();
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
<li><a href="index.php">Home</a></li>
<li><a href="keranjang.php">Keranjang</a></li>
<li class="dropdown">
  <a href="#" class="dropbtn">Informasi</a>
     <div class="dropdown-isi">
        <a href="obat.php">Obat</a>
        <a href="member.php">Member</a>
     </div>

<li><a href="contact.php">Contact</a></li>

<li><?php
  		if (empty($_SESSION['member'])) {
  			?><button class="login"><li><a id="logout" href="login.php">Log In</a></li></button>
  			<script type="text/javascript">document.getElementById(".logout").style.visibility = 'hidden';</script>
  			<?php
  		}
  		else{
  			?><button class="login"><li><a id="login" href="logout.php">Log Out</a></li></button>
  			<script type="text/javascript">document.getElementById(".login").style.visibility = 'hidden';</script>
  			<?php
  		}?></li></ul>
</body>
</html>