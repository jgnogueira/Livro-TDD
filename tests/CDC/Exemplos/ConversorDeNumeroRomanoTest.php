<?php

namespace CDC\Exemplos;

use PHPUnit\Framework\TestCase;

require './vendor/autoload.php';

class ConversorDeNumeroRomanoTest extends TestCase
{
    public function testDeveEntenderOSimboloI()
    {
        $conversor = new ConversorDeNumeroRomano();
        $numeroRomanoConvertido = $conversor->converte('I');

        $this->assertEquals(1, $numeroRomanoConvertido);
    }

    public function testDeveEntenderOSimboloV()
    {
        $conversor = new ConversorDeNumeroRomano();
        $numeroRomanoConvertido = $conversor->converte('V');

        $this->assertEquals(5, $numeroRomanoConvertido);
    }

    public function testDeveEntenderOSimboloII()
    {
        $conversor = new ConversorDeNumeroRomano();
        $numeroRomanoConvertido = $conversor->converte('II');

        $this->assertEquals(2, $numeroRomanoConvertido);
    }

    public function testDeveEntenderOSimboloXXII()
    {
        $conversor = new ConversorDeNumeroRomano();
        $numeroRomanoConvertido = $conversor->converte('XXII');

        $this->assertEquals(22, $numeroRomanoConvertido);
    }
}
