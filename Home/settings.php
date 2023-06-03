<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="CSS/style-settings.css" />
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/nunito" rel="stylesheet">
    <link rel="icon" type="png" syzes="32x32" href="CSS/IMG/brand-icon/parrot.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script defer src="JS/script-settings.js"></script>
    <title>Brasil em Viagem</title>
</head>
<body>
    <header>
        <nav>
            <a href=""><img id="logo" src="CSS/IMG/brand-icon/parrot.png" alt="">Brasil em Viagem</a>
            <ul class="navlist">
                <a href="#">Destinos</a>
                <a href="#">Roteiros</a>
                <a href="#">Receitas</a>
                <button id="btn"><i style="font-size: 1.5em;" class='plus bx bx-plus'></i></button>
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
    <main>
        <ul id="publish-options" class="options">
            <li><a href="#">Artigo</a></li>
            <li><a href="#">Roteiro</a></li>
            <li><a href="#">Receita</a></li>
        </ul>
        <div class="box">
            <div class="left-box-prs">
                <button id="update-user-btn"><i class='bx bxs-user' aria-hidden="true"></i></button>
                <button id="udpate-palette-btn"><i class='bx bxs-palette' aria-hidden="true"></i></button>
                <button id="logout-btn"><i class='bx bx-log-out' aria-hidden="true"></i></button>
            </div>
            <div class="right-box-prs">
                <div class="profiletabShow">
                    <form method="POST" action="?action=update" autocomplete="off" id="update-user" class="state">
                        <h1>Atualize suas informações :)</h1>
                        <div class="update-form">
                            <div class="update-wrap">
                                <input type="email" class="update-field" name="EMAIL" autocomplete="off" value="<?php echo $EMAIL ?>"/>
                                <label for="EMAIL">Email</label>
                            </div>
                            <div class="update-wrap">
                                <input type="text" class="update-field" name="FULL_NAME" autocomplete="off" value="<?php echo $FULL_NAME ?>"/>
                                <label for="FULL_NAME">Nome completo</label>
                            </div>
                            <div class="update-wrap">
                                <input type="text" class="update-field" name="USERNAME" autocomplete="off" value="<?php echo $USERNAME ?>"/>
                                <label for="USERNAME">Nome de usuário</label>
                            </div>
                            <div class="update-wrap">
                                <input type="password" class="update-field" name="PASSWORD" autocomplete="off" value="<?php echo $PASSWORD ?>"/>
                                <label for="PASSWORD">Senha</label>
                            </div>
                            <div class="update-wrap">
                                <input type="password" class="update-field" name="PASSWORD" autocomplete="off" value="<?php echo $PASSWORD ?>"/>
                                <label for="PASSWORD">Confirmar senha</label>
                            </div>
                            <input type="submit" value="Atualizar" class="update">
                        </div>
                    </form>
                    <form method="POST" action="?action=X" autocomplete="off" id="update-palette" class="state">

                         <!-- ADICIONAR INFORMAÇÕES NA TABELA USUÁRIO 
                         Foto de perfil, cargo, biografia, data de nascimento, status
                         Criar um método dentro do arquivo operations, para dar um create nessas informações -->

                        <h1>Dê a sua cara ao perfil!</h1>
                        <div class="update-form">
                            <div class="update-wrap">
                                <input type="text" class="update-field" name="ROLE" autocomplete="off"/>
                                <label for="ROLE"> Cargo </label>
                            </div>
                            <div class="update-wrap">
                                <textarea class="update-textarea" name="BIO" rows="15" cols="60" required></textarea>
                                <label for="BIO"> Biografia </label>
                            </div>
                            <input type="submit" value="Salvar" class="palette">
                        </div>
                    </form>
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