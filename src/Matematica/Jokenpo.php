<?php
namespace Matematica;

/**
 * Description of Calculadora
 */
class Jokenpo
{
    public function verificarResultado($jogador1,$jogador2) {
        $jogador1 = strtolower($jogador1);
        $jogador2 = strtolower($jogador2);
        $resultado = "";
        if ($jogador1 == $jogador2){
            $resultado = "Empate";
        } else {
            switch($jogador1) {
                case 'pedra':
                    $resultado = $jogador2 == "papel" ? "Derrota" : "Vitoria";
                    break;
                case 'papel':
                    $resultado = $jogador2 == "tesoura" ? "Derrota" : "Vitoria";
                    break;
                case 'tesoura':
                    $resultado = $jogador2 == 'pedra' ? "Derrota" : "Vitoria";
                    break;
                default: 
                    return "Erro";
            }
        }
        
        return $resultado;
    }
}
