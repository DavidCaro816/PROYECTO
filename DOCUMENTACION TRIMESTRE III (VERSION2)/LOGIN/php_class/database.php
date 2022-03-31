<?php

class database
{
    private $host;
    private $dbname;
    private $user;
    private $password;
    protected $connection;

    public function __construct(){
        $this->host = 'localhost';
        $this->dbname = 'perez_lara_cia_ltda';
        $this->user = 'root';
        $this->password = null;
        $this->connection = null;
        $this->connect();
    }

    public function connect()
    {
        try{
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;
            $this->connection = new PDO ($dsn, $this->user, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Error de conexión";
        }
    }

    public function disconnect(){
        $this->connection = null;
    }

    public function data_left() :array{
        $clients_query = $this->connection->query('SELECT COUNT(documento) FROM cliente');
        $clients_query->execute();
        $quotes_query = $this->connection->query('SELECT COUNT(idCotizacion) FROM cotizacion');
        $quotes_query -> execute();
        $policies_query = $this->connection->query('SELECT COUNT(codigo) FROM poliza');
        $policies_query -> execute();
        $this->disconnect();
        return array($clients_query-> fetchColumn(),$quotes_query-> fetchColumn(),$policies_query-> fetchColumn());
    }

    public function data_right() :array{
        $policies_query_soon_expire = $this->connection->query("SELECT COUNT(codigo) FROM poliza,estado WHERE poliza.idEstado =
        estado.idEstado AND poliza.idEstado = 3 ");
        $policies_query_soon_expire->execute();
        $count_policies_soon_expire = $policies_query_soon_expire -> fetchColumn();
        $policies_query_in_expedition = $this->connection->query("SELECT COUNT(codigo) FROM poliza,estado WHERE poliza.idEstado =
            estado.idEstado AND poliza.idEstado = 1 ");
        $policies_query_in_expedition -> execute();
        $count_policies_in_expedition = $policies_query_in_expedition -> fetchColumn();
        $policies_query_expired = $this->connection->query("SELECT COUNT(codigo) FROM poliza,estado WHERE poliza.idEstado =
            estado.idEstado AND poliza.idEstado = 2");
        $policies_query_expired -> execute();
        $count_policies_expired = $policies_query_expired -> fetchColumn();
        $this->disconnect();
        return array($count_policies_soon_expire,$count_policies_in_expedition,$count_policies_expired);
    }

    public function best_selling_insurances() :array{
        $insurances = $this->connection->query('SELECT imagen,poliza.idSeguro,COUNT(codigo) as codigo FROM poliza,seguro WHERE seguro.idSeguro = poliza.idSeguro GROUP BY poliza.idSeguro ORDER BY `codigo` DESC LIMIT 3;');
        $insurances->execute();
        $count_insurances = $insurances->fetchAll(PDO::FETCH_COLUMN);
        $size = count($count_insurances);
        return array($count_insurances[$size-1],$count_insurances[$size-2],$count_insurances[$size-3]);
    }

    public function filter_insurances($insurer) :array{
        if(!empty($insurer)){

        }else{
            $insurance = $this->connection->query('SELECT seguro FROM seguro');
        }
        $insurance->execute();
        return $insurance->fetchAll(PDO::FETCH_COLUMN);

    }

    public function filter_insurers($insurance = null): array{
        if(!empty($insurance)){
            $insurer = $this->connection->prepare('SELECT aseguradora FROM aseguradora,seguroaseguradora,seguro WHERE seguroaseguradora.idSeguro = seguro.idSeguro AND seguro.seguro = :insurance AND seguroaseguradora.idAseguradora = aseguradora.idAseguradora');
            $insurer->bindParam(':insurance',$insurance);
        }
        else{
            $insurer = $this->connection->query('SELECT aseguradora FROM aseguradora');
        }
        $insurer->execute();

        return $insurer->fetchAll(PDO::FETCH_COLUMN);
    }

}
