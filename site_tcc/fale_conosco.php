<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_js/contato.css">
  
    <title>Document</title>

</head>
<body>
    <div class="banner1">
        <img src="images\fundoEscuro.png" class="img2">
    </div>
    <div class="menuvertical">
        <div class="logo">
            <img src="images\logo2.png" class="img">
        </div> 
        <nav>
            <ul>
                <li><a href="fale_conosco.html"><ion-icon class="ion-icon" name="chatbubble-ellipses-outline"></ion-icon>Contate-nos</a></li>
                <li><a href="notificar.html"><ion-icon class="ion-icon" name="notifications-outline"></ion-icon>Notificar</a></li>
                <li><a href="cadastro-doador.html"><ion-icon class="ion-icon" name="person-outline"></ion-icon>Cadastrar</a></li>
                <li><a class="sair" href="index.html"><ion-icon class="ion-icon" name="log-out-outline"></ion-icon>Sair</a></li>
            </ul>
        </nav>
    </div>

    <div class="caixa">
            <h2>Contato</h2>
            <div class="form2">
            <form action="container">
                <div class="input-field">
                    <input type="text" name="name" id="nome" placeholder="Nome">
                <div class="underline"></div>
                </div>
                <div class="input-field">
                    <input type="email" name="email" id="email" placeholder="E-mail">
                <div class="underline"></div>
                </div>
                <div class="input-field">
                    <input type="tel" name="telefone" id="telefone" placeholder="Telefone">
                <div class="tel"></div>
                </div>
                <div class="input-field">
                    <input type="text" name="assunto" id="assunto" placeholder="Assunto">
                <div class="underline"></div>
                </div>
                <div class="input-field">
                    <input type="text" name="mensagem" id="mensagem" placeholder="Sua mensagem">
                <div class="underline"></div>
                </div>
                <li><input class="botao1" type="submit" value="Enviar">
            </form>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
    </html>