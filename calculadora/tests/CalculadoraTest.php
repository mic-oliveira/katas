<?php

namespace Kata\Calculadora\Tests;

use Kata\Calculadora\Calculadora;
use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
    public function test_should_add()
    {
        $calculadora = new Calculadora();
        $this->assertEquals(2, $calculadora->add(1,1));
        $this->assertEquals(2, $calculadora->add(2,1));
    }
}
