<?php

class Database
{
    private string $host;
    private string $dbname;
    private string $username;
    private string $password;
    protected PDO $connection;

    public function __construct(){
        $this->host = 'localhost';
        $this->dbname = 'perezLaraCiaLtda';
        $this->username = 'root';
        $this->password = '';
    }

    public function connect(): void
    {
        try{
            $this->connection = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname,$this->username,$this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){

        }
    }

}