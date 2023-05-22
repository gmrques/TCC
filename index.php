<?php

include_once("Connection/conect.php");
include_once("Validation/sing-in.php");
include_once("Validation/sing-up.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="CSS/style.css" />
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/nunito" rel="stylesheet">
    <link rel="icon" type="png" syzes="32x32" href="CSS/IMG/brand-icon/parrot.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script defer src="JS/script-register.js"></script>
    <title>Nome do site</title>
</head>
<body>
    <header>
        <nav>
            <h4><img id="logo" src="CSS/IMG/brand-icon/parrot.png" alt="">Nome da empresa</h4>
        </nav>
    </header>
    <main>
        <div id="box">
            <div id="inner-box">
                <div id="form-wrap">
                    <form method="POST" action="?action=login" autocomplete="off" class="sing-in-form">
                        <div class="parrot">
                            <img src="CSS/IMG/brand-icon/parrot.png" alt="parrot icon">
                            <h4>Nome da empresa</h4>
                        </div>

                        <div id="heading1">
                            <h2>Bem vindo de volta!</h2>
                            <h6>Ainda não tem uma conta?</h6>
                            <a class="toggle">Cadastre-se</a>
                        </div>
                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" minlength="4" class="input-field" name="USERNAME" autocomplete="off" required />
                                <label for="USERNAME">Nome de usuário</label>
                            </div>
                            <div class="input-wrap">
                                <input type="password" minlength="4" class="input-field" name="PASSWORD" autocomplete="off" required />
                                <label for="PASSWORD">Senha</label>
                            </div>
                            <input type="submit" value="Entrar" class="sign-button">
                            <p>
                                Esqueceu sua senha? Redefina sua senha
                                <a href="#">aqui</a>
                            </p>
                        </div>
                    </form>

                    <form method="POST" action="?action=create" autocomplete="off" class="sing-up-form">
                        <div class="parrot">
                            <img src="CSS/IMG/brand-icon/parrot.png" alt="parrot icon">
                            <h4>Nome da empresa</h4>
                        </div>

                        <div id="heading2">
                            <h2>Comece agora!</h2>
                            <h6>Já tem uma conta?</h6>
                            <a class="toggle">Entrar</a>
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="tel" class="input-field" name="PHONE_NUMBER" autocomplete="off" required />
                                <label for="PHONE_NUMBER">Telefone</label>
                            </div>
                            <div class="input-wrap">
                                <input type="text" class="input-field" name="FULL_NAME" autocomplete="off" required />
                                <label for="FULL_NAME">Nome completo</label>
                            </div>
                            <div class="input-wrap">
                                <input type="text" class="input-field" name="USERNAME" autocomplete="off" required />
                                <label for="USERNAME">Nome de usuário</label>
                            </div>
                            <div class="input-wrap">
                                <input type="password" class="input-field" name="PASSWORD" autocomplete="off" required />
                                <label for="PASSWORD">Senha</label>
                            </div>
                            <div class="input-wrap">
                                <input type="password" class="input-field" name="PASSWORD" autocomplete="off" required />
                                <label for="PASSWORD">Confirmar senha</label>
                            </div>
                            <input type="submit" value="Cadastrar" class="sign-button">
                            <p>
                                Se cadastrando, eu concordo com os
                                <a href="#">Termos de uso</a> e
                                <a href="#">Política de privacidade</a>
                            </p>
                        </div>
                    </form>
                </div>
                <div id="carousel">
                    <div class="images-wrapper">
                        <img src="CSS/IMG/carousel/1.jpg" class="image img-1 show" alt="">
                        <img src="CSS/IMG/carousel/2.jpg" class="image img-2" alt="">
                        <img src="CSS/IMG/carousel/3.jpg" class="image img-3" alt="">
                        <img src="CSS/IMG/carousel/8.jpg" class="image img-4" alt="">
                        <img src="CSS/IMG/carousel/10.jpg" class="image img-5" alt="">
                        <img src="CSS/IMG/carousel/11.jpg" class="image img-6" alt="">
                        <img src="CSS/IMG/carousel/13.jpg" class="image img-7" alt="">
                        <img src="CSS/IMG/carousel/15.jpeg" class="image img-8" alt="">
                    </div>

                    <div class="text-slider">
                        <div class="text-wrap">
                            <div class="text-group">
                                <h2>Teste 1</h2>
                                <h2>Teste 2</h2>
                                <h2>Teste 3</h2>
                                <h2>Teste 4</h2>
                                <h2>Teste 5</h2>
                                <h2>Teste 6</h2>
                                <h2>Teste 7</h2>
                                <h2>Teste 8</h2>
                            </div>
                        </div>

                        <div class="bullets">
                            <span class="active" data-value="1"></span>
                            <span data-value="2"></span>
                            <span data-value="3"></span>
                            <span data-value="4"></span>
                            <span data-value="5"></span>
                            <span data-value="6"></span>
                            <span data-value="7"></span>
                            <span data-value="8"></span>
                        </div>
                    </div>
                </div>
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