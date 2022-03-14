<?php
include("conexion.php");

class filtro extends conexion
{
     public $db;
     public $depa;

            public function __construct(){
                $this->db=conexion::conn();
                $this->depa=array();
            }


           public function get_depa()
           {

               $consulta=$this->db->query("SELECT * FROM departamento");
               $resultado = mysql_query($this->db, $consulta);
               while($filas=mysqli_fetch_array($resultado)){
                   echo"<option value='".$filas['idDepartamento']."'>".$filas['Departamento']."</option>";
               }
              
           }
}


?>