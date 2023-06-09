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
                    $_SESSION['id'] = $result['id'];
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
}

?>