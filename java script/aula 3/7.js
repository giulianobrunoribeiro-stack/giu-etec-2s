let cargo = prompt("7. Digite o cargo (gerente, programador ou estagiário):");

if (cargo) {
  let cargoFormatado = cargo.toLowerCase().trim();

  if (cargoFormatado === "gerente") {
    alert("Salário: R$ 5.000");
  } else if (cargoFormatado === "programador") {
    alert("Salário: R$ 4.000");
  } else if (cargoFormatado === "estagiário" || cargoFormatado === "estagiario") {
    alert("Salário: R$ 1.500");
  } else {
    alert("Cargo não identificado");
  }
}
