<?php

	Class Conexao{
		private $host = 'localhost';
		private $user = 'postgres';
		private $pswd = '1';
		private $banco = 'bdpetsho';
		private $strCon;
		private $con;

		//m�todo construtor
		function Conexao($banco){
			//$this->banco = $banco;
			$this->strCon = "host=$this->host user=$this->user password=$this->pswd dbname=$this->banco";
		} 
		function getConexao(){
			return $this->con;
		}

		#m�todo que inicia conexao
		function open(){
			$this->con = pg_connect($this->strCon);
		}
		
		#m�todo que encerra a conexao
		function close(){
			pg_close($this->con);
			$this->con = false;
		}
		
		#m�todo verifica status da conexao
		function statusCon(){
			if($this->con){
				echo 'conectado</br>';
			}
			else{
				echo 'desconectado';
				exit;
			}
		
		}
			
	}


?>