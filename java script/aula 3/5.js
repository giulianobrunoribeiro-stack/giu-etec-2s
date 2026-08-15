let temp = parseFloat(prompt("5. Digite a temperatura (°C):"));

if (temp < 0) {
  alert("Muito frio");
} else if (temp >= 0 && temp <= 15) {
  alert("Frio");
} else if (temp >= 16 && temp <= 25) {
  alert("Agradável");
} else if (temp > 25) {
  alert("Calor");
} else {
  alert("Temperatura inválida");
}