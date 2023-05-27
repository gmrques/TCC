<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="CSS/style-support.css" />
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
            <h4><img id="logo" src="CSS/IMG/brand-icon/parrot.png" alt="">Nome da empresa</h4>
            <ul class="navlist">
                <a href="#"><i class='bx bx-support'></i></a>
                <a href="#"><i class='bx bx-plus'></i></a>
                <a href="#"><i class='bx bx-chat'></i></a>
                <a href="#"><i class='bx bxs-user-circle'></i></a>
                <div class="container1">
                    <div class="icon">
                        <i class='search bx bx-search-alt'></i>
                    </div>
                    <div class="input">
                        <input type="text" placeholder="Pesquisar">
                        <i class='close bx bx-x'></i>
                    </div>
                </div>
            </ul>
        </nav>
    </header>
    <main>
        <div class="box">
            <form method="POST" action="?action=update" autocomplete="off" enctype="multipart/form-data" class="support-form">
                <h1>Fale conosco!</h1>
                <div class="support-inner-box">
                    <div class="support-input">
                        <input type="text" minlength=50 class="input-field" name="SUPPORT_MENSAGE" autocomplete="off"/>
                        <label for="SUPPORT_MENSAGE">Envie sua mensagem</label>
                    </div>
                    <div class="support-input">
                        <input type="file" class="input-field" name="PRINT"/>
                    </div>
                    <input type="submit" value="Enviar" class="support-button">
                </div>
            </form>
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