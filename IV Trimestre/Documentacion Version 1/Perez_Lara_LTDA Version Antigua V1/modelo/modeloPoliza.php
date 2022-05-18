<?php
include_once('conexion.php');

class modeloPoliza 
{
	private $db;
	private $poliza;
	
	function __construct()
	{
		$this->db=conexion::conn();
		$this->poliza=array();
	}
		function getPoliza()
		{
			$consultaPoliza=$this->db->query("SELECT * FROM tipodocumento,cliente,seguro,aseguradora,poliza,estado 
WHERE cliente.idTipoDocumento=tipoDocumento.idTipoDocumento AND cliente.documento=poliza.documento AND poliza.idSeguro=seguro.idSeguro
  AND poliza.idAseguradora=aseguradora.idAseguradora AND poliza.idEstado=estado.idEstado
  ORDER BY codigo asc");
			while ($filas=$consultaPoliza->fetch_assoc()) 
			{
				$this->poliza[]=$filas;
			}
			return $this->poliza;
		}
}
?>