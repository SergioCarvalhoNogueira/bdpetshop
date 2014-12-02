<?php
session_start();
?>
<html>
<head>
    <meta charset="iso-8859-1" />
    <title> # DETALHES DE AGENDAMENTOS #</title>
    <link href="css/estilos.css" rel="stylesheet" />
</head>
<body>

    <header class="main">
        <nav class="green-gradient invert">
            <div class="container invert">
                <ul class="top-menu">
                    <li>Olá <?php echo $_SESSION['login']; ?>!</li>
                    <li><a href="homeLogado.php">Home</a></li>
                    <li><a href="meusPedidos.php">Meus Pedidos</a></li>
					<li><a href="meusAgend.php">Meus Agendamentos</a></li>
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
		<br/><br/><br/>
			<?php
				
				include 'conectar.php'; 
				
				$id = $_GET['id'];
				$sql = pg_query("select s.nome, s.valor, ag.dataa, ag.hora from agendamento ag, servico s WHERE ag.idservico= '{$id}' and ag.idservico = s.idservico");
				
			?>

			<table border="1">
				
				  <tr>
					 <td align="center" colspan="4">MEUS AGENDAMENTOS</td>		 
				  </tr>
				  <tr>
					 <th>Serviço</th>
					 <th>Data</th>
					 <th>Hora</th>
					 <th>Preço</th>
				  </tr> 
				  <tr>
				  <?php while($agend = pg_fetch_array($sql)) {?>
					 <td><?php echo $agend['nome']; ?></td>
					 <td><?php echo $agend['dataa']; ?></td>
					 <td><?php echo $agend['hora']; ?></td>
					 <td><?php echo $agend['valor']; ?></td>
				  </tr>
				<?php }?> 	
			</table>
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
		
		
		
		
		
		
		

	




	