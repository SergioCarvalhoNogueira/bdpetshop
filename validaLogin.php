<?php
// INFORMANDO USO DE SESSÃO NESTA PÁGINA
session_start();

if ($_POST){
	// RECEBENDO OS VALORES DO FORMULÁRIO
	$login = $_POST['login'];
	$senha = md5($_POST['senha']);
	

	// ABRINDO A CONEXÃO COM O BANCO DE DADOS
	require_once("conectar.php");
	$sql = "SELECT * FROM usuario WHERE login='$login' AND md5(senha)='$senha' ";
	
	// EXECUTANDO A QUERY
	
	$sql_exec = pg_query($conexao->getConexao(), $sql) or die("ERRO: " .pg_error($conexao));
	
	// REGISTRO ENCONTRADOS
	$num = pg_num_rows($sql_exec);
	
	// TESTANDO SE HOUVE ALGUM RESULTADO
	if ($num == 1){
		
		// ENCONTROU ALGUÉM COM O LOGIN E SENHA NO BD
		$_SESSION['login'] = $login;
		$linha = pg_fetch_object($sql_exec);
		$idtipo_usuario = $linha->idtipo_usuario;
		$idusuario = $linha->idusuario;
		$_SESSION['idusuario'] = $idusuario;
		
		
		if($idtipo_usuario == 1){
			HEADER("location: homeAdm.php");
		}if($idtipo_usuario == 2){
			HEADER("location: homeFunc.php");
		}if($idtipo_usuario == 3){
			HEADER("location: homeLogado.php");
		}
	}else{	
		// NÃO ENCONTROU NINGUÉM COM O LOGIN E SENHA NO BD
		HEADER("location: login.php?erro=1");
	}

}

?>