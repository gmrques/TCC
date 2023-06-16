<?php
    include_once("../Connection/conect.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../CSS/style-search.css" />
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/nunito" rel="stylesheet">
    <link rel="icon" type="png" syzes="32x32" href="../CSS/IMG/brand-icon/parrot.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script defer src="JS/script-search.js"></script>
    <script defer src="../JS/script-dropdown.js"></script>
    <title>Brasil em Viagem</title>
</head>
<body>
<header>
    <nav>
            <a href="home.php"><img id="logo" src="../CSS/IMG/brand-icon/parrot.png" alt="">Brasil em Viagem</a>
            <ul class="navlist">
                <a href="home.php">Destinos</a>
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
                                    $query = "(SELECT 'article' AS table_name, title FROM article WHERE title LIKE :searchTerm)
                                                UNION
                                                (SELECT 'gastronomy' AS table_name, title FROM gastronomy WHERE title LIKE :searchTerm)
                                                UNION
                                                (SELECT 'roadmap' AS table_name, title FROM roadmap WHERE title LIKE :searchTerm)";
                                    $stmt = $pdo->prepare($query);
                                    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%');
                                    $stmt->execute();
                                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                    $_SESSION['results'] = $results;
                                    header('location: search.php');
                                }
                            }
                        ?>
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
                <select id="menu" name="options">
                    <option class="stats active" value="1">Artigos</option>
                    <option class="stats" value="2">Roteiros</option>
                    <option class="stats" value="3">Gastronomia</option>
                </select>
            </div>
            <div class="main-box">
            <?php
                $opcao = $_POST['opcao'];
                if ($opcao === '1') {
                    echo "<h2 class='search-title'>Resultados de Artigos</h2>";
                        $query = "SELECT * FROM article ORDER BY publication_date DESC";
                        $stmt = $pdo->prepare($query);
                        $stmt->execute();

                        $limitPerPage = 3;
                        $totalArticles = 15;
                        $cardTypes = array('card-article1', 'card-article2', 'card-article3', 'card-article4', 'card-article5');
                        $popupCardIndex = 1;
                        $mainHomeBox = 1;

                        for ($page = 1; $page <= ceil($totalArticles / $limitPerPage); $page++) {
                            $offset = ($page - 1) * $limitPerPage;

                            $query = "SELECT * FROM article ORDER BY publication_date DESC LIMIT :limit OFFSET :offset";
                            $stmt = $pdo->prepare($query);
                            $stmt->bindParam(':limit', $limitPerPage, PDO::PARAM_INT);
                            $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
                            $stmt->execute();

                            if ($stmt->rowCount() > 0) {
                                $cardTypeIndex = ($page - 1) % count($cardTypes);
                                $articleNumber = $offset + 1;
                                $cardsDisplayed = 0;

                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    $title = $row['TITLE_ARTICLE'];
                                    $content = $row['CONTENT_ARTICLE'];
                                    $cardType = $cardTypes[$cardTypeIndex];

                                    echo '<div class="' . $mainHomeBox . '">';
                                    echo '<div class="' . $cardType . '">';
                                    echo '<img src="CSS/IMG/article-img/article ' . $articleNumber . '.jpg" alt="">';
                                    echo '<div class="info-article">';
                                    echo '<h2>' . $title . '</h2>';
                                    echo '<p>' . $content . '</p>';
                                    echo '<button class="read_more" value="' . $articleNumber . '">Continue lendo</button>';
                                    echo '</div>';
                                    echo '</div>';

                                    echo '<div class="popup-card-article' . $i . '">';
                                    echo '<i value="' . $i . '" class="remove bx bx-x"></i>';
                                    echo '<div class="info-article">';
                                    echo '<h2>' . $title . '</h2>';
                                    echo '<p>' . $content . '</p>';
                                    echo '<textarea class="text-area-content" name="conteudo" rows="18" cols="36" required readonly value="' . $BIO . '"></textarea>';
                                    echo '</div>';
                                    echo '</div>';
                                    $popupCardIndex++;

                                    $cardTypeIndex++;
                                    if ($cardTypeIndex >= count($cardTypes)) {
                                        $cardTypeIndex = 0;
                                    }

                                    $articleNumber++;
                                    $cardsDisplayed++;

                                    if ($articleNumber > $totalArticles || $cardsDisplayed >= $totalArticles) {
                                        break;
                                    }

                                    if ($articleNumber % 3 == 0) {
                                        $mainHomeBox++;
                                        if ($mainHomeBox > 5) {
                                            $mainHomeBox = 1;
                                        }
                                    }
                                }
                            } else {
                                echo "<p>Nenhuma publicação encontrada.</p>";
                            }
                        }

                } elseif ($opcao === '2') {
                    echo "<h2 class='search-title'>Resultados de Roteiros de viagens</h2>";
                    $searchTerm = $_POST['searchTerm'];

                    $query = "SELECT * FROM roadmap WHERE DESTINATION LIKE :searchTerm";
                    $stmt = $pdo->prepare($query);
                    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%');
                    $stmt->execute();
                    
                    $limitPerPage = 3;
                    $totalRoadmaps = $stmt->rowCount();
                    $mainRoadmapBox = 1;
                    
                    for ($page = 1; $page <= ceil($totalRoadmaps / $limitPerPage); $page++) {
                        $offset = ($page - 1) * $limitPerPage;
                    
                        $query = "SELECT * FROM roadmap WHERE DESTINATION LIKE :searchTerm LIMIT :limit OFFSET :offset";
                        $stmt = $pdo->prepare($query);
                        $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%');
                        $stmt->bindParam(':limit', $limitPerPage, PDO::PARAM_INT);
                        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
                        $stmt->execute();
                    
                        if ($stmt->rowCount() > 0) {
                            $articleNumber = $offset + 1;
                    
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                $DESTINATION = $row['DESTINATION'];
                                $DURATION = $row['DURATION'];
                                $ROADMAP = $row['ROADMAP'];
                    
                                echo '<div class="main-roadmap-box' . $mainRoadmapBox . '">';
                                echo '<div class="card-roadmap">';
                                echo '<div>';
                                echo '<img src="CSS/IMG/article-img/article ' . $articleNumber . '.jpg" alt="">';
                                echo '<h2>' . $DESTINATION . '</h2>';
                                echo '<p>' . $DURATION . '</p>';
                                echo "<i class='bx bx-bookmark-plus'></i>";
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';

                                echo '<div class="popup-card-roadmap">';
                                echo '<div>';
                                echo '<h2>' . $DESTINATION . '</h2>';
                                echo '<p>' . $DURATION . '</p>';
                                echo '<textarea class="text-area-content" name="conteudo" rows="18" cols="36" required readonly>' . $ROADMAP . '</textarea>';
                                echo '</div>';
                                echo '</div>';
                    
                                $articleNumber++;
                                if ($articleNumber > $totalRoadmaps) {
                                    break;
                                }
                    
                                if ($articleNumber % $limitPerPage == 0) {
                                    $mainRoadmapBox++;
                                    if ($mainRoadmapBox > $limitPerPage) {
                                        $mainRoadmapBox = 1;
                                    }
                                }
                            }
                        } else {
                            echo "<p>Nenhuma publicação encontrada.</p>";
                        }
                    }                       

                } elseif ($opcao === '3') {
                    echo "<h2 class='search-title'>Resultados de Receitas</h2>";
    
                    $searchTerm = $_POST['searchTerm'];

                    $query = "SELECT * FROM recipes WHERE title LIKE :searchTerm LIMIT 4";
                    $stmt = $pdo->prepare($query);
                    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%');
                    $stmt->execute();
                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    
                    if ($results) {
                        foreach ($results as $recipe) {
                            $TITLE_RECIPE = $recipe['TITLE_RECIPE'];
                            $INGREDIENTS = $recipe['INGREDIENTS'];
                            $STEP_BY_STEP = $recipe['STEP_BY_STEP'];
                    
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
                    } else {
                        echo 'Nenhum resultado encontrado.';
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
            <?php }?>
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