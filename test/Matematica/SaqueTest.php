<?php
namespace Matematica;

use PHPUnit_Framework_TestCase;



/**
 * 
 * @group Matematica
 */
class SaqueTest extends PHPUnit_Framework_TestCase{
        public function setUp()
    {
        parent::setUp();
    }
    
    public function tearDown() 
    {
        parent::tearDown();
    }
    
   public function dadosDoRealizarSaque(){
        return [
            ["esperado"=> [0,0,0,0,0,0],  "saque"=> 0],
            ["esperado"=> [3,0,0,0,0,0],  "saque"=> 300],
            ["esperado"=> [4,0,2,0,0,0],  "saque"=> 440],
            ["esperado"=> [13,1,1,1,0,0], "saque"=> 1380],
            ["esperado"=> [13,1,1,1,1,0], "saque"=> 1385],
            ["esperado"=> [13,1,1,1,1,1], "saque"=> 1387],
            ["esperado"=> [0,0,0,0,0,2], "saque"=> 4],
            ["esperado"=> [0,0,0,0,1,0], "saque"=> 5]
            
        ];
    }
    
    /**
     * @dataProvider dadosDoRealizarSaque
     */
    public function testRealizarSaque($esperado, $saque)
    {
        $valorSaque = new Saque();
        
        $this->assertEquals(
            $esperado, 
            $valorSaque->realizarSaque($saque)
        );
    }
}
