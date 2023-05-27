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
    <script defer src="JS/script-search.js"></script>
    <script defer src="JS/script-settings.js"></script>
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
                        <input type="text" placeholder="Pesquisar" id="search">
                        <i class='close bx bx-x'></i>
                    </div>
                </div>
            </ul>
        </nav>
    </header>
    <main>
        <div class="box">
            <div class="left-box-prs">
                <a onclick="showU('.update-user-form')">
                    <i class='bx bxs-user' aria-hidden="true"></i>
                </a>
                <a onclick="showP('#palette-form')">
                    <i class='bx bxs-palette' aria-hidden="true"></i>
                </a>
                <a onclick="('')">
                    <i class='bx bx-log-out' aria-hidden="true"></i>
                </a>
            </div>
            <div class="right-box-prs">
                <div class="profile tabShow">
                    <form method="POST" action="?action=update" autocomplete="off" class="update-user-form">
                        <h1>Atualize suas informações :)</h1>
                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="tel" class="input-field" name="PHONE_NUMBER" autocomplete="off" value="<?php echo $PHONE_NUMBER ?>"/>
                                <label for="PHONE_NUMBER">Telefone</label>
                            </div>
                            <div class="input-wrap">
                                <input type="text" class="input-field" name="FULL_NAME" autocomplete="off" value="<?php echo $FULL_NAME ?>"/>
                                <label for="FULL_NAME">Nome completo</label>
                            </div>
                            <div class="input-wrap">
                                <input type="text" class="input-field" name="USERNAME" autocomplete="off" value="<?php echo $USERNAME ?>"/>
                                <label for="USERNAME">Nome de usuário</label>
                            </div>
                            <div class="input-wrap">
                                <input type="password" class="input-field" name="PASSWORD" autocomplete="off" value="<?php echo $PASSWORD ?>"/>
                                <label for="PASSWORD">Senha</label>
                            </div>
                            <div class="input-wrap">
                                <input type="password" class="input-field" name="PASSWORD" autocomplete="off" value="<?php echo $PASSWORD ?>"/>
                                <label for="PASSWORD">Confirmar senha</label>
                            </div>
                            <input type="submit" value="Atualizar" class="sign-button">
                        </div>
                    </form>
                    <form method="POST" action="?action=X" autocomplete="off" class="palette-form">

                         <!-- ADICIONAR INFORMAÇÕES NA TABELA USUÁRIO 
                         Foto de perfil, cargo, biografia, data de nascimento, status
                         Criar um método dentro do arquivo operations, para dar um create nessas informações -->

                        <h1>Dê a sua cara ao perfil!</h1>
                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="image" class="input-field" name="PROFILE_PIC" autocomplete="off" value="<?php echo $PROFILE_PIC ?>"/>
                            </div>
                            <div class="input-wrap">
                                <input type="text" class="input-field" name="ROLE" autocomplete="off" value="<?php echo $ROLE ?>"/>
                                <label for="ROLE"> Cargo </label>
                            </div>
                            <div class="input-wrap">
                                <input type="text" class="input-field" name="BIO" autocomplete="off" value="<?php echo $BIO ?>"/>
                                <label for="BIO"> Biografia </label>
                            </div>
                            <div class="input-wrap">
                                <input type="date" class="input-field" name="DATE_BIRTH" autocomplete="off"/ value="<?php echo $DATE_BIRTH ?>">
                                <label for="DATE_BIRTH"> Data de nascimento </label>
                            </div>
                            <div class="input-wrap">
                                <input type="text" class="input-field" name="STATUS" autocomplete="off" value="<?php echo $STATUS ?>"/>
                                <label for="STATUS"> Status </label>
                            </div>
                            <input type="submit" value="Salvar" class="sign-button">
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