<?php

namespace MHlavac\DiacriticsRemover\Tests;

use MHlavac\DiacriticsRemover\DiacriticsRemover;

class DiacriticsRemoverTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider dataProvider
     * @param string $expected
     * @param string $input
     */
    public function testRemove($expected, $input)
    {
        $remover = new DiacriticsRemover();
        $this->assertEquals($expected, $remover->parse($input));
    }

    public function dataProvider()
    {
        return [
            ['Martin Hlavac', 'Martin Hlaváč'],
            ['AAAAAAAECEEEEIIIINOOOOOxUUUUYssaaaaaeaaeceeeeiiiinoooooeuuuueyy', 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖ×ØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõö÷øùúûüýþÿ'],
            ['aeAeoeOueUss', 'äÄéöÖüÜß'],
        ];
    }
}
