<?php

namespace Models;

use PDO;
use PDOStatement;
use Traits\TModels;

require_once 'Connection.php';
require_once 'TModels.php';

class Cliente
{
    use TModels;

    private PDO $connection;
    private string $documento, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $fecha_nacimiento,
        $email, $telefono, $telefono2, $direccion, $direccion2, $fecha_ingreso;
    private int $tipo_documento, $ciudad, $estado;

    public function __construct1(string $documento) :void{
        $this -> documento = $documento;
    }

    public function __construct13(string $documento, string $email, string $direccion1, string $direccion2,
                                  string $telefono1, string $telefono2, string $primer_nombre, string $segundo_nombre,
                                  string $primer_apellido, string $segundo_apellido, int $tipo_documento,
                                  string $fecha_nacimiento, int $ciudad) :void{
        $this -> __construct1($documento);
        $this -> primer_nombre = $primer_nombre;
        $this -> segundo_nombre = $segundo_nombre;
        $this -> primer_apellido = $primer_apellido;
        $this -> segundo_apellido = $segundo_apellido;
        $this -> fecha_nacimiento = '2000-05-05';
        $this -> email = $email;
        $this -> telefono = $telefono1;
        $this -> telefono2 = $telefono2;
        $this -> direccion = $direccion1;
        $this -> direccion2 = $direccion2;
        $this -> tipo_documento = $tipo_documento;
        $this -> ciudad = $ciudad;
        $this -> estado = 3;
        $this -> fecha_ingreso = date('Y-m-d');
    }

    public function params(bool|PDOStatement $sql) :void{
        $sql -> bindParam('documento', $this -> documento);
        $sql -> bindParam('primer_nombre', $this -> primer_nombre);
        $sql -> bindParam('segundo_nombre', $this -> segundo_nombre);
        $sql -> bindParam('primer_apellido', $this -> primer_apellido);
        $sql -> bindParam('segundo_apellido', $this -> segundo_apellido);
        $sql -> bindParam('fecha_nacimiento', $this -> fecha_nacimiento);
        $sql -> bindParam('email', $this -> email);
        $sql -> bindParam('telefono', $this -> telefono);
        $sql -> bindParam('telefono2', $this -> telefono2);
        $sql -> bindParam('direccion', $this -> direccion);
        $sql -> bindParam('direccion2', $this -> direccion2);
        $sql -> bindParam('tipo_documento', $this -> tipo_documento, PDO::PARAM_INT);
        $sql -> bindParam('ciudad', $this -> ciudad, PDO::PARAM_INT);
    }

    public function index() :bool|PDOStatement{
        return $this -> connection -> query("select * from view_cliente where Estado != 'Inactivo'");
    }

    public function create(){
        $insert = $this -> connection -> prepare('call sp_insert_cliente(:documento, :primer_nombre,:segundo_nombre, 
        :primer_apellido, :segundo_apellido, :fecha_nacimiento, :email, :telefono, :telefono2, :direccion, 
        :direccion2, :tipo_documento, :ciudad, :estado,:fecha_ingreso)');
        $this -> params($insert);
        $insert -> bindParam('estado', $this -> estado, PDO::PARAM_INT);
        $insert -> bindParam('fecha_ingreso', $this -> fecha_ingreso);
        $insert -> execute();
        $resultado= $insert -> rowCount();
        return $resultado;

    }

    public function show() :bool|PDOStatement{
        $show = $this -> connection -> prepare('select documento, primer_nombre, segundo_nombre, primer_apellido, 
       segundo_apellido, fecha_nacimiento, email, telefono1, telefono2, direccion1, direccion2, tipo_documento, ciudad   
       from cliente where documento = :documento');
        $show -> bindParam('documento', $this -> documento);
        $show -> execute();
        return $show;
    }

    public function update($documento) {
        $update = $this -> connection -> prepare('call sp_update_cliente(:documento_update, :documento, :primer_nombre,:segundo_nombre, 
        :primer_apellido, :segundo_apellido, :fecha_nacimiento, :email, :telefono, :telefono2, :direccion, 
        :direccion2, :tipo_documento, :ciudad)');
        $this -> params($update);
        $update -> bindParam('documento_update', $documento);
        $update -> execute();
        $resultado= $update -> rowCount();
        return $resultado;
    }

    public function delete() {
        $delete = $this -> connection -> prepare("call sp_delete_cliente(:documento)");
        $delete -> bindParam('documento', $this -> documento);
        $delete -> execute();
        $resultado= $delete-> rowCount();
        return $resultado;
    }
    public function searchClient($consulta)
    {
        $searchClient = $this->connection->prepare("SELECT * FROM view_cliente WHERE  `No. Documento` like :consulta OR Cliente like :consulta OR Departamento like :consulta OR Ciudad like :consulta OR Direccion like :consulta OR `Fecha de Nacimiento` like :consulta OR Email like :consulta OR Telefono like :consulta OR Estado like :consulta");
        $searchClient->bindParam('consulta', $consulta);
        $searchClient->execute();
        return $searchClient->fetchAll();
    }


    public function getDocumento() :string{
        return $this -> documento;
    }

    /**
     * @return string
     */
    public function getPrimerNombre() :string{
        return $this -> primer_nombre;
    }

    /**
     * @return string
     */
    public function getSegundoNombre() :string{
        return $this -> segundo_nombre;
    }

    /**
     * @return string
     */
    public function getPrimerApellido() :string{
        return $this -> primer_apellido;
    }

    /**
     * @return string
     */
    public function getSegundoApellido() :string{
        return $this -> segundo_apellido;
    }

    /**
     * @return string
     */
    public function getFechaNacimiento() :string{
        return $this -> fecha_nacimiento;
    }

    /**
     * @return string
     */
    public function getEmail() :string{
        return $this -> email;
    }

    /**
     * @return string
     */
    public function getTelefono() :string{
        return $this -> telefono;
    }

    /**
     * @return string
     */
    public function getTelefono2() :string{
        return $this -> telefono2;
    }

    /**
     * @return string
     */
    public function getDireccion() :string{
        return $this -> direccion;
    }

    /**
     * @return string
     */
    public function getDireccion2() :string{
        return $this -> direccion2;
    }

    /**
     * @return int
     */
    public function getTipoDocumento() :int{
        return $this -> tipo_documento;
    }

    /**
     * @return int
     */
    public function getCiudad() :int{
        return $this -> ciudad;
    }

    /**
     * @return int
     */
    public function getEstado() :int{
        return $this -> estado;
    }

    /**
     * @return string
     */
    public function getFechaIngreso() :string{
        return $this -> fecha_ingreso;
    }
}