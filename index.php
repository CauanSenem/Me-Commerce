<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
<?php
session_start();
include_once "lib/conexao.php";
include_once "autenticar.php";
if (isset($_GET["debug"])) {
  $_SESSION["debug"] = $_GET["debug"];
}
if (isset($_POST["limpar_sacola"])) {
  unset($_SESSION["sacola"]);
}
if (isset($_POST["adicionar_sacola"])) {
  $_SESSION["sacola"][] = $_GET["id"];
}
if (isset($_POST["remover_sacola"])) {
  unset($_SESSION["sacola"][$_POST["produto"]]);
}
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
if (isset($_SESSION["autenticado"])) {
  if (isset($_GET["pagina"])) {
    $sql = "select * from paginas where id = :id";
    $consulta = $conn->prepare($sql);
    $consulta->execute(["id" => $_GET["pagina"]]);
    $linha = $consulta->fetch();
    if (!empty($linha["src"])) {
      include "menu.php";
      require_once $linha["src"];
    } else {
      include "404.php";
    }
  } else {
    include "login.php";
  }
} else {
  include "login.php";
}
?>
