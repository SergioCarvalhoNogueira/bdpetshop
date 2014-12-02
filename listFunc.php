<?php
session_start();
?>

<html>
<head>
    <meta charset="iso-8859-1" />
    <title> # Lista de Funcionarios #</title>
    <link href="css/estilos.css" rel="stylesheet" />
</head>
<body>
    <header class="main">
        <nav class="green-gradient invert">
            <div class="container invert">
                <ul class="top-menu">
                    <li><a href="homeAdm.php">Home</a></li>                    
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
			<br/><br/><br/><br/><br/>
				<?php
				include 'conectar.php';
				
				$sql = pg_query("select f.nome nome_func , ff.nome nome_funcao from funcionario f, funcao ff where f.idfuncao = ff.idfuncao");	 
				
				?>
			<table border="1">
				
				  <tr>
					 <td align="center" colspan="3">Funcionarios</td>		 
				  </tr>
				  <tr>
					 <th>Nome</th>
					 <th>Funcao</th>					 
				  </tr> 
				  <tr>
				  <?php while($func = pg_fetch_array($sql)) {?>
					 <td><?php echo $func['nome_func']; ?></td>					 	
					 <td><?php echo $func['nome_funcao']; ?></td>
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