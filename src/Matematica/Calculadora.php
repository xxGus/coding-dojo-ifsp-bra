<?php
namespace Matematica;

/**
 * Description of Calculadora
 */
class Calculadora
{
    public function somar(Numero $numero1, Numero $numero2)
    {
        return new Numero($numero1->getValor() + $numero2->getValor());     
    }
}
