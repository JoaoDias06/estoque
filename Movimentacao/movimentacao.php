<?php
include '../Pagina Principal/menu.php';
include '../conexao.php';
$pdo = conexao::conectar();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Registrar Movimentação de Estoque</title>
</head>

<body>

    <div class="container">

        <div class="container white">
            <div>
                <h4 class="card-panel teal lighten-2 white-text align center">Registrar Movimentação no Estoque</h4>
            </div>
        </div>

        <form action="processa_movimento.php" method="POST">
                <div class="input-field">
                    <select name="produto_id" id="produto" required>
                        <option value="" disabled selected>Selecione um produto</option>
                        <?php
                            try {
                                // A consulta deve ser feita ENQUANTO a conexão está aberta
                                $stmt = $pdo->query("SELECT ID_PRODUTO, NOME_PRODUTO FROM produto ORDER BY NOME_PRODUTO");
                                
                                // Loop correto para buscar e exibir todas as opções
                                while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    echo "<option value='{$produto['ID_PRODUTO']}'>{$produto['NOME_PRODUTO']}</option>";
                                }
                            } catch (PDOException $e) {
                                echo "<option value=''>Erro ao carregar produtos: " . $e->getMessage() . "</option>";
                            }
                        ?>
                    </select>
                </div>
                <br> 
                <div class="input-field">
                    <select name="tipo_movimento" id="tipo" required>
                        <option value="entrada">Entrada</option>
                        <option value="saida">Saída</option>
                    </select>
                </div>
                <br>

                <div class="input-field">
                    <label for="quantidade">Quantidade:</label>
                    <input type="number" name="quantidade" id="quantidade" min="1" required>
                </div>
                <br>

                <div class="input-field">
                    <label for="observacao">Observação:</label>
                    <textarea name="observacao" id="observacao" class="materialize-textarea" rows="3"></textarea>
                </div>
                <br>

                <button class="btn waves-effect waves-light teal darken-4" type="submit">Registrar
                    <i class="material-icons right">send</i>
                </button>
            </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        // Inicialização dos selects do Materialize
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems);
        });
    </script>
</body>

</html>