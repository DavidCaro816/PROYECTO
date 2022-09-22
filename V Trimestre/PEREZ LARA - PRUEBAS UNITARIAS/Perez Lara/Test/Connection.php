<?php

namespace Test;

use PDO;
use PDOException;



class Connection
{
    private string $driver, $hostname, $database, $username, $password;

    public function __construct(){
        $credenciales = parse_ini_file('.ini');
        $this -> driver = $credenciales['DB_CONNECTION'];
        $this -> hostname = $credenciales['DB_HOST'];
        $this -> database = $credenciales['DB_DATABASE'];
        $this -> username = $credenciales['DB_USERNAME'];
        $this -> password = $credenciales['DB_PASSWORD'];
    }

    public function connect() :PDO{
        try {
            $connection = new PDO($this -> driver . ':host=' . $this -> hostname . ';dbname=' . $this -> database,
                                  $this -> username, $this -> password, [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
        } catch (PDOException $e) {
            $connection = false;
            echo $e -> getMessage();
        }
        return $connection;
    }
}