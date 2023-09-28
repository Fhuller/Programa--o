<!DOCTYPE html>
<html lang="pt-br">

	<head>

	   <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
	   <link rel="shortcut icon" href="img\Principal\MainImage.png" type="image/x-png"/>
	   <link rel="stylesheet" type="text/css" href="CSS/Login.css" media="screen" />
	   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	   <title>
	      Registro/Login
	   </title>

	</head>
	<body class="sign-in-js">
		<nav class="navbar">
			<ul class="navbar-nav">
				<li class="logo">
					<a href="index.php" class="nav-link">
						<span class="link-text logo-text">Stonks</span>
						<svg
							aria-hidden="true"
							focusable="false"
							data-prefix="fad"
							data-icon="angle-double-right"
							role="img"
							xmlns="http://www.w3.org/2000/svg"
							viewBox="0 0 448 512"
							class="svg-inline--fa fa-angle-double-right fa-w-14 fa-5x"
						>
							<g class="fa-group">
								<path
									fill="currentColor"
									d="M224 273L88.37 409a23.78 23.78 0 0 1-33.8 0L32 386.36a23.94 23.94 0 0 1 0-33.89l96.13-96.37L32 159.73a23.94 23.94 0 0 1 0-33.89l22.44-22.79a23.78 23.78 0 0 1 33.8 0L223.88 239a23.94 23.94 0 0 1 .1 34z"
									class="fa-secondary"
								></path>
								<path
									fill="currentColor"
									d="M415.89 273L280.34 409a23.77 23.77 0 0 1-33.79 0L224 386.26a23.94 23.94 0 0 1 0-33.89L320.11 256l-96-96.47a23.94 23.94 0 0 1 0-33.89l22.52-22.59a23.77 23.77 0 0 1 33.79 0L416 239a24 24 0 0 1-.11 34z"
									class="fa-primary"
								></path>
							</g>
						</svg>
					</a>
				</li>
			</ul>
        </nav>
		<div class="container">
			<div class="content first-content"><!-- PRIMEIRO CONTEUDO INÍCIO -->
				<div class="first-column">
					<h2 class="title title-welcome">Bem Vindo!</h2>
					<p class="description description-primary">Para se manter conectado</p>
					<p class="description description-primary">logue com suas informações:</p>
					<button id="sign-in" class="btn btn-primary">Logar</button>
				</div><!-- PRIMEIRA COLUNA -->
				<div class="second-column">
					<h2 class="title title-second">Criar Conta</h2>
					<p class="descrption description-second">usando seu e-mail:</p>
					<form class="form" method="post" action="registration.php">
						<label class="label-input icon-modify" for="">
							<i class="far fa-user icon-modify"></i>
							<input type="text" name="username" placeholder="Nome" required>
						</label>
						<label class="label-input icon-modify" for="">
							<i class="far fa-envelope icon-modify"></i>
							<input type="email" name="email" placeholder="E-mail" required>
						</label>
						<label class="label-input icon-modify" for="">
							<i class="fas fa-lock icon-modify"></i>
							<input type="password" name="password" placeholder="Senha" required>
						</label>
						<input type="submit" class="btn btn-second" value="Criar Conta" name="register">
					</form>
				</div><!-- SEGUNDA COLUNA -->
			</div><!-- PRIMEIRO CONTEÚDO FIM -->
			<div class="content second-content"><!-- SEGUNDO CONTEÚDO INÍCIO -->
				<div class="first-column">
					<h2 class="title title-welcome">Oi!</h2>
					<p class="description description-primary">Para se manter conectado</p>
					<p class="description description-primary">crie uma conta:</p>
					<button id="sign-up" class="btn btn-primary">Criar Conta</button>
				</div><!-- PRIMEIRA COLUNA -->
				<div class="second-column">
					<h2 class="title title-second">Entre com sua conta:</h2>
					<p class="descrption description-second">usando seu usuário:</p>
					<form class="form" method="post" action="login.php">
						<label class="label-input icon-modify" for="">
							<i class="far fa-user icon-modify"></i>
							<input type="text" name="usuario_login" placeholder="Nome" id="usuario_login" required>
						</label>
						<label class="label-input icon-modify" for="">
							<i class="fas fa-lock icon-modify"></i>
							<input type="password" name="password_login" class="password" id="password_login" placeholder="Senha" required>
						</label>
						
						<input type="submit" class="btn btn-second" value="Entrar" name="logador" id="logador_login" >
					</form>
				</div><!-- SEGUNDA COLUNA -->
			</div><!-- SEGUNDO CONTEÚDO FIM -->
		</div>
		<script>
			var btnSignin = document.querySelector("#sign-in");
			var btnSignup = document.querySelector("#sign-up");

			var body = document.querySelector("body");


			btnSignin.addEventListener("click", function () {
			   body.className = "sign-in-js"; 
			});

			btnSignup.addEventListener("click", function () {
			    body.className = "sign-up-js";
			})
		</script>
	</body>
</html>