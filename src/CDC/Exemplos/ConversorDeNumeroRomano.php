<?php

namespace CDC\Exemplos;

class ConversorDeNumeroRomano
{
    protected $tabela = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
    ];

    public function converte($numeroRomano)
    {
        $resultado = 0;
        $numeroRomano = str_split($numeroRomano);
        $ultimoNumeroDaDireita = 0;

        for ($i = count($numeroRomano) - 1; $i >= 0; $i--) {
            $numeroAtual = 0;

            if (array_key_exists($numeroRomano[$i], $this->tabela)) {
                $numeroAtual = $this->tabela[$numeroRomano[$i]];
            }

            if ($numeroAtual < $ultimoNumeroDaDireita) {
                $resultado = $resultado - $numeroAtual;
            } else {
                $resultado = $resultado + $numeroAtual;
            }

            $ultimoNumeroDaDireita = $numeroAtual;
        }

        return $resultado;
    }
}
