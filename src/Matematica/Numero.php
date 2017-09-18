<?php

namespace Matematica;

class Numero extends \stdClass 
{
    protected $valor;
    
    public function __construct($valor=null){
        $this->setValor($valor);
        
    }
    
    public function getValor()
    {
        return $this->valor;
    }
    
    public function setValor($valor)
    {
        $this->valor = $valor;
    }
}
