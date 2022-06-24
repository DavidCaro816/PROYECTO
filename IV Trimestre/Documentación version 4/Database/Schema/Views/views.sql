use perezlaracialtda;
create view info_usuario as
    select
        concat(primerNombre,' ',segundoNombre,' ',primerApellido,' ',segundoApellido) as Nombre,
        email as Email,celular as Celular,t2.tipoUsuario as Rol
    from usuario
        inner join tipodocumento t on usuario.tipoDocumento = t.idTipoDocumento
        inner join tipousuario t2 on usuario.tipoUsuario = t2.idTipoUsuario
        inner join estadousuario e on usuario.estadoUsuario = e.idEstado;

create view info_cliente as
    select
        concat(t.abreviacion,' ',documento) as `No. Documento`,
        concat(primerNombre,' ',segundoNombre,' ',primerApellido,' ',segundoApellido) as Cliente,
        d.departamento as Departamento, c.ciudad as Ciudad, concat(direccion1,' ',direccion2) as Direccion,
        fechaNacimiento as `Fecha de Nacimiento`, email as Email, concat(telefono1,' ',telefono2) as Telefono, e.estado as Estado
    from cliente
        inner join tipodocumento t on cliente.tipoDocumento = t.idTipoDocumento
        inner join ciudad c on cliente.ciudad = c.idCiudad
        inner join departamento d on c.departamento = d.idDepartamento
        inner join estado e on cliente.estado = e.idEstado;

create view info_cotizacion as
    select
        fecha as Fecha, idCotizacion as `No. Cotizacion`, concat(c.primerNombre,' ',c.segundoNombre,' ',c.primerApellido,' ',c.segundoApellido) as Cliente,
        s.seguro as Seguro, a2.aseguradora as Aseguradora, e.estado as Estado
    from cotizacion
        inner join cliente c on cotizacion.documentoCliente = c.documento
        inner join seguro s on cotizacion.seguro = s.idSeguro
        inner join aseguradoracotizante a on cotizacion.idCotizacion = a.cotizacion
        inner join aseguradora a2 on a.aseguradora = a2.idAseguradora
        inner join estado e on cotizacion.estado = e.idEstado;

create view info_poliza as
    select fecha as Fecha,codigo as `Codigo poliza`,
           concat(primerNombre,' ',segundoNombre,' ',primerApellido,' ',segundoApellido) as Cliente,
           s.seguro as Seguro,a.aseguradora as Aseguradora,e.estado as Estado
    from poliza
        inner join cliente c on poliza.documentoCliente = c.documento
        inner join seguro s on poliza.seguro = s.idSeguro
        inner join aseguradora a on poliza.aseguradora = a.idAseguradora
        inner join estado e on poliza.estado = e.idEstado;

create view info_siniestro as
    select idSiniestro as `No. Referencia`,
           concat(primerNombre,' ',segundoNombre,' ',primerApellido,' ',segundoApellido) as Cliente,
           codigo as `Codigo poliza`,p.seguro as Seguro,a.aseguradora as Aseguradora, siniestro.fecha as Fecha,
           siniestro.estado as Estado
    from siniestro
        inner join poliza p on siniestro.codigoPoliza = p.codigo
        inner join seguro s on p.seguro = s.idSeguro
        inner join aseguradora a on p.aseguradora = a.idAseguradora
        inner join cliente c on p.documentoCliente = c.documento
        inner join estado e on siniestro.estado = e.idEstado;