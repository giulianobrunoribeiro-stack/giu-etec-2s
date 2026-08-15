import "dart:io";

void main() {
  int valor = int.parse(stdin.readLineSync()!);
  int num = valor;
  if (num < 1000000) {

  int cem = valor ~/ 100;
  valor %= 100; 
  int cinquenta = valor ~/ 50;
  valor %= 50;
  int vinte = valor ~/ 20;
  valor %= 20;
  int dez = valor ~/ 10;
  valor %= 10;
  int cinco = valor ~/ 5;
  valor %= 5;
  int um = valor;


    print("$cem notas(s) de r\$100");
    print("$cinquenta notas(s) de r\$50");
    print("$vinte notas(s) de r\$20");
    print("$dez notas(s) de r\$10");
    print("$cinco notas(s) de r\$5");
    print("$um nota(s) de r\$1");
  }else{
    print("Valor inválido");
  }
}