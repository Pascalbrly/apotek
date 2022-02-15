<?php
	session_start();
	unset($_SESSION['admin']);
	unset($_SESSION['member']);
	?><script type="text/javascript">alert('Anda Keluar');location.href='index.php';</script><?php
?>