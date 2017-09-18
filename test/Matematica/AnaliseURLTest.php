<?php

namespace Matematica;

use PHPUnit_Framework_TestCase;
use Matematica\AnaliseURL;

class AnaliseURLTest extends PHPUnit_Framework_TestCase
{

    public function dadosUrl(){
        return [
            ["esperado" => ["protocolo"=> "http", 
                                "host"=> "www", 
                                "dominio" => "google.com", 
                                "path" => "mail", 
                                "parametro" => "user=fulano"],
                "urlEntrada" => "http://google.com/mail/user=fulano",
                ]
        ];
    }

    /**
     * @dataProvider dadosUrl
     */
    public function testVerificarUrl($esperado, $urlEntrada)
    {
        $analise = new AnaliseURL();
        
        $decomposicao = $analise->decompoe($urlEntrada);
        
        
        $this->assertEquals($esperado, $decomposicao);
    }
}