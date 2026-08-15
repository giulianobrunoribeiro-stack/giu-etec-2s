let num1 = parseFloat(prompt("3. Digite o primeiro número:"));
let num2 = parseFloat(prompt("3. Digite o segundo número:"));

if (num1 > num2) {
  alert("O primeiro número é maior");
} else if (num2 > num1) {
  alert("O segundo número é maior");
} else {
  alert("Os números são iguais");
}