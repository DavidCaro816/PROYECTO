<?php

use Models\Poliza;
use Models\Siniestro;

class  Testing_siniestro extends \PHPUnit\Framework\TestCase
{

    public function test_Create()
    {
        $codigo = (new \Models\Poliza(455));
        $descripcion = 'Testo ejemplo';
        $monto ='15200';
        $anexo = "archivo.pdf";
        $estado = 2;

        $test = ((new Siniestro($descripcion,$monto,$codigo,$anexo,$estado))->create());
        $this->assertEquals(1, $test);
    }
    public function test_Update()
    {
        $id = 8;
        $codigo = (new \Models\Poliza(455));
        $descripcion = 'actualizada';
        $monto ='15200';
        $anexo = "archivo.pdf";
        $estado = 2;

        $test = ((new Siniestro($id,$descripcion,$monto,$codigo,$anexo,$estado))->update());
        $this->assertEquals(1, $test);
    }
}