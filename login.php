<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body id="body2">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <div id="barra_inicial">
      <!--navbar-->
        <div id="texto_barra_inicial"><img src="imagens/vendas_online.png"></div>  
    <nav class="navbar navbar-expand-lg bg-black">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-2">
            <li class="nav-item">
                <a class="nav-link" href="index.php" style="color:white;">Home</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="color: white;" aria-expanded="false">
                  Opções
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="COLOCAR" style="color: rgb(7, 6, 6);">Suporte</a></li>
                  <li><a class="dropdown-item" href="COLOCAR" style="color: rgb(19, 16, 16);">Contato</a></li>
                  <li><a class="dropdown-item" href="COLOCAR" style="color: rgb(14, 11, 11);"> Loja Fisica</a></li>
                  <li><a class="dropdown-item" href="COLOCAR" style="color: rgb(7, 6, 6);">Rio do Sul</a></li>
                </ul>
              </li>
              <a class="nav-link" href=""></a>
              <li class="nav-item">
                <a class="nav-link" href="add_produto.php" style="color: white;" >Adicionar Produtos</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="login.php" style="color: white;" >Login</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Busca" aria-label="Search" >
              <button class="btn btn-outline" type="submit" style="color: white;">Pesquisar</button>
            </form>
          </div>
        </div>
      </nav>

  <form id="form_login">
        <fieldset >
          <h3 style="text-align: center; margin-top: 5%;">Faça seu login</h3>
          <div id="login_div" class="mb-3">
            <label for="extInput" class="form-label">Email:</label>
            <input type="text" id="TextInput" class="form-control" placeholder="Insira seu Email">
          </div>
          <div id="login_div" class="mb-3">
            <label for="extInput" class="form-label">Senha:</label>
            <input type="text" id="TextInput" class="form-control" placeholder="Insira sua chave de acesso">
          </div>
          <div id="login_div"class="mb-3">
            <div class="form-check">
              Aceito os termos do site
              <input class="form-check-input" type="checkbox" id="FieldsetCheck">
              <label class="form-check-label" for="FieldsetCheck">
              </label>
            </div>
          </div>
          <button id="login_div" style="margin-botton: 4%;" type="submit" class="btn btn-primary">Continuar</button>
        </fieldset>
        <div style="height: 30px;"></div>
      </form>
</body>
</html>

