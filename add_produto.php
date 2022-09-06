<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body id="body2">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <form id="form_login">
    <fieldset>
      <h3 style="text-align: center; margin-top: 5%;">Adicionar Produto</h3>
    <div id="login_div" class="mb-3">
        <label for="extInput" class="form-label">Descrição</label>
        <input type="text" id="TextInput" class="form-control" placeholder="Sobre o Produto">
    </div>
      <div id="login_div"class="mb-3">
      <label for="extInput" class="form-label">Caracteristicas do Produto</label>
        <input type="text" id="TextInput" class="form-control" placeholder="Informações de Software">
    </div>
    <div id="login_div"class="mb-3">
      <label for="extInput" class="form-label">Valor</label>
        <input type="text" id="TextInput" class="form-control" placeholder="Preço dado ao Produto">
    </div>
    <div id="login_div"class="mb-3">
      <label for="extInput" class="form-label">Estoque</label>
        <input type="text" id="TextInput" class="form-control" placeholder="Quantidade de Unidades por estoque">
    </div>
    <div id="login_div"class="mb-3">
    <label for="extInput" class="form-label">Imagem</label>
      <label for="extInput" class="form-label"></label>
        <input type="file" id="TextInput" class="form-control">
    </div>
    <div id="login_div"class="mb-3">
      <label for="extInput" class="form-label">Resumo</label>
        <input type="text" id="TextInput" class="form-control" placeholder="Sobre o Produto">
    </div>
    <button id="login_div" style="margin-botton: 4%;" type="submit" class="btn btn-primary">Continuar</button>
    </fieldset>
    <div style="height: 30px;"></div>
  </form>
</body>
</html>
