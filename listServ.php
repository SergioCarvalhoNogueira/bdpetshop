<?php
session_start();
?>

<html>
<head>
    <meta charset="iso-8859-1" />
    <title> # Lista de Servicos #</title>
    <link href="css/estilos.css" rel="stylesheet" />
</head>
<body>
    <header class="main">
        <nav class="green-gradient invert">
            <div class="container invert">
                <ul class="top-menu">
                    <li><a href="homeAdm.php">Home</a></li>                    
                    <li class="last"><a href="logoff.php">Login</a></li>
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
			<br/><br/><br/><br/><br/>
				<?php
				include 'conectar.php';
				
				$sql = pg_query("select s.nome , s.valor from servico s  where s.idservico = s.idservico");	 
				
				?>
			<table border="1">
				
				  <tr>
					 <td align="center" colspan="3">Servicos</td>		 
				  </tr>
				  <tr>
					 <th>Nome</th>
					 <th>Preco</th>	
					 
				  </tr> 
				  <tr>
				  <?php while($ani = pg_fetch_array($sql)) {?>
					 <td><?php echo $ani['nome']; ?></td>
					 <td><?php echo $ani['valor']; ?></td>					 
				  </tr>
			<?php }?>			
			</table>
        </div>
    </div>

    <div class="clearfix"></div>

    <footer class="green-gradient">
        <div class="container">
            <div class="footer-item">
                <h4>Links �teis</h4>
                <ul>
                    <li><a href="quemSomos.php">Quem somos</a></li>                    
                    <li><a href="pPrivac.php">Pol�tica de privacidade</a></li>
                    <li><a href="lojaFis.php">Loja f�sica</a></li>					                    					
                </ul>
            </div>
            <div class="footer-item">
                <h4>Atendimento</h4>
                <ul>
                   <li><a href="faleConosco.php">Fale Conosco</a></li>
					<li><a href="trocaDevo.php">Trocas e Devolu��es</a></li>					                   
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