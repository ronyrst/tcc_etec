<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_js/entrar.css">
    <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>
  
    <title>Leve Sangue - Entrar</title>

</head>
<body>
    <div class="fixado">
<div class="menuhorizontal">
    <div class="logo">
        <img src="images\logo2.png" alt="Logo Leve Sangue" class="img">
    </div> 
    <ul>
        <li><a href="index.php">Início</a></li>
        <li><a href="entrar.php">Entrar / Registrar</a></li>

    </ul>
</div>
    </div>
    <div class="banner1">
        <img src="images\fundoEscuro.png" alt="Fundo doação é amor" class="img2">
    </div>

    <div class="container">
        <div class="buttonsForm">
            <div class="btnColor"></div>
            <button id="btnSignin">Entrar</button>
            <button id="btnSignup">Registrar</button>
        </div>

        <!-- form de login -->
        <form id="signin" method="POST" action="login.php">
            <!-- email -->
            <input type="text" placeholder="Email" name="login" id="login" required>
            <i class="fas fa-envelope iEmail"></i>
            <!-- senha -->
            <input type="password" placeholder="Senha" name="senha" id="senha" required>
            <i class="fas fa-lock iPassword"></i>
            <div class="divCheck1">
                <input type="checkbox">
                <span>Lembrar a senha</span>
            </div>
            <div class="entrarBtn">
                <button type="submit" value="entrar" id="entrar" name="entrar">Entrar</button>
            </div>
        </form>

        <!-- ############################################################# -->
        <!-- ############################################################# -->
        <!-- #######################  T O   D O  ######################### -->
        <!-- ############################################################# -->
        <!-- ############################################################# -->
        <!-- form de cadastro -->
        <form id="signup">
            <!-- nome -->
            <input type="text" placeholder="Nome" required>
            <i class="fas fa-solid fa-user iUser"></i>
            <!-- email -->
            <input type="text" placeholder="Email" required>
            <i class="fas fa-envelope iEmail"></i>
            <!-- senha -->
            <input type="password" placeholder="Senha" required>
            <i class="fas fa-lock iPassword2"></i>
            <!-- cnpj -->
            <input type="text" placeholder="CNPJ" pattern="(\d{3}\.?\d{3}\.?\d{3}-?\d{2})|(\d{2}\.?\d{3}\.?\d{3}/?\d{4}-?\d{2})" required>
            <i class="fas fa-solid fa-id-card iCNPJ"></i>
            <!-- cep -->
            <input type="text" placeholder="CEP" required>
            <i class="fas fa-solid fa-location-arrow iCEP"></i>
            <div class="divCheck">
                <input type="checkbox" required>
                <span>Termos</span>
            </div>
            <button type="submit">Registrar</button>
        </form>
        </div>
   
<script src="css_js/texte.2.js"></script>
<div class="rodape">
    <div class="textos_rodape">
        <ul>
            <!-- ############################################################# -->
            <!-- ############################################################# -->
            <!-- #######################  T O   D O  ######################### -->
            <!-- ############################################################# -->
            <!-- ############################################################# -->
            <li><a href="#"><i class="fa-brands fa-whatsapp"></i>WhatsApp</a></li>
            <li><a href="mailto:bot.tcc.sangue@gmail.com">Email para orçamento</a></li>
        </ul>
    </div>
</div>



</body>
</html>