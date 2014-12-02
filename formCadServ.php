<html>
<head>
    <meta charset="iso-8859-1" />
    <title>## Cadastro Serviço ##</title>
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
		<!-- AQUI COLOCA O CONTEUDO DA PAGINA!! O RESTO FICA TUDO IGUAL.  -->
			<center>
				</br></br></br></br></br></br>
				<form name="formServ" action="procCadServ.php" method="post">
					<table border="1">
					  <tr>
						 <th colspan="2" align="center">  Cadastro de Serviço </th>
					  </tr>
					  <tr>
						 <td>Nome:</td>
						 <td><input name="nome" type="text" value="" size="25" /> </td>
					  </tr>
					  
					  <tr>
						 <td>Valor:</td>
						 <td><input name="valor" type="text" value="" size="25"/> 
					  </tr>					  					  
					 </table>
					 <br/>
					<input name="enviar" type="submit" id="btnEnviar" value="Enviar" class="green-gradient" />
					<input name="limpar" type="reset" id="btnLimpar" value="Limpar" class="green-gradient" />
				</form>
			</center>
			
			<!-- AQUI COLOCA O CONTEUDO DA PAGINA!! O RESTO FICA TUDO IGUAL.  -->
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