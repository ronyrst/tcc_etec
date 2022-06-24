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
            <a href="index.php"><img src="images\logo2.png" alt="Logo Leve Sangue" class="img"></a>
        </div> 
        <nav>
            <br>
            <p style="text-align:center; font-size: 20px; color: #fff;"><?php echo "Olá, ".$_SESSION['nome'].".";?></p>
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

            <form action="cadastro-doador-conclusao.php" id="cadastro-doador" method="POST">
                <div class="input-field">
                    <input type="text" name="nome" id="nome" placeholder="Nome" required>
                <div class="underline"></div>
                </div>
                <div class="input-field">
                    <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" required>
                <div class="underline"></div>
                </div>
                <div class="input-field">
                    <input type="tel" name="telefone" id="telefone" placeholder="Telefone" required>
                <div class="tel"></div>
                </div>
                <div class="input-field">
                    <input id="cpf" name="cpf" type="text" placeholder="CPF" onblur="formataCPF(this)" required>
                <div class="underline"></div>
                </div>
                <div class="input-field">
                    <select name="sexo" required>  
                        <option value="==">Sexo</option>
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    </select>
                <div class="underline"></div>
                </div>
                <div class="input-field">
                    <select name="sangue" required>  
                        <option value="==">Tipo sanguíneo</option>
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
                    <select name="estado" required>
                        <option value="==">Estado</option> 
                        <option value="AC">Acre</option> 
                        <option value="AL">Alagoas</option> 
                        <option value="AM">Amazonas</option> 
                        <option value="AP">Amapá</option> 
                        <option value="BA">Bahia</option> 
                        <option value="CE">Ceará</option> 
                        <option value="DF">Distrito Federal</option> 
                        <option value="ES">Espírito Santo</option> 
                        <option value="GO">Goiás</option> 
                        <option value="MA">Maranhão</option> 
                        <option value="MT">Mato Grosso</option> 
                        <option value="MS">Mato Grosso do Sul</option> 
                        <option value="MG">Minas Gerais</option> 
                        <option value="PA">Pará</option> 
                        <option value="PB">Paraíba</option> 
                        <option value="PR">Paraná</option> 
                        <option value="PE">Pernambuco</option> 
                        <option value="PI">Piauí</option> 
                        <option value="RJ">Rio de Janeiro</option> 
                        <option value="RN">Rio Grande do Norte</option> 
                        <option value="RO">Rondônia</option> 
                        <option value="RS">Rio Grande do Sul</option> 
                        <option value="RR">Roraima</option> 
                        <option value="SC">Santa Catarina</option> 
                        <option value="SE">Sergipe</option> 
                        <option value="SP">São Paulo</option> 
                        <option value="TO">Tocantins</option> 
                    </select>
                <div class="underline"></div>
                </div>
                <div class="input-field">
                    <input id="date" type="date" name="data_aniversario" required>
                <div class="underline"></div>
                </div>
                <div class="input-field">
                    <input type="text" name="iCEP" id="CEP" placeholder="CEP" required>
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
