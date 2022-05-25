<?php
class Database{
    private $host;
    private $dbname;
    private $user;
    private $password;
    protected $connection;

    public function __construct(){
        $credenciales = parse_ini_file('../config.ini');
        $this->host = $credenciales['host'];
        $this->dbname = $credenciales['dbname'];
        $this->user = $credenciales['username'];
        $this->password = $credenciales['password'];
        $this->connection = null;
    }

    public function connect(){
        try{
            $this->connection = new PDO ('mysql:host='.$this->host.';dbname='.$this->dbname,$this->user,$this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            
        }
    }

    public function disconnect(){
        $this->connection = null;
    }
}