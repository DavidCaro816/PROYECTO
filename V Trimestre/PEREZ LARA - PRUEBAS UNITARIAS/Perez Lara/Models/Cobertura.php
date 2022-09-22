<?php

namespace Models;

use Connection;
use PDO;

require_once 'Connection.php';

class Cobertura
{

    private PDO $connection;
    private int $id;
    private string $cobertura;

    public function __construct(){
        $this -> connection = (new Connection()) -> connect();
        if (method_exists($this, $func = '__construct' . func_num_args())){
            call_user_func_array(array($this, $func), func_get_args());
        }
        if(func_num_args() === 1){
            gettype(func_get_arg(0)) === 'integer' ? $this -> __construct_id(func_get_arg(0))
                : $this -> __construct_cobertura(func_get_arg(0));
        }
    }

    public function __construct_id(int $id) :void{
        $this -> id = $id;
    }

    public function __construct_cobertura(string $cobertura) :void{
        $this -> cobertura = $cobertura;
    }

    public function __construct2(int $id,string $cobertura) :void{
        $this -> __construct_id($id);
        $this -> __construct_cobertura($cobertura);
    }

    public function index() :bool|array{
        return $this -> connection -> query('select cobertura from cobertura') -> fetchAll();
    }

    public function create() {
        $create = $this -> connection -> prepare('insert into cobertura (cobertura) values(:cobertura)');
        $create -> bindParam('cobertura', $this -> cobertura);
        $create -> execute();
        $resultado= $create -> rowCount();
        return $resultado;
    }

    public function show() :bool|array{
        $show = $this -> connection -> prepare('select * from cobertura where id_cobertura = :id_cobertura');
        $show -> bindParam('id_cobertura', $this -> id);
        $show -> execute();
        return $show -> fetch();
    }

    public function update() :void{
        $update = $this -> connection -> prepare('update cobertura set cobertura = :cobertura where id_cobertura = :id_cobertura');
        $update -> bindParam('id_cobertura', $this -> id, PDO::PARAM_INT);
        $update -> bindParam('cobertura', $this -> cobertura);
        $update -> execute();
    }

    public function delete() :void{

    }
}