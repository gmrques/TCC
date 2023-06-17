<?php
    include_once("../Connection/conect.php"); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../CSS/style-gastronomy.css" />
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/nunito" rel="stylesheet">
    <link rel="icon" type="png" syzes="32x32" href="../CSS/IMG/brand-icon/parrot.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script defer src="../JS/script-gastronomy.js"></script>
    <title>Brasil em Viagem</title>
</head>
<header>
    <nav>
            <a href="home.php"><img id="logo" src="../CSS/IMG/brand-icon/parrot.png" alt="">Brasil em Viagem</a>
            <ul class="navlist">
                <a href="home.php">Artigos</a>
                <a href="roadmap.php">Roteiros</a>
                <a href="gastronomy.php">Receitas</a>
                <a href="settings.php"><i style="font-size: 1.7em;" class='bx bx-cog'></i></a>
                <button id="btn"><i style="font-size: 1.5em;" class='plus bx bx-plus'></i></button>
                <a href="profile.php"><i style="font-size: 1.5em;" class='user bx bxs-user' ></i></a>
                <div class="container1">
                    <div class="icon">
                        <i class='search bx bx-search-alt'></i>
                        <?php
                            if (isset($_POST['searchTerm'])) {
                                if (empty($_POST['searchTerm'])) {
                                    echo '<script>document.getElementsByName("searchTerm").disabled = true;</script>';
                                } else {
                                    echo '<script>document.getElementsByName("searchTerm").disabled = false;</script>';
                                    header('location: search.php');
                                }
                            }
                        ?>
                    </div>
                    <div class="input">
                        <input type="text" placeholder="Pesquisar" id="search" name="searchTerm">
                        <i class='close bx bx-x'></i>
                    </div>
                </div>
            </ul>
        </nav>
    </header>
    <body>
    <main>
    <ul id="publish-options" class="options">
            <li><a href="publish-article.php">Artigo</a></li>
            <li><a href="publish-roadmap.php">Roteiro</a></li>
            <li><a href="publish-gastronomy.php">Receita</a></li>
        </ul>
        <div class="box">
            <div class="top-gastronomy-box">
                <h1>Sugestão do dia!</h1>
            </div>
            <div class="left-gastronomy-box">
                <div class="slider-gastronomy">
                    <div class="list-img">
                        <div class="item">
                            <img src="../CSS/IMG/gastronomy/1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="../CSS/IMG/gastronomy/2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="../CSS/IMG/gastronomy/6.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="../CSS/IMG/gastronomy/4.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="../CSS/IMG/gastronomy/5.jpg" alt="">
                        </div>
                        <div class="ul-dots">
                            <li class="active"></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-gastronomy-box">
            <?php
                $db = new Connection();
                $connection = $db->getConnection();
                $publicacoesEncontradas = false;

                if (!isset($_SESSION['last_update']) || date('Y-m-d') > $_SESSION['last_update']) {
                    $query = "SELECT * FROM gastronomy ORDER BY RAND() LIMIT 4";
                    $stmt = $connection->query($query);

                    if ($stmt->rowCount() > 0) {
                        $_SESSION['highlighted_posts'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    }
                    $_SESSION['last_update'] = date('Y-m-d');
                }

                if (isset($_SESSION['highlighted_posts']) && is_array($_SESSION['highlighted_posts'])) {
                    $publicacoesEncontradas = true;
                    foreach ($_SESSION['highlighted_posts'] as $post) {
                        $TITLE_RECIPE = $post['TITLE_RECIPE'];
                        $INGREDIENTS = $post['INGREDIENTS'];
                        $STEP_BY_STEP = $post['STEP_BY_STEP'];
                        
                        echo "<div class= 'gastronomy-card'>";
                        echo "<h2>$TITLE_RECIPE</h2>";
                        echo "<p>$INGREDIENTS</p>";
                        echo '</div>';

                        echo '<div class="popup-card-gastronomy1" value="1">';
                        echo '<i value="1" class="remove bx bx-x"></i>';
                        echo '<div class="info-article">';
                        echo "<h2>$TITLE_RECIPE</h2>";
                        echo "<textarea class='text-area-content' name='Ingredients' rows='12' cols='36' required>$INGREDIENTS</textarea>";
                        echo "<textarea class='text-area-content' name='Step_by_step' rows='12' cols='36' required>$STEP_BY_STEP</textarea>";
                        echo '</div>';
                        echo '</div>';
                    }
                }   if (!$publicacoesEncontradas) {
                    echo '<p style="display: flex; align-items: center; justify-content: center; font-size: 2em; color: #21b469;">Nenhuma publicação encontrada.</p>';
                }
            ?>
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