<?php
    include_once("Connection/conect.php"); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="CSS/style-gastronomy.css" />
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/nunito" rel="stylesheet">
    <link rel="icon" type="png" syzes="32x32" href="CSS/IMG/brand-icon/parrot.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script defer src="JS/script-gastronomy.js"></script>
    <title>Brasil em Viagem</title>
</head>
    <header>
    <nav>
            <a href="home.php"><img id="logo" src="CSS/IMG/brand-icon/parrot.png" alt="">Brasil em Viagem</a>
            <ul class="navlist">
                <a href="destination.php">Destinos</a>
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
                            <img src="CSS/IMG/Carrousel-register/11.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="CSS/IMG/Carrousel-register/16.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="CSS/IMG/Carrousel-register/12.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="CSS/IMG/Carrousel-register/9.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="CSS/IMG/Carrousel-register/8.jpg" alt="">
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
                if (!isset($_SESSION['last_update']) || date('Y-m-d') > $_SESSION['last_update']) {
                    $query = "SELECT * FROM gastronomy ORDER BY RAND() LIMIT 4";
                    $result = $conn->query($query);

                    if ($result->num_rows > 0) {
                        $_SESSION['highlighted_posts'] = array();
                        while ($row = $result->fetch_assoc()) {
                            $_SESSION['highlighted_posts'][] = $row;
                        }
                    }
                    $_SESSION['last_update'] = date('Y-m-d');
                }

                foreach ($_SESSION['highlighted_posts'] as $post) {
                    $TITLE_RECIPE = $post['TITLE_RECIPE'];
                    $INGREDIENTS = $post['INGREDIENTS'];

                    echo '<div class="gastronomy-card">';
                    echo "<h2>$TITLE_RECIPE</h2>";
                    echo "<p>$INGREDIENTS</p>";
                    echo '</div>';
                }
            ?>
            <div class="popup-card-gastronomy1" value="1">
                <i value="1" class='remove bx bx-x'></i>
                <div class="info-article">
                    <?php
                    if (!empty($_SESSION['highlighted_posts'])) {
                        $firstPost = $_SESSION['highlighted_posts'][0];
                        $TITLE_RECIPE = $firstPost['TITLE_RECIPE'];
                        $INGREDIENTS = $firstPost['INGREDIENTS'];
                        $STEP_BY_STEP = $firstPost['STEP_BY_STEP'];
                        ?>
                        <h2><?php echo $TITLE_RECIPE; ?></h2>
                        <textarea class="text-area-content" name="Ingredients" rows="12" cols="36" required><?php echo $INGREDIENTS; ?></textarea>
                        <textarea class="text-area-content" name="Step_by_step" rows="12" cols="36" required><?php echo $STEP_BY_STEP; ?></textarea>
                        <?php
                    }
                    // Adicionar o JavaScript
                    ?>
                </div>
            </div>
            <div class="popup-card-gastronomy2" value="2">
                <i value="1" class='remove bx bx-x'></i>
                <div class="info-article">
                    <?php
                    if (!empty($_SESSION['highlighted_posts'])) {
                        $firstPost = $_SESSION['highlighted_posts'][1];
                        $TITLE_RECIPE = $firstPost['TITLE_RECIPE'];
                        $INGREDIENTS = $firstPost['INGREDIENTS'];
                        $STEP_BY_STEP = $firstPost['STEP_BY_STEP'];
                        ?>
                        <h2><?php echo $TITLE_RECIPE; ?></h2>
                        <textarea class="text-area-content" name="Ingredients" rows="12" cols="36" required><?php echo $INGREDIENTS; ?></textarea>
                        <textarea class="text-area-content" name="Step_by_step" rows="12" cols="36" required><?php echo $STEP_BY_STEP; ?></textarea>
                        <?php
                    }
                    // Adicionar o JavaScript
                    ?>
                </div>
            </div>  
            <div class="popup-card-gastronomy3" value="3">
                <i value="1" class='remove bx bx-x'></i>
                <div class="info-article">
                    <?php
                    if (!empty($_SESSION['highlighted_posts'])) {
                        $firstPost = $_SESSION['highlighted_posts'][2];
                        $TITLE_RECIPE = $firstPost['TITLE_RECIPE'];
                        $INGREDIENTS = $firstPost['INGREDIENTS'];
                        $STEP_BY_STEP = $firstPost['STEP_BY_STEP'];
                        ?>
                        <h2><?php echo $TITLE_RECIPE; ?></h2>
                        <textarea class="text-area-content" name="Ingredients" rows="12" cols="36" required><?php echo $INGREDIENTS; ?></textarea>
                        <textarea class="text-area-content" name="Step_by_step" rows="12" cols="36" required><?php echo $STEP_BY_STEP; ?></textarea>
                        <?php
                    }
                    // Adicionar o JavaScript
                    ?>
                </div>
            </div>  
            <div class="popup-card-gastronomy4" value="4">
                <i value="1" class='remove bx bx-x'></i>
                <div class="info-article">
                <?php
                    if (!empty($_SESSION['highlighted_posts'])) {
                        $firstPost = $_SESSION['highlighted_posts'][3];
                        $TITLE_RECIPE = $firstPost['TITLE_RECIPE'];
                        $INGREDIENTS = $firstPost['INGREDIENTS'];
                        $STEP_BY_STEP = $firstPost['STEP_BY_STEP'];
                        ?>
                        <h2><?php echo $TITLE_RECIPE; ?></h2>
                        <textarea class="text-area-content" name="Ingredients" rows="12" cols="36" required><?php echo $INGREDIENTS; ?></textarea>
                        <textarea class="text-area-content" name="Step_by_step" rows="12" cols="36" required><?php echo $STEP_BY_STEP; ?></textarea>
                        <?php
                    }
                    // Adicionar o JavaScript
                    ?>
                </div>
            </div>  
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