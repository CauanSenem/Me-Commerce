<nav class="navbar navbar-expand-lg bg-black">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-2">
            <li class="nav-item">
                <a class="nav-link" href="?pagina=home" style="color:white;">Home</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="color: white;" aria-expanded="false">
                  Opções
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="?pagina=suporte" style="color: rgb(7, 6, 6);">Suporte</a></li>
                  <li><a class="dropdown-item" href="?pagina=contato" style="color: rgb(19, 16, 16);">Contato</a></li>
                  <li><a class="dropdown-item" href="?pagina=lojaf" style="color: rgb(14, 11, 11);"> Loja Fisica</a></li>
                  <li><a class="dropdown-item" href="?pagina=trocar" style="color: rgb(7, 6, 6);">Trocar Usuário</a></li>
                </ul>
              </li>
              <a class="nav-link" href=""></a>
              <?php if ($_SESSION["admin"] == $_SESSION["ver"]) {
                echo "<li class='nav-item'>
                      <a class='nav-link' href='?pagina=addproduto' style='color: white;'>Adicionar Produtos</a>
                      </li>";
              } ?>
              <li class="nav-item">
              <a class="nav-link" href="?pagina=sacola" style="color: white;">Carinho<?php if (
                isset($_SESSION["sacola"])
              ) {
                echo "(" . count($_SESSION["sacola"]) . ")";
              } ?></a>
              </li>
              <li class="nav-item">
                <?php if (isset($_SESSION["autenticado"])) { ?>
                <a class="nav-link" href="?pagina=meus_pedidos" style="color: white;">Meus pedidos</a><?php } ?>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="?pagina=logout" style="color: white;" >Logout</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Busca" aria-label="Search" >
              <button class="btn btn-outline" type="submit" style="color: white;">Pesquisar</button>
            </form>
          </div>
        </div>
      </nav>  