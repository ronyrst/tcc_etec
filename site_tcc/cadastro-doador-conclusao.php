<?php

include("conexao.php");
include("protecao.php");

$cpf = $mysqli->real_escape_string($_POST['cpf']);
$nome = $mysqli->real_escape_string($_POST['nome']);
$sobrenome = $mysqli->real_escape_string($_POST['sobrenome']);
$sexo = $mysqli->real_escape_string($_POST['sexo']);
$data_nascimento = $_POST['data_aniversario'];
$tipo_sanguineo = $_POST['sangue'];
$cep = $mysqli->real_escape_string($_POST['iCEP']);
$estado = $_POST['estado'];
$telefone = $mysqli->real_escape_string($_POST['telefone']);


if( strcmp($tipo_sanguineo, "==") != 0 && strcmp($estado, "==") != 0 && strcmp($sexo, "==") != 0 ) {

    $sql_code = "INSERT INTO Doador (cpf, nome, sobrenome, sexo, data_nascimento, tipo_sanguineo, cep, estado, telefone)
                VALUES ('$cpf', '$nome', '$sobrenome', '$sexo', '$data_nascimento', '$tipo_sanguineo', '$cep', '$estado', '$telefone')";

    $sql_query = $mysqli->query($sql_code);

    if( $sql_query ){
        echo "<script language='javascript' type='text/javascript'>
        alert('Cadastro realizado com sucesso.');window.location
        .href='area-hospital.php';</script>;";
    } else {
        echo "<script language='javascript' type='text/javascript'>
        alert('Ocorreu um erro com os dados inseridos. Cheque-os e tente novamente.');window.location
        .href='cadastro-doador.php';</script>;";
    }

} else if( strcmp($tipo_sanguineo, "==") == 0 ){
    echo "<script language='javascript' type='text/javascript'>
    alert('Insira o Tipo Sanguíneo corretamente e tente novamente.');window.location
    .href='cadastro-doador.php';</script>;";
} else if( strcmp($estado, "==") == 0 ){
    echo "<script language='javascript' type='text/javascript'>
    alert('Insira o Estado corretamente e tente novamente.');window.location
    .href='cadastro-doador.php';</script>;";
} else if( strcmp($sexo, "==") == 0 ){
    echo "<script language='javascript' type='text/javascript'>
    alert('Insira o sexo corretamente e tente novamente.');window.location
    .href='cadastro-doador.php';</script>;";
}