<?php
	$login = $_POST['login'];
	$senha = $_POST ['senha'];
	$senharep = $_POST['senharep'];	
	$tipousuario = $_POST['tipousuario'];	
	
	if($senha == $senharep)
	{
		include ("conectar.php");
		$sql = pg_query ("INSERT INTO usuario (idtipo_usuario, login, senha)
					VALUES ('$tipousuario', '$login','$senha')");
		if  ($sql) {
			if($tipousuario == 3)
			{	
				HEADER("location: formCadCli.php?login=$login");
			}
			else
			{
				HEADER("location: formCadFunc.php?login=$login");
			}
		}
	}
	else
	{
		echo "<script>alert('Senha incorreta');</script>";
		echo "<script>window.history.back();</script>";	
	}
?>