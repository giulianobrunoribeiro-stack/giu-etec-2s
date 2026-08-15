<?php
// Arquivo: index.php
require_once 'Operacao.php';

// Criação do objeto (instância)
$calc = new Operacao();

// Atribuindo valores aos atributos
$calc->setValor1(10);
$calc->setValor2(2);

// Executando os métodos e exibindo os resultados
echo "Valor 1: " . $calc->getValor1() . "<br>";
echo "Valor 2: " . $calc->getValor2() . "<br><br>";

echo "Soma: " . $calc->somar() . "<br>";             // Resultado: 12
echo "Subtração: " . $calc->subtrair() . "<br>";       // Resultado: 8
echo "Multiplicação: " . $calc->multiplicar() . "<br>"; // Resultado: 20
echo "Divisão: " . $calc->dividir() . "<br>";         // Resultado: 5
echo "Exponenciação: " . $calc->exponenciar() . "<br>"; // Resultado: 100
?>