<?php
require_once 'Produto.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $preco = (float) ($_POST['precoUnitario'] ?? 0);
    $quantidade = (int) ($_POST['quantidade'] ?? 0);
    $percentualDesconto = (float) ($_POST['desconto'] ?? 0);

    // Instancia o Model
    $produto = new Produto($nome, $preco, $quantidade);

    // Chama os métodos e armazena os dados
    $valorTotal = $produto->calcularValorTotal();
    $valorComDesconto = $produto->aplicarDesconto($percentualDesconto);
    
    // Desafio 2: Executa a verificação no Model
    $estoqueBaixo = $produto->estaEmEstoqueBaixo();

    // Inclui a View para exibição dos dados
    require_once 'resultado.php';
}