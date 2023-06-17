<?php

include_once('Connection/conect.php');

$db = new Connection();

class OperationsUser{
    private $conn;
    private $table_name = "user";

    public function __construct($db){
        $this->conn = $db->getConnection();
    }

    public function getConnection() {
        return $this->conn;
    }

    public function create($postValues){
        $EMAIL = $postValues['EMAIL'];
        $FULL_NAME = $postValues['FULL_NAME'];
        $USERNAME = $postValues['USERNAME'];
        $PASSWORD = $postValues['PASSWORD'];
    
        $query = "INSERT INTO ".$this->table_name. " (EMAIL, FULL_NAME, USERNAME, PASSWORD) VALUES (?,?,?,?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1,$EMAIL);
        $stmt->bindParam(2,$FULL_NAME);
        $stmt->bindParam(3,$USERNAME);
        $stmt->bindParam(4,$PASSWORD);
        
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function login() {
        if (isset($_POST["EMAIL"]) && isset($_POST["USERNAME"]) && isset($_POST["PASSWORD"])) {
            if(strlen($_POST["EMAIL"]) == 0) {
                echo "<script>alert('Preencha com seu Email!!')</script>";
            } elseif (strlen($_POST["USERNAME"]) == 0) {
                echo "<script>alert('Preencha com seu Usuário!!')</script>";        
            } elseif (strlen($_POST["PASSWORD"]) == 0) {
                echo "<script>alert('Preencha com sua Senha!!')</script>";  
            } else {
                $USERNAME = $_POST["USERNAME"];
                $PASSWORD = $_POST["PASSWORD"];
                $EMAIL = $_POST["EMAIL"];

                $query = "SELECT * FROM ".$this->table_name." WHERE USERNAME = ? AND PASSWORD = ? AND EMAIL = ?";
                $stmt = $this->conn->prepare($query);
                $stmt->bindParam(1, $USERNAME);
                $stmt->bindParam(2, $PASSWORD);
                $stmt->bindParam(3, $EMAIL);
                $stmt->execute();

                $result = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($result) {
                    session_start();
                    $ID = $result['ID'];
                    $_SESSION['ID'] = $ID;
                } else {
                    echo "<script>alert('Falha ao entrar! Email ou senha incorretos')</script>"; 
                }
            }
        }
    }

    public function update($postValues){
        $EMAIL = $postValues['EMAIL'];
        $FULL_NAME = $postValues['FULL_NAME'];
        $USERNAME = $postValues['USERNAME'];
        $PASSWORD = $postValues['PASSWORD'];

        if( empty($EMAIL) || empty($FULL_NAME) || empty($USERNAME) || empty($PASSWORD) ){
            return false;
        }

        $query = "UPDATE ". $this->table_name . " SET EMAIL = ?, FULL_NAME = ?, USERNAME = ?, PASSWORD = ? WHERE ID = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1,$EMAIL);
        $stmt->bindParam(2,$FULL_NAME);
        $stmt->bindParam(3,$USERNAME);
        $stmt->bindParam(4,$PASSWORD);
        $stmt->bindParam(5,$_SESSION['ID']);
        
        if($stmt->execute()){
            echo "<script>alert('Cadastro realizado com sucesso!!!')</script>";
            header("location: home.php");
            return true;
        }else{
            return false;
        }
    }
    

    public function publish_article(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $TITLE_ARTICLE = $_POST['Title_article'];
            $CONTENT_ARTICLE = $_POST['Content_article'];
    
            if ((empty($TITLE_ARTICLE) || empty($CONTENT_ARTICLE)) && 
            (empty($TITLE_ARTICLE) && empty($CONTENT_ARTICLE))) {
                echo "<alert>Por favor, preencha todos os campos.</alert>";
                exit;
            }
    
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $uploadDir = 'CSS/IMG/article-img/';
                $imageName = uniqid() . '_' . $_FILES['image']['name'];
                $imagePath = $uploadDir . $imageName;
                if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
                    $query = "INSERT INTO article (TITLE_ARTICLE, CONTENT_ARTICLE) VALUES (:TITLE_ARTICLE, :CONTENT_ARTICLE)";
                    $stmt = $pdo->prepare($query);
                    $stmt->bindParam(':TITLE_ARTICLE', $TITLE_ARTICLE);
                    $stmt->bindParam(':CONTENT_ARTICLE', $CONTENT_ARTICLE);
                    $stmt->execute();

                    header("Location: Home/profile.php");
                    exit;
                } else {
                    echo "Ocorreu um erro ao fazer o upload da imagem.";
                    exit;
                }
            } else {
                echo "Nenhuma imagem foi enviada.";
                exit;
            }
        }
    }
    
    
    public function publish_gastronomy(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $TITLE_RECIPE = $_POST['Title_recipe'];
            $INGREDIENTS = $_POST['Ingredients'];
            $STEP_BY_STEP = $_POST['Step_by_step'];
    
            if ((empty($TITLE_RECIPE) || empty($INGREDIENTS)) || empty($STEP_BY_STEP) && 
            (empty($TITLE_RECIPE) && empty($INGREDIENTS)) && empty($STEP_BY_STEP)) {
                echo "<alert>Por favor, preencha todos os campos.</alert>";
                exit;
            }
        }

        $query = "INSERT INTO gastronomy (TITLE_RECIPE, INGREDIENTS, STEP_BY_STEP) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sss", $TITLE_RECIPE, $INGREDIENTS, $STEP_BY_STEP);
        if ($stmt->execute()) {
            echo "Dados inseridos com sucesso no banco de dados.";
        } else {
            echo "Ocorreu um erro ao inserir os dados no banco de dados: " . $stmt->error;
        }
    }

    public function publish_roadmap(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $DESTINATION = $_POST['Destination'];
            $DURATION = $_POST['Duration'];
            $ROADMAP = $_POST['Roadmap'];

            if (empty($DESTINATION) || empty($DURATION) || empty($ROADMAP)) {
                echo "Por favor, preencha todos os campos.";
                return;
            }
        }
        
        $query = "INSERT INTO roadmap (DESTINATION, DURATION, ROADMAP) VALUES (:DESTINATION, :DURATION, :ROADMAP)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':DESTINATION', $DESTINATION);
        $stmt->bindParam(':DURATION', $DURATION);
        $stmt->bindParam(':ROADMAP', $ROADMAP);
        $stmt->execute();
        
        if ($stmt->rowCount() > 0) {
            echo "Roteiro de viagem criado com sucesso!";
        } else {
            echo "Ocorreu um erro ao criar o roteiro de viagem. Por favor, tente novamente.";
        }
    }   
}


?>