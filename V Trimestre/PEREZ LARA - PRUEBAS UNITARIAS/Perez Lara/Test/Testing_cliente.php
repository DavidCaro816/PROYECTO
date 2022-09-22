<?php
use Models\Cliente;

class  Testing_cliente extends \PHPUnit\Framework\TestCase {

    public function test_create(){
        $documento='5151';
        $nombre1='oscar';
        $nombre2='Giovany';
        $apellido1='Lopez';
        $apellido2='Leal';
        $fecha='2022-06-02';
        $correo='lopez@gmail.com';
        $cel='311000';
        $cel2='315000';
        $direc1='cll2';
        $direc2='cll3';
        $Tdocum=2;
        $ciudad=5;
        $test=((new Cliente($documento,$correo,$direc1,$direc2,$cel,$cel2,$nombre1,$nombre2,$apellido1,$apellido2,$Tdocum
            ,$fecha,$ciudad)) ->create());
        $this->assertEquals(1,$test);
    }
    public function test_update(){
        $documento='5151';
        $documento2='5151';
        $nombre1='JUan';
        $nombre2='David';
        $apellido1='Lopez';
        $apellido2='Leal';
        $fecha='2022-06-02';
        $correo='lopez@gmail.com';
        $cel='311000';
        $cel2='315000';
        $direc1='cll2';
        $direc2='cll3';
        $Tdocum=2;
        $ciudad=5;
        $test=((new Cliente($documento,$correo,$direc1,$direc2,$cel,$cel2,$nombre1,$nombre2,$apellido1,$apellido2,
            $Tdocum,$fecha,$ciudad)) ->update($documento2));
        $this->assertEquals(1,$test);
    }
    public function test_delete()
    {
        $documento = '5151';

        $test = ((new Cliente($documento))->delete());
        $this->assertEquals(1, $test);
    }

}
