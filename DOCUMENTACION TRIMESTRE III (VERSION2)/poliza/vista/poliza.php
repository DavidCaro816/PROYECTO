<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="estiloPoli.css">
	<title>poliza</title>
</head>
<body>
	<div class="ContMenuArrriba">
		<table class="menuArriba">
		    <tr>
		        <td> <a HREF=""><img id="campana"src="imagenes/campana.png"></a> </td>
		        <td> <a HREF=""><img id="logo" src="imagenes/logo.png"></a></td>
		    </tr>
		</table>        
	</div>
	<div class="ContMenuPolizas">
		 <ul>
            <li><p>Pólizas</p></li>
            <li><a href="nuevaPoli.php">
	            	<div class="ContNuevaPoliza">
	            		<div class="ContLetraPoliza">
	            			<p id="mas">+</p>Nueva póliza
	            		</div>
	            	</div>
            	</a>
            </li>
            <li><input type="text" name="Buscador" placeholder="Buscar"></li>
            
    </div>
  		<div class="ContSombraPoliza"></div>
    	<div class="ContPoliza">
	  		<ul>
	  			<li><select id="Fecha">
            		<option name="Fecha" disabled selected hidden>Fecha</option>
                </select></li>
                <li><select id="Cliente">
            		<option name="Cliente" disabled selected hidden>Cliente</option>
                </select></li>
    			<li><select id="Seguro">
            		<option name="Seguro" disabled selected hidden>Seguro </option>
                </select></li>
           		<li><select id="Aseguradora">
                    <option name="Aseguradora" disabled selected hidden>Aseguradora </option>
                </select>
            	</li>
            	<li><select id="Estado">
                    <option name="Estado" disabled selected hidden>Estado</option>
                </select>
            	</li>
	         </ul>

	         <ul>
	         	<li><select id='btValorAsegurado'>
            		<option name="Fecha" disabled selected hidden>Valor Asegurado</option>
                </select></li>
	          	<li><select id='btValorPrima'>
            		<option name="Fecha" disabled selected hidden>Valor Prima</option>
                </select></li>
                 	<input type="button" id="btFiltrar" value="Filtrar" />
                    <input type="button" id="btLimpiar" value="Limpiar" />
	         </ul>
	         
	         	<table class='tablaPoliza'>
					<tr>
					<th>Fecha</th>
					<th>Codigo</th>
					<th>Cliente</th>
					<th>Seguro</th>
					<th>ASEGURADORA</th>
					<th>ESTADO</th>
					<th>VALOR ASEGURADO</th>
					<th>VALOR PRIMA</th>
					<th id="LimitePago">FECHA LIMITE DE PAGO</th>
			    	</tr>
				    
	         <?php  
	         	include('../controlador/controladorPoliza.php')
	         ?>
	          <?php 
	          foreach ($datos as $filas) {

	          }
						
						echo"<tr>";
				        echo "<td>". $filas['fecha'] ."</td>";
				       	echo "<td>". $filas['idPoliza'] ."</td>";
				       	echo "<td>". $filas['abreviacion'].' '. $filas['documento'].' '. $filas['primerNombre'] .' '. $filas['primerApellido']."</td>";
				       	echo "<td>". $filas['seguro'] ."</td>";
				       	echo "<td>". $filas['Aseguradora'] ."</td>";
				       	echo "<td>". $filas['estado'] ."</td>";
				       	echo "<td>". $filas['estado'] ."</td>";
				       	echo "<td>". $filas['valorAsegurado'] ."</td>";
				       	echo "<td>". $filas['valorPrima'] ."</td>";
				       	?>
				       	<td>
				       		<a href=""> <input type='button' class='btEditar' value='Editar'/></a> 
				       	</td>
                                    
                        <td>
                        	<a href=""><input type='button' class='btEliminar' value='Eliminar' /></a>   </td>
                        <?php
				   		echo "</tr>"; 
			            ?>
			</table>
	    </div>

</body>
</html>