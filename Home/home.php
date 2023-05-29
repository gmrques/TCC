 <!-- <?php
    require_once("Connection/conect.php");
    //  switch(@$_REQUEST["page"]) {
    //  case "":
    //     include("");
    //     break;
    //  case "":
    //     include("");
    //     break;
    //  case "":
    //     include("");
    //     break;
    //  case "":
    //     include("");
    //     break;
    //  default:
    //     echo"<h2>Mensagem de teste<h2>";
    //  }
    // feito para levar até as outras páginas, porém elas ainda não existem;
    // colocar dentro do href dos itens da navbar "href= ?page=nomeDaPágina.php". 
?> -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="CSS/style-home.css" />
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/nunito" rel="stylesheet">
    <link rel="icon" type="png" syzes="32x32" href="CSS/IMG/brand-icon/parrot.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script defer src="JS/script-home.js"></script>
    <title>Nome do site</title>
</head>
    <header>
        <nav>
            <a href=""><img id="logo" src="CSS/IMG/brand-icon/parrot.png" alt="">Nome da empresa</a>
            <ul class="navlist">
                <a href="#">Destinos</a>
                <a href="#">Dicas</a>
                <a href="#">Roteiros</a>
                <a href="#">Gastronomia</a>
                <a href=""><i style="font-size: 1.5em;" class='plus bx bx-plus'></i></a>
                <a href=""><i style="font-size: 1.5em;" class='user bx bxs-user' ></i></a>
                <div class="container1">
                    <div class="icon">
                        <i class='search bx bx-search-alt'></i>
                    </div>
                    <div class="input">
                        <input type="text" placeholder="Pesquisar" id="search">
                        <i class='close bx bx-x'></i>
                    </div>
                </div>
            </ul>
        </nav>
    </header>
    <body>
    <main>
        <div class="box">
            <div class="top-home-box">
                <p>Mais recentes</p>
            </div>
            <div class="bottom-home-box">
                <!-- html/css dos artigos (cards horizontais) -->
                <!-- Fazer operação no backend que compare uma variavel de data de postagem dos cards -->
            </div>
        </div>
    </main>
    </body>
    <footer>
        <div id="social-media">
            <a href="#"><i class='bx bxl-spotify'></i></a>
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-pinterest-alt'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-youtube'></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></a>
        </div>
    </footer>
</html>