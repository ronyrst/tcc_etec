<?php

include("protecao.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_js/cadastro.css">
  
    <title>Cadastro de doador - Leve Sangue</title>
</head>
<body>
    <div class="menuvertical">
        <div class="logo">
            <img src="images\logo2.png" alt="Logo Leve Sangue" class="img">
        </div> 
        <nav>
            <ul>
                <li><a href="fale-conosco.php"><ion-icon class="ion-icon" name="chatbubble-ellipses-outline"></ion-icon>Contate-nos</a></li>
                <li><a href="notificar.php"><ion-icon class="ion-icon" name="notifications-outline"></ion-icon>Notificar</a></li>
                <li><a href="cadastro-doador.php"><ion-icon class="ion-icon" name="person-outline"></ion-icon>Cadastrar</a></li>
                <li><a class="sair" href="logout.php"><ion-icon class="ion-icon" name="log-out-outline"></ion-icon>Sair</a></li>
            </ul>
        </nav>
    </div>
    <div class="caixa">
            <h2>Cadastrar Paciente</h2>
            <div class="form2">
            <form action="container">
                <div class="input-field">
                    <input type="text" name="name" id="nome" placeholder="Nome">
                <div class="underline"></div>
                </div>
                <div class="input-field">
                    <input type="text" name="sobre" id="sobrenome" placeholder="Sobrenome">
                <div class="underline"></div>
                </div>
                <div class="input-field">
                    <input type="tel" name="telefone" id="telefone" placeholder="Telefone">
                <div class="tel"></div>
                </div>
                <div class="input-field">
                    <input id="cpf" type="text" placeholder="Insira o CPF (somente números)" onblur="formataCPF(this)" pattern="[0-9]{11}">
                <div class="underline"></div>
                </div>
                <div class="input-field">
                    <select name="sangue">  
                      <option>Tipo sanguíneo</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                <div class="underline"></div>
                </div>
                <div class="input-field">
                    <select name="estado" >
                        <option value="ac">Estado</option> 
                        <option value="ac">Acre</option> 
                        <option value="al">Alagoas</option> 
                        <option value="am">Amazonas</option> 
                        <option value="ap">Amapá</option> 
                        <option value="ba">Bahia</option> 
                        <option value="ce">Ceará</option> 
                        <option value="df">Distrito Federal</option> 
                        <option value="es">Espírito Santo</option> 
                        <option value="go">Goiás</option> 
                        <option value="ma">Maranhão</option> 
                        <option value="mt">Mato Grosso</option> 
                        <option value="ms">Mato Grosso do Sul</option> 
                        <option value="mg">Minas Gerais</option> 
                        <option value="pa">Pará</option> 
                        <option value="pb">Paraíba</option> 
                        <option value="pr">Paraná</option> 
                        <option value="pe">Pernambuco</option> 
                        <option value="pi">Piauí</option> 
                        <option value="rj">Rio de Janeiro</option> 
                        <option value="rn">Rio Grande do Norte</option> 
                        <option value="ro">Rondônia</option> 
                        <option value="rs">Rio Grande do Sul</option> 
                        <option value="rr">Roraima</option> 
                        <option value="sc">Santa Catarina</option> 
                        <option value="se">Sergipe</option> 
                        <option value="sp">São Paulo</option> 
                        <option value="to">Tocantins</option> 
                    </select>
                <div class="underline"></div>
                </div>
                <div class="input-field">
                    <input id="date" type="date">
                <div class="underline"></div>
                </div>
                <div class="input-field">
                    <input type="text" name="iCEP" id="CEP" placeholder="CEP">
                <div class="underline"></div>
                </div>
                <div class="input-field">
                    <input type="text" name="numerocs" id="numeroc" placeholder="Número">
                <div class="underline"></div>
                </div>
                <input class="botao1" type="submit" value="Enviar">
            </form>
        </div>
    </div>
    <script src="css_js/testefc.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
