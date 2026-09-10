<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Aluno</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="card">
        <h2>Resumo do Aluno</h2>
        
        <p><strong>Nome:</strong> <?= htmlspecialchars($aluno->getNome()) ?></p>
        <p><strong>Notas:</strong> <?= number_format($aluno->getNota1(), 1) ?>, <?= number_format($aluno->getNota2(), 1) ?>, <?= number_format($aluno->getNota3(), 1) ?></p>
        <p><strong>Média:</strong> <?= number_format($media, 2, ',', '.') ?></p>
        <p><strong>Faltas:</strong> <?= $aluno->getFaltas() ?></p>
        <p><strong>Presença:</strong> <?= number_format($presenca, 1, ',', '.') ?>%</p>
        <p><strong>Situação Final:</strong> <?= $situacao ?></p>

        <?php if ($presenca < 75): ?>
            <div class="alert-warning">
                <strong>Atenção:</strong> Aluno reprovado por ter presença menor que 75%!
            </div>
        <?php endif; ?>

        <a href="index.html" class="btn-link">← Cadastrar outro aluno</a>
    </div>
</body>
</html>