<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Acessa o valor selecionado no <select>
        $marca = $_POST['nome'];
    
        // Exemplo de como você pode usar esse valor
        echo "A marca escolhida foi: " . $marca;
    }

    include 'conexao.php';
    $pdo = conexao::conectar();
    $sql1 = "SELECT * FROM categoria";
    $sql2 = "SELECT * FROM marca";
    $listarCat = $pdo->query($sql1);
    $listarMar = $pdo->query($sql2);
?>

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
<body class="grey lighten-3">
    <div class="col">
        <h3 class="card-panel teal lighten-2 white-text align center">Adicionar Novo Produto</h3>
        
        <div class="row">
            <form action="insProduto.php" method="post" id="frminsProduto" class="col s12">
                <div class="input-field col s8 offset-s2">
                    <label for="lblnome">Informe o Nome do Produto</label>
                    <input type="text" class="form-control" id="txtnome" name="txtnome">    
                </div>
        
                <div class="offset-s2 col s8">
                    <label for="lblcategoria">Informe a Categoria do Produto</label>
                    <select id="txtcategoria" name="txtcategoria">
                        <option value=""></option>
                        <?php 
                            $cont = 0;
                            foreach ($listarCat as $categoria) {
                        ?>
                        <option value="<?php echo $categoria['ID_CATEGORIA']?>"><?php echo($categoria['ID_CATEGORIA'] . " - " . $categoria['NOME_CATEGORIA'])?></option>
                        <?php 
                            $cont++;
                            }
                        ?>
                    </select>
                </div>
        
                <div class="offset-s2 col s8">
                    <label for="lblmarca">Informe a Marca do Produto</label>
                    <select id="txtmarca" name="txtmarca">
                        <option value=""></option>
                        <?php 
                            $cont = 0;
                            foreach ($listarMar as $marca) {
                        ?>
                        <option value="<?php echo $marca['ID_MARCA']?>"><?php echo($marca['ID_MARCA'] . " - " . $marca['NOME_MARCA'])?></option>
                        <?php 
                            $cont++;
                            }
                        ?>
                    </select>
                </div>

                <div class="input-field offset-s2 col s4">
                    <label for="lblpreco">Informe o Preço do Produto</label>
                    <input type="number" id="txtpreco" name="txtpreco" class="form-control">
                </div>

                <div class="input-field col s4">
                    <label for="lblquantidade">Informe a Quantidade do Produto</label>
                    <input type="number" id="txtquantidade" name="txtquantidade" class="form-control">
                </div>

                <div class="input-field col s8 offset-s2">
                    <br>
                    <button class="btn waves-effect waves-light green" type="submit" name="btngravar">Gravar
                        <i class="material-icons right">save</i>
                    </button>
                    <button class="btn waves-effect waves-light orange" type="reset" name="btnReset">Limpar
                        <i class="material-icons right">brush</i>
                    </button>
                    <button class="btn waves-effect waves-light red" type="button" name="btnVoltar"
                    onclick="JavaScript:location.href='listarProdutos.php'" >Voltar
                        <i class="material-icons right">arrow_back</i>
                    </button>
                </div>

            </form>
        </div>

    </div>
</body>
</html>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems);
    });
</script>