<?php

namespace BatalhaNaval;

use PHPUnit_Framework_TestCase;
use BatalhaNaval\Jogo;

class JogoTest extends PHPUnit_Framework_TestCase
{
    public function testAreaDoJogo()
    {
        $jogo = new Jogo();
        $this->assertEquals(2, $jogo->areaDojogo());
    }
}
