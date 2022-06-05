<?php

session_start();

if(!isset($_SESSION['nome'])){
    echo "<script language='javascript' type='text/javascript'>
    alert('Você precisa estar logado para acessar essa parte do site.');window.location
    .href='index.php';</script>;";
}
