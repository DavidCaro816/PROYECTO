<?php

namespace Models;

use PDO;
use PDOStatement;
use Traits\TModels;

require_once 'Connection.php';
require_once 'Poliza.php';
require_once 'TModels.php';

class Siniestro
{
    use TModels;

    private PDO $connection;
    private Poliza $codigo_poliza;
    private string $fecha, $descripcion, $monto, $anexo;
    private int $id, $estado;

    public function __construct1(int $id) :void{
        $this -> id = $id;
    }

    public function __construct5(string $descripcion, string $monto, Poliza $codigo_poliza, string $anexo,
                                 string $estado) :void{
        $this -> fecha = date('Y-m-d');
        $this -> descripcion = $descripcion;
        $this -> monto = $monto;
        $this -> codigo_poliza = $codigo_poliza;
        $this -> anexo = $anexo;
        $this -> estado = $estado;
    }

    public function __construct6($id, $descripcion, $monto, $codigo_poliza, $anexo, $estado) :void{
        $this -> __construct1($id);
        $this -> __construct5($descripcion, $monto, $codigo_poliza, $anexo, $estado);
    }

    public function params(bool|PDOStatement $sql) :void{
        $codigo = $this -> codigo_poliza -> getCodigo();
        $sql -> bindParam('fecha', $this -> fecha);
        $sql -> bindParam('descripcion', $this -> descripcion);
        $sql -> bindParam('monto', $this -> monto);
        $sql -> bindParam('codigo_poliza', $codigo, PDO::PARAM_INT);
        $sql -> bindParam('anexo', $this -> anexo);
        $sql -> bindParam('estado', $this -> estado, PDO::PARAM_INT);
    }

    public function index() :bool|PDOStatement{
        return $this -> connection -> query('select * from view_siniestro');
    }

    public function create() {
        $create = $this -> connection -> prepare('call sp_insert_siniestro(:fecha,:descripcion,:monto,
                                                                                    :codigo_poliza,:anexo,:estado)');
        $this -> params($create);
        $create -> execute();
        $resultado= $create -> rowCount();
        return $resultado;
    }

    public function show() :bool|array{
        $show = $this -> connection -> prepare('select * from view_siniestro where `No. Referencia` = :id_siniestro');
        $show -> bindParam('id_siniestro', $this -> id, PDO::PARAM_INT);
        $show -> execute();
        return $show -> fetch(PDO::FETCH_ASSOC);
    }

    public function update(){
        $update = $this -> connection -> prepare('call sp_update_siniestro(:id_siniestro,:fecha,:descripcion,:monto,
                                                                                    :codigo_poliza,:anexo,:estado)');
        $update -> bindParam('id_siniestro', $this -> id, PDO::PARAM_INT);
        $this -> params($update);
        $update -> execute();
        $resultado= $update-> rowCount();
        return $resultado;
    }

    public function delete() :void{

    }
}