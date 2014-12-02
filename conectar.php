<?php

	#incluindo a classe conexao (supondo estar no mesmo diretorio)
	include 'conexaoClass.php';

	#instanciando o objeto
	$conexao = new Conexao('bdpetshop');

	#chamada ao metodo open que abra a conexao
	$conexao->open();

?>