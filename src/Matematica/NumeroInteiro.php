<?php

namespace Matematica;

class NumeroInteiro extends Numero
{
    public function __construct($valor=null)
    {
        $this->setValor($valor);
    }
    
    public function setValor($valor) {
        $valor = (int)$valor;
        parent::setValor($valor);
    }
}
