import 'dart:io';

void main() {
  var lista = [];
  for (var i = 0; i < 3; i++) {
  int numero = int.parse(stdin.readLineSync()!);
  lista.add(numero);
}
int big = lista[0];
for (var i = 1; i < lista.length; i++) {
  if (lista[i] > big) {
    big = lista[i];
  }
}
print('O maior número é: $big');
}