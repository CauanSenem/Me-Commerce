<?php
include "lib/conexao.php";
if (
  isset($_POST["autenticar"]) &
  !empty($_POST["login"]) &
  !empty($_POST["senha"])
) {
  $sql = "select * from usuarios where login = :login and senha = md5(:senha)";
  $consulta = $conn->prepare($sql);
  $consulta->execute(["login" => $_POST["login"], "senha" => $_POST["senha"]]);
  $usuario = $consulta->fetch();
  if ($consulta->rowCount() > 0) {
    if ($usuario["login"] == $_POST["login"]) {
      $_SESSION["autenticado"] = true;
      $_SESSION["usuario"] = $usuario;
      echo "autenticado";
      header("Location: ?pagina=home");
    }
  } else {
    include "erro.php";
  }
}
