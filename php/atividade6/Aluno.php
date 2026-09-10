<?php
class Aluno {
    private string $nome;
    private float $nota1;
    private float $nota2;
    private float $nota3;
    private int $faltas;
    private float $media;

    public function __construct(string $nome, float $nota1, float $nota2, float $nota3, int $faltas) {
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->nota3 = $nota3;
        $this->faltas = $faltas;
        $this->media = $this->calcularMedia();
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getNota1(): float {
        return $this->nota1;
    }

    public function getNota2(): float {
        return $this->nota2;
    }

    public function getNota3(): float {
        return $this->nota3;
    }

    public function getFaltas(): int {
        return $this->faltas;
    }

    public function getMedia(): float {
        return $this->media;
    }

    public function calcularMedia(): float {
        return ($this->nota1 + $this->nota2 + $this->nota3) / 3;
    }

    public function calcularPresenca(): float {
        $totalAulas = 80;
        $presencas = $totalAulas - $this->faltas;
        return ($presencas / $totalAulas) * 100;
    }

    public function mostrarResultado(): string {
        $presenca = $this->calcularPresenca();

        if ($presenca < 75) {
            return "Reprovado (Frequência insuficiente)";
        }

        if ($this->media < 5) {
            return "Reprovado";
        } elseif ($this->media >= 5 && $this->media <= 7) {
            return "Recuperação";
        } else {
            return "Aprovado";
        }
    }
}