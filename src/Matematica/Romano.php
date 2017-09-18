<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Matematica;

/**
 * Description of
 *  Romano
 *
 * @author elton
 */
class Romano 
{
    public function converterParaArabico($numero)
    {
        $numero=strtoupper($numero);
        
        $romano = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];
        
        $total = 0;
        
        for($i=0; $i< strlen($numero); $i++)
        {   
            if(isset($romano[$numero[$i]]))
            {
                if ($i > 0 && $romano[$numero[$i]] > $romano[$numero[$i-1]]) {
                    $total -= $romano[$numero[$i]];
                    $total = $total < 0 ? $total*-1 : $total; 
                } else {
                    $total += $romano[$numero[$i]];
                }
                
            }
        }
        
        
        return $total;
        
    }
    
    
}
