<?php

include("protecao.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_js/area_hospital.css">
    <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>
    <title>Área do Centro de Doação - Leve Sangue</title>
</head>
<body>
    <div class="banner1">
        <img src="images\fundoEscuro.png" alt="Fundo doação é amor" class="img2">
    </div>

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
        <!-- Tentar fazer isso funcionar? Precisa colocar a caixa no centro da tela lá. -->
        <?php echo "Olá, " . $_SESSION['nome']; ?>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
