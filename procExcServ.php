<?php
			include_once("validaSessao.php");

		// RECEBENDO O PRODUTO A SER EXCLUÍDO (CHAVE PRIMÁRIA)
		$id = $_GET['id'];
		$codigo = base64_decode($id); // -1669
		$codigo = ((($codigo * (-1)) ) - 9)/830;


		require_once("conectar.php");
		$sql = "DELETE FROM `Produto` WHERE `idProduto`='$codigo'";

		$sql_exec = pg_query($con,$sql) or die("Erro: " .pg_error($con));

		HEADER("location: listRacoes.php");

?>