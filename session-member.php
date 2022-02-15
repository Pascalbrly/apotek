<?php 
	session_start();
	if (!isset($_SESSION["member"])) {
  	?><script type="text/javascript">alert('Harap Login Member Dahulu');location.href='login.php';</script><?php
  	exit;
}?>