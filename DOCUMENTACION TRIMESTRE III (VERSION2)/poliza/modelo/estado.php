<?php

include 'estado.php';

class estado extends conexion
{

    private $documento;
    private $primerNombre;
    private $primerApellido;
    private $fechaNacimiento;
    private $email;
    private $idTipoDocumento;
    private $departamento;
    private $ciudad;
    private $tipoCliente;
    private $db;



    public function registrar($documento, $primerNombre, $primerApellido, $fechaNacimiento, $email, $idTipoDocumento, $departamento, $ciudad, $tipoCliente )
    {

        $this->documento = $documento;
        $this->primerNombre = $primerNombre;
        $this->primerApellido = $primerApellido;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->email=$email;
        $this->idTipoDocumento=$idTipoDocumento;
        $this->departamento=$departamento;
        $this->ciudad=$ciudad;
        $this->tipoCliente=$tipoCliente;
    }

    public function insertar()
    {

        $this->db=conexion::conn();
        $this->consulta = "INSERT INTO persona (documento, primerNombre, primerApellido, email, idTipoDocumento)  VALUES ('$this->documento','$this->primerNombre',
                                                                              '$this->primerApellido','$this->email','$this->tipopoDocumento')";

        $this->consulta2 = "INSERT INTO cliente (fechaNacimiento, documento, idCiudad, idTipoCliente)  VALUES ('$this->fechaNacimiento','$this->documento',
                                                                              ,'$this->ciudad','$this->tipoCliente')";
        $this->resultado=mysqli_query($this->db, $this->consulta);

        echo '<script> 
               alert("Registro Agregado Ok");
               window.location.href="../vistas/menu.php" ;
             </script>';

    }
}



?>

