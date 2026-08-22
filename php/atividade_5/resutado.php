<?php require_once("controller.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Produto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <h2>Resumo do Produto</h2>
        
        <p><strong>Nome:</strong> <?= htmlspecialchars($produto->getNome()) ?></p>
        <p><strong>Preço Unitário:</strong> R$ <?= number_format($produto->getPrecoUnitario(), 2, ',', '.') ?></p>
        <p><strong>Quantidade:</strong> <?= $produto->getQuantidade() ?></p>
        <p><strong>Valor Total Sem Desconto:</strong> R$ <?= number_format($valorTotal, 2, ',', '.') ?></p>
        <p><strong>Valor Final Com Desconto (<?= $percentualDesconto ?>%):</strong> R$ <?= number_format($valorComDesconto, 2, ',', '.') ?></p>

        <?php if ($estoqueBaixo): ?>
            <div class="alert-warning">
                    <strong>Atenção:</strong> Este produto está com o estoque baixo (menos de 5 unidades)!
            </div>
        <?php endif; ?>

        <a href="index.html" class="btn-link">← Cadastrar outro produto</a>
    </div>
</body>
</html>