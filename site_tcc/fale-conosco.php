<?php
include("protecao.php");

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_js/contato.css">
  
    <title>Fale Conosco - Leve Sangue</title>

</head>
<body>
    <div class="banner1">
        <img src="images\fundoEscuro.png" alt="Fundo doação é amor" class="img2">
    </div>
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
        <h2>Contato</h2>
        <div class="form2">
        <form id="fale_conosco" method="POST" action="contato.php">
            <!-- O backend já tem o nome, email e cnpj da empresa pelos dados de sessão do usuário.
                Então essas caixas de nome e email não são necessárias. -->

            <!-- <div class="input-field">
                <input type="text" name="name" id="nome" placeholder="Nome">
            <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="email" name="email" id="email" placeholder="E-mail">
            <div class="underline"></div>
            </div> -->
            <br><br>
            <div class="input-field">
                <input type="tel" name="telefone" id="telefone" placeholder="Telefone">
            <div class="tel"></div>
            </div>
            <div class="input-field">
                <input type="text" name="assunto" id="assunto" placeholder="Assunto">
            <div class="underline"></div>
            </div>
            <div class="input-field">
                <textarea name="mensagem" id="mensagem" maxlength="2000" placeholder="Sua mensagem" required></textarea>
            <div class="underline"></div>
            <br>
            </div>
            <li><button class="botao1" type="submit" id="enviar" name="enviar" value="Enviar">Enviar</button>
        </form>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
    </html>