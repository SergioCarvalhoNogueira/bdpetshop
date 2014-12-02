<?php
	$login = $_POST['login'];
	$nome = $_POST['nome'];
	$end = $_POST['end'];
	$rg = $_POST['rg'];
	$cpf = $_POST['cpf'];
	$sexo = $_POST['sexo'];
	$data = $_POST['nasc'];
	$tel = $_POST['tel'];
	
	$data_nova = date("Y-m-d",strtotime($data));
		
	include("conectar.php");
	
	$login = trim($login);
	$sql_exec = pg_query("SELECT * FROM usuario WHERE login='$login'");
	$num = pg_num_rows($sql_exec);
	
	if($num == 1)
	{	
		$linha = pg_fetch_object($sql_exec);
		$idusuario = $linha->idusuario;
		$sql = pg_query("INSERT INTO cliente (nome, rg, cpf, sexo, datanasc, telefone, endereco, idusuario )
				VALUES ('$nome','$rg','$cpf','$sexo','$data_nova','$tel','$end', '$idusuario')");
			// REDIRECIONANDO PARA A PÁGINA DE CADASTRO DE ANIMAL
		HEADER("location: formCadAni.php?login=$login");		
	}		
?>