<?php

include_once('conexion.php');

class tablaClientes extends conexion
{
    private $db;
    private $persona;

    public function __construct()
    {
        $this -> db = conexion ::conn();
        $this -> persona = array();
    }

    public function get_personas()
    {
        $consulta = $this -> db -> query("CALL sp_Clientes()");

        while ($filas = $consulta -> fetch_assoc()) {
            $this -> persona[] = $filas;
        }
        return $this -> persona;
    }

}
?>

