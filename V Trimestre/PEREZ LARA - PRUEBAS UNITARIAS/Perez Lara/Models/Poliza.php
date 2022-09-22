<?php

namespace Models;

use PDO;
use PDOStatement;
use Traits\TModels;

require_once 'Connection.php';
require_once 'Cliente.php';
require_once 'TModels.php';

class Poliza
{
    use TModels;

    private PDO $connection;
    private Cliente $documento_cliente;
    private string $fecha, $archivo, $valor_asegurado, $valor_prima;
    private int $codigo, $seguro, $aseguradora, $estado;

    public function __construct1(int $codigo) :void{
        $this -> codigo = $codigo;
    }

    public function __construct8(int    $codigo, Cliente $documento_cliente, int $valor_asegurado, int $valor_prima,
                                 int $seguro,
                                 int $aseguradora, string $archivo, int $estado) :void{
        $this -> __construct1($codigo);
        $this -> documento_cliente = $documento_cliente;
        $this -> fecha = date('Y-m-d');
        $this -> aseguradora = $aseguradora;
        $this -> seguro = $seguro;
        $this -> valor_asegurado = $valor_asegurado;
        $this -> valor_prima = $valor_prima;
        $this -> archivo = $archivo;
        $this -> estado = $estado;
    }

    public function params(bool|PDOStatement $sql) :void{
        $documento_cliente = $this -> documento_cliente -> getDocumento();
        $sql -> bindParam('codigo', $this -> codigo, PDO::PARAM_INT);
        $sql -> bindParam('documento_cliente', $documento_cliente);
        $sql -> bindParam('fecha', $this -> fecha);
        $sql -> bindParam('seguro', $this -> seguro, PDO::PARAM_INT);
        $sql -> bindParam('aseguradora', $this -> aseguradora, PDO::PARAM_INT);
        $sql -> bindParam('valor_asegurado', $this -> valor_asegurado);
        $sql -> bindParam('valor_prima', $this -> valor_prima);
        $sql -> bindParam('archivo', $this -> archivo);
        $sql -> bindParam('estado', $this -> estado, PDO::PARAM_INT);
    }

    public function index() :bool|PDOStatement{
        return $this -> connection -> query('select * from view_poliza');
    }

    public function create() {
        $create = $this -> connection -> prepare('call sp_insert_poliza(:codigo, :documento_cliente, :fecha, :seguro, 
                                                                          :aseguradora, :valor_asegurado, :valor_prima,
                                                                          :archivo, :estado)');
        $this -> params($create);
        $create -> execute();
        $resultado= $create -> rowCount();
        return $resultado;
    }

    public function show() :bool|array{
        $show = $this -> connection -> prepare('select * from view_poliza where `Codigo poliza` = :codigo');
        $show -> bindParam('codigo', $this -> codigo);
        $show -> execute();
        return $show -> fetch(PDO::FETCH_ASSOC);
    }

    public function update(int $codigo){
        $update = $this -> connection -> prepare('call sp_update_poliza(:codigo2,:codigo, :documento_cliente, :seguro, 
                                                                    :aseguradora, :valor_asegurado, :valor_prima, 
                                                                    :archivo, :estado, :fecha)');
        $this -> params($update);
        $update -> bindParam('codigo2', $codigo);
        $update -> execute();
        $resultado= $update -> rowCount();
        return $resultado;
    }

    public function delete() :void{

    }


    /**
     * @return int
     */
    public function getCodigo() :int{
        return $this -> codigo;
    }
}