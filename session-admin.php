<?php 
	session_start();
	if (!isset($_SESSION["admin"])) {
  	?><script type="text/javascript">alert('Harap Login Admin Dahulu');location.href='login.php';</script><?php
  	exit;
}?>