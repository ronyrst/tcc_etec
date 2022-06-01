<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="notificar.css">
    <title>Document</title>
</head>
<body>
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
            <h2>Notificar Doadores</h2>
            <div class="form2">
                <form>
                            <div class="custom-checkbox">
                              <input id="checkbox-1" type="checkbox" value="A+">
                              <label for="checkbox-1">Tipo A+</label>
                            </div>
                            <div class="custom-checkbox">
                                <input id="checkbox-2" type="checkbox" value="A-">
                                <label for="checkbox-2">Tipo A-</label>
                              </div>
                              <div class="custom-checkbox">
                                <input id="checkbox-3" type="checkbox" value="B+">
                                <label for="checkbox-3">Tipo B+</label>
                              </div>
                              <div class="custom-checkbox">
                                <input id="checkbox-4" type="checkbox" value="B-">
                                <label for="checkbox-4">Tipo B-</label>
                              </div>
                              <div class="custom-checkbox">
                                <input id="checkbox-5" type="checkbox" value="O+">
                                <label for="checkbox-5">Tipo O+</label>
                              </div>
                              <div class="custom-checkbox">
                                <input id="checkbox-6" type="checkbox" value="O-">
                                <label for="checkbox-6">Tipo O-</label>
                              </div>
                              <div class="custom-checkbox">
                                <input id="checkbox-7" type="checkbox" value="AB+">
                                <label for="checkbox-7">Tipo AB+</label>
                              </div>
                              <div class="custom-checkbox">
                                <input id="checkbox-8" type="checkbox" value="AB-">
                                <label for="checkbox-8">Tipo AB-</label>
                              </div>
                      </div>
                      <div>
                        <button class="botao1" type = "submit">Notificar</button>
                      </div>
                  </form>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>