<?php
require_once 'Database.php';
class Cotizacion extends Database
{
    public function __construct()
    {
        parent::__construct();
        parent::connect();
    }

    public function getInfoCotizacion() : bool|PDOStatement
    {
        return $this->connection->query('SELECT * FROM info_cotizacion');
    }

}