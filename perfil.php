<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'authentication');

include('verifica_login.php');


?>
<!DOCTYPE html>
<html lang="pt-br">

	<head>

        <link rel="shortcut icon" href="img\Principal\MainImage.png" type="image/x-png"/>

	   <meta http-equiv="Content-type" content="text/html; charset=UTF-8">

	   <link rel="stylesheet" type="text/css" href="CSS/Perfil.css" media="screen" />

       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	   <title>
	      Perfil
	   </title>

	</head>
	<body>
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
        </ul>
		<div class="container">
			<div class="content">
                <div class="colum">
                    <h2 class="text">Crie o perfil de sua empresa aqui, <?php echo $_SESSION['usuario_login']?></h2>
                    <br>
                    <form class="form" method="post" action="envio.php" enctype="multipart/form-data">
                        <label class="label-input icon-modify" for="">
                            <i class="fas fa-building icon-modify"></i>
                            <input type="text" name="empresa" placeholder="Nome da empresa" class="input" required>
                        </label>
                        <label class="label-input icon-modify" for="">
                            <i class="fas fa-envelope icon-modify"></i>
                            <input type="email" name="emailempresa" placeholder="E-mail da Empresa" class="input" required>
                        </label>
                        <label class="label-input icon-modify" for="">
                            <i class="fas fa-phone icon-modify"></i>
                            <input type="tel" name="telefone" placeholder="Número da empresa (Número completo todo junto)" class="input" pattern="[0-9]{12}||[0-9]{13}" required>
                        </label>
                        <label class="label-input icon-modify" for="">
                            <i class="fab fa-facebook-f"></i>
                            <input type="text" name="facebook" placeholder="Facebook da empresa" class="input" required>
                        </label>
                        <label class="label-input icon-modify" for="">
                            <i class="fab fa-instagram"></i>
                            <input type="text" name="insta" placeholder="Instagram da empresa (sem o @)" class="input" required>
                        </label>
                        <label class="label-input icon-modify" for="">
                            <i class="fab fa-twitter"></i>
                            <input type="text" name="tt" placeholder="Twitter da empresa (sem o @)" class="input" required>
                        </label>
                        <label class="label-input icon-modify cent" for="">
                            <i class="fas fa-comment-alt icon-modify"></i>
                            <textarea placeholder="Aqui você pode colocar uma descrição de sua empresa" class="description" name="descricao" required></textarea>
                        </label>
                        <br><h3 class="text">Dê o Upload de sua Logo:</h3> <center><input type="file" id="imagem" name="img[]" class="text"></center><br>
                        <br><h3 class="text">Dê um upload para seu plano de fundo:</h3> <center><input type="file" id="imagem" name="back[]" class="text"></center><br>
                            <h3 class="text">Selecione com o que sua empresa trabalha:</h3>
                            <select name="categoria" class="sel">
                                <option value="">Categoria</option>
                                <option value="academias">Academias</option>
                                <option value="acessorios-e-bijuterias">Acessórios e Bijuterias</option>
                                <option value="advogad">Advocacia</option>
                                <option value="agencia-de-turismo">Agência de Turismo</option>
                                <option value="agropecuaria">Agropecuária</option>
                                <option value="arquitetura">Arquitetura</option>
                                <option value="assistencia-tecnica">Assistência técnica</option>
                                <option value="atacadista">Atacadista</option>
                                <option value="automotivo-lojas">Automotivo</option>
                                <option value="bares-e-cervejarias">Bar e Cervejaria</option>
                                <option value="barbearia">Barbearia</option>
                                <option value="beleza">Beleza e Estética</option>
                                <option value="brindes-promocionais">Brindes Promocionais</option>
                                <option value="cafeteria">Cafeteria</option>
                                <option value="carne">Carne</option>
                                <option value="casa-e-decoracao">Casa e Decoração</option>
                                <option value="chaveiro">Chaveiro</option>
                                <option value="climatizacao">Climatização</option>
                                <option value="clinicas-medicas">Clínica Médica</option>
                                <option value="clinica-veterinaria">Clínica Veterinária</option>
                                <option value="comunicacao">Comunicação</option>
                                <option value="construtoras">Construtora</option>
                                <option value="consultoria">Consultoria</option>
                                <option value="contabilidade">Contabilidade</option>
                                <option value="conveniencia">Conveniência</option>
                                <option value="cosmeticos">Cosméticos</option>
                                <option value="delivery">Delivery</option>
                                <option value="design-de-interiores">Design de Interiores</option>
                                <option value="despachante">Despachante</option>
                                <option value="distribuidoras">Distribuidoras</option>
                                <option value="doceria">Doceria</option>
                                <option value="e-commerce">E-commerce</option>
                                <option value="educacao">Educação</option>
                                <option value="eletronicos">Eletrônicos</option>
                                <option value="emporio">Empório</option>
                                <option value="engenharia">Engenharia</option>
                                <option value="estofaria">Estofaria</option>
                                <option value="eventos">Eventos</option>
                                <option value="exportacao">Exportação</option>
                                <option value="farmacia">Farmácia</option>
                                <option value="ferragem">Ferragem</option>
                                <option value="financeiro">Financeiro</option>
                                <option value="fisioterapia">Fisioterapia</option>
                                <option value="floricultura-e-paisagismos">Floricultura e Paisagismo</option>
                                <option value="fotografia-e-video">Fotografia e Vídeo</option>
                                <option value="gastronomia">Gastronomia</option>
                                <option value="graficas">Gráfica</option>
                                <option value="hamburgueria">Hamburgueria</option>
                                <option value="hot-dog">Hot Dog</option>
                                <option value="hotelaria">Hotelaria</option>
                                <option value="iluminacao">Iluminação</option>
                                <option value="corretoras">Imobiliária e Corretora</option>
                                <option value="imoveis">Imóveis</option>
                                <option value="industrias">Indústria</option>
                                <option value="laboratorios">Laboratórios</option>
                                <option value="lavanderia">Lavanderia</option>
                                <option value="limpeza">Limpeza</option>
                                <option value="livraria">Livraria</option>
                                <option value="locacao-de-veiculos">Locação de Veículos</option>
                                <option value="lojas">Lojas</option>
                                <option value="malharia-e-confeccao">Malharia e Confecção</option>
                                <option value="massagem">Massagem</option>
                                <option value="materiais-de-construcao">Material de Construção</option>
                                <option value="mecanico">Mecanico</option>
                                <option value="motoboy">Motoboy</option>
                                <option value="moveis">Móveis</option>
                                <option value="nutricao">Nutrição</option>
                                <option value="dentistas">Odontologia</option>
                                <option value="oficina-mecanica">Oficina Mecânica</option>
                                <option value="otica-e-joalheria">Ótica e Joalheria</option>
                                <option value="padaria">Padaria</option>
                                <option value="papelaria">Papelaria</option>
                                <option value="petshop">Petshop</option>
                                <option value="pizzaria">Pizzaria</option>
                                <option value="posto-de-gasolina">Posto de Gasolina</option>
                                <option value="presentes">Presentes e Utilidades</option>
                                <option value="psicologia">Psicologia</option>
                                <option value="recreacao">Recreação</option>
                                <option value="restaurante">Restaurante</option>
                                <option value="saude-e-bem-estar">Saúde e Bem Estar</option>
                                <option value="seguranca">Segurança</option>
                                <option value="seguros">Seguros</option>
                                <option value="servicos">Serviços</option>
                                <option value="supermercado">Supermercados</option>
                                <option value="telecomunicacoes">Telecomunicações</option>
                                <option value="vinhos-e-adegas">Vinhos e Adegas</option>
                                <option value="outras-categorias">Outras Categorias</option>
                            </select>
                            <br>
                        <input type="submit" class="btn" value="Criar Perfil">
                    </form>
                </div>
			</div>	
		</div>
	</body>
</html>
