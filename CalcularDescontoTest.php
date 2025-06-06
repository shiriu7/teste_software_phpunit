<?php
require_once __DIR__ . '/funcoes.php';

use PHPUnit\Framework\TestCase;

class CalcularDescontoTest extends TestCase
{
    public function testValorInvalidoNegativo()
    {
        $this->assertEquals("Valor inválido", calcularDesconto(-50, 'regular'));
    }

    public function testValorZero()
    {
        $this->assertEquals("Valor inválido", calcularDesconto(0, 'novo'));
    }

    public function testDescontoPremium()
    {
        $this->assertEquals(80.0, calcularDesconto(100, 'premium'));
    }

    public function testDescontoRegular()
    {
        $this->assertEquals(90.0, calcularDesconto(100, 'regular'));
    }

    public function testDescontoNovo()
    {
        $this->assertEquals(95.0, calcularDesconto(100, 'novo'));
    }

    public function testCategoriaInvalida()
    {
        $this->assertEquals(100.0, calcularDesconto(100, 'indefinido'));
    }
}
?>
