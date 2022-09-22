<?php
use Models\Poliza;
use Models\Cliente;
class  Testing_poliza extends \PHPUnit\Framework\TestCase {

    public function test_create(){
        $codigo=45;
        $docuCli = (new \Models\Cliente('1010760139'));
        $valorAsegurado=10000;
        $valorPrima=12258;
        $seguro=5;
        $aseguradora=4;
        $archivo='archivo.pdf';
        $estado=3;
        $test=((new Poliza($codigo,$docuCli,$valorAsegurado,$valorPrima,$seguro,$aseguradora,$archivo,$estado))
            ->create());
        $this->assertEquals(1,$test);

    }
    public function test_Update(){
        $codigo=45;
        $codigo2=46;
        $docuCli = (new \Models\Cliente('1010760139'));
        $valorAsegurado=10000;
        $valorPrima=12258;
        $seguro=5;
        $aseguradora=4;
        $archivo='archivo.pdf';
        $estado=4;

        $test=((new Poliza($codigo2,$docuCli,$valorAsegurado,$valorPrima,$seguro,$aseguradora,$archivo,$estado))
            ->update($codigo));
        $this->assertEquals(1,$test);
    }


}
