<?php

namespace Models;

use PDO;
use PDOStatement;
use Traits\TModels;

require_once '../Core/Connection.php';
require_once '../Models/Cliente.php';
require_once 'TModels.php';

class Cotizacion
{
    use TModels;

    private PDO $connection;
    private Cliente $documento_cliente;
    private int $id, $seguro, $estado;
    private string $fecha, $cuadro_comparativo;

    public function __construct1(int $id) :void{
        $this -> id = $id;
    }

    public function __construct4(Cliente $documento_cliente, int $seguro, string $cuadro_comparativo,
                                 int     $estado) :void{
        $this -> documento_cliente = $documento_cliente;
        $this -> fecha = date('Y-m-d');
        $this -> seguro = $seguro;
        $this -> cuadro_comparativo = $cuadro_comparativo;
        $this -> estado = $estado;
    }

    public function __construct5($id, $documento_cliente, $seguro, $cuadro_comparativo, $estado) :void{
        $this -> __construct1($id);
        $this -> __construct4($documento_cliente, $seguro, $cuadro_comparativo, $estado);
    }

    public function params(bool|PDOStatement $sql) :void{
        $documento_cliente = $this -> documento_cliente -> getDocumento();
        $sql -> bindParam('documento_cliente', $documento_cliente);
        $sql -> bindParam('fecha', $this -> fecha);
        $sql -> bindParam('seguro', $this -> seguro, PDO::PARAM_INT);
        $sql -> bindParam('cuadro_comparativo', $this -> cuadro_comparativo);
        $sql -> bindParam('estado', $this -> estado, PDO::PARAM_INT);
    }

    public function index() :bool|PDOStatement{
        return $this -> connection -> query('select * from view_cotizacion');
    }

    public function recent() :bool|PDOStatement{
        return $this -> connection -> query('select `No. Cotizacion`, Cliente, Seguro, Aseguradora from view_cotizacion limit 25');
    }

    public function create() :void{
        $create = $this -> connection -> prepare('call sp_insert_cotizacion(:documento_cliente,:fecha,:seguro,
        :cuadro_comparativo,:estado)');
        $this -> params($create);
        $create -> execute();
    }

    public function show() :bool|array{
        $show = $this -> connection -> prepare('select * from view_cotizacion where `No. Cotizacion` = :id_cotizacion');
        $show -> bindParam('id_cotizacion', $this -> id);
        $this -> params($show);
        $show -> execute();
        return $show -> fetch(PDO::FETCH_ASSOC);
    }

    public function update() :void{
        $update = $this -> connection -> prepare('call sp_update_cotizacion(:id_cotizacion, :documento_cliente,
                                                            :fecha, :seguro, :cuadro_comparativo, :estado, 
                                                            :fecha_actualizacion)');
        $update -> bindParam('id_cotizacion', $this -> id, PDO::PARAM_INT);
        $update -> bindParam('fecha_actualizacion', $this -> fecha_actualizacion);
        $update -> execute();
    }

    public function delete() :void{

    }
}