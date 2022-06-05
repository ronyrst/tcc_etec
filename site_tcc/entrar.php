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
            
            <!-- 
            A função de lembrar senha não foi implementada. O navegador mesmo já tem essa função.
            Mas fica um detalhe pra fazer mais pra frente.
            -->
            <!-- <div class="divCheck1">
                <input type="checkbox">
                <span>Lembrar a senha</span>
            </div> -->
            <div class="entrarBtn">
                <button type="submit" value="entrar" id="entrar" name="entrar">Entrar</button>
            </div>
        </form>


        <!-- form de cadastro -->
        <form id="signup" method="POST" action="cadastro-centro.php">
            <!-- nome -->
            <input type="text" placeholder="Nome" name="nome" id="nome" required>
            <i class="fas fa-solid fa-user iUser"></i>
            <!-- email -->
            <input type="text" placeholder="Email" name="email" id="email" required>
            <i class="fas fa-envelope iEmail"></i>
            <!-- senha -->
            <input type="password" placeholder="Senha"  name="senha" id="senha" required>
            <i class="fas fa-lock iPassword2"></i>
            <!-- cnpj -->
            <input type="text" placeholder="CNPJ"  name="cnpj" id="cnpj" pattern="(\d{3}\.?\d{3}\.?\d{3}-?\d{2})|(\d{2}\.?\d{3}\.?\d{3}/?\d{4}-?\d{2})" required>
            <i class="fas fa-solid fa-id-card iCNPJ"></i>
            <!-- cep -->
            <input type="text" placeholder="CEP"  name="cep" id="cep" required>
            <i class="fas fa-solid fa-location-arrow iCEP"></i>
            <!-- Estado -->
            <br><br><br>
            <div class="input-field">
            <select id="estado" name="estado" form="signup" required>
                <option value="==">Selecione o Estado</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
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
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
            </select>
</div>

            <!-- A parte de aceitar os termos de uso não será usada atualmente -->
            <!-- <div class="divCheck">
                <input type="checkbox" required>
                <span>Termos</span>
            </div> -->
            <button type="submit" value="Registrar" id="registrar" name="registrar">Registrar</button>
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
            <li><a href="#">WhatsApp</a></li>
            <li><a href="mailto:bot.tcc.sangue@gmail.com">Email para orçamento</a></li>
        </ul>
    </div>
</div>



</body>
</html>