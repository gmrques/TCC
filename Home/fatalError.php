<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="CSS/style.css" />
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/nunito" rel="stylesheet">
    <link rel="icon" type="png" syzes="32x32" href="CSS/IMG/brand-icon/parrot.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script defer src="JS/script-search.js"></script>
    <script defer src="JS/script-settings.js"></script>
    <title>Nome do site</title>
</head>
<body>
    <header>
        <nav>
            <h4><img id="logo" src="CSS/IMG/brand-icon/parrot.png" alt="">Nome da empresa</h4>
            <ul class="navlist">
                <a href="?page=index.php"><i class='home bx bx-home'></i></a>
                <a href="#"><i class='support bx bx-support'></i></a>
                <a href="#"><i class='bx bx-chat'></i></a>
                <div class="publish">
                    <a href="#"><i class='bx bx-plus'></i></a>
                </div>
                <div class="container1">
                    <div class="icon">
                        <i class='search bx bx-search-alt'></i>
                    </div>
                    <div class="input">
                        <input type="text" placeholder="Pesquisar" id="search">
                        <i class='close bx bx-x'></i>
                    </div>
                </div>
                <div class="user-drop">
                    <img class="user" src="CSS/IMG/user/icon.png"></img>
                    <!-- Colocar ícone de perfil do usuário -->
                </div>
            </ul>
        </nav>
    </header>
    <main style="background: #303030;">
        <div class="error-box">
            <i class='bx bxs-error'></i> 
            <i class='bx bx-code-alt'></i>
            <h3>Ops! Ocorreu um<br> erro desconhecido :( <br> Por favor entre em contato:</h3>
            <a href="#Fale conosco">Fale conosco</a>
        </div>
        <style>
            .error-box {
                background-color: #1f1f1f;
                position: relative;
                width: 100%;
                max-width: calc(100% - 50%);
                height: calc(100% - 10%);
                border-radius: 50px;
                box-shadow: 1px 5px 20px 0px rgba(0,0,0,0.3);
                -webkit-box-shadow: 1px 5px 20px 0px rgba(0,0,0,0.3);
                -moz-box-shadow: 1px 5px 20px 0px rgba(0,0,0,0.3);
            }

            .error-box i {
                font-size: 100px;
                color: white;
                display: inline-flex;
                position: relative;
                top: 20%;
                left: 35%;
            }

            .error-box h3 {
                color: white;
                font-size: 40px;
                position: relative;
                top: 25%;
                left: 25%;
            }

            .error-box a {
                font-size: 30px;
                padding: 1.5%;
                font-weight: bold;
                text-decoration: none;
                color: white;
                background: black;
                border-radius: 50px;
                position: absolute;
                top: 75%;
                left: 40%;
                transition: 0.8s;
            }

            .error-box a:hover {
                background: white;
                color: black;
                transition: 0.8s;
            }
        </style>
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