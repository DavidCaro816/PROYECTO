<?php
require_once 'Database.php';
class Cliente extends Database
{
    public function __construct()
    {
        parent::__construct();
        parent::connect();
    }

    public function getInfoCliente(): bool|PDOStatement
    {
        return $this->connection->query('SELECT * FROM info_cliente');
    }
}
