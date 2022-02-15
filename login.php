<?php
session_start();
include('koneksi.php');
?>
<html>
<link rel="stylesheet" type="text/css" href="login.css">
<body>
<div class="login">
  <h1 class="judul">HALAMAN LOGIN</h1>
  <form method="post">
  <form>
  <div class="userid">
    <label for="username">USERNAME </label>  :
    <input type="text" name="username" class="form-control" autocomplete="off">
  </div>
  <div class="pw">
    <label for="password">PASSWORD</label>   :
    <input type="password" name="password" class="form-control" autocomplete="off" >
  </div>
    <input type="submit" class="btn btn-primary" name="login" value="Log In">
</form>
</div>
</body>
<?php 
		if (isset($_POST['login'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$sqlstr = "select * from pegawai where nama_pegawai='$username' and password='$password'";
			$query = mysqli_query($koneksi, $sqlstr);
			$cek = mysqli_num_rows($query);
			if ($cek==0) {
				$sqlstr = "select * from member where nama_member='$username' and password='$password'";
				$query = mysqli_query($koneksi, $sqlstr);
				$cek = mysqli_num_rows($query);
				if ($cek==0) {
					?><script type="text/javascript">alert('Akun Tidak Ada!');location.href='login.php';</script><?php
				}
				else{
					$_SESSION['member']=$username;
					?><script type="text/javascript">alert('Login sebagai Member');location.href='index.php';</script><?php
				}
			}
			else{
				$_SESSION['admin'] = $username;
				?><script type="text/javascript">alert('Login sebagai Admin');location.href='bootstrap/admin/dashboard.php';</script><?php
			}
		}
	?>
</html>