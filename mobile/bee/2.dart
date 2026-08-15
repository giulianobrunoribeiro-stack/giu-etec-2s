import 'dart:io';

void main() {
  print('Digite o primeiro número:');
  // Lê a linha, garante que não é nula com '!' e converte para inteiro
  int valor1 = int.parse(stdin.readLineSync()!);

  print('Digite o segundo número:');
  int valor2 = int.parse(stdin.readLineSync()!);

  // Soma as variáveis que foram preenchidas pelo usuário
  int soma = valor1 + valor2;

  print('A soma dos números digitados é: $soma');
}
