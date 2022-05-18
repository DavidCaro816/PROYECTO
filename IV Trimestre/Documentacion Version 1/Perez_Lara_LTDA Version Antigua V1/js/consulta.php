<?php

$host='localhost';
$db='perez_lara_cia_ltda';
$usuario='root';
$pass='';

$conexion= new mysqli($host, $usuario, $pass,$db);
if($conexion->connect_errno){
    die("fallo la conexion");
}

$tabla="";
$query="SELECT * from cliente, ciudad, tipodocumento, departamento, tipocliente
        WHERE cliente.idTipoDocumento=tipoDocumento.idTipoDocumento and departamento.idDepartamento=ciudad.idDepartamento and cliente.idCiudad=ciudad.idCiudad 
         and tipoCliente.idTipoCliente=cliente.idTipoCliente";


if(isset($_POST['cliente'])){

    $q=$conexion->real_escape_string($_POST['clientes']);
    $query="SELECT * from cliente, ciudad, tipodocumento, departamento, tipocliente
        WHERE cliente.idTipoDocumento=tipoDocumento.idTipoDocumento LIKE '%".$q."%' OR departamento.idDepartamento=ciudad.idDepartamento LIKE '%".$q."%' OR
    cliente.idCiudad=ciudad.idCiudad LIKE '%".$q."%' OR
    tipoCliente.idTipoCliente=cliente.idTipoCliente LIKE '%".$q."%'";

}

$buscarClientes=$conexion->query($query);
if($buscarClientes->num_rows>0)
{

                        $tabla='<table class="tablaClientes">
                     <tr id="1">
                         <th id="id">#</th>
                         <th> N° DOCUMENTO </th>
                         <th>CLIENTE</th>
                         <th>DEPARTAMENTO</th>
                         <th>CIUDAD</th>
                         <th>DIRECCIÓN</th>
                         <th>FECHA NACIMIENTO</th>
                         <th>EMAIL</th>
                         <th>TELEFONO</th>
                         <th>ESTADO</th>
                     </tr>';
                        while ($dato=$buscarClientes->fetch_assoc()){

                            $tabla='<tr>
                                    <td>'.$dato['abreviacion']. $dato['documento']. '</td>
                                    <td>'. $dato['primerNombre'] .' '. $dato['segundoNombre'].' '. $dato['primerApellido'] .' '.$dato['segundoApellido'].  ' </td>
                                    <td>'. $dato['departamento']. '</td>
                                    <td>'. $dato['ciudad']. '</td>
                                    <td>'. $dato['direccion1'] .'</td>
                                    <td>'. $dato['fechaNacimiento'] .'</td>
                                    <td>'. $dato['email'] .'</td>
                                    <td>'. $dato['telefono1'] .'</td>
                                    <td>'.$dato['tipoCliente'] .'</td>
                                    <td>'.'<input type="button" class="btEditar" value="Editar"/>  </td>
                                    <td><input type="button" class="btEliminar" value="Eliminar" />  </td>
                                </tr>';
                        }
        $tabla='</table>';
}else{
    $tabla="No se encontraron criterios de busquedad";
        }
echo $tabla;

?>
