<?php
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
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="Css/base.css" />
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/nunito" rel="stylesheet">
    <link rel="icon" type="png" syzes="32x32" href="CSS/IMG/brand-icon/parrot.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script defer src="JS/feed.js"></script>
    <title>Nome do site</title>
</head>
<body>
    <header>
        <nav>
            <h4><img id="logo" src="CSS/IMG/brand-icon/parrot.png" alt="">Nome da empresa</h4>
        </nav>
    </header>
    <main>
        <div class="wrapper">
            <i id="left" class="bx bxs-chevron-left"></i>
            <p class="title">Teste 2</p>
            <div class="carousel">
                <img src="CSS/IMG/other-profiles/header1.jpg" alt="" draggable="false">
                <img src="CSS/IMG/other-profiles/header2.jpg" alt="" draggable="false">
                <img src="CSS/IMG/other-profiles/header3.jpg" alt="" draggable="false">
                <img src="CSS/IMG/other-profiles/header4.jpg" alt="" draggable="false">
                <img src="CSS/IMG/other-profiles/header5.jpg" alt="" draggable="false">
                <img src="CSS/IMG/other-profiles/header1.jpg" alt="" draggable="false">
                <img src="CSS/IMG/other-profiles/header2.jpg" alt="" draggable="false">
                <img src="CSS/IMG/other-profiles/header3.jpg" alt="" draggable="false">
                <img src="CSS/IMG/other-profiles/header4.jpg" alt="" draggable="false">
                <img src="CSS/IMG/other-profiles/header5.jpg" alt="" draggable="false">
            </div>
            <i id="right" class="bx bxs-chevron-right" ></i>
        </div>
    </main>
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
</body>
</html>