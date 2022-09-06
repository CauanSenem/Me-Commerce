<?php
  include "lib/conexao.php";
  if (isset($_GET['pagina'])) {
    $sql = "select from paginas where id = :id";
    $consulta = $conn->prepare($sql);
    $consulta->execute(array("id" => $_GET['pagina']));
    $linha = $consulta->fetch();
    if (!empty($linha['src'])) {
      include "menu.php";
      echo $linha['src'];
      require_once $linha['src'];
    }
    else {
      include "404.php";
    }
  } 
  else 
  {
    include 'login.php';
  }
?>