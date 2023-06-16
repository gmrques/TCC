<?php
    include_once("../Connection/conect.php");
    include_once("../Classes/Operations.php");

    if (isset($_POST['Salvar/Atualizar'])) {
        $query = "SELECT * FROM article WHERE IDUSER = :IDUSER";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':IDUSER', $_SESSION['ID']);
        $stmt->execute();
        
        if ($stmt->rowCount() > 0) {
            personalizeUpdate();
        } else {
            personalize();
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['EMAIL']) && isset($_POST['FULL_NAME']) && isset($_POST['USERNAME']) && isset($_POST['PASSWORD'])) {
            $email = $_POST['EMAIL'];
            $fullName = $_POST['FULL_NAME'];
            $username = $_POST['USERNAME'];
            $password = $_POST['PASSWORD'];
            
            $query = "SELECT EMAIL, FULL_NAME, USERNAME, PASSWORD FROM usuarios WHERE ID = :ID";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':ID', $_SESSION['ID']);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $differences = array();
            if ($email !== $row['EMAIL']) {
                $differences[] = 'Email';
            }
            if ($fullName !== $row['FULL_NAME']) {
                $differences[] = 'Nome completo';
            }
            if ($username !== $row['USERNAME']) {
                $differences[] = 'Nome de usuário';
            }
            if ($password !== $row['PASSWORD']) {
                $differences[] = 'Senha';
            }
            
            if (!empty($differences)) {
                $message = 'Os seguintes campos estão diferentes dos valores cadastrados anteriormente: ' . implode(', ', $differences) . '.';
                echo $message;
            } else {
                update($postValues);
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
    <link type="text/css" rel="stylesheet" href="../CSS/style-settings.css" />
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/nunito" rel="stylesheet">
    <link rel="icon" type="png" syzes="32x32" href="../CSS/IMG/brand-icon/parrot.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script defer src="../JS/script-settings.js"></script>
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
    <main>
        <ul id="publish-options" class="options">
            <li><a href="publish-article.php">Artigo</a></li>
            <li><a href="publish-roadmap">Roteiro</a></li>
            <li><a href="publish-gastronomy">Receita</a></li>
        </ul>
        <div class="box">
            <div class="left-box-prs">
                <button id="update-user-btn"><i class='bx bxs-user' aria-hidden="true"></i></button>
                <button id="udpate-palette-btn"><i class='bx bxs-palette' aria-hidden="true"></i></button>
                <button id="logout-btn" action="?logout"><i class='bx bx-log-out' aria-hidden="true" action="?logout"></i></button>
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
                        <h1>Dê a sua cara ao perfil!</h1>
                        <div class="update-form">
                            <div class="update-wrap">
                                <input class="img-upload" type="image" name="PROFILE_PIC" required>
                            </div>
                            <div class="update-wrap">
                                <input type="text" class="update-field" name="ROLE" autocomplete="off"/>
                                <label for="ROLE"> Cargo </label>
                            </div>
                            <div class="update-wrap">
                                <textarea class="update-textarea" name="BIO" rows="15" cols="60" required></textarea>
                                <label for="BIO"> Biografia </label>
                            </div>
                            <input type="submit" value="Salvar" name="Salvar/Atualizar" class="palette">
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