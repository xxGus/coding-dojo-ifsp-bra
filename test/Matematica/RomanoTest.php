<?php
namespace Matematica;

use PHPUnit_Framework_TestCase;

/**
 * 
 * @group Matematica
 */
class RomanoTest extends PHPUnit_Framework_TestCase
{
   
    public function setUp()
    {
        parent::setUp();
    }
    
    public function tearDown() 
    {
        parent::tearDown();
    }
    
   public function dadosDoNumeroRomano(){
        return [
            ["esperado"=> 1,  "numero"=> 'I'],
            ["esperado"=> 5, "numero"=> 'V'],
            ["esperado"=> 10, "numero"=> 'X'],
            ["esperado"=> 50, "numero"=> 'L'],
            ["esperado"=> 100, "numero"=> 'C'],
            ["esperado"=> 500, "numero"=> 'D'],
            ["esperado"=> 1000, "numero"=> 'M'],
            ["esperado"=> 2, "numero"=> 'II'],
            ["esperado"=> 6, "numero"=> 'VI'],
            ["esperado"=> 4, "numero"=> 'IV'],
            ["esperado"=> 9, "numero"=> 'IX'],
            ["esperado"=> 8, "numero"=> 'IIX'],
            ["esperado"=> 158, "numero"=> 'CLVIII'],
            ["esperado"=> 154, "numero"=> 'CLIV'],//146
            ["esperado"=> 954, "numero"=> 'CMLIV'],//946
            
            // Erro
            ["esperado"=> null,  "numero"=> 'Q'],
        ];
    }
    
    /**
     * @dataProvider dadosDoNumeroRomano
     */
    public function testConverteDeRomanoParaArabico($esperado, $numero)
    {
        $romano   = new Romano();
        
        $this->assertEquals(
            $esperado, 
            $romano->converterParaArabico($numero)
        );
    }
           
    
    
    
    
}