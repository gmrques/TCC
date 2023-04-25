<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "db";

$mysqli = new mysqli($host, $username, $password, $database); 
if ($mysqli-> connect_errno) {
    echo"Ocorreu o erro: (". $mysqli-> connect_errno . "ao tentar conectar com o banco de dados";
}