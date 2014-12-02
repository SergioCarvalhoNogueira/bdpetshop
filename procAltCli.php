<?php
	
		
	$nome = $_POST['nome'];
	$end = $_POST['end'];
	$rg = $_POST['rg'];
	$cpf = $_POST['cpf'];
	$sexo = $_POST['sexo'];
	$data = $_POST['nasc'];
	$tel = $_POST['tel'];
	
	$data_nova = date("Y-m-d",strtotime($data));
	
			
	include("conectar.php");
	$sql = pg_query("INSERT INTO cliente (nome, rg, cpf, sexo, datanasc, telefone, endereco )
				VALUES ('$nome','$rg','$cpf','$sexo','$data_nova','$tel','$end')");

	
	
	// REDIRECIONANDO PARA A PÁGINA DE CADASTRO DE ANIMAL
	HEADER("location: formCadAni.php");			
				
				

?>