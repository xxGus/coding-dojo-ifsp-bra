<?php
namespace Matematica;

use PHPUnit_Framework_TestCase;
use Matematica\Calculadora;
use Matematica\NumeroInteiro;

/**
 * 
 * @group Matematica
 */
class CalculadoraTest extends PHPUnit_Framework_TestCase
{
    private $calculadora;
    private $numero1;
    private $numero2;
    
    public function setUp()
    {
        parent::setUp();
        $this->calculadora = new Calculadora();
        $this->numero1 = new NumeroInteiro();
        $this->numero2 = new NumeroInteiro();
    }
    
    public function tearDown() 
    {
        parent::tearDown();
    }
    
    public function dadosDaSoma(){
        return [
            ["esperado"=> 11, "valor1"=> 8,   "valor2"=> 3],
            ["esperado"=> -5, "valor1"=> -8,  "valor2"=> 3],
            ["esperado"=>  6, "valor1"=> 3.5, "valor2"=> 3], 
        ];
    }

    /**
     * @dataProvider dadosDaSoma
     */
    public function testDaSoma($esperado, $valor1, $valor2)
    {     
        $this->numero1->setValor($valor1);
        $this->numero2->setValor($valor2);
        
        $numeroEsperado = 
            $this->calculadora->somar($this->numero1, $this->numero2);
       
        $this->assertEquals(
            $numeroEsperado->getValor(), $esperado
        );
        $this->assertTrue($numeroEsperado instanceof Numero);
    }
}