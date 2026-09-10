<?php
require_once 'Aluno.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $nota1 = (float) ($_POST['nota1'] ?? 0);
    $nota2 = (float) ($_POST['nota2'] ?? 0);
    $nota3 = (float) ($_POST['nota3'] ?? 0);
    $faltas = (int) ($_POST['faltas'] ?? 0);

    // Instancia o Model
    $aluno = new Aluno($nome, $nota1, $nota2, $nota3, $faltas);

    // Processa os resultados
    $media = $aluno->getMedia();
    $presenca = $aluno->calcularPresenca();
    $situacao = $aluno->mostrarResultado();

    // Inclui a View para exibição dos dados
    require_once 'resultado.php';
}