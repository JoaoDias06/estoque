<?php 
require '../conexao.php';
$pdo = conexao::conectar(); // arquivo de conexão

// Verificar se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // validar os dados
    $produto_id = filter_input(INPUT_POST, 'produto_id', FILTER_VALIDATE_INT);
    $tipo_movimento = filter_input(INPUT_POST, 'tipo_movimento', FILTER_SANITIZE_STRING);
    $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_VALIDATE_INT);
    $observacao = filter_input(INPUT_POST, 'observacao', FILTER_SANITIZE_STRING);

    $erros = [];

    // Validações específicas
    if ($produto_id === false) {
        $erros[] = "Produto inválido.";
    }
    if ($quantidade === false || $quantidade <= 0) {
        $erros[] = "Quantidade deve ser um número positivo.";
    }
    if ($tipo_movimento !== 'entrada' && $tipo_movimento !== 'saida') {
        $erros[] = "Tipo de movimento inválido.";
    }
    
    // Se houver erros, exiBE e para a execução
    if (!empty($erros)) {
        foreach ($erros as $erro) {
            echo "<p>Erro: $erro</p>";
        }
        echo "<a href='movimentacao.php'>Voltar ao formulário</a>";
        exit;
    }

    // Se tudo estiver ok,vai no banco de dados
    try {
        $sql = "INSERT INTO movimentos (PRODUTO_ID, TIPO, QUANTIDADE, OBSERVACAO) VALUES (:produto_id, :tipo_movimento, :quantidade, :observacao)";
        $stmt = $pdo->prepare($sql);
        
        $stmt->execute([
            ':produto_id' => $produto_id,
            ':tipo_movimento' => $tipo_movimento,
            ':quantidade' => $quantidade,
            ':observacao' => $observacao
        ]);

        $sql_update_produto = "";
        if ($tipo_movimento === 'entrada') {
            // Adiciona a quantidade ao estoque
            $sql_update_produto = "UPDATE produto SET QUANTIDADE_PRODUTO = QUANTIDADE_PRODUTO + :quantidade WHERE ID_PRODUTO = :produto_id";
        } elseif ($tipo_movimento === 'saida') {
            // Para saída, primeiro verifica se há estoque suficiente
            $sql_check_stock = "SELECT QUANTIDADE_PRODUTO FROM produto WHERE ID_PRODUTO = :produto_id";
            $stmt_check = $pdo->prepare($sql_check_stock);
            $stmt_check->execute([':produto_id' => $produto_id]);
            $estoque_atual = $stmt_check->fetchColumn();

            if ($estoque_atual === false || $estoque_atual < $quantidade) {
                // Se não houver estoque suficiente, reverte a transação
                $pdo->rollBack();
                echo "<p style='color: red;'>Erro: Estoque insuficiente para a saída. Estoque atual: $estoque_atual</p>";
                echo "<a href='movimentacao.php'>Voltar ao formulário</a>";
                exit;
            }
            // Subtrai a quantidade do estoque
            $sql_update_produto = "UPDATE produto SET QUANTIDADE_PRODUTO = QUANTIDADE_PRODUTO - :quantidade WHERE ID_PRODUTO = :produto_id";
        }

        if (!empty($sql_update_produto)) {
            $stmt_update = $pdo->prepare($sql_update_produto);
            $stmt_update->execute([
                ':quantidade' => $quantidade,
                ':produto_id' => $produto_id
            ]);
        }

        header("location:listarMovimento.php");
        

    } catch (PDOException $e) {
        die("Erro ao registrar movimento: " . $e->getMessage());
    }
}
?>