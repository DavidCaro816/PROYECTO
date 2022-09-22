<?php

use Models\Poliza;
use Models\Usuario;

class  Testing_usuario extends \PHPUnit\Framework\TestCase
{

    public function test_create()
    {
        $nombre1='oscar';
        $nombre2='Giovany';
        $apellido1='Lopez';
        $apellido2='Leal';
        $documento1='51511';
        $correo='lopez@gmail.com';
        $cel='311000';
        $Tdocum=2;
        $foto='foto ususario';
        $clave='clave usuario';
        $test = ((new Usuario($documento1,$nombre1,$nombre2,$apellido1,$apellido2,$cel,$correo,$clave,$foto,$Tdocum))->create());
        $this->assertEquals(1, $test);
    }

    public function test_update()
    {
        $nombre1='juan';
        $nombre2='felipe';
        $apellido1='diaz';
        $apellido2='Leal';
        $documento='51511';
        $documento2='00000';
        $correo='lopez@gmail.com';
        $cel='311000';
        $Tdocum=2;
        $foto='foto ususario';
        $clave='clave usuario';

        $test = ((new Usuario($documento2, $nombre1, $nombre2, $apellido1, $apellido2,$cel,$correo,$clave,$foto,$Tdocum))->update($documento));
        $this->assertEquals(1, $test);
    }


    public function test_Validation_Login(){
        $test = ((new Usuario('admin@perezlara.com', 'adminperezlara'))->getCredentials());
        $this->assertEquals(true, $test);
    }
}