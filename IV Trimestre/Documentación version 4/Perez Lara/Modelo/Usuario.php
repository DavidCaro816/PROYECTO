<?php
namespace Modelo;
use PDOStatement;
require_once 'Connection.php';
class Usuario extends Connection
{
    public function __construct()
    {
        parent::__construct();
        $num_params = func_num_args();
        $get_params = func_get_args();
        if(method_exists($this,$function = '__construct'.$num_params)){
            call_user_func_array(array($this,$function),$get_params);
        }
    }

    public function index(): bool|PDOStatement
    {
        return $this->connection->query('SELECT * FROM view_usuario');
    }

    public function index_tipo_documento(): bool|PDOStatement
    {
        return $this->connection->query('SELECT id_tipo_documento,descripcion_documento FROM tipo_documento');
    }
}