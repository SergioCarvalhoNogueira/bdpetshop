<?php
session_start();
?>

<html>
<head>
    <meta charset="iso-8859-1" />
    <title> # Lista de Produtos #</title>
    <link href="css/estilos.css" rel="stylesheet" />
</head>
<body>
    <header class="main">
        <nav class="green-gradient invert">
            <div class="container invert">
                <ul class="top-menu">
                    <li><a href="home.php">Home</a></li>                    
                    <li class="last"><a href="login.php">Login</a></li>
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
				$categoria = $_GET['categoria'];
				$sql = pg_query("select * from produto p where p.idcategoria_prod = '{$categoria}'");	 
				
				?>
			<table border="1">
				
				  <tr>
					 <td align="center" colspan="2">PRODUTO</td>		 
				  </tr>
				  <tr>
					 <th>Nome</th>
					 <th>Preco</th>
				  </tr> 
				  <tr>
				  <?php while($prod = pg_fetch_array($sql)) {?>
					 <td><?php echo $prod['nome']; ?></td>
					 <td><?php echo $prod['valoruni']; ?></td>
					 <td>
						<a href="carrinhoComp.php?id=<?php echo $prod['idproduto']; ?>">Comprar</a> 
					 </td>
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