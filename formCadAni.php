<html>
<head>
    <meta charset="iso-8859-1" />
    <title>## CADASTRO ANIMAL ##</title>
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
	<?php   	
		include 'conectar.php'; 	
		$sql = pg_query("select idespecie, nome from especie");	
	?>	
    <div id="content">
		<div class="container">
			<!-- AQUI COLOCA O CONTEUDO DA PAGINA!! O RESTO FICA TUDO IGUAL.  -->
			<center >
			</br></br></br></br></br></br>
				<form name="form2" action="procCadAni.php" method="post">
				<input type="hidden" name="login" value="<?php $login = $_GET['login']; echo $login; ?> "/>
				<table border="1">
				  <tr>
					 <th colspan="2" align="center">  Cadastro de Animal </th>
				  </tr>
				 <tr>
					<td>Espécie:</td>
					<td>
					<select name="idEspecie">
					<option>Selecione...</option>
					 <?php while($especie = pg_fetch_array($sql)) { ?>
					 <option value="<?php echo $especie['idespecie'] ?>"><?php echo $especie['nome'] ?></option>
					 <?php } ?>
					 </select>
					</td>
				  </tr>
				  <tr>
					 <td>Nome:</td>
					 <td><input name="nome" type=""text" value="" size="80"/> </td>
				  </tr>
				  <tr>
					 <td>Raça:</td>
					 <td><input name="raca" type=""text" value="" size="80"/> </td>
				  </tr>
					<tr>
					 <td>Dono:</td>
					 <td><input name="dono" type=""text" value="" size="80"/> </td>
				  </tr>
				  <tr>
					 <td>Pelugem:</td>
					 <td><input name="pelugem" type="text" value="" size="80"/></td>
				  </tr>
					<tr>
					 <td>Identificação:</td>
					 <td><input name="identificacao" type=""text" value="" size="80"/> </td>
				  </tr>
				  <tr>
					 <td>Tatuagem:</td>
					 <td><input name="tatuagem" type=""text" value="" size="80"/> </td>
				  </tr>
				  <tr>
					 <td>Castrado:</td>
					 <td><input name="castrado" type="radio" value="S"/>Sim
						 <input name="castrado" type="radio" value="N"/>Não</td>
				  </tr>				  
				  <tr>
					 <td>Genero:</td>
					 <td><input name="genero" type="radio" value="F"/>Femea
						 <input name="genero" type="radio" value="M"/>Macho</td>
				  </tr>
				  <tr>
					 <td>Nascimento</td>
					 <td><input name="datanasc" type="date" value="" onKeyDown="javascript:adata(this.value);"/> </td>
				  </tr>					
				</table>
					<input type="submit" id="btnEnviar" value="Enviar" class="green-gradient" />
					<input type="reset" id="btnLimpar" value="Limpar" class="green-gradient" />
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