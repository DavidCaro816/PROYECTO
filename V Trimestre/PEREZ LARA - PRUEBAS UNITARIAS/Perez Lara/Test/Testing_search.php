<?php

use Models\Cliente;

class Testing_search extends \PHPUnit\Framework\TestCase{

    public function test_search()
    {

        $consulta='1010';
        $test = ((new Cliente())->searchClient('%'.$consulta.'%'));
        $this->assertIsArray($test, "array");
    }

}