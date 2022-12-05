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
        $ultimoNumeroDaDireita = 0;

        for ($i = strlen($numeroRomano) - 1; $i >= 0; $i--) {
            $atual = 0;
            $numeroCorrente = $numeroRomano[$i];

            if (array_key_exists($numeroCorrente, $this->tabela)) {
                $atual = $this->tabela[$numeroCorrente];
            }

            $multiplicador = 1;

            if ($atual < $ultimoNumeroDaDireita) {
                $multiplicador = -1;
            }

            $resultado = $resultado + ($atual * $multiplicador);
            $ultimoNumeroDaDireita = $atual;
        }

        return $resultado;
    }
}
