<?php

include '../../../assets/php/connect.php';

session_start();


$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:../../login.php');
}

$select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
$select_profile->execute([$user_id]);
$fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Links para utilizar o bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <!-- Carregar icons do Font Awesome -->
    <script src="https://kit.fontawesome.com/a5f358dee9.js" crossorigin="anonymous"></script>
    <!-- Formatação do HTML e informação para o browser -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Vinculação dos ficheiros e links Javascript -->
    <script type="text/javascript " src="../js/loading-page.js" defer></script>
    <script type="text/javascript " src="../js/menu.js" defer></script>
    <!-- Vincular ficheiros de CSS -->
    <link rel="stylesheet" href="./users_dash.css">
    <link rel="stylesheet" href="../../../assets/css/footer.css">
    <link rel="stylesheet" href="../../../assets/css/menu_userdash.css">
    <!--Icon da pagina (visivel na aba do separador)-->
    <link rel="icon" href="../images/logo.png">
    <!--Titulo-->
    <title>Criar Conta | Roteiros Vianenses</title>
</head>

<body>

    <!--<div class="margin">
<div class="header">
<a href="../../../home.php"><img class="logo" src="../../../assets/images/logos/logos_png/logo_v2.png" width="200px" height="80px" alt="Logótipo"></a>

      <div class="profile">
         <img src="../../user_profile_img/<?= $fetch_profile['image']; ?>" alt="">
         <h3><?= $fetch_profile['name']; ?></h3>
      </div>

      <div class="div_menu">
         <ul class="menu">
               <li><a href="#" class="delete-btn">Ver Roteiros</a></li>
               <li><a href="#" class="delete-btn">Criar Roteiros</a></li>
               <li><a href="../../logout.php">Logout</a></li>
               <li><a href="user_profile_update.php">update profile</a></li> 
         </ul>
      </div>
   </div>-->
    <nav>
        <div class="logo">
            <a href="../../../home.php"> <img src="../../../assets/images/logos/logos_png/logo_v2.png" width="200px"
                    height="80px" alt="Logótipo"> </a>
        </div>


        <div class="profile">
            <img src="../../user_profile_img/<?= $fetch_profile['image']; ?>" alt="">
            <h3>
                <?= $fetch_profile['name']; ?>
            </h3>
        </div>


        <ul>
            <li><a href="#" class="delete-btn">Ver Roteiros</a></li>
            <li><a href="#" class="delete-btn">Criar Roteiros</a></li>
            <li><a href="../../logout.php">Logout</a></li>
            <li><a href="user_profile_update.php">update profile</a></li>
        </ul>

        <a id="menu-icon" class="menu-icon" onclick="onMenuClick()">
            <i class="fa fa-bars"></i>
        </a>
    </nav>

<section class="conteudo">

    <div>
        <h1 class="titulo">Roteiros</h1>
    </div>

    <section class="bordas">
        <div class="cointainer">

        </div>

        <div class="cointainer">

        </div>
    </section>

    <div class="botoes">
        <button>Ver</button>
        <button>Criar</button>
    </div>

</section>

<footer>
    <div class="footer-conteudo">
        <ul class="footer-seccao seccao-links-uteis">
            <h3 class="footer-titulo">Links Uteis</h3>
            <li>
                <a href="">
                    <img src="" alt="" title="">
                    Página Inicial
                </a>
            </li>
            <li>
                <a href="">
                    <img src="" alt="" title="">
                    Sobre Nós
                </a>
            </li>
            <li>
                <a href="">
                    <img src="" alt="" title="">
                    Iniciar Sessão
                </a>
            </li>
            <li>
                <a href="">
                    <img src="" alt="" title="">
                    Criar Conta
                </a>
            </li>
            <li>
                <a href="">
                    <img src="" alt="" title="">
                    A minha Conta
                </a>
            </li>
            <li>
                <a href="">
                    <img src="" alt=""title="">
                    Contactos
                </a>
            </li>
        </ul>
        <!-- Secção dos Contactos-->
        <ul class="footer-seccao">
            <h3 class="footer-titulo">Contactos</h3>
            <li>
                <button class="footer-button-social">
                    <a href="https://link.roteirosvianenses.pt/sociais/facebook" title="Roteiros Vianenses | Facebook">
                        <img src="../../../assets/images/icons/icons_contactos/facebook_gradiente.png" alt="Facebook Icon">
                        Facebook
                    </a>
                </button>
            </li>
            <li>
                <button class="footer-button-social">
                    <a href="https://link.roteirosvianenses.pt/sociais/instagram" title="Roteiros Vianenses | Instagram">
                        <img src="../../../assets/images/icons/icons_contactos/instagram_gradiente.png" alt="Instagram Icon">
                        Instagram
                    </a>
                </button>
            </li>
            <li>
                <button class="footer-button-social">
                    <a href="https://link.roteirosvianenses.pt/sociais/twitter" title="Roteiros Vianenses | Twitter">
                        <img src="../../../assets/images/icons/icons_contactos/twitter_gradiente.png" alt="Twitter Icon">
                        Twitter
                    </a>
                </button>
            </li>
            <li>
                <button class="footer-button-social">
                    <a href="mailto:contacto.roteirosvianenses@gmail.com" title="Roteiros Vianenses | Enviar Email">
                        <img src="../../../assets/images/icons/icons_contactos/email_gradiente.png" alt="Email Icon">
                        Email
                    </a>
                </button>
            </li>
            <li>
                <button class="footer-button-social">
                    <a href="tel:258819700" title="Roteiros Vianenses | Ligar">
                        <img src="../../../assets/images/icons/icons_contactos/call_gradiente.png" alt="Call Icon">
                        Call
                    </a>
                </button>
            </li>
        </ul>
        <!-- Secção da localização-->
        <div class="footer-seccao">
            <h3 class="footer-titulo" style="width:200px">Onde estámos</h3>
            <div>
                <h5 style="width: 200px; color: var(--branco);">
                    Endereço:
                </h5>
                <h6 style="width: 300px; color: var(--branco); font-weight: normal;">
                    Avenida do Atlântico, n.º 644<br>4900-348 Viana do Castelo
                </h6>
                <h5 style="width: 200px; color: var(--branco); font-size: 18px;">
                    <a href="https://goo.gl/maps/s8ZNWS5ebtQTDt5i9" target="_blank" style="margin-left:0;">Mapa</a>
                </h5>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1243.3708946565218!2d-8.846999732986369!3d41.694063118478375!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7adf1f41800a5ef0!2sEscola%20Superior%20de%20Tecnologia%20e%20Gest%C3%A3o%20-%20Instituto%20Polit%C3%A9cnico%20de%20Viana%20do%20Castelo!5e1!3m2!1sen!2sus!4v1672157120249!5m2!1sen!2sus" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <h6 style="width: 250px; color: var(--branco); ">
                    <a href="tel:258819700">258 819 700</a> /
                    <a href="tel:965919660">965 919 660</a>
                    <a href="mailto:contacto.roteirosvianenses@gmail.com">contacto.roteirosvianenses@gmail.com</a>
                </h6>
            </div>
        </div>
</footer>
<p style="text-align:center;">Roteiros Vianenses © 2023</p>

    </div>
</body>

</html>