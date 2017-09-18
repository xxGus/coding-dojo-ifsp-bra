<?php

use PHPUnit_Framework_TestCase;
use Matematica\LookAndSay;

/**
 * 
 * @group Matematica
 */
class LookAndSayTest extends PHPUnit_Framework_TestCase
{
   public function testLookAndSay()
   {
       $lookAndSay = new LookAndSay();
       $this->assertEquals("19", $lookAndSay->ditaSequencia("9"));
       $this->assertEquals("1119", $lookAndSay->ditaSequencia("19"));
       
       $this->assertEquals("19", $lookAndSay->principal(1,"9"));
       $this->assertEquals("1119", $lookAndSay->principal(2,"9"));
       $this->assertEquals("311311222119", $lookAndSay->principal(6,"9"));
//       $this->assertEquals("00", $lookAndSay->principal(50,"9"));
       echo $lookAndSay->principal(50,"9");
   }
}