<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/estiloPoliza.css">
	<title>poliza</title>
</head>
<body>
<div class="contenedorGlobal">
    <div class="navbar">
        <div class="navbar_group">
            <div class="navbar_header">
                <div class="logo">
                    <img src="icons/logo.svg" alt="">
                </div>
            </div>
            <div class="navbar_body">
                <div class="home">
                    <a href="../admin.php">
                    <img src="icons/home.svg" alt="">
                    </a>
                </div>
                <div class="clients">
                    <a href="indexMenuClientes.php">
                        <img src="icons/clients.svg" alt="">
                    </a>
                </div>
                <div class="quotes">
                    <a href="vistaNuevaCotizacion.php">
                    <img src="icons/quotes.svg" alt="">
                    </a>
                </div>
                <div class="policies">
                    <a href="poliza.php">
                        <img src="icons/policies.svg" alt="">
                    </a>
                </div>
                <div class="sinister">
                    <a href="siniestros.php">
                        <img src="icons/sinister.svg" alt="">
                    </a>
                </div>
                <div class="reports">
                    <img src="icons/reports.svg" alt="">
                </div>
            </div>
        </div>
        <div class="navbar_footer">
            <div class="settings">
                <img src="icons/settings.svg" alt="">
            </div>
            <div class="sign_out">
                <img src="icons/sign_out.svg" alt="">
            </div>
        </div>
    </div>
    <div class="contenedorBotones">
        <div class="campana">
            <a HREF=""> <img id="campana" src="imagenes/campana.png"></a>
        </div>
        <div class="logo">
            <a HREF="perfilUser.html"> <img id="logo" src="imagenes/logo.png"></a>
        </div>
    </div>

    <div class="contenedor">
        <div class="titulo"><h1 style="font-size: 70px" id="titulo">Póliza</h1></div>

        <div class="btNuevaPoliza">
            <a id="nuevo" href="registoPoliza.php">
                <button type="button"> <span id="mas"><img src="icons/anadir.png"><span> <span id="new">Nueva Póliza</span> </button>
            </a>
        </div>


        <div class="search">
            <span>Buscar</span>
            <img src="icons/search.svg">
        </div>

    </div>

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
			    	</tr>
				    
	         <?php  
	         	include('../controlador/controladorPoliza.php')
	         ?>
                    <?php foreach ($datos as $dato) {;?>

                        <tr>
                            <td><?php echo $dato['fecha']?> </td>
                            <td><?php echo $dato['codigo']?> </td>
                            <td><?php echo $dato['abreviacion'] .' '.' '.$dato['documento'] .' '. $dato['primerNombre'] .' '. $dato['primerApellido']?></td>
                            <td><?php echo $dato['seguro']?> </td>
                            <td><?php echo $dato['aseguradora']?> </td>
                            <td><?php echo $dato['estado']?> </td>
                            <td><a href=''> <input type='button' class='btEditar' value='Editar'/> </a> </td>
                            <td><a href=''><input type='button' class='btEliminar' value='Eliminar' /> </a>  </td>

                        </tr>
                    <?php }?>



			</table>
	    </div>

</body>
</html>