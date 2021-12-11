<?php

namespace Kata\Calculadora;

class Calculadora
{
    public function __construct()
    {
    }

    public function add(float $primeiroValor, float $segundoValor): float
    {
        return $primeiroValor + $segundoValor;
    }
}
