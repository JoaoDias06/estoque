<?php 
    $id = $_GET['id'];
    include '../conexao.php';
    $pdo = conexao::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM marca WHERE ID_MARCA=?";
    $query = $pdo->prepare($sql);
    $query->execute(array($id));
    $marca = $query->fetch(PDO::FETCH_ASSOC);
    conexao::desconectar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Editar Marca</title>
</head>
<body class="grey lighten-5">
    <div class="container white">
        <div>
            <h3 class="card-panel teal lighten-2 white-text align center">Editar Marca</h3>
        </div>

        <div class="row">
            <form action="edtMarca.php" method="POST" class="col s12" id="frmedtMarca">
                <div class="input-field col s8 offset-s2">
                    <label for="lblid">ID da categoria</label>
                    <br>
                    <h6><b class="black-text"><?php echo $id?></b></h6>
                    <input type="hidden" name="id" value="<?php echo $id?>">
                </div>

                <div class="input-field col s8 offset-s2">
                    <label for="lblnome">Informe o Nome da Marca</label>
                    <input type="text" class="form-control" id="txtnome" name="txtnome" value="<?php echo $marca['NOME_MARCA']?>">
                </div>

                <div class="input-field col s8 offset-s2">
                    <label for="lblpreco">Informe o Email da Marca</label>
                    <input type="text" id="txtemail" name="txtemail" class="form-control" value="<?php echo $marca['EMAIL_MARCA']?>">
                </div>

                <div class="input field col s8 offset-s2">
                    <br>
                    <button class="btn waves-effect waves-light green" type="submit" name="btngravar">Gravar
                        <i class="material-icons right">save</i>
                    </button>
                    <button class="btn waves-effect waves-light orange" type="reset" name="btnreset">Limpar
                        <i class="material-icons right">brush</i>
                    </button>
                    <button class="btn waves-effect waves-light red" type="button" name="btnvoltar" 
                        onclick="JavaScript:location.href='listarMarcas.php'" >Voltar
                        <i class="material-icons right">arrow_back</i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
