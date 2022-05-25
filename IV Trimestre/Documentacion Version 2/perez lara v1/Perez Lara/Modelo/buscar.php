<?php

require_once 'conexion.php';

$salida = "";

if(!empty($_POST['consulta'])) {
    $consulta = filter_var($_POST['consulta']) ;
    $sql = "SELECT * from info_cliente where 
    Documento like '%".$consulta."%' or
    Cliente like '%".$consulta."%' or                          
    Departamento like '%".$consulta."%' or
    Ciudad like '%".$consulta."%' or
    Direccion like '%".$consulta."%' or
    FechaNacimiento like '%".$consulta."%' or
    Email like '%".$consulta."%' or
    Telefono like '%".$consulta."%' or
    Estado like '%".$consulta."%' ";
    $query = $pdo->prepare($sql);
    $query->execute();
}

if($resultado = $query->rowCount() > 0) {
    $salida .= '<table class="tablaClientes">
    <thead class="thead-light">
      <tr>
        <th> N° DOCUMENTO </th>
        <th>CLIENTE</th>
        <th>DEPARTAMENTO</th>
        <th>CIUDAD</th>
        <th>DIRECCIÓN</th>
        <th>FECHA NACIMIENTO</th>
        <th>EMAIL</th>
        <th>TELEFONO</th>
        <th>ESTADO</th>
      </tr>
    </thead>
    <tbody>';

    while($fila = $query->fetch(PDO::FETCH_ASSOC)) {
        $salida.=
            "<tr>
                <td>" . $fila['Documento'] . "</td>
                <td>" . $fila['Cliente'] ."</td>
                <td>".  $fila['Departamento']. "</td>
                <td>".  $fila['Ciudad']."    </td>
                <td>".  $fila['Direccion']."   </td>
                <td>".  $fila['FechaNacimiento']."     </td>
                <td>".  $fila['Email']."</td>
                <td>".  $fila['Telefono']." </td>
                <td>".  $fila['Estado']." </td>
                
                <td><a href='../vista/editarClientes.php'></a> <input type='button' class='btEditar' value='Editar' >
                <td><a href='../controlador/controladorEliminar.php'><input type='button' class='btEliminar' value='Eliminar' />
            </tr>";
    }

    $salida.="</tbody></table>";

} else {
    $salida .= '<table class="tablaClientes">
    <thead class="thead-light">
      <tr>
        <th> N° DOCUMENTO </th>
        <th>CLIENTE</th>
        <th>DEPARTAMENTO</th>
        <th>CIUDAD</th>
        <th>DIRECCIÓN</th>
        <th>FECHA NACIMIENTO</th>
        <th>EMAIL</th>
        <th>TELEFONO</th>
        <th>ESTADO</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="10" class="text-center">NO HAY DATOS EN ESTA BUSQUEDA</td>
        </tr>
    </tbody></table>';
}
echo $salida;
