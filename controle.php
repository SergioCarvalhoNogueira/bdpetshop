<?php

	if($_POST['btnEntrar']){
		HEADER('location: validaLogin.php');
	}
	else{
		HEADER('location: formCadCli.php');
	}		
?>