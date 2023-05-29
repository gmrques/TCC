<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="CSS/style-profile.css" />
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/nunito" rel="stylesheet">
    <link rel="icon" type="png" syzes="32x32" href="CSS/IMG/brand-icon/parrot.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script defer src="JS/script-search.js"></script>
    <title>Nome do site</title>
</head>
<body>
    <header>
        <nav>
            <a href=""><img id="logo" src="CSS/IMG/brand-icon/parrot.png" alt="">Nome da empresa</a>
            <ul class="navlist">
                <a href="#">Destinos</a>
                <a href="#">Dicas</a>
                <a href="#">Roteiros</a>
                <a href="#">Gastronomia</a>
                <a href="#"><i style="font-size: 1.5em;" class='plus bx bx-plus'></i></a>
                <a href="#"><i style="font-size: 1.5em;" class='user bx bxs-user'></i></a>
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
    <main>
    <div class="box">
        <div class="left-box-pf">
            <div class="profile-pic">
                <img src="CSS/IMG/user/icon.png" alt="Ana"/>
            </div>
            <!-- Até aqui tudo certo -->
            <div class="about">
                <h2>Sinforinho Junior</h2>
                <h4><i>Teste</i></h4>
                <ul class="content">
                    <li><i class='bx bxs-envelope'></i></li>
                    <li><i class='bx bxl-instagram-alt'></i></li>
                    <li><i class='bx bxl-twitter' ></i></li>
                </ul>
            </div>
        </div>
        <div class="right-box-pf">
            <ul>
                <li value="1">Artigos</li>
                <!-- Artigos em forma de card 1:1 -->
                <li value="2">Sobre</li>
                <!-- Mini biografia -->
            </ul>
        </div>
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