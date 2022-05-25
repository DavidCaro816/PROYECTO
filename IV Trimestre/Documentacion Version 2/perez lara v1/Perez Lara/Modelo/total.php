<?php


require_once 'conexion.php';

$salida = "";
$sql = "SELECT * FROM info_cliente";
$query = $pdo -> prepare($sql);
$query -> execute();


if ($resultado = $query -> rowCount() > 0) {
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

    while ($fila = $query -> fetch(PDO::FETCH_ASSOC)) {
        $salida .= "<tr>
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

    $salida .= "</tbody></table>";

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
        <tr><td>NO HAY DATOS EN ESTA TABLA</td></tr>
            
        </tr>
      </tbody></table>';
}
echo $salida;