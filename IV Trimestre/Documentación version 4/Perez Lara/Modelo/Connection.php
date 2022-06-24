<?php
namespace Modelo;
use PDO,PDOException;
class Connection
{
    private string $host;
    private string $dbname;
    private string $username;
    private string $password;
    protected PDO $connection;

    public function __construct(){
        $credentials = parse_ini_file('../Config/config.ini');
        $this->host = $credentials['host'];
        $this->dbname = $credentials['dbname'];
        $this->username = $credentials['username'];
        $this->password = $credentials['password'];
        try{
            $this->connection = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname,$this->username,$this->password,
                array(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION));
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}