let valorCompraInput = prompt("2. Digite o valor da compra (R$):");
let valorCompra = parseFloat(valorCompraInput);

if (valorCompra > 500) {
  let valorFinal = valorCompra * 0.90;
  alert(`Valor original: R$ ${valorCompra.toFixed(2)}\nValor com 10% de desconto: R$ ${valorFinal.toFixed(2)}`);
} else if (valorCompra >= 200 && valorCompra <= 500) {
  let valorFinal = valorCompra * 0.95;
  alert(`Valor original: R$ ${valorCompra.toFixed(2)}\nValor com 5% de desconto: R$ ${valorFinal.toFixed(2)}`);
} else if (valorCompra < 200) {
  alert(`Valor original: R$ ${valorCompra.toFixed(2)}\nSem desconto aplicado`);
} else {
  alert("Valor de compra inválido");
}