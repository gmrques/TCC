<?php
    include_once("Connection/conect.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="CSS/style-search.css" />
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/nunito" rel="stylesheet">
    <link rel="icon" type="png" syzes="32x32" href="CSS/IMG/brand-icon/parrot.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script defer src="JS/script-search.js"></script>
    <script defer src="JS/script-dropdown.js"></script>
    <title>Brasil em Viagem</title>
</head>
<body>
<header>
    <nav>
            <a href="home.php"><img id="logo" src="CSS/IMG/brand-icon/parrot.png" alt="">Brasil em Viagem</a>
            <ul class="navlist">
                <a href="destinations.php">Destinos</a>
                <a href="roadmap.php">Roteiros</a>
                <a href="gastronomy.php">Receitas</a>
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
            <li><a href="publish-article.php">Artigo</a></li>
            <li><a href="publish-roadmap.php">Roteiro</a></li>
            <li><a href="publish-gastronomy.php">Receita</a></li>
        </ul>
        <div class="box">
            <div class="top-box">
                <h2>Encontramos os seguintes <br>resultados para a pesquisa " ":</h2>
                <select id="menu">
                    <option class="stats active" value="1">Artigos</option>
                    <option class="stats" value="2">Roteiros</option>
                    <option class="stats" value="3">Gastronomia</option>
                </select>
            </div>
            <div class="main-box">
                <section class="search-article">
                    <div class="main-home-box">
                        <div class="card-article">
                        <img src="CSS/IMG/article-img/article 1.jpg" alt="">
                        <div class="info-article">
                            <h2>Teste</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt perspiciatis officiis aliquid beatae deleniti obcaecati et, porro est, corporis facere autem vero quidem, ullam asperiores odio totam id consequatur quas!</p>
                            <button class="read_more">Continue lendo</button>
                        </div>
                        </div>
                        <div class="card-article">
                        <img src="CSS/IMG/article-img/article 2.jpg" alt="">
                        <div class="info-article">
                            <h2>Teste</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt perspiciatis officiis aliquid beatae deleniti obcaecati et, porro est, corporis facere autem vero quidem, ullam asperiores odio totam id consequatur quas!</p>
                            <button class="read_more">Continue lendo</button>
                        </div>
                        </div>
                        <div class="card-article">
                        <img src="CSS/IMG/article-img/article 3.jpg" alt="">
                        <div class="info-article">
                            <h2>Teste</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt perspiciatis officiis aliquid beatae deleniti obcaecati et, porro est, corporis facere autem vero quidem, ullam asperiores odio totam id consequatur quas!</p>
                            <button class="read_more">Continue lendo</button>
                        </div>
                    </div>
                </section>
                <section class="search-roadmap">
                    <div class="main-roadmap-box">
                    <div class="card-roadmap">
                        <div>
                            <img src="CSS/IMG/article-img/article 6.jpg" alt="">
                            <h2>teste</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt perspiciatis officiis aliquid beatae deleniti obcaecati et, porro est, corporis facere autem vero quidem, ullam asperiores odio totam id consequatur quas!</p>
                            <i class='bx bx-bookmark-plus'></i>
                        </div>
                    </div>
                    <div class="card-roadmap">
                        <div>
                            <img src="CSS/IMG/article-img/article 4.jpg" alt="">
                            <h2>teste</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt perspiciatis officiis aliquid beatae deleniti obcaecati et, porro est, corporis facere autem vero quidem, ullam asperiores odio totam id consequatur quas!</p>
                            <i class='bx bx-bookmark-plus'></i>
                        </div>
                    </div>
                    <div class="card-roadmap">
                        <div>
                            <img src="CSS/IMG/article-img/article 5.jpg" alt="">
                            <h2>teste</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt perspiciatis officiis aliquid beatae deleniti obcaecati et, porro est, corporis facere autem vero quidem, ullam asperiores odio totam id consequatur quas!</p>
                            <i class='bx bx-bookmark-plus'></i>
                        </div>
                    </div>
                </div>
                </section>
                <section class="search-gastronomy">
                    <div class="main-gastronomy-box">
                        <div class="gastronomy-card">
                            <h2>Farofa</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, eligendi. Recusandae similique nemo debitis quis velit, mollitia ea atque eius fugit, ut eum doloremque ipsum. Mollitia ut hic illum! Beatae?</p>
                        </div>
                        <div class="gastronomy-card">
                            <h2>Farofa</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, eligendi. Recusandae similique nemo debitis quis velit, mollitia ea atque eius fugit, ut eum doloremque ipsum. Mollitia ut hic illum! Beatae?</p>
                        </div>
                        <div class="gastronomy-card">
                            <h2>Farofa</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, eligendi. Recusandae similique nemo debitis quis velit, mollitia ea atque eius fugit, ut eum doloremque ipsum. Mollitia ut hic illum! Beatae?</p>
                        </div>
                        <div class="gastronomy-card">
                            <h2>Farofa</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, eligendi. Recusandae similique nemo debitis quis velit, mollitia ea atque eius fugit, ut eum doloremque ipsum. Mollitia ut hic illum! Beatae?</p>
                        </div>
                    </div>
                </section>
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