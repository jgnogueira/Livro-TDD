<?php

namespace CDC\Loja\Produto;

use CDC\Loja\Carrinho\CarrinhoDeCompras;
use PHPUnit\Framework\TestCase;

require './vendor/autoload.php';

class MaiorEMenorTest extends TestCase
{
    public function testOrdemDecrescente()
    {
        $carrinho = new CarrinhoDeCompras();

        $carrinho->adiciona(new Produto('Geladeira',      450.00));
        $carrinho->adiciona(new Produto('Liquidificador', 250.00));
        $carrinho->adiciona(new Produto('Jogo de pratos', 70.00));

        $maiorMenor = new MaiorEMenor();
        $maiorMenor->encontra($carrinho);

        $this->assertEquals('Jogo de pratos', $maiorMenor->getMenor()->getNome());
        $this->assertEquals('Geladeira', $maiorMenor->getMaior()->getNome());
    }

    public function testOrdemCrescente()
    {
        $carrinho = new CarrinhoDeCompras();

        $carrinho->adiciona(new Produto('Jogo de pratos', 70.00));
        $carrinho->adiciona(new Produto('Liquidificador', 250.00));
        $carrinho->adiciona(new Produto('Geladeira',      450.00));
        
        $maiorMenor = new MaiorEMenor();
        $maiorMenor->encontra($carrinho);

        $this->assertEquals('Jogo de pratos', $maiorMenor->getMenor()->getNome());
        $this->assertEquals('Geladeira', $maiorMenor->getMaior()->getNome());
    }

    public function testOrdemVariada()
    {
        $carrinho = new CarrinhoDeCompras();

        $carrinho->adiciona(new Produto('Liquidificador', 250.00));
        $carrinho->adiciona(new Produto('Jogo de pratos', 70.00));
        $carrinho->adiciona(new Produto('Geladeira',      450.00));
        
        $maiorMenor = new MaiorEMenor();
        $maiorMenor->encontra($carrinho);

        $this->assertEquals('Jogo de pratos', $maiorMenor->getMenor()->getNome());
        $this->assertEquals('Geladeira', $maiorMenor->getMaior()->getNome());
    }

    public function testUnicoProduto()
    {
        $carrinho = new CarrinhoDeCompras();

        $carrinho->adiciona(new Produto('Jogo de pratos', 70.00));
        
        $maiorMenor = new MaiorEMenor();
        $maiorMenor->encontra($carrinho);

        $this->assertEquals('Jogo de pratos', $maiorMenor->getMenor()->getNome());
        $this->assertEquals('Jogo de pratos', $maiorMenor->getMaior()->getNome());
    }
}
