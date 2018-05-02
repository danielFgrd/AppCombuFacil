<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport" >
  <link rel="stylesheet" href="themes/theme.css" />
	<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
  <link rel="stylesheet" href="./js/jquery.mobile-1.4.5/jquery.mobile.structure-1.4.5.css"/>
  <script src="./js/jquery/jquery-3.3.1.js"></script>
  <script src="./js/jquery.mobile-1.4.5/jquery.mobile-1.4.5.js"></script>
</head>

<body>
  <div>
    <!-- ##############LOGIN -->
    <div data-role="page" data-theme="a" data-title="Login" id="page-login">
      <div data-role="header">
        <img src="./img/logo1.png" id="logo-login">
      </div>
      <div role="main" data-thme="a" class="ui-content">

        <div role="main" class="ui-content" data-theme="a">
          <form method="post" action="">
            <div data-role="fieldcontain">
            <fieldset data-role="controlgroup">
              <legend data-role="title"><h2>Faça o Login ou Cadastre-se</h2></legend>
              <div data-role="formgroup">
                <label for="email-login">Email</label>
                <input type="email" name="email-login" data-clear-btn="true"
                placeholder="Digite o email de login." id="email-login" class="custom"/>
              </div>
              <div data-role="formgroup">
                <label for="senha-login">Senha</label>
                <input type="password" placeholder="Digite a sua senha."
                data-clear-btn="true"
                name="senha-login" id="senha-login" class="custom"/>
              </div>
            </fieldset>
            <input type="submit" name="" id="" class="ui-btn" value="Entrar"/>
          </div>
          </form>
          <hr>
          <div data-role="controlgroup" data-position="" data-type="horizontal">
            <a href="#cadastro-usuario" data-transition="slide" class="ui-btn">Cadastrar Usuario</a>
          </div>
        </div>
        <style>
        #logo-login{width: 100%; }
        /* #page-login{background-color: #000;} */
        </style>
      </div>
      <div data-role="footer">
      </div>
    </div>

    <!--tela inicial-->
    <div data-role="page" data-theme="a" data-title="page-mapa" id="principal">
      <div data-role="page" id="map-page" data-url="map-page">
          <div data-role="header" data-theme="a">
          <h1>Maps</h1>
          </div>
          <div role="main" class="ui-content" id="map-canvas">
              <!-- map loads here... -->
          </div>
      </div>
      <!--Fim painel-->
      <!-- CABEÇALHO---->
      <div data-role="header">
        <a href="#painelDeMenuEsquerdoTI"
         data-role="button" data-transition="slide" data-direction="reverse" data-transition="slide" data-direction="reverse" data-transition="slide" data-direction="reverse" data-transition="slide" data-direction="reverse"
         data-icon="bars"
         data-iconpos="notext">Menu</a>
         <h1>Combu Fácil</h1>
      </div>


      <!-- <div role="main" class="ui-content" data-theme="a">
        <form method="post" action="">
          <div data-role="fieldcontain">
          <fieldset data-role="controlgroup">
            <legend data-role="title"><h2>Faça o Login ou Cadastre-se</h2></legend>
            <div data-role="formgroup">
              <label for="email-login">Email</label>
              <input type="email" name="email-login" data-clear-btn="true"
              placeholder="Digite o email de login." id="email-login" class="custom"/>
            </div>
            <div data-role="formgroup">
              <label for="senha-login">Senha</label>
              <input type="password" placeholder="Digite a sua senha."
              data-clear-btn="true"
              name="senha-login" id="senha-login" class="custom"/>
            </div>
          </fieldset>
          <input type="submit" name="" id="" class="ui-btn" value="Entrar"/>
        </div>
        </form>
        <hr>
        <div data-role="controlgroup" data-position="" data-type="horizontal">
          <a href="#cadastro-usuario" data-transition="slide" class="ui-btn">Cadastrar Usuario</a>
          <a href="#cadastro-posto" data-transition="slide" class="ui-btn">Cadastrar Posto</a>
        </div>
      </div> -->

      <div data-role="footer" data-theme="a">
        <h4>Notas de Rodape</h4>
      </div>

    </div>

    <!--Page Pós-LOGIN POSTO-->
    <div data-role="page" data-title="Pós Login" id="page-config">
      <div data-role="header" class="ui-header ui-bar-inherit" >
        <a href="#principal"
        data-role="button" data-transition="slide" data-direction="reverse" data-transition="slide" data-direction="reverse" data-transition="slide" data-direction="reverse" data-transition="slide" data-direction="reverse"
        data-icon="arrow-l"
        data-iconpos="notext">Tela inicial</a>
        <h1>Topo Tela Pós Login posto</h1>
      </div>


      <div data-role="content" class="ui-content pos-logon">
        <a href="" class="ui-btn">Meus Dados</a>
        <a href="#mudar-senha" data-transition="slide" class="ui-btn">Alterar Senha</a>
        <a href="#preco-comb" class="ui-btn" data-transition="slide">Cadastrar / Alterar Preços</a>
        <a href="" data-transition="slide" class="ui-btn">Bônus</a>
      </div>

      <div data-role="footer">
        <h1>Rodapé Tela Pós Login posto</h1>
      </div>
    </div>

    <!--Page TROCAR SENHA POSTO/CLIENTE -->
    <div data-role="page" id="mudar-senha" class="mudar-senha">

      <div data-role="header">
        <a href="#principal"
        data-role="button" data-transition="slide" data-direction="reverse" data-transition="slide" data-direction="reverse" data-transition="slide" data-direction="reverse" data-transition="slide" data-direction="reverse"
        data-icon="arrow-l"
        data-iconpos="notext">Tela inicial</a>
        <h1>TOPO Pagina TROCAR SENHA POSTO/CLIENTE</h1>
      </div>

      <div data-role="content" class="ui-content">
        <form action="" method="post">
          <div data-role="fieldcontain">
            <fieldset>
              <div class="block-senha">
                <label for="senha-alterada">Nova Senha: </label>
                <input type="password" name="senha-alterada" id="senha-alterada" class=""/>
              </div>
              <div class="block-senha">
                <label for="senha-confimada">Confirmar Nova Senha: </label>
                <input type="password" name="senha-alterada" id="senha-confimada" class=""/>
              </div>
              <div class="block-senha">
                <a data-hole="button">Alterar Senha</a>
              </div>
            </fieldset>
          </div>
        </form>
      </div>

      <div data-role="footer">
        <h1>Footer Pagina TROCAR SENHA POSTO/CLIENTE</h1>
      </div>

    </div>

    <!--Page PREÇO COMBUSTIVEL -->
    <div data-role="page" data-title="Preço do combustível" id="preco-comb" class="preco-comb">
      <div data-role="header" class="ui-bar-inherit ui-header">
        <a href="#page-config"
          data-role="button" data-transition="slide" data-direction="reverse" data-transition="slide" data-direction="reverse" data-transition="slide" data-direction="reverse" data-transition="slide" data-direction="reverse"
          data-icon="arrow-l"
          data-iconpos="notext">Tela inicial</a>
        <h1>TOPO Pagina Preço combustivel</h1>
      </div>

      <div data-role="content" class="ui-content">
        <form action="" method="post">
          <div data-role="form">
            <fieldset>
              <div class="block-senha">
                <label for="gasolina">Gasolina: </label>
                <input type="text" name="gasolina" id="gasolina" class=""/>
              </div>
              <div class="block-senha">
                <label for="alcool">Alcool: </label>
                <input type="text" name="alcool" id="alcool" class=""/>
              </div>
              <div class="block-senha">
                <label for="diesel">Diesel: </label>
                <input type="text" name="diesel" id="diesel" class=""/>
              </div>
              <div class="block-senha">
                <label for="gasolina-alt">Gasolina Aditivada: </label>
                <input type="text" name="gasolina" id="gasolina-alt" class=""/>
              </div>

              <div class="block-senha">
                <label for="gnv">GNV: </label>
                <input type="text" name="" id="gnv" class=""/>
              </div>
              <div class="block-senha">
                <a class="ui-btn">Cadastrar Preços</a>
              </div>
            </fieldset>
          </div>
        </form>
      </div>

      <div data-role="footer">
        <h1>Footer Pagina TROCAR SENHA POSTO/CLIENTE</h1>
      </div>
    </div>
    <!--Tela de cadastro-->
    <div data-role="page" data-title="Cadastro do usuario" id="cadastro-usuario">
     <div data-role="header" class="ui-header ui-bar-inherit">
                <h1> Cadastro de Usuario</h1>
         <a href="#principal"
         data-role="button" data-transition="slide" data-direction="reverse" data-transition="slide" data-direction="reverse" data-transition="slide" data-direction="reverse" data-transition="slide" data-direction="reverse"
         data-icon="arrow-l"
         data-iconpos="notext">Tela inicial</a>

         </div>
     <div data-role="content" class="ui-content">
         <form action="" method="POST">
           <div data-role="formgroup">
             <fieldset>
               <label for="nome-usu">Nome:</label>
                <input type="text" name="nome-usu" id="nome-usu">
                <label for="sobrenome-usu">Sobre nome:</label>
                <input type="text" name="sobrenome-usu" id="sobrenome-usu">
                <label for="email-usu">Email:</label>
                <input type="text" name="email-usu" id="email-usu">
                <label for="cpf-usu">CPF:</label>
                <input type="text" name="cpf-usu" id="cpf-usu">
              </fieldset>
              <fieldset>
                <label for="senha-usu">Senha</label>
                <input type="password" name="senha-usu" id="senha-usu">
                <label for="senha-confimada-usu">Confirmar senha</label>
                <input type="password" name="senha-confimada-usu" id="senha-confimada-usu">
              </fieldset>
              <input type="submit" class="ui-btn" value="cadastrar">
            </div>
          </form>

        </div>
    </div>

    <!-- Cadastro de POSTO -->
    <div data-role="page" data-title="Cadastro de Posto" id="cadastro-posto">
      <div data-role="header" class="ui-header ui-bar-inherit">
        <a href="#principal"
          data-role="button" data-transition="slide" data-direction="reverse" data-transition="slide" data-direction="reverse" data-transition="slide" data-direction="reverse" data-transition="slide" data-direction="reverse"
          data-icon="arrow-l"
          data-iconpos="notext">Tela inicial</a>
        <h1>Cadastro de Posto</h1>
      </div>
      <div data-role="content">
        <form action="" method="POST">
          <div data-role="fieldcontain">
            <fieldset>
              <label form>Razão social:</label>
              <input type="text" name="txtRazSocial">
              <label>Nome fantasia:</label>
              <input type="text" name="txtNonFatasia">
              <label>CNPJ:</label>
              <input type="text" name="txtCnpj">
              <label>Endereço:</label>
              <input type="text" name="txtEndereco">
              <label>CEP:</label>
              <input type="text" name="txtCep">
              <label>Bairro:</label>
              <input type="text" name="txtBairro">
              <label>Cidade:</label>
              <input type="text" name="txtCidade">
              <label>Estado:</label>
              <input type="text" name="txtEstado">
            </fieldset>
            <input type="submit" value="Cadastrar">
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
 
