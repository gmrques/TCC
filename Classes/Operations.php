<?php

include('Connection/conect.php');

$db = new Database();

class OperationsUser{
    private $conn;
    private $table_name = "user";

    public function __construct($db){
        $this->conn = $db->getConnection();
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

        $query = "UPDATE ". $this->table_name . " SET EMAIL = ?, FULL_NAME = ?, USERNAME = ?, PASSWORD = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1,$EMAIL);
        $stmt->bindParam(2,$FULL_NAME);
        $stmt->bindParam(3,$USERNAME);
        $stmt->bindParam(4,$PASSWORD);
        $stmt->bindParam(5,$_SESSION['id']);
        
        if($stmt->execute()){
            echo "<script>alert('Cadastro realizado com sucesso!!!')</script>";
            header("location: home.php");
            return true;
        }else{
            return false;
        }
    }

    public function publish_article(){
        $IDUSER = $_SESSION['ID'];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $TITLE_ARTICLE = $_POST['Title_article'];
            $CONTENT_ARTICLE = $_POST['Content_article'];

            if ((empty($TITLE_ARTICLE) || empty($CONTENT_ARTICLE)) && 
            (empty($TITLE_ARTICLE) && empty($CONTENT_ARTICLE))) {
                echo "<alert>Por favor, preencha todos os campos.</alert>";
                exit;
            }

            $query = "INSERT INTO publicacoes (IDUSER, TITLE_ARTICLE, CONTENT_ARTICLE) VALUES (:IDUSER, :TITLE_ARTICLE, :CONTENT_ARTICLE)";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':IDUSER', $IDUSER);
            $stmt->bindParam(':TITLE_ARTICLE', $TITLE_ARTICLE);
            $stmt->bindParam(':CONTENT_ARTICLE', $CONTENT_ARTICLE);
            $stmt->execute();

            header("Location: Home/profile.php");
            exit;
        }

        $query = "SELECT * FROM publicacoes WHERE IDUSER = :IDUSER";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':IDUSER', $IDUSER);
        $stmt->execute();

        $limitPerPage = 3;
        $totalPages = 5;
        $cardTypes = array('card-article1', 'card-article2', 'card-article3', 'card-article4', 'card-article5');
        
        for ($page = 1; $page <= $totalPages; $page++) {
            $offset = ($page - 1) * $limitPerPage;
        
            $query = "SELECT * FROM publicacoes WHERE IDUSER = :IDUSER LIMIT :limit OFFSET :offset";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':IDUSER', $IDUSER);
            $stmt->bindParam(':limit', $limitPerPage, PDO::PARAM_INT);
            $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
            $stmt->execute();
        
            if ($stmt->rowCount() > 0) {
                $cardTypeIndex = 0;
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $title = $row['TITLE_ARTICLE'];
                    $content = $row['CONTENT_ARTICLE'];
                    $cardType = $cardTypes[$cardTypeIndex];
        
                    echo '<div class="' . $cardType . '">';
                    echo '<img src="CSS/IMG/article-img/article ' . $page . '.jpg" alt="">';
                    echo '<div class="info-article">';
                    echo '<h2>' . $title . '</h2>';
                    echo '<p>' . $content . '</p>';
                    echo '<button class="read_more" value="' . $page . '">Continue lendo</button>';
                    echo '</div>';
                    echo '</div>';
        
                    $cardTypeIndex++;
                    if ($cardTypeIndex >= count($cardTypes)) {
                        $cardTypeIndex = 0;
                    }
                }
            } else {
                echo "<p>Nenhuma publicação encontrada.</p>";
            }
        }        
    }
    
    public function publish_gastronomy(){

    }

    public function publish_roadmap(){

    }
}

?>