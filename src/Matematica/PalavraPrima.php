<?php

namespace Matematica;

/**
 * Description of
 *  Romano
 *
 * @author elton
 */
class PalavraPrima 
{
    public function removerAcentos($string){
        return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$string);
    }
    
    public function conversaoPalavra($palavra){
        $total = 0;
        $palavra = $this->removerAcentos($palavra);
        
        for($i=0; $i< strlen($palavra); $i++)
        {
            
            
            if(ctype_alpha($palavra[$i])){
               $valor_ascii = ord($palavra[$i]);
               $total += ctype_lower($valor_ascii) ? $valor_ascii-96:$valor_ascii-38;
            } 
        }      
        
        return $total;
    }    

    public function palavraEPrima($palavra)
    {        
        $total = $this->conversaoPalavra($palavra);
        
        if ($total==1)  return false;
        
        for ($i=2; $i < $total ; $i++){
            if($total % $i == 0){
                return false;
            }
        }
        return true;
    }
    

}
