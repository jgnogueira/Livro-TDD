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
        if (array_key_exists($numeroRomano, $this->tabela)) {
            return $this->tabela[$numeroRomano];
        }

        return 0;
    }
}
