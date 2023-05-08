<?php

class Connection{
    private $usuario = "root";
    private $senha = "";
    private $banco = "tcc" ;
    private $host = "localhost";
    private $conn;

    public function __construct(){
        $this->$conn = mysqli_connect($this->$usuario, $this->senha, $this->host) or die("Erro ao conectar o banco de dados").mysqli_error($this->$conn);

        mysqli_select_db($this->$conn, $this-> $banco) or die("Erro ao achar o banco de dados").mysqli_error($this->$conn);
    }
    public function getConn(){
        return $this->$conn;
    }
}