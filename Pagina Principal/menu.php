<?php //verificar se o usuario tem acesso 
  session_start();
  if (!isset($_SESSION['usuario']))
    header("location:../Login/index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Estoque</title>
</head>
<body>
  <!--Menu de Navegacao-->
  <nav class="teal darken-4">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="../Pagina Principal/home.php">Inicio</a></li>
        <li><a href="../Produto/listarProdutos.php">Produtos</a></li>
        <li><a href="../Categoria/listarCategorias.php">Categorias</a></li>
        <li><a href="../Marca/listarMarcas.php">Marcas</a></li>
        <li><a href="../Movimentacao/listarMovimento.php">Movimentação</a></li>
        <li><a href="../Login/logout.php">Logout</a></li>
      </ul>
    </div>
  </nav>

  <!--sidenav-->
  <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="../imagens/industria.png" width="300px" height="180px">
      </div>
      <a href="#name"><span class="white-text name">João Dias</span></a>
      <a href="#email"><span class="white-text email">joaopedrodias0601@gmail.com</span></a>
    </div></li>
    <li><a href="../Pagina Principal/home.php"><i class="material-icons">home</i>Home</a></li>
    <li><a href="../Produto/listarProdutos.php"><i class="material-icons">business_center</i>Produtos</a></li>
    <li><a href="../Categoria/listarCategorias.php"><i class="material-icons">collections_bookmark</i>Categorias</a></li>
    <li><a href="../Marca/listarMarcas.php"><i class="material-icons">event_note</i>Marcas</a></li>
    <li><a href="../Movimentacao/listarMovimento.php"><i class="material-icons">storage</i>Movimentação</a></li>
    <li><div class="divider"></div></li>
    <li><a href="../Login/logout.php"><i class="material-icons">exit_to_app</i>Logout</a></li>
   </ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons teal-text">menu</i></a>
   
</body>
</html>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
  });
</script>