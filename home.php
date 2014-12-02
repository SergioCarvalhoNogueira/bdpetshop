<html>
<head>
    <meta charset="iso-8859-1" />
    <title># PONTO PET - VETERINÁRIA E PET SHOP #</title>
    <link href="css/estilos.css" rel="stylesheet" />
</head><!--ola-->
<body>
<?php   include 'conectar.php'; 
?>
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
                <form id="login" action="validaLogin.php" method="post">
                    <input name="login" type="text" id="txtEmail" Value=""  placeholder="Digite seu login / Email" />
                    <input name="senha" type="password" id="txtSenha" Value="" placeholder="Digite sua senha de acesso" />
                    <input type="submit" id="btnEntrar" value="Entrar" class="green-gradient" />
                    <a href="formCadUsuario.php" id="btnCadastrar" class="green-gradient">Cadastrar<a/>
                </form>
            </div>
        </div>
    </header>
    <div class="silver-gradient">
		<section id="slider">
        
		</section>
	</div>
    <div id="content">
        <div class="container">
            <aside class="left">
                <div class="block">
                    <header class="green-gradient">Serviços</header>
                    <ul>
						<li><a href="agendServ.php">Agendamento de Serviços</a></li>                         
                    </ul>
                </div>
                <div class="block">
                    <header class="green-gradient">Produtos</header>
                    <ul>              
                        <li><a href="listProduto.php?categoria=1">Rações</a></li>
                        <li><a href="listProduto.php?categoria=2">Brinquedos</a></li>
                        <li><a href="listProduto.php?categoria=3">Roupas</a></li>                        
                        <li><a href="listProduto.php?categoria=4">Medicamentos</a></li>
                        <li><a href="listProduto.php?categoria=5">Linha Higiênica</a></li>                                               
                    </ul>
                </div>
            </aside>
            <section class="center">
                <div class="search">
                    <input type="search" name="search" 
                           placeholder="O que você procura?" 
                           class="white-gradient" />
                    <button>
                        <img src="img/search.png" alt="Buscar" 
                             title="Buscar" />
                    </button>
                </div>                
                <div id="itens">
                    <div class="item">
                        <img src="img/fantasia.jpg" align="center" />
                        <p>Fantasia Batman </p>
                        <p>R$ 35,00 </p>
                    </div>
                    <div class="item">
                        <img src="img/escova.jpg" />
                        <p>Escova </p>
                        <p >R$ 15,00 </p>
                    </div>
                    <div class="item no-margin">
                        <img src="img/gaiola.jpg"  />
                        <p>Gaiola Canário </p>
                        <p>R$ 30,00 </p>
                    </div>
                    <div class="item">
                        <img src="img/racaoP.jpg" />
                        <p>Ração Premier </p>
                        <p>R$ 20,00</p>
                    </div>
                    <div class="item">
                        <img src="img/gel.jpg" />
                        <p>Gel </p>
                        <p>R$ 9,90 </p>
                    </div>
                    <div class="item no-margin">
                        <img src="img/osso.jpg" />
                        <p>Osso Defumado </p>
                        <p>R$ 7,90 </p>
                    </div> 
					<div class="item ">
                        <img src="img/comidaPeixe.jpg" />
                        <p>Comida de Peixe </p>
                        <p>R$ 10,90 </p>
                    </div> 
					<div class="item ">
                        <img src="img/GaiolaCalopsita.jpg" />
                        <p>Gaiola Calopsita </p>
                        <p>R$ 40,00 </p>
                    </div> 
					<div class="item no-margin">
                        <img src="img/alicates.jpg" />
                        <p>Alicates de unha </p>
                        <p>R$ 26,90</p>
                    </div> 					
                </div>                
            </section>            
            <aside class="right">
                <div class="block">
                    <header class="green-gradient">Promoções</header>
                    <ul>
                        <li>
                            <a href="#">
                                <img src="img/racaoDogChow.jpg" alt="Imagem" title="imagem" 
                                     width="150" height="150"/>
                                <p>Ração Dog Chow</p>
                                <p>R$ 25,90</p>
                            </a>
                            <hr />
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/racaoCarPremium.jpg" alt="Imagem" title="imagem"
                                     width="150" height="150" />
                                <p>Ração Cat Premium</p>
                                <p>R$ 23,99</p>
                            </a>
                            <hr />
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/racaoCatChow.jpg" alt="Imagem" title="imagem"
                                     width="150" height="150" />
                                <p>Ração Cat Chow</p>
                                <p>R$ 27,90 </p>
                            </a>
                            <hr />
                        </li>
                    </ul>
                </div>
            </aside>
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
