<?php
	include("validaSessao.php");
?>
<html>
<head>
    <meta charset="iso-8859-1" />
    <title># PONTO PET - VETERINÁRIA E PET SHOP #</title>
    <link href="css/estilos.css" rel="stylesheet" />
</head>
<body>
<?php   include 'conectar.php'; 
?>
    <header class="main">
        <nav class="green-gradient invert">
            <div class="container invert">
                <ul class="top-menu">
					<li>Olá <?php echo $_SESSION['login']; ?>!</li>
                    <li><a href="homeAdm.php">Home</a></li>                    
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
    <div class="silver-gradient">
		<section id="slider">
        
		</section>
	</div>
	
    <div id="content">
        <div class="container">
		<br/><br/>
            <aside class="left">
                <div class="block">				
                    <header class="green-gradient">CADASTRAR</header>
                    <ul>
						<li><a href="formCadServ.php">Serviço</a></li>
                        <li><a href="formCadFunc.php">Funcionário</a></li> 
						<li><a href="formCadProd.php">Produto</a></li>
						<li><a href="formCadCli.php">Cliente</a></li> 
						<li><a href="formCadAni.php">Animal</a></li> 
						<li><a href="formCadEspAni.php">Especie Animal</a></li> 
						<li><a href="formCadUsuario.php">Usuario</a></li>
						<li><a href="formCadTusuario.php">Tipo Usuario</a></li>
						<li><a href="formCadFfunc.php">Função Funcionario</a></li>
						<li><a href="formCadCprod.php">Categoria Produto</a></li>
						<li><a href="formCadFPag.php">Forma Pagamento</a></li>
                    </ul>
                </div>                
            </aside>			
			<aside class="left">
                <div class="block">				
                    <header class="green-gradient">LISTAR</header>
                    <ul>
						<li><a href="listServ.php">Serviço</a></li>
                        <li><a href="listFunc.php">Funcionário</a></li> 
						<li><a href="listProd.php">Produto</a></li>
						<li><a href="listCli.php">Cliente</a></li> 
						<li><a href="listAni.php">Animal</a></li>
						<li><a href="listEspAni.php">Especie Animal</a></li> 
						<li><a href="listUsuario.php">Usuario</a></li>
						<li><a href="listTusuario.php">Tipo Usuario</a></li>
						<li><a href="listFfunc.php">Função Funcionario</a></li>
						<li><a href="listCprod.php">Categoria Produto</a></li>
						<li><a href="listFPag.php">Forma Pagamento</a></li>
                    </ul>
                </div>                
            </aside>
			<aside class="left">
                <div class="block">				
                    <header class="green-gradient">ALTERAR</header>
                    <ul>
						<li><a href="formAltServico.php">Serviço</a></li>
                        <li><a href="formAltFunc.php">Funcionário</a></li> 
						<li><a href="formAltProd.php">Produto</a></li>
						<li><a href="formAltCli.php">Cliente</a></li> 
						<li><a href="formAltAni.php">Animal</a></li>
						<li><a href="formAltEspAni.php">Especie Animal</a></li> 
						<li><a href="formAltUsuario.php">Usuario</a></li>
						<li><a href="formAltTusuario.php">Tipo Usuario</a></li>
						<li><a href="formAltFfunc.php">Função Funcionario</a></li>
						<li><a href="formAltCprod.php">Categoria Produto</a></li>
						<li><a href="formAltFPag.php">Forma Pagamento</a></li>
                    </ul>
                </div>                
            </aside> 
			<aside class="left">
                <div class="block">				
                    <header class="green-gradient">EXCLUIR</header>
                    <ul>
						<li><a href="procExcServ.php">Serviço</a></li>
                        <li><a href="procExcFunc.php">Funcionário</a></li> 
						<li><a href="procExcProd.php">Produto</a></li>
						<li><a href="procExcCli.php">Cliente</a></li> 
						<li><a href="procExcAni.php">Animal</a></li> 
						<li><a href="procExcEspAni.php">Especie Animal</a></li> 
						<li><a href="procExcUsuario.php">Usuario</a></li>
						<li><a href="procExcTusuario.php">Tipo Usuario</a></li>
						<li><a href="procExcFfunc.php">Função Funcionario</a></li>
						<li><a href="procExcCprod.php">Categoria Produto</a></li>
						<li><a href="procExcFPag.php">Forma Pagamento</a></li>
                    </ul>
                </div>                
            </aside>
		<br/>
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
