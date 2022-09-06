<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<form id="form_login" method="post" action="">
  <fieldset >
    <h3 style="text-align: center; margin-top: 5%;">Faça seu login</h3>
    <div id="login_div" class="mb-3">
      <label for="extInput" class="form-label">Email:</label>
      <input type="text" name="login" class="form-control" placeholder="Insira seu Email">
    </div>
    <div id="login_div" class="mb-3">
      <label for="extInput" class="form-label">Senha:</label>
      <input type="password" name="senha" class="form-control" placeholder="Insira sua chave de acesso">
    </div>
    <div>
      <input type="submit" name="autenticar" value="Continuar">
  </fieldset>
  <div style="height: 30px;"></div>
</form>