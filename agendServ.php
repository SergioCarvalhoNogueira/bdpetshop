<?php
		
	include("validaSessao.php");
	
?>

<html>
<head>
    <meta charset="iso-8859-1" />
    <title># Agendamento de Serviço #</title>
    <link href="css/estilos.css" rel="stylesheet" />
	<!-- fazendo data ex: 24/04/2014 -->
<script language="javascript">
   function adata(valor){
	  if((valor.length == 2) || ( valor.length == 5)){
         form1.dt.value = valor+ "/";
	  }	  
   }
</script> 
</head>
<body>

    <header class="main">
        <nav class="green-gradient invert">
            <div class="container invert">
                <ul class="top-menu">
                    <li>Olá <?php echo $_SESSION['login']; ?>!</li>
                    <li><a href="homeLogado.php">Home</a></li>
                    <li><a href="meusPedidos.php">Meus Pedidos</a></li>
					<li><a href="carrinho.php">Carrinho de Compras</a></li>
                    <li><a href="meusDados.php">Meus Dados</a></li>
                    <li class="last"><a href="logoff.php">Logoff</a></li>
                </ul>
            </div>
        </nav>
        <div class="silver-gradient">
            <div class="container">
                <img src="img/logotipo.png" id="logotipo" />                
            </div>
        </div>
    </header>
	
    <div id="content">
        <div class="container">		
		<br/><br/><br/><br/><br/><br/>
		<h2>Agendamento de Serviço</h2>
		<form name="formAgend" action="validaAgendServ.php" method="POST">
		<table border="1">
		<!--seleciona os dados da tabela Serviço e Animal-->	
		<?php   
				
				include 'conectar.php'; 
				
					
		$sql = pg_query("SELECT idservico, nome FROM servico");
		$query = pg_query("SELECT a.idanimal, a.nome FROM cliente c,animal a WHERE a.idcliente = c.idcliente and c.idusuario = '{$_SESSION['idusuario']}'");
				
		?>	
			<tr>
				<td><label for="">Selecione um Serviço</label></td>
				<td>
				<select name="idservico">
				<option>Selecione...</option>
				 <?php while($serv = pg_fetch_array($sql)) { ?>
				 <option value="<?php echo $serv['idservico'] ?>"><?php echo $serv['nome'] ?></option>
				 <?php } ?>
				 </select>
				</td>
			</tr>
			<tr>
				<td><label for="">Selecione um Animal</label></td>
				<td>
					<select name="idanimal">
					<option>Selecione...</option>
					 <?php while($ani = pg_fetch_array($query)) { ?>
					 <option  value="<?php echo $ani['idanimal'] ?>"><?php echo $ani['nome'] ?></option>
					 <?php } ?>
					</select>
				</td>
			</tr>	
			</tr>
		
			<tr>
				<td>Data:</td>
				<td><input name="dt" type="date" value="" onKeyDown="javascript:adata(this.value);"/> </td>
			</tr>
			<tr>
				<td>Hora:</td>
				<td>
					<select name="hr">
						<option value=""></option>
						<option value="8">8:00</option>
						<option value="10">10:00</option> 
						<option value="12">12:00</option>
						<option value="14">14:00</option> 
						<option value="16">16:00</option>
						<option value="18">18:00</option>
					</select>
				</td>
			</tr>			
		</table>
		<br/>
		<input type="submit" id="btnEnviar" value="Enviar" class="green-gradient" />
		<input type="reset" id="btnLimpar" value="Limpar" class="green-gradient" />
		</form>
        </div>
    </div>

    <div class="clearfix"></div>

    <footer class="green-gradient">
        <div class="container">
            <div class="footer-item">
                <h4>Links Úteis</h4>
                <ul>
                    <li><a href="quemSomos.php">Quem somos</a></li>                    
                    <li><a href="pPrivac.php">Política de privacidade</a></li>
                    <li><a href="lojaFis.php">Loja física</a></li>					                    					
                </ul>
            </div>
            <div class="footer-item">
                <h4>Atendimento</h4>
                <ul>
                    <li><a href="faleConosco.php">Fale Conosco</a></li>
					<li><a href="trocaDevo.php">Trocas e Devoluções</a></li>					                   
                </ul>
            </div>  
			<div class="footer-item">
                <h4>Formas de Pagamento</h4>
                <ul>
                   <img src="img/cart_pvirtual.png" />
				   
				   <br><br><img src="img/seguro_pvirtual.png"  /></br><br>
                </ul>
            </div>			
        </div>
    </footer>
</body>
</html>
