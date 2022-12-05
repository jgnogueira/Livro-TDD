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

    public function testDeveEntenderOSimboloIX()
    {
        $conversor = new ConversorDeNumeroRomano();
        $numeroRomanoConvertido = $conversor->converte('IX');

        $this->assertEquals(9, $numeroRomanoConvertido);
    }

    public function testDeveEntenderOSimboloXXIV()
    {
        $conversor = new ConversorDeNumeroRomano();
        $numeroRomanoConvertido = $conversor->converte('XXIV');

        $this->assertEquals(24, $numeroRomanoConvertido);
    }

    public function testDeveEntenderOSimboloCXLIV()
    {
        $conversor = new ConversorDeNumeroRomano();
        $numeroRomanoConvertido = $conversor->converte('CXLIV');

        $this->assertEquals(144, $numeroRomanoConvertido);
    }

    public function testDeveEntenderOSimboloCMXXXV()
    {
        $conversor = new ConversorDeNumeroRomano();
        $numeroRomanoConvertido = $conversor->converte('CMXXXV');

        $this->assertEquals(935, $numeroRomanoConvertido);
    }

    public function testDeveEntenderOSimboloMMM()
    {
        $conversor = new ConversorDeNumeroRomano();
        $numeroRomanoConvertido = $conversor->converte('MMM');

        $this->assertEquals(3000, $numeroRomanoConvertido);
    }
}
