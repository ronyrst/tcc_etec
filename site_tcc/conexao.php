<?php

$hostname = "localhost";
$bancodedados = "leve_sangue";
$usuario = "root";
// usando o usbWebServer, a senha é essa:
// $senha = "usbw";
// usando o xampp, a senha é essa:
$senha = "";


$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if($mysqli->connect_errno){
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}