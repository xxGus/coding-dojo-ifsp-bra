<?php
namespace Matematica;

use PHPUnit_Framework_TestCase;

/**
 * 
 * @group Matematica
 */
class JokenpoTest extends PHPUnit_Framework_TestCase
{
  
    public function setUp()
    {
        parent::setUp();
    }
    
    public function tearDown() 
    {
        parent::tearDown();
    }
    
    public function dadosDoJogo() {
        return [
            ["esperado" => "Empate", "jogador1" => "Pedra", "jogador2" => "Pedra"],
            ["esperado" => "Empate", "jogador1" => "Papel", "jogador2" => "Papel"],
            ["esperado" => "Empate", "jogador1" => "Tesoura", "jogador2" => "Tesoura"],
            ["esperado" => "Derrota", "jogador1" => "Pedra", "jogador2" => "Papel"],
            ["esperado" => "Vitoria", "jogador1" => "Pedra", "jogador2" => "Tesoura"],
            ["esperado" => "Vitoria", "jogador1" => "Papel", "jogador2" => "Pedra"],
            ["esperado" => "Derrota", "jogador1" => "Papel", "jogador2" => "Tesoura"],
            ["esperado" => "Derrota", "jogador1" => "Tesoura", "jogador2" => "Pedra"],
            ["esperado" => "Vitoria", "jogador1" => "Tesoura", "jogador2" => "Papel"],
            ["esperado" => "Vitoria", "jogador1" => "tesoura", "jogador2" => "papel"],
            ["esperado" => "Erro", "jogador1" => "tezoura", "jogador2" => "pappel"],
            
        ];
    }
    
    /**
     * @dataProvider dadosDoJogo
     */
    public function testJokenpo($esperado, $jogador1, $jogador2){
        $jogo = new Jokenpo();
        
        $this->assertEquals(
                $esperado,
                $jogo->verificarResultado($jogador1, $jogador2)
        );
    }
    
    
}