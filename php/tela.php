<?php
require_once 'Operacao.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $minhaConta = new Operacao();

    $minhaConta->setValor1($_POST['valor1']);
    $minhaConta->setValor2($_POST['valor2']);

    if ($_POST['operacao']==1){
        echo "Soma: " . $minhaConta->somar() . "<br>";
    } elseif ($_POST['operacao']==2) {
        echo "Subtração: " . $minhaConta->subtrair() . "<br>";
    } elseif ($_POST['operacao']==3) {
        echo "Multiplicação: " . $minhaConta->multiplicar() . "<br>";
    } elseif ($_POST['operacao']==4) {
        echo "Divizão: " . $minhaConta->dividir() . "<br>";
    } elseif ($_POST['operacao']==5) {
        echo "Exponenciação: " . $minhaConta->exponenciar() . "<br>";
    } else {
        echo "Operação Inválida!";
    }
}





 
?>