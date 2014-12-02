<?php

	$serv = $_POST['idservico'];
	$ani = $_POST['idanimal'];
	$da = date("Y/m/d");
	$ha = date("H:i");
	$dt = $_POST['dt'];
	$hr = $_POST['hr'];
	$hora = "{$hr}:00:00";
	
	if(strtotime($dt) >= strtotime($da) && strtotime($hora) > strtotime($ha)){
		include 'conectar.php';
		$sql = pg_query("INSERT INTO Agendamento(idAnimal,idServico,dataa,hora) 
								VALUES ('$ani','$serv','$dt','$hora')");		
	}else{	
			echo "<script>alert('Horário indisponível, hora passada!');</script>";
			echo "<script>window.history.back();</script>";
	}
?>