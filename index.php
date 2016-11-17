<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Deyse - Decorações Para Casamentos</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery.fullPage.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Itim" rel="stylesheet">
	<meta name="viewport" content="width=device-width">
</head>
<body>
	
	<header>
		<ul id="menu">
			<li data-menuanchor="home" class="active"><a href="#home">Home</a></li>
			<li data-menuanchor="quemSomos"><a href="#quemSomos">Quem Somos</a></li>
			<li data-menuanchor="produtos"><a href="#produtos">Produtos</a></li>
			<li data-menuanchor="galeria"><a href="#galeria">Galeria</a></li>
			<li data-menuanchor="promocao"><a href="#promocao">Promoções</a></li>
			<li data-menuanchor="contato"><a href="#contato">Contato</a></li>
			<li data-menuanchor="crud"><a href="#crud">CRUD</a></li>
		</ul>
	</header>
	<div id="fullpage">
	    <div class="section" id="section01">
	    	<div class="container">
	    		<h1 id="fontLobsterh1">
	    		<div id="Console"></div>
	    			Juntos, não há estrelas que não possamos alcançar, nem sonhos que não possamos realizar!
	    		</h1>
			</div>
	    </div>

	    <div class="section">
	    	<div class="container">
	    	<h1 id="h1-qs">Um pouco sobre nós</h1>
				<p>Aqui é Body Builder Ipsum PORRA! Vo derrubar tudo essas árvore do parque ibirapuera. Que não vai dá rapaiz, não vai dá essa porra. É 13 porra! É esse que a gente quer, é ele que nóis vamo buscar. Não vai dá não. Ó o homem ali porra!, é 13 porra!</p>

				<p>É 13 porra! Birl! É 37 anos caralho! Negativa Bambam negativa. Bora caralho, você quer ver essa porra velho. Aqui é bodybuilder porra!</p>

				<p>Que não vai dá rapaiz, não vai dá essa porra. Tá comigo porra. Sai de casa comi pra caralho porra. Vem porra! Aqui é bodybuilder porra! Vamo monstro!</p>

				<p>Aqui nóis constrói fibra, não é água com músculo. Eita porra!, tá saindo da jaula o monstro! Tá comigo porra. Que não vai dá rapaiz, não vai dá essa porra. É 13 porra! Bora caralho, você quer ver essa porra velho.</p>

				<p>Que não vai dá rapaiz, não vai dá essa porra. Vem porra! Negativa Bambam negativa. É 13 porra! Não vai dá não. É verão o ano todo vem cumpadi.</p>
			</div>
	    </div>
	    <div class="section">
	    	<h1 id="h1-qs">Nossos Produtos</h1>
	    </div>
		
	
	    <div class="section">
	    	<div class="slide">
    			<img src="img/home.jpg" class="imgresize" alt="">	
	    	</div>
	    	<div class="slide">
	    		<img src="img/galeria2.jpg" class="imgresize" alt="">
	    	</div>
	    	<div class="slide">
	    		<img src="img/galeria3.jpg" class="imgresize" alt="">
	    	</div>
	    </div>
	    <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-6 col-sm-12">
						<h2 id="h2-p">Promoção Case Ontem !</h2>
						<p>Se seu casamento for para os próximos 30 dias, além de aliviarmos você desta saia justa de estar atrasada(o), e a decoração do seu casamento sai por <b>15%</b> a menos do valor total, e ainda tem direito a 30 fotos profissionais.</p>
						<img src="img/promo1.jpg" class="img-responsive img-thumbnail">
						<a href="#contato" id="a-btn"><button type="button" class="btn btn-primary btn-lg btn-block">Quero esta promoção !</button></a>
					</div>
					<div class="col-md-6 col-lg-6 col-sm-12	">
						<h2 id="h2-p">Promoção Friends !</h2>
						<p>Quer casar ao lado do seu melhor amigo ou amiga ? Além de casar ao lado de seus amigos nós da Deyse decorações ainda vamos te dar aquele desconto ! a decoração do seu casamento é de <b>20%</b> a menos do valor total.</p>
						<img src="img/promo2.jpg" class="img-responsive img-thumbnail">
						<a href="#contato" id="a-btn"><button type="button" class="btn btn-primary btn-lg btn-block">Quero esta promoção !</button></a>
					</div>
				</div>
	    	</div>
	    </div>
	    <div class="section">
	    	<div class="container">
	    		<form action="">
		    		<div class="form-group">
		    			<label for="nome">Nome</label>
		    			<input type="text" class="form-control" id="nome">
		    		</div>
		    		<div class="form-group">
		    			<label for="email">E-mail</label>
		    			<input type="email" class="form-control" id="email">
		    		</div>
		    		<div class="form-group">
		    			<label for="assunto">Assunto</label>
		    			<input type="text" class="form-control" id="assunto">
		    		</div>
		    		<div class="form-group">
		    			<label for="comentario">Diga o que precisa e entraremos em contato</label>
		    			<textarea name="comentario" id="comentario" rows="5" class="form-control"></textarea>
		    		</div>
		    		<input type="submit" class="btn btn-primary btn-lg btn-block">
	    		</form>
	    	</div>
	    </div>

	    <div class="section">
	    	<div class="container">
		    		<form action="controller/ControllerUser.php" method="post">
		    			<h1 id="h1-white">Cadastrar</h1>
		    			<div class="form-group">
		    				<label for="nome">Nome</label>
		    				<input type="text" name="nome" class="form-control" id="nome" required="">
		    			</div>
		    			<div class="form-group">
		    				<label for="nascimento">Data Nascimento</label>
		    				<input type="text" name="nascimento" class="form-control" id="nascimento" required="">
		    			</div>
		    			<div class="form-group">
		    				<label for="email">E-mail</label>
		    				<input type="email" name="email" class="form-control" id="email">
		    			</div>
		    			<input type="submit" name="acao" class="btn btn-primary btn-block" value="+">
		    		</form>
	    	</div>
	    </div>
		
	</div>
	
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.easings.min.js"></script>
    <script type="text/javascript" src="js/jquery.fullPage.min.js"></script>
    <script type="text/javascript">
    	function AddZero(num) {
		    return (num >= 0 && num < 10) ? "0" + num : num + "";
		}

		window.onload = function() {
		    var now = new Date();
		    var hora = now.getHours();
		    var saudacao = "";

		     if (hora > 12 && hora < 18) {
		     	saudacao = "Boa tarde !";
		     }else if(hora > 18){
		     	saudacao = "Boa noite !";
		     }else{
		     	saudacao = "Bom dia !";
		     }

		    document.getElementById("Console").innerHTML = saudacao;
		};
    </script>
</body>
</html>