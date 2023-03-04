<?php

include '../assets/php/connect.php';

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = md5($_POST['password']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);
   $cpass = md5($_POST['cpass']);
   $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

   $image = $_FILES['image']['name'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_size = $_FILES['image']['size'];
   $image_folder = '../assets/images/user_profile_img'.$image;

   $select = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
   $select->execute([$email]);

   if($select->rowCount() > 0){
      $message[] = 'Utilizador já existe!';
   }else{
      if($pass != $cpass){
         $message[] = 'As passwords não são iguais!';
      }elseif($image_size > 2000000){
         $message[] = 'A imagem é muito grande!';
      }else{
         $insert = $conn->prepare("INSERT INTO `users`(name, email, password, image) VALUES(?,?,?,?)");
         $insert->execute([$name, $email, $cpass, $image]);
         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'Conta criada com sucesso!';
            header('location:login.php');
         }
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Links para utilizar o bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
   <!-- Carregar icons do Font Awesome -->
   <script src="https://kit.fontawesome.com/a5f358dee9.js" crossorigin="anonymous"></script>
   <!-- Formatação do HTML e informação para o browser -->
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Vinculação dos ficheiros e links Javascript -->
   <script type="text/javascript "src="../js/loading-page.js" defer></script>
   <script type="text/javascript "src="../js/menu.js" defer></script>
   <!-- Vincular ficheiros de CSS -->
   <link rel="stylesheet" href="../assets/css/loading-page.css">
   <link rel="stylesheet" href="../assets/css/users.css">
   <!--Icon da pagina (visivel na aba do separador)-->
   <link rel="icon" href="../images/logo.png">
   <!--Titulo-->
   <title>Criar Conta | Roteiros Vianenses</title>
</head>
<body>



<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>
   
<section class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>register now</h3>
      <input type="text" required placeholder="Nome de Utilizador" class="box" name="name">
      <input type="email" required placeholder="E-Mail" class="box" name="email">
      <input type="password" required placeholder="Password" class="box" name="password">
      <input type="password" required placeholder="Confirme a Password" class="box" name="cpass">
      <input type="file" name="image" required class="box" accept="image/jpg, image/png, image/jpeg">
      <p>Já tem conta? <a href="login.php">Entrar Agora</a></p>
      <input type="submit" value="Criar Conta" class="btn" name="submit">
         <div class="div-voltar">
            <a class="botao-voltar" href="../home.php">Voltar</a>
         </div>
   </form>

</section>

</body>
</html>