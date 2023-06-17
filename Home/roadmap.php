<?php 

include_once("../Connection/conect.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../CSS/style-roadmap.css" />
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/nunito" rel="stylesheet">
    <link rel="icon" type="png" syzes="32x32" href="../CSS/IMG/brand-icon/parrot.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script defer src="../JS/script-roadmap.js"></script>
    <title>Brasil em Viagem</title>
</head>
<header>
    <nav>
            <a href="home.php"><img id="logo" src="../CSS/IMG/brand-icon/parrot.png" alt="">Brasil em Viagem</a>
            <ul class="navlist">
                <a href="home.php">Artigos</a>
                <a href="roadmap.php">Roteiros</a>
                <a href="gastronomy.php">Receitas</a>
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
            <div class="top-roadmap-box">
                <p>Mais recentes</p>
            </div>

            <?php
              $db = new Connection();
              $connection = $db->getConnection();

              $query = "SELECT roadmap.* FROM roadmap JOIN user ON roadmap.ID_ROADMAP = user.ID WHERE user.USERNAME = :USERNAME";
              $stmt = $connection->prepare($query);
              $stmt->bindParam(':USERNAME', $_SESSION['USERNAME']);
              $stmt->execute();

              $limitPerPage = 3;
              $totalRoadmaps = 9;
              $mainRoadmapBox = 1;
              $publicacoesEncontradas = false;

              $query = "SELECT roadmap.* FROM roadmap JOIN user ON roadmap.ID_ROADMAP = user.ID WHERE user.USERNAME = :USERNAME LIMIT :limit OFFSET :offset";
              $stmt = $connection->prepare($query);
              $stmt->bindParam(':USERNAME', $_SESSION['USERNAME']);
              $stmt->bindValue(':limit', $limitPerPage, PDO::PARAM_INT);

              for ($page = 1; $page <= ceil($totalRoadmaps / $limitPerPage); $page++) {
                  $offset = ($page - 1) * $limitPerPage;
                  $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
                  $stmt->execute();

                  if ($stmt->rowCount() > 0) {
                      $publicacoesEncontradas = true;
                      $articleNumber = $offset + 1;

                      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                          $DESTINATION = $row['DESTINATION'];
                          $DURATION = $row['DURATION'];
                          $ROADMAP = $row['ROADMAP'];

                          echo '<div class="main-roadmap-box' . $mainRoadmapBox . '">';
                          echo '<div class="card-roadmap">';
                          echo '<div>';
                          echo '<img src="../CSS/IMG/article-img/article ' . $articleNumber . '.jpg" alt="">';
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
                  }
              }

              if (!$publicacoesEncontradas) {
                  echo '<p style="display: flex; align-items: center; justify-content: center; font-size: 2em; color: #21b469;">Nenhuma publicação encontrada.</p>';
              } else {
                  echo '<div class="bottom-home-box">';
                  echo '<div class="bullets-home">';
                  echo '<span class="stats active" value="1"></span>';
                  echo '<span class="stats" value="1"></span>';
                  echo '<span class="stats" value="3"></span>';
                  echo '<span class="stats" value="4"></span>';
                  echo '<span class="stats" value="5"></span>';
                  echo '</div>';
                  echo '</div>';
              }
            ?>              
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