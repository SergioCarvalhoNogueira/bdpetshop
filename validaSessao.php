<?php
	session_start();
	if (!isset($_SESSION['login'])){
		header("location: login.php?erro=2");
		exit;
	}
?>