<?php

include("conexao.php");

$login = $_POST['login'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

if (isset($login) || isset($senha)) {

    // checa se o email tem tamanho zero
    if(strlen($login) == 0){
        echo "<script language='javascript' type='text/javascript'>
        alert('Preencha seu email');window.location
        .href='entrar.php';</script>;";
    // checa se a senha tem tamanho zero
    } else if(strlen($senha) == 0){
        echo "<script language='javascript' type='text/javascript'>
        alert('Preencha sua senha');window.location
        .href='entrar.php';</script>;";
    // segue em frente com o login
    } else {

        $real_login = $mysqli->real_escape_string($login);

        $sql_code = "SELECT * FROM Centro_doacao WHERE email = '$real_login'";
        $sql_query = $mysqli->query($sql_code);





        // implementar




        $quantidade = $sql_query->num_rows;
        $usuario = $sql_query->fetch_assoc();

        print(password_verify($real_senha, $usuario['senha']));

        if( $quantidade == 1 && password_verify($real_senha, $usuario['senha']) == 1 ){
            
            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['cnpj'] = $usuario['cnpj'];

            header("Location: area_hospital.php");

        } else {
        // echo "<script language='javascript' type='text/javascript'>
        // alert('Falha ao logar. Email ou senha incorretos.');window.location
        // .href='entrar.php';</script>;";
        }
    }
}
?>
