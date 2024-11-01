<!DOCTYPE html>
<html lang="pt-br">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>PIDS Tech</title>
			<link rel="shotcut icon"type="image/x-icon"href="./img/favicon.ico"/>
			<link rel="stylesheet" href="../css/styles.css">
			<link rel="stylesheet" href="../css/layout.css">
			<link rel="stylesheet" href="../css/menu.css">
			<link rel="stylesheet" href="../css/reset.css">
			<link rel="stylesheet" href="../css/login.css">
			
		</head>
	<body>
		<div id="corpo">
			<main>
				<header>
					<section id="cabecalho">
						<div id="cabecalhoEsq">
							<p class="esq">
								<a href="https://www.senacrs.com.br/home" >
									<img src="../img/logo_senac_semfundo.png" title="Logotipo Senac" />
								</a>			
						</p>
					</div>
				
				
				
				<div id="cabecalhoMeio"><!--início cabecalhoMeio -->
				
					
				
						<p class="p1">
							<img class="p1" src="../img/logo_pids_semfundo.png" title="Logo PIDS">
						</p>
						
						<p id="cadastroLogin">Cadastro de Login: </p>
					
				</div><!--fim cabecalhoMeio -->
				



					
				<div id="cabecalhoDir">  <!-- Inicio div cabecalhoDir -->
						<p class="p1">
							<a class="linkRedes" href="https://www.facebook.com/senacrsoficial" target="blank">
								<img class="imgRedes" src="../img/icon_facebook.png" alt="Rede social Facebook" title="Rede social Facebook" />
							</a>
							<a class="linkRedes" href="https://www.instagram.com/senacrs/" target="blank">
								<img class="imgRedes" src="../img/icon_instagram.png" alt="Rede social Instagram" title="Rede social Instagram" />
							</a>
							<a class="linkRedes" href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQGjNOZytbRLdwAAAZCDGdKQorc6a1HY6F3qjme8z6BVRLg3Kf_kVJ6e2WdIWIQaf8cRxOiTYKMz4bfZdnAKle3AQRelQP4NsP7sHBP37X7E5DOoOr4lQF2mPZUvO0avML2F1HE=&original_referer=https://www.senacrs.com.br/&sessionRedirect=https%3A%2F%2Fbr.linkedin.com%2Fschool%2Fsenac-rs%2F" target="blank">
								<img class="imgRedes" src="../img/icon_linkedin.png" alt="Rede social Linkedin" title="Rede social Linkedin" />
							</a>
							<a class="linkRedes" href="https://www.youtube.com/senacrsoficial" target="blank">
								<img class="imgRedes" src="../img/icon_youtube.png" alt="Canal Youtube" title="Canal Youtube" />
							</a>
							<a class="linkRedes" href="https://open.spotify.com/user/oe434380olmwip17xaxyjb0bc" target="blank">
								<img class="imgRedes" src="../img/icon_spotify.png" alt="Canal Spotify" title="Canal Spotify" />
							</a>
						</p>
					</div> <!-- FIM div cabecalhoDir -->
				</section>	<!-- Fim div cabecalho-->
			</header>
			
				
			<input type="checkbox" id="bt_menu" />
			<label for="bt_menu">&#9776;</label>
        <nav id="menu">
            <ul>
                <li>
                    <a href="../index.html">Início</a>
                </li>
                <li>
            <a href="#loginCadastro">Faça Parte</a>
            <ul>
                <li><a href="./pages/login.html" target="blank">Login</a></li>
                <li class="cadastro-item">
					<a href="./pages/cadastro.html" target="blank">Cadastro</a>
					<ul>
						<li><a href="./pages/Cadastrodepessoafisica.html">Pessoa Física</a></li>
						<li><a href="../pages/Cadastrodepessoajuridica.html">Pessoa Jurídica</a></li>
					</ul>
				</li>
            </ul>
        </li>
                
				<li>
                    <a href="#loginCadastro"  target="blank">Fale Conosco!</a> <!-- Alterado para rolar até a seção de Login/Cadastro -->
					<ul> 
							<li><a href="./pages/nossahistoria.html"  target="blank">Nossa História!</a></li>
							<li><a href="./pages/galeriadefotos.html"  target="blank">Galeria de Fotos</a></li>						
					</ul>
                </li>
				
                <li>
                    <a href="./pages/localizacao.html"  target="blank">Localização</a>
                </li>
            </ul>
        </nav>
		<hr class="hr2">	
		
				<p class="pText3">Login:</p>
		
		
				  <div class="login-container">
	  <form>
		<label class="pText2" for="username">Usuário:</label>
		<input type="text" id="username" name="username" required>
		<label class="pText2" for="password">Senha:</label>   

		<input type="password" id="password" name="password" required>
		<button type="submit">Enviar</button>
	  </form>
	</div> 
	</body>
		
		<hr class="hr2">
		
	
	
		
	<div id="rodape"><!--Inicio Div rodape -->
	
	<footer>
        <input type="checkbox" id="bt_menu" />
        <label for="bt_menu">&#9776;</label>
        <nav id="menu">
            <ul>
                <li>
                    <a href="./index.html">Início</a>
                </li>
                <li>
                    <a href="#loginCadastro">Faça Parte</a> <!-- Alterado para rolar até a seção de Login/Cadastro -->
					<ul> 
							<li><a href="./pages/login.html">Login</a></li>
							<li><a href="./pages/cadastro.html#trilha">Cadastro</a></li>						
					</ul>
                </li>
                
				<li>
                    <a href="#loginCadastro">Fale Conosco!</a> <!-- Alterado para rolar até a seção de Login/Cadastro -->
					<ul> 
							<li><a href="./pages/nossahistoria.html">Nossa História!</a></li>
							<li><a href="./pages/galeriadefotos.html">Galeria de Fotos</a></li>						
					</ul>
                </li>
				
                <li>
                    <a href="./pages/localizacao.html">Localização</a>
                </li>
            </ul>
        </nav>
	</footer>
	<p id="h1">
		<img src="../img/Senac_Tech.png" title="Logo Senac">
		<p class="p1">Todos os direitos reservados®</p>
	</p>
	</div><!--fim Div rodape -->
</div><!--fim Div Corpo -->
</main>
</body>
</html>
	
	

</html>	