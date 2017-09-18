<?php

namespace Matematica;

class Saque
{
    private $limites=[
                "quantidade" => [100,10,10,10,10,10],    
                "cedulas" => [100,50,20,10,5,2] 
            ];

    
    public function realizarSaque($valorSaque)
    {
       
       $quantidadeCedulas = [0,0,0,0,0,0];
       $i = 0;
       while($valorSaque > 0) 
       {
           if( $valorSaque >= $this->limites["cedulas"][$i])
           {
               $quantidadeCedulas[$i] = floor($valorSaque / $this->limites["cedulas"][$i]);
               if($quantidadeCedulas[$i] <= $this->limites["quantidade"][$i]){
                   $valorSaque = $valorSaque % $this->limites["cedulas"][$i];
                   $this->limites["quantidade"][$i] -= $quantidadeCedulas[$i];
               }
               
           }               
           $i++;
       }
       return $quantidadeCedulas;
    }
    
}

