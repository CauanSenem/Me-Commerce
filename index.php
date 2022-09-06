<?php
session_start();
include_once "lib/conexao.php";
include_once "autenticar.php";
if (isset($_POST["pagina"])) {
  include "menu.php";
}
if (isset($_GET["pagina"])) {
  if ($_GET["pagina"] == "logout") {
    session_destroy();
    session_start();
    header("Location: ?pagina=home");
  }
}
if (isset($_GET["pagina"])) {
  if (isset($_SESSION["autenticado"])) {
    if (isset($_GET["pagina"])) {
      $sql = "select from paginas where id = :id";
      $consulta = $conn->prepare($sql);
      $consulta->execute(["id" => $_GET["pagina"]]);
      $linha = $consulta->fetch();
      if (!empty($linha["src"])) {
        include "menu.php";
        echo $linha["src"];
        require_once $linha["src"];
      } else {
        include "404.php";
      }
    } else {
      include "login.php";
    }
  }
} else {
  include "login.php";
}
?>
