<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Inserir Produto</title>
</head>
<body>
    <div class="col grey lighten-3">
        <h3 class="card-panel teal lighten-2 white-text align center">Adicionar Novo Produto</h3>

        <div class="row">
            <div class="offset-s1">
                <a class="waves-effect waves-light btn-small"><i class="material-icons">arrow_back</i></a>
            </div>
        </div>
        
        <div class="row">
            <form action="insProduto.php" method="post" id="frminsProdutoNome" class="col s12">
                <div class="input-field col s8 offset-s2">
                    <label for="lblnome">Informe o Nome do Produto</label>
                    <input type="text" class="form-control" id="txtnome" name="txtnome">    
                </div>
            </form>
        </div>
        
        <div class="row">
            <form action="insProduto.php" method="post" id="frminsProdutoPreco" class="col s12">
                <div class="offset-s2 col s3">
                    <label for="lblcategoria">Informe a Categoria do Produto</label>
                    <input id="txtcategoria" name="txtcategoria" class="dropdown-trigger">
                    <ul id='dropdown1' class='dropdown-content'>
                        <li>cacetinho alado 2145</li>
                    </ul>
                </div>

                <div class="offset-s2 col s3">

                </div>
            </form>
        </div>

        <div class="row">
            <form action="insProduto.php" method="post" id="frminsProdutoPreco" class="col s12">
                <div class="input-field offset-s2 col s3">

                </div>
                <div class="input-field offset-s2 col s3">

                </div>
            </form>
        </div>
    </div>
</body>
</html>
