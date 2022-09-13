<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script>
<body>
<div class="container" id="barralateral">
    <div class="row">
        <div class="col-3">
            <?php include "menu_categorias.php"; ?>
        </div>
        <div class="col-9">
            <?php if (isset($_GET["pagina"])) {
              if ($_GET["pagina"] == "produtos") {
                include "produtos_home.php";
              }
              if ($_GET["pagina"] == "produto") {
                include "produto_detalhe.php";
              }
              if ($_GET["pagina"] == "sacola") {
                include "sacola.php";
              }
              if ($_GET["pagina"] == "meus_pedidos") {
                include "meus_pedidos.php";
              }
              if ($_GET["pagina"] == "realizar_pedido") {
                if (!isset($_SESSION["autenticado"])) {
                  include "login.php";
                } else {
                  include "realizar_pedido.php";
                }
              }
            } else {
              include "produtos_destaque.php";
            } ?>
        </div>
    </div>
    <div class="row" style="background-color: #ccc;">
        @meu commerce 2022
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>
</body>