<?php

include("conexao.php");

if(isset($_POST['email'])){

    $cnpj = $mysqli->real_escape_string($_POST['cnpj']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $nome = $mysqli->real_escape_string($_POST['nome']);
    $cep = $mysqli->real_escape_string($_POST['cep']);
    $estado = $mysqli->real_escape_string($_POST['estado']);


    $checa_usuario = "SELECT * FROM Centro_doacao WHERE email = '$email'";
    $checa_usuario_query = $mysqli->query($checa_usuario) or die($mysqli->error);
    

    if($checa_usuario_query == TRUE){
        $quantidade = $checa_usuario_query->num_rows;

        if( $quantidade == 0 && strcmp($estado, "==") != 0){

            $cadastro_usuario = "INSERT INTO Centro_doacao(cnpj, email, senha, nome, cep, estado) 
                                    VALUES ('$cnpj', '$email', '$senha', '$nome', '$cep', '$estado')";
            $cadastro_usuario_query = $mysqli->query($cadastro_usuario);

            if( $cadastro_usuario_query == TRUE ){
                echo "<script language='javascript' type='text/javascript'>
                alert('Cadastro realizado com sucesso.');window.location
                .href='entrar.php';</script>;";
            } else {
                echo "<script language='javascript' type='text/javascript'>
                alert('Ocorreu um erro com os dados inseridos. Cheque-os e tente novamente.');window.location
                .href='entrar.php';</script>;";
            }

        } else {
            if( strcmp($estado, "==") != 0 ){
                echo "<script language='javascript' type='text/javascript'>
                alert('Email já cadastrado. Deseja trocar sua senha? Entre em contato conosco.');window.location
                .href='entrar.php';</script>;";
            } else {
                echo "<script language='javascript' type='text/javascript'>
                alert('Insira o Estado corretamente e tente novamente.');window.location
                .href='entrar.php';</script>;";
            }
        }
    } else {
        echo "<script language='javascript' type='text/javascript'>
        alert('Houve um problema com o email inserido. Tente novamente.');window.location
        .href='entrar.php';</script>;";
    }
} else {
    header("Location: entrar.php");
}