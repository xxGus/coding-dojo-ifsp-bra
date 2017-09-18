<?php
namespace Matematica;

use PHPUnit_Framework_TestCase;
use Matematica\PalavraPrima;

class PalavraPrimaTest extends PHPUnit_Framework_TestCase
{
   
    public function setUp()
    {
        parent::setUp();
    }
    
    public function tearDown() 
    {
        parent::tearDown();
    }
    
    public function dadosDasPalavrasPrimas()
    { return [
        ["esperado"=> 1,  "palavra"=> 'ab'],
        ["esperado"=> 0,  "palavra"=> 'd'],
        ["esperado"=> 0,  "palavra"=> 'Dojo'],
        ["esperado"=> 0,  "palavra"=> 'Dojô'],
        ["esperado"=> 1,  "palavra"=> 'IF'],
        ["esperado"=> 1,  "palavra"=> 'I-F']
    ];
        
    }
    
     /**
     * @dataProvider dadosDasPalavrasPrimas
     */
    public function testPalavraPrima($esperado, $palavra)
    {
        $palavraprima =new PalavraPrima();
       
        $this->assertEquals(
            $esperado, 
            $palavraprima->palavraEPrima($palavra)
        );
    }    
}