<?php

namespace Matematica;

class LookAndSay
{
    public function principal($numIteracoes, $digitoInicial)
    {
        $resultado = $digitoInicial;
        for ($i = 0; $i < $numIteracoes ; $i++){
            $resultado = $this->ditaSequencia($resultado);
        }
        return $resultado;
    }

    public function ditaSequencia($sequencia)
   {
       $resultado = "";
       $cont = 1;
       
       for ($i = 0; $i < strlen($sequencia); $i++)
       {
           $proximo= isset($sequencia[$i+1])?$sequencia[$i+1]:"0";
           if (strlen($sequencia) > 1 && $sequencia[$i] == $proximo) {
               $cont++;
           } else {
               $resultado = $resultado . $cont . $sequencia[$i];
               $cont = 1;
           }
       }
       return $resultado;
   }
}