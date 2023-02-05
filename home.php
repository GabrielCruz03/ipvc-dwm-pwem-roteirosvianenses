
    <?php

include './assets/php/connect.php';

/*

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart!';
   }

}
*/


?>

<!DOCTYPE html>
<html lang="pt">
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
    <!-- Vinculação dos ficheiros Javascript -->
    <script type="text/javascript "src="./assets/js/loading-page.js" defer></script>
    <script type="text/javascript "src="./assets/js/menu.js" defer></script>

    <!-- Vincular ficheiros de CSS -->
    <link rel="stylesheet" href="./assets/css/styles.css">
    <!-- <link rel="stylesheet" href="./assets/css/menu_main.css"> -->
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/loading-page.css">
    <link rel="stylesheet" href="./assets/css/menu2.css">
    <!--Icon da pagina (visivel na aba do separador)-->
    <link rel="icon" href="./assets/images/logo.png">
    <!--Titulo-->
    <title>Roviana</title>
</head>

<body>


  <!-- Pré carregar a página
  <div class="loading-page">
    <img src="./assets/images/loading-page.gif" alt="Página a carregar...">
  </div>
  -->

    <!-- Menu de navegação -->
  

    <!-- <nav>
        <div class="logo">
            <a href="index.html"> <img src="./assets/images/logos/logos_png/logo_v2.png" width="200px" height="80px" alt="Logótipo"> </a>
        </div>
        <ul>
            <li> <a href="./home.php">Home</a> </li>
            <li> <a href="#sobre">Sobre</a> </li>
            <li> <a href="./users/login.php">Login</a> </li>
            <li> <a href="./users/register.php">Register</a> </li>
            <li> <a href="#footer">Contacto</a> </li>
            <li class="menu-btn-login"> <a href="./users/login.php">Iniciar Sessão</a> </li>    
            <li class="menu-btn-register"> <a href="./users/register.php">Criar Conta</a> </li>
        </ul>
        <a id="menu-icon" class="menu-icon" onclick="onMenuClick()">
            <i class="fa fa-bars"></i>
        </a>
    </nav> -->

    <header>
    <nav>
    <div class="logo">
            <a href="index.html"> <img src="./assets/images/logos/logos_png/logo_v2.png" width="200px" height="80px" alt="Logótipo"> </a>
        </div>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>  
        </div>
        <ul class="nav-list">
            <li> <a href="./home.php">Home</a> </li>
            <li> <a href="#sobre">Sobre</a> </li>
            <li> <a href="./users/register.php">Register</a> </li>
            <li> <a href="#footer">Contacto</a> </li>
            <li class="menu-btn-login"> <a href="./users/login.php">Iniciar Sessão</a> </li>    
            <li class="menu-btn-register"> <a href="./users/register.php">Criar Conta</a> </li>
        
        </ul>
    </nav>
   </header>

        <main>
        <div class="home-texto">
            <h1>
                <b class="home-titulo">Roteiros Vianenses</b>
                <strong class="home-subtitulo">Viaje por Viana do Castelo</strong>
            </h1>
            <p>
                Bem-Vindo à nossa plataforma! Por cá poderes encontrar informação 
                que te ajudará na tua visita pelo distrito de Viana do Castelo! 
                Disponibilizamos Roteiros e Guias Turisticos das várias zonas de Viana do Castelo!
            </p>
            <a href="./register.php"><button>Cria Conta e aproveita</button></a>
        </div>
        <div class="home-imagem">
            <img src="./assets/images/viana-do-castelo.jpg">
        </div>
        </main>

<!-- Secção autores do projeto -->


<section class="sobre">
<div id="sobre">
    <h3>Sobre Nós</h3>
    <p>Somos 3 jovens estudantes da Escola Superior de Tecnologia e Gestão pertencente ao Instituto Politécnico de Viana do Castelo, frequentando o 2º ano do Curso Técnico Superior Profissional de Desenvolvimento Web e Multimédia.</p>
</div>


<div class="sobre-cards">
    <div class="perfil">
        <div class="perfil-conteudo">
            <div class="perfil-imagem">
                <img src="./assets/images/perfis_autores/afonso_borlido.png" alt="Perfil: Afonso Borlido">
            </div>
            <div class="perfil-detalhe">
                <h2 class="perfil-aluno">Afonso Borlido</h2>
                <h4 class="perfil-aluno2">Estudante IPVC</h4>
                <div class="perfil-social">
                    <a href="https://www.instagram.com/afonsogdsborlido/" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="mailto:afonsob@ipvc.pt"><i class="fa fa-envelope"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="perfil">
        <div class="perfil-conteudo">
            <div class="perfil-imagem">
                <img src="./assets/images/perfis_autores/foto_perfil.png" alt="Perfil: Gabriel Cruz">
            </div>
            <div class="perfil-detalhe">
                <h2 class="perfil-aluno">Gabriel Cruz</h2>
                <h4 class="perfil-aluno2">Estudante IPVC</h4>
                <div class="perfil-social">
                    <a href="https://www.instagram.com/cruzz_gabriel03/" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="mailto:gabrielcruz@ipvc.pt"><i class="fa fa-envelope"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="perfil">
        <div class="perfil-conteudo">
            <div class="perfil-imagem">
                <img src="./assets/images/perfis_autores/guilherme_magalhaes.png" alt="Perfil: Guilherme Magalhães">
            </div>
            <div class="perfil-detalhe">
                <h2 class="perfil-aluno">Guilherme Magalhães</h2>
                <h4 class="perfil-aluno2">Estudante IPVC</h4>
                <div class="perfil-social">
                    <a href="https://www.instagram.com/gui.magalhaes02/" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="mailto:guilhermemagalhaes@ipvc.pt"><i class="fa fa-envelope"></i></a>
                </div>
            </div>
        </div>
    </div>
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
                        <img src="./assets/images/icons/icons_contactos/facebook_gradiente.png" alt="Facebook Icon">
                        Facebook
                    </a>
                </button>
            </li>
            <li>
                <button class="footer-button-social">
                    <a href="https://link.roteirosvianenses.pt/sociais/instagram" title="Roteiros Vianenses | Instagram">
                        <img src="./assets/images/icons/icons_contactos/instagram_gradiente.png" alt="Instagram Icon">
                        Instagram
                    </a>
                </button>
            </li>
            <li>
                <button class="footer-button-social">
                    <a href="https://link.roteirosvianenses.pt/sociais/twitter" title="Roteiros Vianenses | Twitter">
                        <img src="./assets/images/icons/icons_contactos/twitter_gradiente.png" alt="Twitter Icon">
                        Twitter
                    </a>
                </button>
            </li>
            <li>
                <button class="footer-button-social">
                    <a href="mailto:contacto.roteirosvianenses@gmail.com" title="Roteiros Vianenses | Enviar Email">
                        <img src="./assets/images/icons/icons_contactos/email_gradiente.png" alt="Email Icon">
                        Email
                    </a>
                </button>
            </li>
            <li>
                <button class="footer-button-social">
                    <a href="tel:258819700" title="Roteiros Vianenses | Ligar">
                        <img src="./assets/images/icons/icons_contactos/call_gradiente.png" alt="Call Icon">
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

<p class="copyright-text">Roteiros Vianenses © 2023</p>
<script>
    /* const hamburger = document.querySelector(".hamburger");
    const navMenu = document.querySelector(".nav-menu");
    const navLink = document.querySelectorAll(".nav-link");

    hamburger.addEventListener("click", mobileMenu);
    navLink.forEach(n => n.addEventListener("click", closeMenu));

    function mobileMenu() {
        hamburger.classList.toggle("active");
        navMenu.classList.toggle("active");
    }

    function closeMenu() {
        hamburger.classList.remove("active");
        navMenu.classList.remove("active");
    } */

    class MobileNavbar {
    constructor(mobileMenu, navList, navLinks) {
      this.mobileMenu = document.querySelector(mobileMenu);
      this.navList = document.querySelector(navList);
      this.navLinks = document.querySelectorAll(navLinks);
      this.activeClass = "active";
  
      this.handleClick = this.handleClick.bind(this);
    }
  
    animateLinks() {
      this.navLinks.forEach((link, index) => {
        link.style.animation
          ? (link.style.animation = "")
          : (link.style.animation = `navLinkFade 0.5s ease forwards ${
              index / 7 + 0.3
            }s`);
      });
    }
  
    handleClick() {
      this.navList.classList.toggle(this.activeClass);
      this.mobileMenu.classList.toggle(this.activeClass);
      this.animateLinks();
    }
  
    addClickEvent() {
      this.mobileMenu.addEventListener("click", this.handleClick);
    }
  
    init() {
      if (this.mobileMenu) {
        this.addClickEvent();
      }
      return this;
    }
  }
  
  const mobileNavbar = new MobileNavbar(
    ".mobile-menu",
    ".nav-list",
    ".nav-list li",
  );
  mobileNavbar.init();
</script>
</body>
</html>
