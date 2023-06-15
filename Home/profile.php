<?php
    include_once("../Connection/conect.php"); 

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_FILES['article_image']) && !empty($_FILES['article_image']['name'])) {
                $allowedExtensions = array('jpg', 'jpeg', 'png');
                $fileExtension = strtolower(pathinfo($_FILES['article_image']['name'], PATHINFO_EXTENSION));
                $fileMime = exif_imagetype($_FILES['article_image']['tmp_name']);
                if (in_array($fileExtension, $allowedExtensions) && ($fileMime === IMAGETYPE_JPEG || $fileMime === IMAGETYPE_PNG)) {
                    $maxFileSize = 2 * 1024 * 1024; 
                    $fileSize = $_FILES['article_image']['size'];
                    if ($fileSize <= $maxFileSize) {
                        $uniqueFileName = uniqid('image_') . '.' . $fileExtension;
                        $destination = 'caminho/para/pasta/imagens/' . $uniqueFileName;
                        if (move_uploaded_file($_FILES['article_image']['tmp_name'], $destination)) {
                            echo"<alert>A imagem foi carregada com sucesso!</alert>";
                        } else {
                            echo "<alert>Ocorreu um erro ao mover o arquivo.</alert>";
                        }
                    } else {
                        echo "<alert>O tamanho do arquivo excede o limite permitido.</alert>";
                    }
                } else {
                    echo "<alert>O formato de arquivo enviado não é suportado. Apenas arquivos JPG e PNG são permitidos.</alert>";
                }
            }
        }   
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../CSS/style-profile.css" />
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/nunito" rel="stylesheet">
    <link rel="icon" type="png" syzes="32x32" href="../CSS/IMG/brand-icon/parrot.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script defer src="JS/script-profile.js"></script>
    <title>Brasil em Viagem</title>
</head>
<body>
<header>
    <nav>
            <a href="home.php"><img id="logo" src="../CSS/IMG/brand-icon/parrot.png" alt="">Brasil em Viagem</a>
            <ul class="navlist">
                <a href="home.php">Artigos</a>
                <a href="roadmap.php">Roteiros</a>
                <a href="gastronomy.php">Receitas</a>
                <button id="btn"><i style="font-size: 1.5em;" class='plus bx bx-plus'></i></button>
                <a href=""><i style="font-size: 1.5em;" class='user bx bxs-user' ></i></a>
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
    <main>
    <ul id="publish-options" class="options">
        <li><a href="Home/publish-article.php">Artigo</a></li>
        <li><a href="Home/publish-roadmap.php">Roteiro</a></li>
        <li><a href="Home/publish-gastronomy.php">Receita</a></li>
    </ul>
    <div class="box">
        <div class="left-box-pf">
            <div class="profile-pic">
                <img src="<?php echo $imagePath; ?>" alt="Sinforoso"/>
            </div>
            <div class="about">
                <h2><?php echo $username; ?></h2>
                <h4><i><?php echo $ROLE; ?></i></h4>
                <ul class="content">
                    <li><i class='bx bxs-envelope'></i></li>
                    <li><i class='bx bxl-instagram-alt'></i></li>
                    <li><i class='bx bxl-twitter' ></i></li>
                </ul>
                <textarea class="bio-textarea" name="BIO" rows="15" cols="45" required><?php echo $BIO; ?></textarea>
            </div>
        </div>
        <div class="right-box-pf">
            <ul>
                <li>Artigos</li>
                    <?php
                        $query = "SELECT * FROM article WHERE IDUSER = :IDUSER";
                        $stmt = $pdo->prepare($query);
                        $stmt->bindParam(':IDUSER', $_SESSION['ID']);
                        $stmt->execute();
                        
                        $limitPerPage = 3;
                        $totalArticles = 15;
                        $cardTypes = array('card-article1', 'card-article2', 'card-article3', 'card-article4', 'card-article5');
                        $popupCardIndex = 1;
                        $mainHomeBox = 1;
                        
                        for ($page = 1; $page <= ceil($totalArticles / $limitPerPage); $page++) {
                            $offset = ($page - 1) * $limitPerPage;
                        
                            $query = "SELECT * FROM publicacoes WHERE IDUSER = :IDUSER LIMIT :limit OFFSET :offset";
                            $stmt = $pdo->prepare($query);
                            $stmt->bindParam(':IDUSER', $_SESSION['ID']);
                            $stmt->bindParam(':limit', $limitPerPage, PDO::PARAM_INT);
                            $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
                            $stmt->execute();
                        
                            if ($stmt->rowCount() > 0) {
                                $cardTypeIndex = ($page - 1) % count($cardTypes);
                                $articleNumber = $offset + 1;
                        
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
                                    if ($articleNumber > $totalArticles) {
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
                    ?>
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