<?php
// Arquivo: Operacao.php

class Operacao {
    // 1. Atributos (Propriedades Privadas)
    private $valor1;
    private $valor2;

    // Métodos Getters e Setters para definir e obter os valores
    public function setValor1($valor1) {
        $this->valor1 = $valor1;
    }

    public function getValor1() {
        return $this->valor1;
    }

    public function setValor2($valor2) {
        $this->valor2 = $valor2;
    }

    public function getValor2() {
        return $this->valor2;
    }

    // 2. Método para Somar (+)
    public function somar() {
        return $this->valor1 + $this->valor2;
    }

    // 3. Método para Subtrair (-)
    public function subtrair() {
        return $this->valor1 - $this->valor2;
    }

    // 4. Método para Dividir (/)
    public function dividir() {
        if ($this->valor2 == 0) {
            return "Erro: Divisão por zero não é permitida.";
        }
        return $this->valor1 / $this->valor2;
    }

    // 5. Método para Multiplicar (*)
    public function multiplicar() {
        return $this->valor1 * $this->valor2;
    }

    // 6. Método para Exponenciar (**)
    public function exponenciar() {
        return $this->valor1 ** $this->valor2; // ou pow($this->valor1, $this->valor2);
    }
}
?>