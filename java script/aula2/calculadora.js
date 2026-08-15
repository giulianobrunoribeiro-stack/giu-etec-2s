function calculadora(operacao, num1, num2) {
    switch (operacao) {
        case 'soma':
            return num1 + num2;
        case 'subtracao':
            return num1 - num2;
        case 'multiplicacao':
            return num1 * num2;
        case 'divisao':
            if (num2 !== 0) {
                return num1 / num2;
            } else {
                return 'Erro: Divisão por zero';
            }
        default:
            return 'Operação inválida';
    }
}

function executarCalculadora() {
    // Captura os valores do formulário
    const num1 = parseFloat(document.getElementById('num1').value);
    const num2 = parseFloat(document.getElementById('num2').value);
    const operacao = document.getElementById('operacao').value;

    // Verifica se os valores foram capturados corretamente
    console.log('Número 1:', num1);
    console.log('Número 2:', num2);
    console.log('Operação:', operacao);

    // Chama a função calculadora e exibe o resultado
    const resultado = calculadora(operacao, num1, num2);
    document.getElementById('resultado').innerText = resultado;
}
// Exemplo de uso:
console.log(calculadora('soma', 5, 3)); // 8
console.log(calculadora('subtracao', 5, 3)); // 2
console.log(calculadora('multiplicacao', 5, 3)); // 15
console.log(calculadora('divisao', 5, 3)); // 1.666...
console.log(calculadora('divisao', 5, 0)); // Erro: Divisão por zero