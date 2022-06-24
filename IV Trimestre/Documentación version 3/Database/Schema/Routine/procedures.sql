
use perezlaracialtda;
CREATE PROCEDURE `sp_insert_clientes`(IN `documento` INT(20), IN `primerNombre` VARCHAR(45), IN `segundoNombre` VARCHAR(45), IN `primerApellido` VARCHAR(45), IN `segundoApellido` VARCHAR(45), IN `email` VARCHAR(45), IN `tipoDocumento` INT, IN `fechaNacimiento` DATE, IN `estado` INT, IN `ciudad` INT, IN `telefono1` VARCHAR(15), IN `telefono2` VARCHAR(15), IN `direccion1` VARCHAR(100), IN `direccion2` VARCHAR(100))
INSERT INTO cliente (documento,primerNombre,segundoNombre,primerApellido,segundoApellido,email,
tipoDocumento, fechaNacimiento, estado,ciudad,telefono1,telefono2,direccion1,direccion2) 
VALUES (documento,primerNombre,segundoNombre,primerApellido,segundoApellido,email,tipoDocumento,
fechaNacimiento, estado,ciudad,telefono1,telefono2,direccion1,direccion2);

CREATE PROCEDURE `sp_update_clientes`(IN `documento` INT(20), IN `primerNombre` VARCHAR(45), IN `segundoNombre` VARCHAR(45), IN `primerApellido` VARCHAR(45), IN `segundoApellido` VARCHAR(45), IN `email` VARCHAR(45), IN `tipoDocumento` INT, IN `fechaNacimiento` DATE, IN `estado` INT, IN `ciudad` INT, IN `telefono1` VARCHAR(15), IN `telefono2` VARCHAR(15), IN `direccion1` VARCHAR(100), IN `direccion2` VARCHAR(100)) 
UPDATE cliente SET documento=documento, primerNombre=primerNombre, segundoNombre=segundoNombre, primerApellido=primerApellido, segundoApellido=segundoApellido, email=email, tipoDocumento=tipodocumento , fechaNacimiento=fechaNacimiento, estado=estado, ciudad=ciudad, telefono1=telefono1,telefono2=telefono2,direccion1=direccion1,direccion2=direccion2 
WHERE documento=documento;

CREATE PROCEDURE `sp_filtro_clientes`(IN `departamento` INT, IN `ciudad` INT, IN `estado` INT) 
SELECT concat(t.abreviacion,' ',documento) as 'No. Documento', concat(primerNombre,' ',segundoNombre,' ',primerApellido,' ',segundoApellido) as 'Cliente', d.departamento as 'Departamento', c.ciudad as 'Ciudad', concat(direccion1,' ',direccion2) as 'Direccion', fechaNacimiento as 'Fecha de Nacimiento', email as 'Email', concat(telefono1,' ',telefono2) as 'Telefono', e.estado as 'Estado' from cliente inner join tipodocumento t on cliente.tipoDocumento = t.idTipoDocumento inner join ciudad c on cliente.ciudad = c.idCiudad inner join estado e on cliente.estado = e.idEstado inner join departamento d on c.departamento = d.idDepartamento WHERE ciudad.departamento=departamento and cliente.ciudad=ciudad and cliente.estado=estado;







CREATE  PROCEDURE `sp_insert_poliza`(IN `codigo` INT(45), IN `documento` INT(45), IN `fecha` DATE, IN `seguro` INT, IN `aseguradora` INT, IN `archivo` VARCHAR(500), IN `estado` INT)  INSERT into poliza (codigo, documentoCliente, fecha, seguro, aseguradora, archivo, estado) 
VALUES (codigo, documento, fecha, seguro, aseguradora, archivo, estado);

CREATE PROCEDURE `sp_update_poliza`(IN `codigo` INT(45), IN `documento` INT(45), IN `fecha` DATE, IN `seguro` INT, IN `aseguradora` INT, IN `archivo` VARCHAR(500), IN `estado` INT) 
UPDATE poliza SET codigo=codigo, documentoCliente=documento, fecha=fecha, seguro=seguro, aseguradora=aseguradora, archivo=archivo, estado=estado
WHERE codigo=codigo;







CREATE PROCEDURE `sp_insert_siniestro`(IN `fecha` DATE, IN `descripcion` VARCHAR(200), IN `monto` DOUBLE, IN `codigoPoliza` INT, IN `anexo` VARCHAR(500), IN `estado` INT)
INSERT INTO siniestro (fecha, descripcion, monto, codigoPoliza, anexo, estado) VALUES (fecha, descripcion, monto, codigoPoliza, anexo, estado);


CREATE PROCEDURE `sp_update_siniestro`(IN `fecha` DATE, IN `descripcion` VARCHAR(200), IN `monto` DOUBLE, IN `codigoPoliza` INT, IN `anexo` VARCHAR(500), IN `estado` INT)
UPDATE siniestro SET fecha=fecha, descripcion=descripcion, monto=monto, codigoPoliza=codigoPoliza, anexo=anexo, estado=estado 
WHERE codigoPoliza=codigoPoliza;









CREATE PROCEDURE `sp_update_cotizacion`(IN `documentoCliente` INT, IN `fecha` DATE, IN `seguro` INT, IN `estado` INT, IN `cuadroComparativo` VARCHAR(500)) NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER UPDATE cotizacion SET documentoCliente=documentoCliente, fecha=fecha, seguro=seguro, aseguradora=aseguradora, estado=estado, cuadroComparativo=cuadroComparativo WHERE documentoCliente=documentoCliente;


CREATE PROCEDURE `sp_update_cotizacion`(IN `documento` INT, IN `fecha` DATE, IN `seguro` INT, IN `estado` INT, IN `cuadroComparativo` VARCHAR(500)
UPDATE cotizacion SET documentoCliente=documentoCliente, fecha=fecha, seguro=seguro, aseguradora=aseguradora, estado=estado, cuadroComparativo=cuadroComparativo
WHERE documentoCliente=documentoCliente;

CREATE PROCEDURE `sp_filtro_cotizaciones`(IN `fechaInicial` DATE, IN `fechaFinal` DATE, IN `documentoCliente` INT, IN `seguro` INT, IN `aseguradora` INT, IN `estado` INT) 
SELECT fecha as Fecha, idCotizacion as Cotizacion, concat(c.primerNombre,' ',c.segundoNombre,' ',c.primerApellido,' ',c.segundoApellido) as Cliente, s.seguro as Seguro, a2.aseguradora as Aseguradora from cotizacion inner join cliente c on cotizacion.documentoCliente = c.documento inner join seguro s on cotizacion.seguro = s.idSeguro inner join aseguradoracotizante a on cotizacion.idCotizacion = a.cotizacion inner join aseguradora a2 on a.aseguradora = a2.idAseguradora WHERE fecha>=fechaInicial and fecha<=fechaFinal and documentoCliente=documentoCliente and seguro=seguro and aseguradora=aseguradora and estado=estado;
