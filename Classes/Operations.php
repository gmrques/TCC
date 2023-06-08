<?php

include('Connection/conect.php');

$db = new Database();

class OperationsUser{
    private $conn;
    private $table_name = "user";

    public function __construct($db){
        $this->conn = $db;
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
                echo "<alert>Preencha com seu Email!!</alert>";
            } elseif (strlen($_POST["USERNAME"]) == 0) {
                echo "<alert>Preencha com seu Usuário!!</alert>";        
            } elseif (strlen($_POST["PASSWORD"]) == 0) {
                echo "<alert>Preencha com sua Senha!!</alert>";  
            } else {
                $mysqli = new mysqli("localhost", "root", "", "tcc");
                if ($mysqli->connect_errno) {
                    echo "Falha ao conectar ao banco de dados: " . $mysqli->connect_error;
                    return;
                }
                $USERNAME = $mysqli->real_escape_string($_POST["USERNAME"]);
                $PASSWORD = $mysqli->real_escape_string($_POST["PASSWORD"]);
                $EMAIL = $mysqli->real_escape_string($_POST["EMAIL"]);
                $sql_code = "SELECT * FROM usuario WHERE USERNAME = '$USERNAME' AND PASSWORD = '$PASSWORD' AND EMAIL = '$EMAIL'";
                $query = $mysqli->query($sql_code) or die("Erro na execução do código SQL: " . $mysqli->error);
                $quantidade = $query->num_rows;
    
                if ($quantidade == 1) {           
                    $usuario = $query->fetch_assoc();
                    if (session_status() == PHP_SESSION_NONE) {
                        session_start();
                    }
                    $_SESSION['id'] = $usuario['id'];
                } else {
                    echo "<alert>Falha ao entrar! Email ou senha incorretos</alert>"; 
                }
                $mysqli->close();
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
        if($stmt->execute()){
            echo "<alert>('Cadastro realizado com sucesso!!! ')</alert>";
            header("location: home.php");
            return true;
        }else{
            return false;
        }
    }
}