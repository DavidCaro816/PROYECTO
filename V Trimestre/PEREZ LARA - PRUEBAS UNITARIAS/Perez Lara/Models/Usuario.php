<?php

namespace Models;

use PDO;
use PDOStatement;
use Traits\TModels;

require_once 'Connection.php';
require_once 'TModels.php';

class Usuario
{
    use TModels;

    private PDO $connection;
    private string $documento, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $celular, $email,
        $clave, $foto_perfil;
    private int $tipo_documento, $tipo, $estado;

    public function __construct2(string $email, string $clave){
        $this->email = $email;
        $this->clave = $clave;
    }

    public function __construct1($documento) :void{
        $this -> documento = $documento;
    }

    public function __construct10($documento, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido,
                                  $celular, $email,
                                  $clave, $foto_perfil, $tipo_documento) :void{
        $this -> __construct1($documento);
        $this -> primer_nombre = $primer_nombre;
        $this -> segundo_nombre = $segundo_nombre;
        $this -> primer_apellido = $primer_apellido;
        $this -> segundo_apellido = $segundo_apellido;
        $this -> celular = $celular;
        $this -> email = $email;
        $this -> clave = $clave;
        $this -> foto_perfil = $foto_perfil;
        $this -> tipo_documento = $tipo_documento;
        $this -> tipo = 1;
        $this -> estado = 9;
    }

    public function params(bool|PDOStatement $sql) :void{
        $sql -> bindParam('documento', $this -> documento);
        $sql -> bindParam('primer_nombre', $this -> primer_nombre);
        $sql -> bindParam('segundo_nombre', $this -> segundo_nombre);
        $sql -> bindParam('primer_apellido', $this -> primer_apellido);
        $sql -> bindParam('segundo_apellido', $this -> segundo_apellido);
        $sql -> bindParam('celular', $this -> celular);
        $sql -> bindParam('email', $this -> email);
        $sql -> bindParam('clave', $this -> clave);
        $sql -> bindParam('foto_perfil', $this -> foto_perfil);
        $sql -> bindParam('tipo_documento', $this -> tipo_documento, PDO::PARAM_INT);
    }

    public function index() :bool|array{
        return $this -> connection -> query('select * from view_usuario') -> fetchAll();
    }

    public function create(){
        $create = $this -> connection -> prepare('call sp_insert_usuario(:documento, :primer_nombre, :segundo_nombre,
                                                                                :primer_apellido, :segundo_apellido, 
                                                                                :celular, :email, :clave, :foto_perfil, 
                                                                                :tipo_documento, :tipo_usuario, :estado)');
        $this -> params($create);
        $create -> bindParam('tipo_usuario', $this -> tipo, PDO::PARAM_INT);
        $create -> bindParam('estado', $this -> estado, PDO::PARAM_INT);
        $create -> execute();
        $resultado= $create -> rowCount();
        return $resultado;
    }

    public function show() :bool|array{
        $show = $this -> connection -> prepare('select * from view_usuario where `No. Documento` = :documento');
        $show -> bindParam('documento', $this -> documento);
        $show -> execute();
        return $show -> fetch();
    }

    public function update($documento) {
        $update = $this -> connection -> prepare('call sp_update_usuario(:documento2, :documento, :primer_nombre,
                                                                               :segundo_nombre, :primer_apellido,
                                                                               :segundo_apellido, :celular, :email,
                                                                               :clave, :foto_perfil, :tipo_documento)');
        $this -> params($update);
        $update -> bindParam('documento2', $documento);
        $update -> execute();
        $resultado= $update -> rowCount();
        return $resultado;
    }

    public function delete() :void{

    }
    public function getCredentials() :bool{
        $getCredentials = $this-> connection -> prepare('select email,clave from usuario where email = :email and clave = :clave');
        $getCredentials -> bindParam('email', $this -> email);
        $getCredentials -> bindParam('clave', $this -> clave);
        $getCredentials -> execute();
        return $getCredentials -> rowCount() === 0 ? false : true;
    }
}