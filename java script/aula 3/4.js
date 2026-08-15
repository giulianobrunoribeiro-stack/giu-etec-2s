let velocidade = parseFloat(prompt("4. Digite a velocidade do veículo (km/h):"));

if (velocidade <= 80) {
  alert("Velocidade permitida");
} else if (velocidade > 80 && velocidade <= 100) {
  alert("Multa leve");
} else if (velocidade > 100) {
  alert("Multa grave");
} else {
  alert("Velocidade inválida");
}