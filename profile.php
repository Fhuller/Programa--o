<!DOCTYPE html>
<html>
   <head>
      <title>Stonks</title>
      <link rel="shortcut icon" href="images\MainImage.png" type="image/x-png"/>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale-1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Pure CSS Slider</title>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/utilities.css">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
   </head>
   <?php
                  session_start();
                  
                  $con = mysqli_connect('localhost', 'root', '');
                              
                  mysqli_select_db($con, 'authentication');
                  
                  $select = "select * from tb_postagens WHERE id = '".$_GET['id']."'";
                  
                  $contar = $con->query($select) or die($con->error);
                  
                  if($select){
                      while($dado = $contar->fetch_array()){
                          
                  ?>
   <header style="background-image:
    linear-gradient(to bottom, rgba(0.7, 0.5, 0.5, 0.7), rgba(0, 0, 0, 0.9)),
    url('img/fundos/<?php echo $dado['fundo'];?>');">
      <body>
         <div class="container">
         <nav class="flex items-center justify-between">
            <div class="left flex items-center">
               <div class="branding">
                  <img src="images/logosite.png" alt="">
               </div>
               
                
                  <a href="index.php">Home</a>
                  <a href="posts.php">Voltar</a>
               
            </div>
            <div class="right contato">
               <button class="btn btn-primary"><a href="https://api.whatsapp.com/send?phone=<?php echo $dado['telefone'];?>"><p>Contato</p></a></button>
            </div>
         </nav>
         <div class="totaladjust">
         <div class="hero flex items-center justify-between">
            <div class="left flex-1 flex justify-center">
               <img src="img/logos/<?php echo $dado['logo'];?>">
            </div>
            <div class="right flex-1 adjust">
               <h6>Bem vindo!</h6>
               <h1>Nós somos<span><br><?php echo $dado['empresa'];?></span></h1>
               <p><?php echo $dado['descricao'];?></p>
               <div class="information urls">
                  <li>
                      <a href="https://api.whatsapp.com/send?phone=<?php echo $dado['telefone'];?>">Telefone: <?php echo $dado['telefone'];?></a>
                  </li>
                  <li>
                      <a href="https://www.instagram.com/<?php echo $dado['insta'];?>">Instagram: @<?php echo $dado['insta'];?></a>
                  </li>
                  <li>
                      <a style="cursor: pointer;">Facebook: <?php echo $dado['facebook'];?></a>
                  </li>
                  <li>
                      <a href="https://twitter.com/<?php echo $dado['tt'];?>">Twitter: @<?php echo $dado['tt'];?></a>
                  </li>
                  <br>
                  <li>
                     <p>Email: <?php echo $dado['emailempresa'];?></p>
                  </li>
               </div>
            </div>
         </div>
         <?php
            }
            }   
            else{
            echo "Não foi";
            }
            ?>
      </body>
    </header>
</html>