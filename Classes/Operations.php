<?php

include('Connection/conect.php');

$db = new Database();

class Operations{
    private $conn;
    private $table_name = "usuario";

    public function __construct($db){
        $this->conn = $db;

    }

    public function create($postValues){

        $nome_da_variavel = $postValues['nome_da_variavel'];
        $nome_da_variavel = $postValues['nome_da_variavel'];
        $nome_da_variavel = $postValues['nome_da_variavel'];
        $nome_da_variavel = $postValues['nome_da_variavel'];
        $nome_da_variavel = $postValues['nome_da_variavel'];
        $nome_da_variavel = $postValues['nome_da_variavel'];


        $query = "INSERT INTO ".$this->table_name. " (nomes das variaveis) VALUES (?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1,$nome_da_variavel);
        $stmt->bindParam(2,$nome_da_variavel);
        $stmt->bindParam(3,$nome_da_variavel);
        $stmt->bindParam(4,$nome_da_variavel);
        $stmt->bindParam(5,$nome_da_variavel);
        $stmt->bindParam(6,$nome_da_variavel);
        
        $rows = $this->read();
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

    public function login() {
        if (isset($_POST["USERNAME"]) || ($_POST["PASSWORD"])) {
            if(strlen ($_POST["USERNAME"]) == 0) {
                echo "<alert>Preencha com seu Usuário!!</alert>";
            } elseif (strlen ($_POST["PASSWORD"]) == 0) {
                echo "<alert>Preencha com sua Senha!! </alert>";        
            } else {
                $USERNAME = $mysqli->real_escape_string($_POST["USERNAME"]);
                $PASSWORD = $mysqli->real_escape_string($_POST["PASSWORD"]);
        
                $sql_code = "SELECT * FROM usuario WHERE USERNAME = '$USERNAME' AND PASSWORD = '$PASSWORD'";
                $sql_query = $mysqli->query($sql_code) or die("Erro na execução do código SQL: ". $mysqli->error);
        
                $quantidade = $sql_query->num_rows;
        
                if($quantidade == 1) {           
                    $usuario = $sql_query->fetch_assoc();
                    
                    if(isset($_SESSION)) {
                        session_start();
                    }
                    $_SESSION['id'] = $usuario['id'];
        
                } else {
                    echo"<alert>Falha ao entrar! Email ou senha incorretos</alert>";
                }
            }
        }
    }

    public function read(){
        $query = "SELECT * FROM ". $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt-> execute();
        return $stmt;
    }

    public function update($postValues){
        $nome_da_variavel = $postValues['$nome_da_variavel'];
        $nome_da_variavel = $postValues['$nome_da_variavel'];
        $nome_da_variavel = $postValues['$nome_da_variavel'];
        $nome_da_variavel = $postValues['$nome_da_variavel'];
        $nome_da_variavel = $postValues['$nome_da_variavel'];
        $nome_da_variavel = $postValues['$nome_da_variavel'];
        $nome_da_variavel = $postValues['$nome_da_variavel'];  

        if(empty($id) || empty($nome_da_variavel) || empty($nome_da_variavel) || empty($nome_da_variavel) || empty($nome_da_variavel) || empty($nome_da_variavel) || empty($nome_da_variavel)){
            return false;
        }

        $query = "UPDATE ". $this->table_name . " SET nomes das variaveis = ?, nomes das variaveis = ?, nomes das variaveis = ?, nomes das variaveis = ?, nomes das variaveis = ?, nomes das variaveis = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1,$nome_da_variavel);
        $stmt->bindParam(2,$nome_da_variavel);
        $stmt->bindParam(3,$nome_da_variavel);
        $stmt->bindParam(4,$nome_da_variavel);
        $stmt->bindParam(5,$nome_da_variavel);
        $stmt->bindParam(6,$nome_da_variavel);
        $stmt->bindParam(7,$nome_da_variavel);
        if($stmt->execute()){
            print "<script> alert('Cadastro realizado com sucesso!!! ')</script>";
            print"<script>  location.href='?action=read';</script>";
            return true;
        }else{
            return false;
        }
    }

    public function readOne($id){
        $query = " SELECT * FROM " . $this->table_name . " WHERE id = ? ";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1,$id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); 
    }
    

    public function delete($id){
        $query = " DELETE FROM " . $this->table_name . " WHERE id = ? ";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1,$id);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }
}