<?php
    include_once("../Connection/conect.php");
    include_once("../Classes/Operations.php");

    $db = new Connection();
    $connection = $db->getConnection();
    session_start();
    $EMAIL = isset($_SESSION['EMAIL']) ? $_SESSION['EMAIL'] : '';
    $FULL_NAME = isset($_SESSION['FULL_NAME']) ? $_SESSION['FULL_NAME'] : '';
    $USERNAME = isset($_SESSION['USERNAME']) ? $_SESSION['USERNAME'] : '';
    $PASSWORD = isset($_SESSION['PASSWORD']) ? $_SESSION['PASSWORD'] : '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['EMAIL']) && isset($_POST['FULL_NAME']) && isset($_POST['USERNAME']) && isset($_POST['PASSWORD'])) {
            $EMAIL = $_POST['EMAIL'];
            $FULL_NAME = $_POST['FULL_NAME'];
            $USERNAME = $_POST['USERNAME'];
            $PASSWORD = $_POST['PASSWORD'];
            
            $query = "SELECT EMAIL, FULL_NAME, USERNAME, PASSWORD FROM usuarios WHERE ID = :ID";
            $stmt = $connection->prepare($query);
            $stmt->bindParam(':ID', $_SESSION['ID']);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $differences = array();
            if ($EMAIL !== $row['EMAIL']) {
                $differences[] = 'Email';
            }
            if ($FULL_NAME !== $row['FULL_NAME']) {
                $differences[] = 'Nome completo';
            }
            if ($USERNAME !== $row['USERNAME']) {
                $differences[] = 'Nome de usuário';
            }
            if ($PASSWORD !== $row['PASSWORD']) {
                $differences[] = 'Senha';
            }
            
            if (!empty($differences)) {
                $message = 'Os seguintes campos estão diferentes dos valores cadastrados anteriormente: ' . implode(', ', $differences) . '.';
                echo $message;
            } else {
                $postValues = array(
                    'EMAIL' => $EMAIL,
                    'FULL_NAME' => $FULL_NAME,
                    'USERNAME' => $USERNAME,
                    'PASSWORD' => $PASSWORD
                );
                update($postValues);
            }
        }
    }

    // function logout() {
    //     session_start();
    //     session_destroy();
    // }

    // if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
    //     logout();
    //     header('Location: ../index.php');
    //     exit();
    // }
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
                <button id="logout-btn" type="submit" name="logout"><i class='bx bx-log-out' aria-hidden="true"></i></button>
            </div>
            <div class="right-box-prs">
                <div class="profiletabShow">
                    <form method="POST" action="?action=update" autocomplete="off" id="update-user" class="state">
                        <h1>Atualize suas informações :)</h1>
                        <div class="update-form">
                            <?php
                                $EMAIL = isset($_SESSION['EMAIL']) ? $_SESSION['EMAIL'] : '';
                                $FULL_NAME = isset($_SESSION['FULL_NAME']) ? $_SESSION['FULL_NAME'] : '';
                                $USERNAME = isset($_SESSION['USERNAME']) ? $_SESSION['USERNAME'] : '';
                                $PASSWORD = isset($_SESSION['PASSWORD']) ? $_SESSION['PASSWORD'] : '';
                             ?>
                            <div class="update-wrap">
                                <input type="email" class="update-field" name="EMAIL" autocomplete="off" value="<?php echo isset($EMAIL) ? $EMAIL : ''; ?>"/>
                                <label for="EMAIL">Email</label>
                            </div>
                            <div class="update-wrap">
                                <input type="text" class="update-field" name="FULL_NAME" autocomplete="off" value="<?php echo isset($FULL_NAME) ? $FULL_NAME : ''; ?>"/>
                                <label for="FULL_NAME">Nome completo</label>
                            </div>
                            <div class="update-wrap">
                                <input type="text" class="update-field" name="USERNAME" autocomplete="off" value="<?php echo isset($USERNAME) ? $USERNAME : ''; ?>"/>
                                <label for="USERNAME">Nome de usuário</label>
                            </div>
                            <div class="update-wrap">
                                <input type="password" class="update-field" name="PASSWORD" autocomplete="off" value="<?php echo isset($PASSWORD) ? $PASSWORD : ''; ?>"/>
                                <label for="PASSWORD">Senha</label>
                            </div>
                            <div class="update-wrap">
                                <input type="password" class="update-field" name="PASSWORD" autocomplete="off" value="<?php echo isset($PASSWORD) ? $PASSWORD : ''; ?>"/>
                                <label for="PASSWORD">Confirmar senha</label>
                            </div>
                            <input type="submit" value="Atualizar" class="update">
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