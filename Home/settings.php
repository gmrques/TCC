<?php
    include_once("../Connection/conect.php");

    $db = new Connection();
    $connection = $db->getConnection();
    session_start();
    $EMAIL = isset($_SESSION['EMAIL']) ? $_SESSION['EMAIL'] : '';
    $USERNAME = isset($_SESSION['USERNAME']) ? $_SESSION['USERNAME'] : '';
    $PASSWORD = isset($_SESSION['PASSWORD']) ? $_SESSION['PASSWORD'] : '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['EMAIL']) && isset($_POST['USERNAME']) && isset($_POST['PASSWORD'])) {
            $EMAIL = $_POST['EMAIL'];
            $USERNAME = $_POST['USERNAME'];
            $PASSWORD = $_POST['PASSWORD'];
            
            $query = "SELECT EMAIL, USERNAME, PASSWORD FROM user WHERE ID = :ID";
            $stmt = $connection->prepare($query);
            $stmt->bindParam(':ID', $_SESSION['ID']);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $differences = array();
            if ($EMAIL !== $row['EMAIL']) {
                $differences[] = 'Email';
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
                    'USERNAME' => $USERNAME,
                    'PASSWORD' => $PASSWORD
                );
                update($postValues);
            }
        }
    }

    function logout(){
        session_start();
        session_unset();
        session_destroy();
        header("Cache-Control: no-cache, no-store, must-revalidate");
        header("Pragma: no-cache");
        header("Expires: 0");
        header("location: ../index.php");
        exit();
    }

    if (isset($_POST['logout'])) {
        logout();
    }

    function update($postValues){
        $EMAIL = $postValues['EMAIL'];
        $USERNAME = $postValues['USERNAME'];
        $PASSWORD = $postValues['PASSWORD'];

        if( empty($EMAIL) || empty($USERNAME) || empty($PASSWORD) ){
            return false;
        }

        $query = "UPDATE ". $this->table_name . " SET EMAIL = ?, USERNAME = ?, PASSWORD = ? WHERE ID = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1,$EMAIL);
        $stmt->bindParam(2,$USERNAME);
        $stmt->bindParam(3,$PASSWORD);
        $stmt->bindParam(4,$_SESSION['ID']);
        
        if($stmt->execute()){
            echo "<script>alert('Informações atualizadas com sucesso!!!')</script>";
            header("location: home.php");
            return true;
        }else{
            return false;
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
                <form method="POST" action="?logout">
                    <button type="submit" id="btn"><i style="font-size: 1.5em; font-weight: 600; margin-left: 0.5em;"class='bx bx-exit'></i></i></button>
                    <input type="hidden" name="logout" value="1">
                </form>
            </div>
            <div class="right-box-prs">
                <div class="profiletabShow">
                    <form method="POST" action="?action=update" autocomplete="off" id="update-user" class="state">
                        <h1>Atualize suas informações :)</h1>
                        <div class="update-form">
                            <?php
                                $EMAIL = isset($_SESSION['EMAIL']) ? $_SESSION['EMAIL'] : '';
                                $USERNAME = isset($_SESSION['USERNAME']) ? $_SESSION['USERNAME'] : '';
                                $PASSWORD = isset($_SESSION['PASSWORD']) ? $_SESSION['PASSWORD'] : '';
                             ?>
                            <div class="update-wrap">
                                <input type="email" class="update-field" name="EMAIL" autocomplete="off" value="<?php echo isset($EMAIL) ? $EMAIL : ''; ?>"/>
                                <label for="EMAIL">Email</label>
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