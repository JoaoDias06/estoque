<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Inserir Categoria</title>
</head>
<body class="grey lighten-3">
    <div>
        <h3 class="card-panel teal lighten-2 white-text align center">Adicionar Nova Categoria</h3>

        <div class="row">
            <form action="insCategoria.php" method="POST" id="frminsCategoria" class="col s12">
                <div class="input-field col s8 offset-s2">
                    <label for="lblnome">Informe o Nome da Categoria</label>
                    <input type="text" class="form-control" id="txtnome" name="txtnome">
                </div>

                <div class="input-field col s8 offset-s2">
                    <br>
                    <button class="btn waves-effect waves-light green" type="submit" name="btngravar">Gravar
                        <i class="material-icons right">save</i>
                    </button>
                    <button class="btn waves-effect waves-light orange" type="reset" name="btnreset">Limpar
                        <i class="material-icons right">brush</i>
                    </button>
                    <button class="btn waves-effect waves-light red" type="button" name="btnvoltar" 
                        onclick="JavaScript:location.href='listarProdutos.php'">Voltar
                        <i class="material-icons right">arrow_back</i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>