<?php
/**
 * Boostrap dos testes do módulo
 *
 * @name       Bootstrap
 * @category   Test
 * @package    Admin
 * @subpackage AdminBootstrap
 * @author
 */
class Bootstrap
{
    /**
     * Executa o boostrap
     *
     * @name   go
     * @access public static
     * @return void
     */
    public static function go()
    {
        chdir(dirname(__DIR__));
        include 'index.php';
    }
}

Bootstrap::go();
