let diaInput = prompt("1. Digite um número de 1 a 7 para o dia da semana:");
let dia = parseInt(diaInput);

if (dia === 1) {
  alert("Domingo");
} else if (dia === 2) {
  alert("Segunda");
} else if (dia === 3) {
  alert("Terça");
} else if (dia === 4) {
  alert("Quarta");
} else if (dia === 5) {
  alert("Quinta");
} else if (dia === 6) {
  alert("Sexta");
} else if (dia === 7) {
  alert("Sábado");
} else {
  alert("Dia inválido");
}