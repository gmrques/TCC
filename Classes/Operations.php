<?php

include('Connection/conect.php');

$db = new Database();

class OperationsUser{
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


        $query = "INSERT INTO ".$this->table_name. " (EMAIL, FULL_NAME, USERNAME, PASSWORD) VALUES (?,?,?,?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1,$EMAIL);
        $stmt->bindParam(2,$FULL_NAME);
        $stmt->bindParam(3,$USERNAME);
        $stmt->bindParam(4,$PASSWORD);
        
        $rows = $this->read();
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

    public function login() {
        if (isset($_POST["EMAIL"]) || ($_POST["USERNAME"]) || ($_POST["PASSWORD"])) {
            if(strlen ($_POST["EMAIL"]) == 0) {
                echo "<alert>Preencha com seu Usuário!!</alert>";
            } elseif (strlen ($_POST["USERNAME"]) == 0) {
                echo "<alert>Preencha com sua Senha!! </alert>";        
            } elseif (strlen ($_POST["PASSWORD"]) == 0) {
                echo "<alert>Preencha com sua Senha!! </alert>";  
            } else {
                $USERNAME = $mysqli->real_escape_string($_POST["USERNAME"]);
                $PASSWORD = $mysqli->real_escape_string($_POST["PASSWORD"]);
                $EMAIL = $mysqli->real_escape_string($_POST["EMAIL"]);
        
                $sql_code = "SELECT * FROM usuario WHERE USERNAME = '$USERNAME' AND PASSWORD = '$PASSWORD' AND EMAIL = '$EMAIL'";
                $query = $mysql->query($sql_code) or die("Erro na execução do código SQL: ". $mysqli->error);
        
                $quantidade = $query->num_rows;
                
                if($quantidade == 1) {           
                    $usuario = $query->fetch_assoc();
                    
                    if(strpos($EMAIL, '@nomeDaEmpresa')) {
                        
                        //parte que define os métodos de um tipo de usuário
                        
                        if(isset($_SESSION)) {
                            session_start();
                        }
                        $_SESSION['id'] = $usuario['id'];
            
                        } else {
                            echo"<alert>Falha ao entrar! Email ou senha incorretos</alert>";
                        }
                    if(strpos($EMAIL, !'@nomeDaEmpresa')) {
                        
                        //parte que define os métodos de um tipo de usuário
                        
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
    }

    public function Print_Support() {

    $SERVICE_MENSAGE = $_POST['SERVICE_MENSAGE'];
    $PRINT = $_FILES["PRINT"];
    
    if (!empty($PRINT["name"])) {
        
        $MAX_WIDTH = 2560;
        $MAX_HEIGHT = 1440;
        $MAX_SIZE = 2700;

        if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $PRINT["type"])) {
            $DIMENSIONS = getimagesize($PRINT["tmp_name"]);
            if($DIMENSIONS[0] < $MAX_WIDTH && $DIMENSIONS[1] < $MAX_HEIGHT && $PRINT["size"] < $MAX_SIZE) {
                preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $PRINT["name"], $ext);
                $IMG_NAME = md5(uniqid(time())) . "." . $ext[1]; // precisa melhorar a criptografia
                $DIRECTORY = "CSS/IMG/FAQ-img" . $IMG_NAME;
                move_uploaded_file($PRINT["tmp_name"], $DIRECTORY);
    
                $sql = "INSERT INTO support ('IMG_NAME') VALUES ('".$IMG_NAME."')";
            
                if ($sql){
                    echo"<alert></alert>";
                } // testar se funciona
            } else {
                "<alert>A imagem que você escolheu ultrapassa o tamanho permitido, sendo:".$MAX_WIDTH."pixels de largura e ".$MAX_SIZE."pixels de altura</alert>";
            }
        } else {
            echo"<alert>Não há suporte para o tipo de imagem selecionado :( </alert>";
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
        $EMAIL = $postValues['$EMAIL'];
        $FULL_NAME = $postValues['$FULL_NAME'];
        $USERNAME = $postValues['$USERNAME'];
        $PASSWORD = $postValues['$PASSWORD'];
        $PROFILE_PIC = $_FILES["PROFILE_PIC"];
    
        if (!empty($PROFILE_PIC["name"])) {
            
            $MAX_WIDTH = 180;
            $MAX_HEIGHT = 180;
            $MAX_SIZE = 200;
    
            if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $PROFILE_PIC["type"])) {
                $DIMENSIONS = getimagesize($PROFILE_PIC["tmp_name"]);
                if($DIMENSIONS[0] < $MAX_WIDTH && $DIMENSIONS[1] < $MAX_HEIGHT && $PROFILE_PIC["size"] < $MAX_SIZE) {
                    preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $PROFILE_PIC["name"], $ext);
                    $IMG_NAME = md5(uniqid(time())) . "." . $ext[1]; // precisa melhorar a criptografia
                    $DIRECTORY = "CSS/IMG/FAQ-img" . $IMG_NAME;
                    move_uploaded_file($PROFILE_PIC["tmp_name"], $DIRECTORY);
        
                    $sql = "INSERT INTO support ('IMG_NAME') VALUES ('".$IMG_NAME."')";
                
                    if ($sql){
                        echo"<alert>Sua mensagem foi enviada com sucesso!</alert>";
                    }
                } else {
                    "<alert>A imagem que você escolheu ultrapassa o tamanho permitido, sendo:".$MAX_WIDTH."pixels de largura e ".$MAX_SIZE."pixels de altura</alert>";
                }
            } else {
                echo"<alert>Não há suporte para o tipo de imagem selecionado :( </alert>";
            }
        }

        if(empty($ID) || empty($EMAIL) || empty($FULL_NAME) || empty($USERNAME) || empty($PASSWORD) ){
            return false;
        }

        $query = "UPDATE ". $this->table_name . " SET EMAIL = ?, FULL_NAME = ?, USERNAME = ?, PASSWORD = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1,$EMAIL);
        $stmt->bindParam(2,$FULL_NAME);
        $stmt->bindParam(3,$USERNAME);
        $stmt->bindParam(4,$PASSWORD);
        if($stmt->execute()){
            print "<script> alert('Cadastro realizado com sucesso!!! ')</script>";
            print"<script>  location.href='?action=read';</script>";
            return true;
        }else{
            return false;
        }
    }

    public function readOne($ID){
        $query = " SELECT * FROM " . $this->table_name . " WHERE id = ? ";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1,$ID);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); 
    }
    

    public function delete($ID){
        $query = " DELETE FROM " . $this->table_name . " WHERE id = ? ";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1,$ID);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }
}