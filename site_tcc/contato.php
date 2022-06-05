<?php

include("conexao.php");
include("protecao.php");

$nome = $_SESSION['nome'];
$email = $_SESSION['email'];
$cnpj = $_SESSION['cnpj'];

$telefone = $_POST['telefone'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

if ( (isset($telefone) && isset($assunto)) && isset($mensagem)) {
    $real_telefone = $mysqli->real_escape_string($telefone);
    $real_assunto = $mysqli->real_escape_string($assunto);
    $real_mensagem = $mysqli->real_escape_string($mensagem);

    $sql_code = "INSERT INTO Mensagem_fale_conosco (cnpj, nome, email, telefone, assunto, mensagem) 
                    VALUES ('$cnpj', '$nome', '$email', '$real_telefone', '$real_assunto', '$real_mensagem')";

    $sql_query = $mysqli->query($sql_code);

    if( $sql_query ){
        echo "<script language='javascript' type='text/javascript'>
        alert('Mensagem enviada com sucesso.');window.location
        .href='area-hospital.php';</script>;";
    } else {
        echo "<script language='javascript' type='text/javascript'>
        alert('Houve um erro ao enviar a mensagem. Cheque as informações e tente novamente.');window.location
        .href='fale-conosco.php';</script>;";
    }
} else {
    echo "<script language='javascript' type='text/javascript'>
    alert('Houve um erro ao enviar a mensagem. Cheque as informações e tente novamente.');window.location
    .href='fale-conosco.php';</script>;";
}