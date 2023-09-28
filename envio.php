<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'authentication');

    $option = isset($_POST['categoria']) ? $_POST['categoria'] : false;

    $empresa      = $_POST['empresa'];
    $emailempresa = $_POST['emailempresa'];
	$telefone     = $_POST['telefone'];
	$facebook     = $_POST['facebook'];
	$tt           = $_POST['tt'];
	$insta        = $_POST['insta'];
    $descricao    = $_POST['descricao'];
    $option       = $_POST['categoria'];

    
		//INFO IMAGEM
		$file 		= $_FILES['img'];
		$file2 		= $_FILES['back'];
		$numFile	= count(array_filter($file['name']));
		
		//PASTA QUE A IMAGEM FICARÁ
		$folder		= 'img/logos/';
		$folder2    = 'img/fundos/';


		//REQUISITOS PARA ACEITAR A IMAGEM
		$permite 	= array('image/jpeg', 'image/png');
		$maxSize	= 1024 * 1024 * 5;
		
		//MENSAGENS DE ERRO
		$msg		= array();
		$errorMsg	= array(
			1 => 'O arquivo no upload é maior do que o limite definido em upload_max_filesize no php.ini.',
			2 => 'O arquivo ultrapassa o limite de tamanho em MAX_FILE_SIZE que foi especificado no formulário HTML',
			3 => 'o upload do arquivo foi feito parcialmente',
			4 => 'Não foi feito o upload do arquivo'
		);
		
		if($numFile <= 0){
			echo '<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						Selecione ao menos uma foto para sua logo!
					</div>';
		}
		else if($numFile >=2){
			echo '<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						Você ultrapassou o limite de upload. Selecione até 1 foto e tente novamente! 
					</div>', $numFile;
        }
        else{
			for($i = 0; $i < $numFile; $i++){
				$name 	= $file['name'][$i];
				$name2 	= $file2['name'][$i];
				$type	= $file['type'][$i];
				$size	= $file['size'][$i];
				$error	= $file['error'][$i];
				$tmp	= $file['tmp_name'][$i];
				$tmp2	= $file2['tmp_name'][$i];
				
				$extensao = @end(explode('.', $name));
				$extensao2 = @end(explode('.', $name2));
				$novoNome = rand().".$extensao";
				$novoNome2 = rand().".$extensao2";
				
				if($error != 0)
					$msg[] = "<b>$name :</b> ".$errorMsg[$error];
				else if(!in_array($type, $permite))
					$msg[] = "<b>$name :</b> Erro imagem não suportada!";
				else if($size > $maxSize)
					$msg[] = "<b>$name :</b> Erro imagem ultrapassa o limite de 5MB";
				else{
					
					if(move_uploaded_file($tmp, $folder.'/'.$novoNome)){

						
                        $reg= "INSERT INTO tb_postagens(empresa, emailempresa, telefone, facebook, insta, tt, descricao, categoria, logo, fundo) VALUES ('$empresa', '$emailempresa', '$telefone',  '$facebook', '$insta', '$tt', '$descricao', '$option', '$novoNome', '$novoNome2')";
						mysqli_query($con, $reg);
						move_uploaded_file($tmp2, $folder2.'/'.$novoNome2);
                        echo "<script>alert('Criado com Sucesso!');</script>";
							
					}else
						$msg[] = "<b>$name :</b> Desculpe! Ocorreu um erro...";
			        }
				

            }   
        }

?>