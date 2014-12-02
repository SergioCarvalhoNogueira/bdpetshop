<html>
<head>
    <meta charset="iso-8859-1" />
    <title></title>
    <link href="css/estilos.css" rel="stylesheet" />
</head>
<body>
<?php   include 'conectar.php'; 
?>
    <header class="main">
        <nav class="green-gradient invert">
            <div class="container invert">
                <ul class="top-menu">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="meusPedidos.php">Meus Pedidos</a></li>
                    <li><a href="meusDados.php">Meus Dados</a></li>
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
		<br/><br/><br/>
			<h2> QUEM SOMOS</h2>
			<br/>
			<h4><p align="justify"> A www.pontopetpetshop.com.br nasceu com o objetivo de oferecer ao consumidor, produtos de qualidade para várias espécies de
			animais, como cachorros, gatos, roedores, pássaros, peixes, etc. A gama de opções é diversificada e os produtos tem qualidade ímpar.
			A criação da loja foi pautada em muita pesquisa, análise, testes e comprometimento com os objetivos de nossos clientes. 
			Aqui cada ítem é pensado, examinado, para que somente bons produtos entrem na vida de seu pet. A responsabilidade é grande,
			afinal, ajudamos tantas pessoas a descobrirem novos caminhos para melhorar o convívio com seus animais.
			Nossa missão é ajudar os clientes a entrarem em um universo repleto de novidades, variedade, conforto e segurança ao comprar.
			Tudo isso aliado às práticas éticas de nossa empresa, que são segurança e presteza durante a solicitação das consultas e
			aquisição dos produtos, todos oriundos de fornecedores sérios e comprometidos com o bem estar dos animais.
			A www.pontopetpetshop.com.br dispõe de ferramentas precisas de tecnologia, e de seguranças para o bom funcionamento e atendimento
			das compras e nas entregas.
			Junte-se a nós e descubra um mundo que acolhe você e seu animal com muito carinho e responsabilidade.</h4>
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