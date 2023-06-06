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
    <script defer src="JS/script-profile.js"></script>
    <title>Brasil em Viagem</title>
</head>
<body>
    <header>
    <nav>
            <a href="Home/home.php"><img id="logo" src="CSS/IMG/brand-icon/parrot.png" alt="">Brasil em Viagem</a>
            <ul class="navlist">
                <a href="Home/destinations.php">Destinos</a>
                <a href="Home/roadmap.php">Roteiros</a>
                <a href="Home/gastronomy.php">Receitas</a>
                <button id="btn"><i style="font-size: 1.5em;" class='plus bx bx-plus'></i></button>
                <a href="profile.html"><i style="font-size: 1.5em;" class='user bx bxs-user' ></i></a>
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
        <li><a href="Home/publish-article.php">Artigo</a></li>
        <li><a href="Home/publish-roadmap.php">Roteiro</a></li>
        <li><a href="Home/publish-gastronomy.php">Receita</a></li>
    </ul>
    <div class="box">
        <div class="left-box-pf">
            <div class="profile-pic">
                <img src="CSS/IMG/user/icon.png" alt="Sinforoso"/>
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
                <textarea class="bio-textarea" name="BIO" rows="15" cols="45" required></textarea>
            </div>
        </div>
        <div class="right-box-pf">
            <ul>
                <li>Artigos</li>
                    <div class="main-home-box1">
                    <div class="card-article1">
                        <img src="CSS/IMG/article-img/article 1.jpg" alt="">
                        <div class="info-article">
                            <h2>Teste</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt perspiciatis officiis aliquid beatae deleniti obcaecati et, porro est, corporis facere autem vero quidem, ullam asperiores odio totam id consequatur quas!</p>
                            <button class="read_more" value="1">Continue lendo</button>
                        </div>
                    </div>
                    <div class="popup-card-article1">
                        <i value="1" class='remove bx bx-x'></i>
                        <div class="info-article">
                            <h2>Teste</h2>
                            <textarea class="text-area-content" name="conteudo" rows="18" cols="36" required readonly value="<?php echo'$BIO'?>"></textarea>
                        </div>
                    </div>                    
                    <div class="card-article1">
                        <img src="CSS/IMG/article-img/article 2.jpg" alt="">
                        <div class="info-article">
                            <h2>Teste</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt perspiciatis officiis aliquid beatae deleniti obcaecati et, porro est, corporis facere autem vero quidem, ullam asperiores odio totam id consequatur quas!</p>
                            <button class="read_more" value="2">Continue lendo</button>
                        </div>
                    </div>
                    <div class="popup-card-article2">
                        <i value="2" class='remove bx bx-x'></i>
                        <div class="info-article">
                            <h2>Teste</h2>
                            <textarea class="text-area-content" name="conteudo" rows="18" cols="36" required readonly value="<?php echo'$BIO'?>"></textarea>
                        </div>
                    </div>
                    <div class="card-article1">
                        <img src="CSS/IMG/article-img/article 3.jpg" alt="">
                        <div class="info-article">
                            <h2>Teste</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt perspiciatis officiis aliquid beatae deleniti obcaecati et, porro est, corporis facere autem vero quidem, ullam asperiores odio totam id consequatur quas!</p>
                            <button class="read_more" value="3">Continue lendo</button>
                        </div>
                    </div>
                    <div class="popup-card-article3">
                        <i value="3" class='remove bx bx-x'></i>
                        <div class="info-article">
                            <h2>Teste</h2>
                            <textarea class="text-area-content" name="conteudo" rows="18" cols="36" required readonly value="<?php echo'$BIO'?>"></textarea>
                        </div>
                    </div>
                </div>
                    <div class="main-home-box2">
                        <div class="card-article2">
                            <img src="CSS/IMG/article-img/article 4.jpg" alt="">
                            <div class="info-article">
                                <h2>Teste</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt perspiciatis officiis aliquid beatae deleniti obcaecati et, porro est, corporis facere autem vero quidem, ullam asperiores odio totam id consequatur quas!</p>
                                <button class="read_more" value="4">Continue lendo</button>
                            </div>
                        </div>
                        <div class="popup-card-article4">
                            <i value="4" class='remove bx bx-x'></i>
                            <div class="info-article">
                                <h2>Teste</h2>
                                <textarea class="text-area-content" name="conteudo" rows="18" cols="36" required readonly value="<?php echo'$BIO'?>"></textarea>
                            </div>
                        </div>
                        <div class="card-article2">
                            <img src="CSS/IMG/article-img/article 5.jpg" alt="">
                            <div class="info-article">
                                <h2>Teste</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt perspiciatis officiis aliquid beatae deleniti obcaecati et, porro est, corporis facere autem vero quidem, ullam asperiores odio totam id consequatur quas!</p>
                                <button class="read_more" value="5">Continue lendo</button>
                            </div>
                        </div>
                        <div class="popup-card-article5">
                            <i value="5" class='remove bx bx-x'></i>
                            <div class="info-article">
                                <h2>Teste</h2>
                                <textarea class="text-area-content" name="conteudo" rows="18" cols="36" required readonly value="<?php echo'$BIO'?>"></textarea>
                            </div>
                        </div>
                        <div class="card-article2">
                            <img src="CSS/IMG/article-img/article 6.jpg" alt="">
                            <div class="info-article">
                                <h2>Teste</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt perspiciatis officiis aliquid beatae deleniti obcaecati et, porro est, corporis facere autem vero quidem, ullam asperiores odio totam id consequatur quas!</p>
                                <button class="read_more" value="6">Continue lendo</button>
                            </div>
                        </div>
                        <div class="popup-card-article6">
                            <i value="6" class='remove bx bx-x'></i>
                            <div class="info-article">
                                <h2>Teste</h2>
                                <textarea class="text-area-content" name="conteudo" rows="18" cols="36" required readonly value="<?php echo'$BIO'?>"></textarea>
                            </div>
                        </div>
                    </div>
                        <div class="main-home-box3">
                            <div class="card-article3">
                                <img src="CSS/IMG/article-img/article 3.jpg" alt="">
                                <div class="info-article">
                                    <h2>Teste</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt perspiciatis officiis aliquid beatae deleniti obcaecati et, porro est, corporis facere autem vero quidem, ullam asperiores odio totam id consequatur quas!</p>
                                    <button class="read_more" value="7">Continue lendo</button>
                                </div>
                            </div>
                            <div class="popup-card-article7">
                                <i value="7" class='remove bx bx-x'></i>
                                <div class="info-article">
                                    <h2>Teste</h2>
                                    <textarea class="text-area-content" name="conteudo" rows="18" cols="36" required readonly value="<?php echo'$BIO'?>"></textarea>
                                </div>
                            </div>
                            <div class="card-article3">
                                <img src="CSS/IMG/article-img/article 2.jpg" alt="">
                                <div class="info-article">
                                    <h2>Teste</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt perspiciatis officiis aliquid beatae deleniti obcaecati et, porro est, corporis facere autem vero quidem, ullam asperiores odio totam id consequatur quas!</p>
                                    <button class="read_more" value="8">Continue lendo</button>
                                </div>
                            </div>
                            <div class="popup-card-article8">
                                <i value="8" class='remove bx bx-x'></i>
                                <div class="info-article">
                                    <h2>Teste</h2>
                                    <textarea class="text-area-content" name="conteudo" rows="18" cols="36" required readonly value="<?php echo'$BIO'?>"></textarea>
                                </div>
                            </div>
                            <div class="card-article3">
                                <img src="CSS/IMG/article-img/article 5.jpg" alt="">
                                <div class="info-article">
                                    <h2>Teste</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt perspiciatis officiis aliquid beatae deleniti obcaecati et, porro est, corporis facere autem vero quidem, ullam asperiores odio totam id consequatur quas!</p>
                                    <button class="read_more" value="9">Continue lendo</button>
                                </div>
                            </div>
                            <div class="popup-card-article9">
                                <i value="9" class='remove bx bx-x'></i>
                                <div class="info-article">
                                    <h2>Teste</h2>
                                    <textarea class="text-area-content" name="conteudo" rows="18" cols="36" required readonly value="<?php echo'$BIO'?>"></textarea>
                                </div>
                            </div>
                        </div>
                            <div class="main-home-box4">
                                <div class="card-article4">
                                    <img src="CSS/IMG/article-img/article 1.jpg" alt="">
                                    <div class="info-article">
                                        <h2>Teste</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt perspiciatis officiis aliquid beatae deleniti obcaecati et, porro est, corporis facere autem vero quidem, ullam asperiores odio totam id consequatur quas!</p>
                                        <button class="read_more" value="10">Continue lendo</button>
                                    </div>
                                </div>
                                <div class="popup-card-article10">
                                    <i value="10" class='remove bx bx-x'></i>
                                    <div class="info-article">
                                        <h2>Teste</h2>
                                        <textarea class="text-area-content" name="conteudo" rows="18" cols="36" required readonly value="<?php echo'$BIO'?>"></textarea>
                                    </div>
                                </div>
                                <div class="card-article4">
                                    <img src="CSS/IMG/article-img/article 6.jpg" alt="">
                                    <div class="info-article">
                                        <h2>Teste</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt perspiciatis officiis aliquid beatae deleniti obcaecati et, porro est, corporis facere autem vero quidem, ullam asperiores odio totam id consequatur quas!</p>
                                        <button class="read_more" value="11">Continue lendo</button>
                                    </div>
                                </div>
                                <div class="popup-card-article11">
                                    <i value="11" class='remove bx bx-x'></i>
                                    <div class="info-article">
                                        <h2>Teste</h2>
                                        <textarea class="text-area-content" name="conteudo" rows="18" cols="36" required readonly value="<?php echo'$BIO'?>"></textarea>
                                    </div>
                                </div>
                                <div class="card-article4">
                                    <img src="CSS/IMG/article-img/article 4.jpg" alt="">
                                    <div class="info-article">
                                        <h2>Teste</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt perspiciatis officiis aliquid beatae deleniti obcaecati et, porro est, corporis facere autem vero quidem, ullam asperiores odio totam id consequatur quas!</p>
                                        <button class="read_more" value="12">Continue lendo</button>
                                    </div>
                                </div>
                                <div class="popup-card-article12">
                                    <i value="12" class='remove bx bx-x'></i>
                                    <div class="info-article">
                                        <h2>Teste</h2>
                                        <textarea class="text-area-content" name="conteudo" rows="18" cols="36" required readonly value="<?php echo'$BIO'?>"></textarea>
                                    </div>
                                </div>
                            </div>
                                <div class="main-home-box5">
                                    <div class="card-article5">
                                        <img src="CSS/IMG/article-img/article 2.jpg" alt="">
                                        <div class="info-article">
                                            <h2>Teste</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt perspiciatis officiis aliquid beatae deleniti obcaecati et, porro est, corporis facere autem vero quidem, ullam asperiores odio totam id consequatur quas!</p>
                                            <button class="read_more" value="13">Continue lendo</button>
                                        </div>
                                    </div>
                                    <div class="popup-card-article13">
                                        <i value="13" class='remove bx bx-x'></i>
                                        <div class="info-article">
                                            <h2>Teste</h2>
                                            <textarea class="text-area-content" name="conteudo" rows="18" cols="36" required readonly value="<?php echo'$BIO'?>"></textarea>
                                        </div>
                                    </div>
                                    <div class="card-article5">
                                        <img src="CSS/IMG/article-img/article 3.jpg" alt="">
                                        <div class="info-article">
                                            <h2>Teste</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt perspiciatis officiis aliquid beatae deleniti obcaecati et, porro est, corporis facere autem vero quidem, ullam asperiores odio totam id consequatur quas!</p>
                                            <button class="read_more" value="14">Continue lendo</button>
                                        </div>
                                    </div>
                                    <div class="popup-card-article14">
                                        <i value="14" class='remove bx bx-x'></i>
                                        <div class="info-article">
                                            <h2>Teste</h2>
                                            <textarea class="text-area-content" name="conteudo" rows="18" cols="36" required readonly value="<?php echo'$BIO'?>"></textarea>
                                        </div>
                                    </div>
                                    <div class="card-article5">
                                        <img src="CSS/IMG/article-img/article 5.jpg" alt="">
                                        <div class="info-article">
                                            <h2>Teste</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt perspiciatis officiis aliquid beatae deleniti obcaecati et, porro est, corporis facere autem vero quidem, ullam asperiores odio totam id consequatur quas!</p>
                                            <button class="read_more" value="15">Continue lendo</button>
                                        </div>
                                    </div>
                                    <div class="popup-card-article15">
                                        <i value="15" class='remove bx bx-x'></i>
                                        <div class="info-article">
                                            <h2>Teste</h2>
                                            <textarea class="text-area-content" name="conteudo" rows="18" cols="36" required readonly value="<?php echo'$BIO'?>"></textarea>
                                        </div>
                                    </div>
                                </div>
                <div class="bottom-home-box">
                    <div class="bullets-home">
                        <span class="stats active" value="1"></span>
                        <span class="stats" value="2"></span>
                        <span class="stats" value="3"></span>
                        <span class="stats" value="4"></span>
                        <span class="stats" value="5"></span>
                    </div>
                </div>
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