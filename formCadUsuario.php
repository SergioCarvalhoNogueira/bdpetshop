<?php
	session_start();
?>
<html>
<head>
    <meta charset="iso-8859-1" />
    <title>## Cadastro Usuario ##</title>
    <link href="css/estilos.css" rel="stylesheet" />
		
</head>
<body>
    <header class="main">
        <nav class="green-gradient invert">
            <div class="container invert">
                <ul class="top-menu">
				<?php
					if(isset($_SESSION['login']))
					{
						echo '<li><a href="homeAdm.php">Home</a></li>';       					
						echo '<li class="last"><a href="logoff.php">Logoff</a></li>';
					}
					else
					{
						echo '<li><a href="home.php">Home</a></li>';       					
						echo '<li class="last"><a href="login.php">Login</a></li>';
					}
				?>
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
				<form name="formUsu" action="procCadUsuario.php" method="post">
					<table border="1">
					  <tr>
						 <th colspan="2" align="center">  Cadastro de Usuário </th>
					  </tr>
					  <tr>
						 <td>Login:</td>
						 <td><input name="login" type="text" value="" placeholder="Digite um nome de login" size="25" /> </td>
					  </tr>
					  
					  <tr>
						 <td>Senha:</td>
						 <td><input name="senha" type="password" value="" placeholder="Digite uma senha" size="25" /> 
					  </tr>	
					  <tr>
						 <td>Senha:</td>
						 <td><input name="senharep" type="password" value="" placeholder="Digite a senha novamente" size="25" /> 
					  </tr>	
					  <tr>
						 <td>Tipo Usuario:</td>
						 <td>
							<select name="tipousuario">
								<?php
									if(isset($_SESSION['login']))
									{
										echo "<option value=1>Administrador</option>";
										echo "<option value=2>Funcionário</option>";
									}
									else
									{
										echo "<option value=3>Cliente</option>";
									}
								?>
							 </select>
						 </td>
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