<?php
include_once "lib/conexao.php";
if (isset($_POST["adicionar"])) {
  $sql = "
            INSERT into produtos
            (descricao,caracteristicas,categoria_id,valor,estoque,imagem,resumo)
            values(:descricao, :caracteristicas, :categoria_id, :valor, :estoque, :imagem, :resumo)
        ";
  $consulta = $conn->prepare($sql);
  $resultado = $consulta->execute([
    "descricao" => $_POST["descricao"],
    "caracteristicas" => $_POST["carac"],
    "categoria_id" => $_POST["id"],
    "valor" => $_POST["valor"],
    "estoque" => $_POST["estoque"],
    "imagem" => $_POST["local"],
    "resumo" => $_POST["resumo"],
  ]);
}
?>
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
  <form id="form_login" method="POST">
    <fieldset>
      <h3 style="text-align: center; margin-top: 5%;">Adicionar Produto</h3>
    <div id="login_div" class="mb-3">
        <label for="extInput" class="form-label">Descrição</label>
        <input type="text" name="descricao" class="form-control" id="textinput" placeholder="Descrição">
    </div>
      <div id="login_div"class="mb-3">
      <label for="extInput" class="form-label">Caracteristicas do Produto</label>
        <input type="text" name="carac" class="form-control" id="textinput" placeholder="Caracteristicas">
    </div>
    <div id="login_div"class="mb-3">
      Categoria
      <select name="id" class="form-select">
        <?php
        $sql = "select * from categorias";
        $grupos2 = $conn->prepare($sql);
        $grupos2->execute();
        while ($grupo2 = $grupos2->fetch()) {
          if ($grupo["id"] == $linha["id"]) {
            echo "<option value=\"{$grupo2["id"]}\"selected>{$grupo2["descricao"]}</option>";
          } else {
            echo "<option value=\"{$grupo2["id"]}\">{$grupo2["descricao"]}</option>";
          }
        }
        ?>
        </select>
    </div>
    <div id="login_div"class="mb-3">
      <label for="extInput" class="form-label">Valor</label>
        <input type="text" name="valor" class="form-control" id="textinput" placeholder="Valor">
    </div>
    <div id="login_div"class="mb-3">
    <label for="extInput" class="form-label">Estoque</label>
      <label for="extInput" class="form-label"></label>
        <input type="text" name="estoque" class="form-control" id="textinput" placeholder="Estoque">
    </div>
     <div id="login_div"class="mb-3">
      <label for="extInput" class="form-label">Imagem</label>
        <input type="text" name="local" class="form-control" id="textinput" placeholder="Local da Imagem">
    </div>
    <div id="login_div"class="mb-3">
      <label for="extInput" class="form-label">Resumo</label>
        <input type="text" name="resumo" class="form-control" id="textinput" placeholder="Resumo">
    </div>
    <input id="login_div" name="adicionar" type="submit" class="btn btn-primary" value="Continuar">
    </fieldset>
    <div style="height: 30px;"></div>
  </form>
</body>
</html>
