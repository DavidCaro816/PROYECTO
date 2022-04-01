<?php


class conexion
{
    private $db;

    public static function conn()
    {
        $conexion = new mysqli("localhost", "root", "", "perez_lara_cia_ltda");
        $conexion -> query("SET NAMES 'utf8'");
        return $conexion;
    }
    public function conectar()
    {
        $this -> db = conexion ::conn();
    }

}
?>