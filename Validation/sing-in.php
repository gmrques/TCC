<?php
include ("Connection/conect.php");
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