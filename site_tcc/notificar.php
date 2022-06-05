<?php
include("protecao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_js/notificar.css">
    <title>Notificar doadores - Leve Sangue</title>
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
    <h2>Notificar Doadores</h2>
    <div class="form2">

      <form id="necessidade" method="POST" action="necessidades.php">
        <div class="custom-checkbox">
          <input id="checkbox-1" type="checkbox" name="tipo_sangue[]" value="A+">
          <label for="checkbox-1">Tipo A+</label>
        </div>
        <div class="custom-checkbox">
          <input id="checkbox-2" type="checkbox" name="tipo_sangue[]" value="A-">
          <label for="checkbox-2">Tipo A-</label>
        </div>
        <div class="custom-checkbox">
          <input id="checkbox-3" type="checkbox" name="tipo_sangue[]" value="B+">
          <label for="checkbox-3">Tipo B+</label>
        </div>
        <div class="custom-checkbox">
          <input id="checkbox-4" type="checkbox" name="tipo_sangue[]" value="B-">
          <label for="checkbox-4">Tipo B-</label>
        </div>
        <div class="custom-checkbox">
          <input id="checkbox-5" type="checkbox" name="tipo_sangue[]" value="O+">
          <label for="checkbox-5">Tipo O+</label>
        </div>
        <div class="custom-checkbox">
          <input id="checkbox-6" type="checkbox" name="tipo_sangue[]" value="O-">
          <label for="checkbox-6">Tipo O-</label>
        </div>
        <div class="custom-checkbox">
          <input id="checkbox-7" type="checkbox" name="tipo_sangue[]" value="AB+">
          <label for="checkbox-7">Tipo AB+</label>
        </div>
        <div class="custom-checkbox">
          <input id="checkbox-8" type="checkbox" name="tipo_sangue[]" value="AB-">
          <label for="checkbox-8">Tipo AB-</label>
        </div>
        </div>
        <div>
          <button class="botao1" type="submit">Notificar</button>
        </div>
      </form>

    </div>
  </div>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
