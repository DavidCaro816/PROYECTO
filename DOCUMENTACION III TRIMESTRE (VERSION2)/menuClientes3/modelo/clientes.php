<?php

include_once('conexion.php');

class clientes extends conexion
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
        $consulta = $this -> db -> query("SELECT * from cliente, ciudad, tipodocumento, departamento, tipocliente
        WHERE cliente.idTipoDocumento=tipoDocumento.idTipoDocumento and departamento.idDepartamento=ciudad.idDepartamento and cliente.idCiudad=ciudad.idCiudad 
         and tipoCliente.idTipoCliente=cliente.idTipoCliente");


        while ($filas = $consulta -> fetch_assoc()) {
            $this -> persona[] = $filas;
        }
        return $this -> persona;
    }

}
?>
