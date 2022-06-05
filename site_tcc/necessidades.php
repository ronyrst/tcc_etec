<?php

include("conexao.php");
include("protecao.php");

$cnpj = $_SESSION['cnpj'];
$hoje = date("Y-m-d");

$contador = 0;
$confirmador = 0;

foreach($_POST['tipo_sangue'] as $sangue){
    $sql_code = "INSERT INTO Centro_doacao_necessidade (cnpj, tipo_sanguineo, data_pedido) 
                    VALUES ('$cnpj', '$sangue', '$hoje')";

    $sql_query = $mysqli->query($sql_code);

    if( $sql_query ){
        $confirmador = $confirmador + 1;
    }

    $contador = $contador + 1;
}


if( $contador == $confirmador ){
    echo "<script language='javascript' type='text/javascript'>
    alert('Pedido confirmado.');window.location
    .href='area-hospital.php';</script>;";
} else {
    echo "<script language='javascript' type='text/javascript'>
    alert('Houve um erro.');window.location
    .href='notificar.php';</script>;";
}