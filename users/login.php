<?php

include '../assets/php/connect.php';

session_start();

if(isset($_POST['submit'])){

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = md5($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $select = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
   $select->execute([$email, $pass]);
   $row = $select->fetch(PDO::FETCH_ASSOC);

   if($select->rowCount() > 0){
      echo (1);
      if($row['user_type'] == 'admin'){
         $_SESSION['admin_id'] = $row['id'];
         header('location:./users_dashboard/admin_dashboard/admin_dash.php');

      }elseif($row['user_type'] == 'user'){
         $_SESSION['user_id'] = $row['ID'];
         header('location:./users_dashboard/user_dashboard/user_dash.php');

      }else{
         echo (4);
         //$message[] = 'Nenhum utilizador foi encontrado!';
         echo "<script> alert ('Nenhum utilizador foi encontrado!')</script>";
      }
      
   }else{
      //$message[] = 'Email ou password errada!';
      echo "<script> alert ('Email ou password errada!')</script>";
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
   <title>Iniciar Sesão | Roteiros Vianenses</title>
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

   <form class="form" action="" method="post" enctype="multipart/form-data">
      <h3>Iniciar Sessão</h3>
      <input type="email" required placeholder="Email" class="box" name="email">
      <input type="password" required placeholder="Password" class="box" name="pass">
      <p>Não tens conta? <a href="register.php">Criar Agora</a></p>

      <div class="form-btns">
         <input type="submit" value="Entrar" class="form-btn-entrar" name="submit">
      </div>
      <div class="div-voltar">
            <a class="botao-voltar" href="../home.php">Voltar</a>
         </div>
</section>

</body>
</html>