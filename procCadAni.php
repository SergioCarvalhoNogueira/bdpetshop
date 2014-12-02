<?php
	$login = $_POST['login'];
	$idEspecie = $_POST['idEspecie'];
	$nome = $_POST['nome'];
	$raca = $_POST['raca'];
	$dono = $_POST['dono'];
	$data = $_POST['datanasc'];
	$castrado = $_POST['castrado'];
	$genero = $_POST['genero'];
	$pelugem = $_POST['pelugem'];
	$identificacao = $_POST['identificacao'];
	$tatuagem = $_POST['tatuagem'];
	
	$data_nova = date("Y-m-d",strtotime($data));
		
	include("conectar.php");
	
	$login = trim($login);
	$sql_exec = pg_query("SELECT c.idcliente FROM usuario u, cliente c WHERE u.login='$login' and u.idusuario = c.idusuario");
	$num = pg_num_rows($sql_exec);
	
	if($num == 1)
	{	
		$linha = pg_fetch_object($sql_exec);
		$idcliente = $linha->idcliente;
		$s = "INSERT INTO animal (nome, raca, dono, datanasc, castrado, genero, pelugem, identificacao, tatuagem, idcliente, idEspecie)
				VALUES ('$nome','$raca','$dono','$data_nova','$castrado','$genero','$pelugem', '$identificacao','$tatuagem', '$idcliente', '$idEspecie')";
		$sql = pg_query("INSERT INTO animal (nome, raca, dono, datanasc, castrado, genero, pelugem, identificacao, tatuagem, idcliente, idEspecie)
				VALUES ('$nome','$raca','$dono','$data_nova','$castrado','$genero','$pelugem', '$identificacao','$tatuagem', '$idcliente', '$idEspecie')");
		HEADER("location: homeLogado.php");		
	}		
?>