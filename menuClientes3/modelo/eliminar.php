<?php


include_once('conexion.php');

class eliminar extends conexion
{
private $idCliente;
private $db;

            public function constructor($documento)
            {
            $this->db=conexion::conn();
            $this->documento=$documento;
            }

            public function delete($documento){
                $delete= "DELETE FROM cliente WHERE documento = $documento";
                $resultado=mysqli_query($this->db, $delete);
                
                            if(!$resultado)
                            {
                            echo"no se ha eliminado";
                            }
                            else{
                            echo'<script type="text/javascript">
                                alert("Usuario eliminado");
                                window.location.href="../vista/indexMenuClientes.php" ;
                            </script>';
                            }
                            }
  }
?>
