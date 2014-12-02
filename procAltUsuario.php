<?php
	

	if(isset($_POST['enviar'])){
	
	$login = $_POST['login'];
	$senha = $_POST ['senha'];
	$senharep = $_POST['senharep'];	
	 
		
		
		include ("conectar.php");
		$sql = pg_query ("INSERT INTO usuario (login, senha)
					VALUES ('$login','$senha')");
					
		
	
	HEADER("location: formCadCli.php");

	}	
				
			
			

?>