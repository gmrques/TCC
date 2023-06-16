<?php
    require_once("Connection/conect.php");
    require_once("Classes/Operations.php");

function hashPassword($password)
{
    return password_hash($password, PASSWORD_DEFAULT);
}

function verifyPassword($password, $hash)
{
    return password_verify($password, $hash);
}

$db = new Connection();

if (isset($_POST['Cadastrar']) && $_POST['Cadastrar'] == 'Cadastrar') {

    $register = new OperationsUser($db);
    $FULL_NAME = filter_var(trim($_POST['FULL_NAME']), FILTER_SANITIZE_STRING);
    $USERNAME = filter_var(trim($_POST['USERNAME']), FILTER_SANITIZE_STRING);
    $PASSWORD = filter_var(trim($_POST['PASSWORD']), FILTER_SANITIZE_STRING);
    if (strlen($PASSWORD) < 8) {
        header("location: index.php");
        exit();
    }

    $EMAIL = filter_var(trim($_POST['EMAIL']), FILTER_SANITIZE_EMAIL);
    if (!filter_var($EMAIL, FILTER_VALIDATE_EMAIL)) {
        header("location: index.php");
        exit();
    }

    $hashedPassword = hashPassword($PASSWORD);

    $query = "SELECT * FROM user WHERE FULL_NAME = :FULL_NAME";
    $stmt = $register->getConnection()->prepare($query);  
    $stmt->bindParam(':FULL_NAME', $FULL_NAME);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        header("location: index.php");
        exit();
    }

    $query = "SELECT * FROM user WHERE USERNAME = :USERNAME";
    $stmt = $register->getConnection()->prepare($query);  
    $stmt->bindParam(':USERNAME', $USERNAME);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        header("location: index.php");
        exit();
    }

    $query = "SELECT * FROM user WHERE EMAIL = :EMAIL";
    $stmt = $register->getConnection()->prepare($query);  
    $stmt->bindParam(':EMAIL', $EMAIL);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        header("location: index.php");
        echo "<alert>O email inserido já está cadastrado!</alert>";
        exit();
    }

    $insertQuery = "INSERT INTO user (FULL_NAME, USERNAME, PASSWORD, EMAIL) VALUES (:FULL_NAME, :USERNAME, :PASSWORD, :EMAIL)";
    $stmt = $register->getConnection()->prepare($insertQuery);  
    $stmt->bindParam(':FULL_NAME', $FULL_NAME);
    $stmt->bindParam(':USERNAME', $USERNAME);
    $stmt->bindParam(':PASSWORD', $hashedPassword);
    $stmt->bindParam(':EMAIL', $EMAIL);
    if ($stmt->execute()) {
        session_start();
        $_SESSION['EMAIL'] = $EMAIL;
        $_SESSION['FULL_NAME'] = $FULL_NAME;
        $_SESSION['USERNAME'] = $USERNAME;
        $_SESSION['PASSWORD'] = $hashedPassword;
        header('location: Home/home.php');
        echo "<alert>Registro realizado com sucesso!</alert>";
    } else {
        header('location: index.php');
        echo "<alert>Ocorreu um erro ao registrar o usuário.</alert>";
    }
}

if (isset($_POST['Entrar']) && $_POST['Entrar'] == 'Entrar') {
    include_once("Connection/conect.php");
    include_once("Classes/Operations.php");

    $login = new OperationsUser($db);

    $EMAIL = filter_input(INPUT_POST, 'EMAIL', FILTER_SANITIZE_EMAIL);
    $USERNAME = filter_input(INPUT_POST, 'USERNAME', FILTER_SANITIZE_STRING);
    $PASSWORD = filter_input(INPUT_POST, 'PASSWORD', FILTER_SANITIZE_STRING);

    $CONF_PASSWORD = $_POST['CONF_PASSWORD'];
    if ($PASSWORD !== $CONF_PASSWORD) {
        header("location: index.php");
        exit();
    }

    $loginQuery = "SELECT * FROM user WHERE EMAIL = :EMAIL AND USERNAME = :USERNAME";
    $stmt = $login->getConnection()->prepare($loginQuery);  
    $stmt->bindParam(':EMAIL', $EMAIL);
    $stmt->bindParam(':USERNAME', $USERNAME);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result && verifyPassword($PASSWORD, $result['PASSWORD'])) {
        session_start();
        $_SESSION['EMAIL'] = $EMAIL;
        $_SESSION['USERNAME'] = $USERNAME;
        $_SESSION['PASSWORD'] = $result['PASSWORD'];
        header('location: Home/home.php');
    } else {
        header('location: index.php');
    }
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="CSS/style-index.css" />
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/nunito" rel="stylesheet">
    <link rel="icon" type="png" syzes="32x32" href="CSS/IMG/brand-icon/parrot.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script defer src="JS/script-index.js"></script>
    <title>Brasil em Viagem</title>
</head>
<body>
    <header>
        <nav>
            <a href="#"><img id="logo" src="CSS/IMG/brand-icon/parrot.png" alt="">Brasil em Viagem</a>
        </nav>
    </header>
    <main>
        <div id="box">
            <div id="inner-box">
                <div id="form-wrap">
                    <form method="POST" action="?action=login" autocomplete="off" class="sing-in-form">
                        <div class="parrot">
                            <img src="CSS/IMG/brand-icon/parrot.png" alt="parrot icon">
                            <h4>Brasil em Viagem</h4>
                        </div>

                        <div id="heading1">
                            <h2>Bem vindo de volta!</h2>
                            <h6>Ainda não tem uma conta?</h6>
                            <a class="toggle">Cadastre-se</a>
                        </div>
                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="email" minlength="4" class="input-field" name="EMAIL" autocomplete="off" required />
                                <label for="EMAIL">Email</label>
                            </div>
                            <div class="input-wrap">
                                <input type="text" minlength="4" class="input-field" name="USERNAME" autocomplete="off" required />
                                <label for="USERNAME">Nome de usuário</label>
                            </div>
                            <div class="input-wrap">
                                <input type="password" minlength="4" class="input-field" name="PASSWORD" autocomplete="off" required />
                                <label for="PASSWORD">Senha</label>
                            </div>
                            <div class="input-wrap">
                                <input type="password" minlength="4" class="input-field" name="CONF_PASSWORD" autocomplete="off" required />
                                <label for="CONF_PASSWORD">Confirmar senha</label>
                            </div>
                            <input type="submit" name="Entrar" value="Entrar" class="sign-button">
                        </div>
                    </form>

                    <form method="POST" action="?action=create" autocomplete="off" class="sing-up-form">
                        <div class="parrot">
                            <img src="CSS/IMG/brand-icon/parrot.png" alt="parrot icon">
                            <h4>Nome da empresa</h4>
                        </div>

                        <div id="heading2">
                            <h2>Comece agora!</h2>
                            <h6>Já tem uma conta?</h6>
                            <a class="toggle">Entrar</a>
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="email" class="input-field" name="EMAIL" autocomplete="off" required />
                                <label for="EMAIL">Email</label>
                            </div>
                            <div class="input-wrap">
                                <input type="text" class="input-field" name="FULL_NAME" autocomplete="off" required />
                                <label for="FULL_NAME">Nome completo</label>
                            </div>
                            <div class="input-wrap">
                                <input type="text" class="input-field" name="USERNAME" autocomplete="off" required />
                                <label for="USERNAME">Nome de usuário</label>
                            </div>
                            <div class="input-wrap">
                                <input type="password" class="input-field" name="PASSWORD" autocomplete="off" required />
                                <label for="PASSWORD">Senha</label>
                            </div>
                            <input type="submit" name="Cadastrar" value="Cadastrar" class="sign-button">
                        </div>
                    </form>
                </div>
                <div id="carousel">
                    <div class="images-wrapper">
                        <img src="CSS/IMG/Carrousel-register/8.jpg" class="image img-1 show" alt="">
                        <img src="CSS/IMG/Carrousel-register/11.jpg" class="image img-2" alt="">
                        <img src="CSS/IMG/Carrousel-register/15.jpeg" class="image img-3" alt="">
                    </div>

                    <div class="text-slider">
                        <div class="text-wrap">
                            <div class="text-group">
                                <h2>Descubra novos lugares!</h2>
                                <h2>Compartilhe suas experiências</h2>
                                <h2>Aprenda novas receitas</h2>
                            </div>
                        </div>

                        <div class="bullets">
                            <span class="active" data-value="1"></span>
                            <span data-value="2"></span>
                            <span data-value="3"></span>
                        </div>
                    </div>
                </div>
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