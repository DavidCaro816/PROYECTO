USE perezlaracialtda;
INSERT INTO tipoDocumento (descripcionDocumento, abreviacion)
VALUES
    ('Cédula de Ciudadanía','CC'),
    ('Cédula de Extranjería','CE'),
    ('Tarjeta de identidad','TI'),
    ('Pasaporte','PA');

INSERT INTO estado (estado)
VALUES
    ('En seguimiento'),
    ('Facturada'),
    ('Leido'),
    ('No leido'),
    ('No vigente'),
    ('Terminado'),
    ('Vigente'),
    ('Cliente'),
    ('Inactivo');

INSERT INTO estadousuario (estado)
VALUES
    (0),(1);

INSERT INTO tipousuario (tipoUsuario)
VALUES
    (0),(1);

INSERT INTO usuario
VALUES
    (0,'0','0','0','0','0','admin@perezlara.com','adminperezlara',1,1,1);

INSERT INTO departamento (departamento)
VALUES
    ('Amazonas'),
    ('Antioquia'),
    ('Arauca'),
    ('Archipiélago de San Andrés,Providencia y Santa Catalina'),
    ('Atlántico'),
    ('BOGOTA D.C.'),
    ('Bolívar'),
    ('Boyacá'),
    ('Caldas'),
    ('Caquetá'),
    ('Casanare'),
    ('Cauca'),
    ('Cesar'),
    ('Chocó'),
    ('Córdoba'),
    ('Cundinamarca'),
    ('Guainía'),
    ('Guaviare'),
    ('Huila'),
    ('La Guajira'),
    ('Magdalena'),
    ('Meta'),
    ('Nariño'),
    ('Norte de Santander'),
    ('Putumayo'),
    ('Quindio'),
    ('Risaralda'),
    ('Santander'),
    ('Sucre'),
    ('Tolima'),
    ('Valle del Cauca'),
    ('Vaupés'),
    ('Vichada');

INSERT INTO ciudad (ciudad, departamento)
    VALUES
    ('El Encanto',1),
    ('La Chorrera',1),
    ('La Pedrera',1),
    ('La Victoria',1),
    ('Leticia',1),
    ('Miriti - Parana',1),
    ('Puerto Alegria',1),
    ('Puerto Arica',1),
    ('Puerto Nariño',1),
    ('Puerto Santander',1),
    ('Tarapaca',1),
    ('Abejorral',2),
    ('Abriaqui',2),
    ('Alejandria',2),
    ('Amaga',2),
    ('Amalfi',2),
    ('Andes',2),
    ('Angelopolis',2),
    ('Angostura',2),
    ('Anori',2),
    ('Anza',2),
    ('Apartado',2),
    ('Arboletes',2),
    ('Argelia',2),
    ('Armenia',2),
    ('Barbosa',2),
    ('Bello',2),
    ('Belmira',2),
    ('Betania',2),
    ('Betulia',2),
    ('Briceño',2),
    ('Buritica',2),
    ('Caceres',2),
    ('Caicedo',2),
    ('Caldas',2),
    ('Campamento',2),
    ('Cañasgordas',2),
    ('Caracoli',2),
    ('Caramanta',2),
    ('Carepa',2),
    ('Carolina',2),
    ('Caucasia',2),
    ('Chigorodo',2),
    ('Cisneros',2),
    ('Ciudad Bolivar',2),
    ('Cocorna',2),
    ('Concepcion',2),
    ('Concordia',2),
    ('Copacabana',2),
    ('Dabeiba',2),
    ('Don Matias',2),
    ('Ebejico',2),
    ('El Bagre',2),
    ('El Carmen De Viboral',2),
    ('El Santuario',2),
    ('Entrerrios',2),
    ('Envigado',2),
    ('Fredonia',2),
    ('Frontino',2),
    ('Giraldo',2),
    ('Girardota',2),
    ('Gomez Plata',2),
    ('Granada',2),
    ('Guadalupe',2),
    ('Guarne',2),
    ('Guatape',2),
    ('Heliconia',2),
    ('Hispania',2),
    ('Itagüi',2),
    ('Ituango',2),
    ('Jardin',2),
    ('Jerico',2),
    ('La Ceja',2),
    ('La Estrella',2),
    ('La Pintada',2),
    ('La Union',2),
    ('Liborina',2),
    ('Maceo',2),
    ('Marinilla',2),
    ('Medellin',2),
    ('Montebello',2),
    ('Murindo',2),
    ('Mutata',2),
    ('Nariño',2),
    ('Nechi',2),
    ('Necocli',2),
    ('Olaya',2),
    ('Peñol',2),
    ('Peque',2),
    ('Pueblorrico',2),
    ('Puerto Berrio',2),
    ('Puerto Nare',2),
    ('Puerto Triunfo',2),
    ('Remedios',2),
    ('Retiro',2),
    ('Rionegro',2),
    ('Sabanalarga',2),
    ('Sabaneta',2),
    ('Salgar',2),
    ('San Andres',2),
    ('San Carlos',2),
    ('San Francisco',2),
    ('San Jeronimo',2),
    ('San Jose De La Montaña',2),
    ('San Juan De Uraba',2),
    ('San Luis',2),
    ('San Pedro',2),
    ('San Pedro De Uraba',2),
    ('San Rafael',2),
    ('San Roque',2),
    ('San Vicente',2),
    ('Santa Barbara',2),
    ('Santa Rosa De Osos',2),
    ('Santafe De Antioquia',2),
    ('Santo Domingo',2),
    ('Segovia',2),
    ('Sonson',2),
    ('Sopetran',2),
    ('Tamesis',2),
    ('Taraza',2),
    ('Tarso',2),
    ('Titiribi',2),
    ('Toledo',2),
    ('Turbo',2),
    ('Uramita',2),
    ('Urrao',2),
    ('Valdivia',2),
    ('Valparaiso',2),
    ('Vegachi',2),
    ('Venecia',2),
    ('Vigia Del Fuerte',2),
    ('Yali',2),
    ('Yarumal',2),
    ('Yolombo',2),
    ('Yondo',2),
    ('Zaragoza',2),
    ('Arauca',3),
    ('Arauquita',3),
    ('Cravo Norte',3),
    ('Fortul',3),
    ('Puerto Rondon',3),
    ('Saravena',3),
    ('Tame',3),
    ('Providencia',4),
    ('San Andres',4),
    ('Baranoa',5),
    ('Barranquilla',5),
    ('Campo De La Cruz',5),
    ('Candelaria',5),
    ('Galapa',5),
    ('Juan De Acosta',5),
    ('Luruaco',5),
    ('Malambo',5),
    ('Manati',5),
    ('Palmar De Varela',5),
    ('Piojo',5),
    ('Polonuevo',5),
    ('Ponedera',5),
    ('Puerto Colombia',5),
    ('Repelon',5),
    ('Sabanagrande',5),
    ('Sabanalarga',5),
    ('Santa Lucia',5),
    ('Santo Tomas',5),
    ('Soledad',5),
    ('Suan',5),
    ('Tubara',5),
    ('Usiacuri',5),
    ('Bogota',6),
    ('Achi',7),
    ('Altos Del Rosario',7),
    ('Arenal',7),
    ('Arjona',7),
    ('Arroyohondo',7),
    ('Barranco De Loba',7),
    ('Calamar',7),
    ('Cantagallo',7),
    ('Cartagena',7),
    ('Cicuco',7),
    ('Clemencia',7),
    ('Cordoba',7),
    ('El Carmen De Bolivar',7),
    ('El Guamo',7),
    ('El Peñon',7),
    ('Hatillo De Loba',7),
    ('Magangue',7),
    ('Mahates',7),
    ('Margarita',7),
    ('Maria La Baja',7),
    ('Mompos',7),
    ('Montecristo',7),
    ('Morales',7),
    ('Pinillos',7),
    ('Regidor',7),
    ('Rio Viejo',7),
    ('San Cristobal',7),
    ('San Estanislao',7),
    ('San Fernando',7),
    ('San Jacinto',7),
    ('San Jacinto Del Cauca',7),
    ('San Juan Nepomuceno',7),
    ('San Martin De Loba',7),
    ('San Pablo',7),
    ('Santa Catalina',7),
    ('Santa Rosa',7),
    ('Santa Rosa Del Sur',7),
    ('Simiti',7),
    ('Soplaviento',7),
    ('Talaigua Nuevo',7),
    ('Tiquisio',7),
    ('Turbaco',7),
    ('Turbana',7),
    ('Villanueva',7),
    ('Zambrano',7),
    ('Almeida',8),
    ('Aquitania',8),
    ('Arcabuco',8),
    ('Belen',8),
    ('Berbeo',8),
    ('Beteitiva',8),
    ('Boavita',8),
    ('Boyaca',8),
    ('Briceño',8),
    ('Buenavista',8),
    ('Busbanza',8),
    ('Caldas',8),
    ('Campohermoso',8),
    ('Cerinza',8),
    ('Chinavita',8),
    ('Chiquinquira',8),
    ('Chiquiza',8),
    ('Chiscas',8),
    ('Chita',8),
    ('Chitaraque',8),
    ('Chivata',8),
    ('Chivor',8),
    ('Cienega',8),
    ('Combita',8),
    ('Coper',8),
    ('Corrales',8),
    ('Covarachia',8),
    ('Cubara',8),
    ('Cucaita',8),
    ('Cuitiva',8),
    ('Duitama',8),
    ('El Cocuy',8),
    ('El Espino',8),
    ('Firavitoba',8),
    ('Floresta',8),
    ('Gachantiva',8),
    ('Gameza',8),
    ('Garagoa',8),
    ('Guacamayas',8),
    ('Guateque',8),
    ('Guayata',8),
    ('Güican',8),
    ('Iza',8),
    ('Jenesano',8),
    ('Jerico',8),
    ('La Capilla',8),
    ('La Uvita',8),
    ('La Victoria',8),
    ('Labranzagrande',8),
    ('Macanal',8),
    ('Maripi',8),
    ('Miraflores',8),
    ('Mongua',8),
    ('Mongui',8),
    ('Moniquira',8),
    ('Motavita',8),
    ('Muzo',8),
    ('Nobsa',8),
    ('Nuevo Colon',8),
    ('Oicata',8),
    ('Otanche',8),
    ('Pachavita',8),
    ('Paez',8),
    ('Paipa',8),
    ('Pajarito',8),
    ('Panqueba',8),
    ('Pauna',8),
    ('Paya',8),
    ('Paz De Rio',8),
    ('Pesca',8),
    ('Pisba',8),
    ('Puerto Boyaca',8),
    ('Quipama',8),
    ('Ramiriqui',8),
    ('Raquira',8),
    ('Rondon',8),
    ('Saboya',8),
    ('Sachica',8),
    ('Samaca',8),
    ('San Eduardo',8),
    ('San Jose De Pare',8),
    ('San Luis De Gaceno',8),
    ('San Mateo',8),
    ('San Miguel De Sema',8),
    ('San Pablo De Borbur',8),
    ('Santa Maria',8),
    ('Santa Rosa De Viterbo',8),
    ('Santa Sofia',8),
    ('Santana',8),
    ('Sativanorte',8),
    ('Sativasur',8),
    ('Siachoque',8),
    ('Soata',8),
    ('Socha',8),
    ('Socota',8),
    ('Sogamoso',8),
    ('Somondoco',8),
    ('Sora',8),
    ('Soraca',8),
    ('Sotaquira',8),
    ('Susacon',8),
    ('Sutamarchan',8),
    ('Sutatenza',8),
    ('Tasco',8),
    ('Tenza',8),
    ('Tibana',8),
    ('Tibasosa',8),
    ('Tinjaca',8),
    ('Tipacoque',8),
    ('Toca',8),
    ('Togüi',8),
    ('Topaga',8),
    ('Tota',8),
    ('Tunja',8),
    ('Tunungua',8),
    ('Turmeque',8),
    ('Tuta',8),
    ('Tutaza',8),
    ('Umbita',8),
    ('Ventaquemada',8),
    ('Villa De Leyva',8),
    ('Viracacha',8),
    ('Zetaquira',8),
    ('Aguadas',9),
    ('Anserma',9),
    ('Aranzazu',9),
    ('Belalcazar',9),
    ('Chinchina',9),
    ('Filadelfia',9),
    ('La Dorada',9),
    ('La Merced',9),
    ('Manizales',9),
    ('Manzanares',9),
    ('Marmato',9),
    ('Marquetalia',9),
    ('Marulanda',9),
    ('Neira',9),
    ('Norcasia',9),
    ('Pacora',9),
    ('Palestina',9),
    ('Pensilvania',9),
    ('Riosucio',9),
    ('Risaralda',9),
    ('Salamina',9),
    ('Samana',9),
    ('San Jose',9),
    ('Supia',9),
    ('Victoria',9),
    ('Villamaria',9),
    ('Viterbo',9),
    ('Albania',10),
    ('Belen De Los Andaquies',10),
    ('Cartagena Del Chaira',10),
    ('Curillo',10),
    ('El Doncello',10),
    ('El Paujil',10),
    ('Florencia',10),
    ('La Montañita',10),
    ('Milan',10),
    ('Morelia',10),
    ('Puerto Rico',10),
    ('San Jose De La Fragua',10),
    ('San Vicente Del Caguan',10),
    ('Solano',10),
    ('Solita',10),
    ('Valparaiso',10),
    ('Aguazul',11),
    ('Chameza',11),
    ('Hato Corozal',11),
    ('La Salina',11),
    ('Mani',11),
    ('Monterrey',11),
    ('Nunchia',11),
    ('Orocue',11),
    ('Paz De Ariporo',11),
    ('Pore',11),
    ('Recetor',11),
    ('Sabanalarga',11),
    ('Sacama',11),
    ('San Luis De Palenque',11),
    ('Tamara',11),
    ('Tauramena',11),
    ('Trinidad',11),
    ('Villanueva',11),
    ('Yopal',11),
    ('Almaguer',12),
    ('Argelia',12),
    ('Balboa',12),
    ('Bolivar',12),
    ('Buenos Aires',12),
    ('Cajibio',12),
    ('Caldono',12),
    ('Caloto',12),
    ('Corinto',12),
    ('El Tambo',12),
    ('Florencia',12),
    ('Guapi',12),
    ('Inza',12),
    ('Jambalo',12),
    ('La Sierra',12),
    ('La Vega',12),
    ('Lopez',12),
    ('Mercaderes',12),
    ('Miranda',12),
    ('Morales',12),
    ('Padilla',12),
    ('Paez',12),
    ('Patia',12),
    ('Piamonte',12),
    ('Piendamo',12),
    ('Popayan',12),
    ('Puerto Tejada',12),
    ('Purace',12),
    ('Rosas',12),
    ('San Sebastian',12),
    ('Santa Rosa',12),
    ('Santander De Quilichao',12),
    ('Silvia',12),
    ('Sotara',12),
    ('Suarez',12),
    ('Sucre',12),
    ('Timbio',12),
    ('Timbiqui',12),
    ('Toribio',12),
    ('Totoro',12),
    ('Villa Rica',12),
    ('Aguachica',13),
    ('Agustin Codazzi',13),
    ('Astrea',13),
    ('Becerril',13),
    ('Bosconia',13),
    ('Chimichagua',13),
    ('Chiriguana',13),
    ('Curumani',13),
    ('El Copey',13),
    ('El Paso',13),
    ('Gamarra',13),
    ('Gonzalez',13),
    ('La Gloria',13),
    ('La Jagua De Ibirico',13),
    ('La Paz',13),
    ('Manaure',13),
    ('Pailitas',13),
    ('Pelaya',13),
    ('Pueblo Bello',13),
    ('Rio De Oro',13),
    ('San Alberto',13),
    ('San Diego',13),
    ('San Martin',13),
    ('Tamalameque',13),
    ('Valledupar',13),
    ('Acandi',14),
    ('Alto Baudo',14),
    ('Atrato',14),
    ('Bagado',14),
    ('Bahia Solano',14),
    ('Bajo Baudo',14),
    ('Belen De Bajira',14),
    ('Bojaya',14),
    ('Carmen Del Darien',14),
    ('Certegui',14),
    ('Condoto',14),
    ('El Canton Del San Pablo',14),
    ('El Carmen De Atrato',14),
    ('El Litoral Del San Juan',14),
    ('Istmina',14),
    ('Jurado',14),
    ('Lloro',14),
    ('Medio Atrato',14),
    ('Medio Baudo',14),
    ('Medio San Juan',14),
    ('Novita',14),
    ('Nuqui',14),
    ('Quibdo',14),
    ('Rio Iro',14),
    ('Rio Quito',14),
    ('Riosucio',14),
    ('San Jose Del Palmar',14),
    ('Sipi',14),
    ('Tado',14),
    ('Unguia',14),
    ('Union Panamericana',14),
    ('Ayapel',15),
    ('Buenavista',15),
    ('Canalete',15),
    ('Cerete',15),
    ('Chima',15),
    ('Chinu',15),
    ('Cienaga De Oro',15),
    ('Cotorra',15),
    ('La Apartada',15),
    ('Lorica',15),
    ('Los Cordobas',15),
    ('Momil',15),
    ('Montelibano',15),
    ('Monteria',15),
    ('Moñitos',15),
    ('Planeta Rica',15),
    ('Pueblo Nuevo',15),
    ('Puerto Escondido',15),
    ('Puerto Libertador',15),
    ('Purisima',15),
    ('Sahagun',15),
    ('San Andres De Sotavento',15),
    ('San Antero',15),
    ('San Bernardo Del Viento',15),
    ('San Carlos',15),
    ('San Pelayo',15),
    ('Tierralta',15),
    ('Valencia',15),
    ('Agua De Dios',16),
    ('Alban',16),
    ('Anapoima',16),
    ('Anolaima',16),
    ('Apulo',16),
    ('Arbelaez',16),
    ('Beltran',16),
    ('Bituima',16),
    ('Bojaca',16),
    ('Cabrera',16),
    ('Cachipay',16),
    ('Cajica',16),
    ('Caparrapi',16),
    ('Caqueza',16),
    ('Carmen De Carupa',16),
    ('Chaguani',16),
    ('Chia',16),
    ('Chipaque',16),
    ('Choachi',16),
    ('Choconta',16),
    ('Cogua',16),
    ('Cota',16),
    ('Cucunuba',16),
    ('El Colegio',16),
    ('El Peñon',16),
    ('El Rosal',16),
    ('Facatativa',16),
    ('Fomeque',16),
    ('Fosca',16),
    ('Funza',16),
    ('Fuquene',16),
    ('Fusagasuga',16),
    ('Gachala',16),
    ('Gachancipa',16),
    ('Gacheta',16),
    ('Gama',16),
    ('Girardot',16),
    ('Granada',16),
    ('Guacheta',16),
    ('Guaduas',16),
    ('Guasca',16),
    ('Guataqui',16),
    ('Guatavita',16),
    ('Guayabal De Siquima',16),
    ('Guayabetal',16),
    ('Gutierrez',16),
    ('Jerusalen',16),
    ('Junin',16),
    ('La Calera',16),
    ('La Mesa',16),
    ('La Palma',16),
    ('La Peña',16),
    ('La Vega',16),
    ('Lenguazaque',16),
    ('Macheta',16),
    ('Madrid',16),
    ('Manta',16),
    ('Medina',16),
    ('Mosquera',16),
    ('Nariño',16),
    ('Nemocon',16),
    ('Nilo',16),
    ('Nimaima',16),
    ('Nocaima',16),
    ('Pacho',16),
    ('Paime',16),
    ('Pandi',16),
    ('Paratebueno',16),
    ('Pasca',16),
    ('Puerto Salgar',16),
    ('Puli',16),
    ('Quebradanegra',16),
    ('Quetame',16),
    ('Quipile',16),
    ('Ricaurte',16),
    ('San Antonio Del Tequendama',16),
    ('San Bernardo',16),
    ('San Cayetano',16),
    ('San Francisco',16),
    ('San Juan De Rio Seco',16),
    ('Sasaima',16),
    ('Sesquile',16),
    ('Sibate',16),
    ('Silvania',16),
    ('Simijaca',16),
    ('Soacha',16),
    ('Sopo',16),
    ('Subachoque',16),
    ('Suesca',16),
    ('Supata',16),
    ('Susa',16),
    ('Sutatausa',16),
    ('Tabio',16),
    ('Tausa',16),
    ('Tena',16),
    ('Tenjo',16),
    ('Tibacuy',16),
    ('Tibirita',16),
    ('Tocaima',16),
    ('Tocancipa',16),
    ('Topaipi',16),
    ('Ubala',16),
    ('Ubaque',16),
    ('Une',16),
    ('Utica',16),
    ('Venecia',16),
    ('Vergara',16),
    ('Viani',16),
    ('Villa De San Diego De Ubate',16),
    ('Villagomez',16),
    ('Villapinzon',16),
    ('Villeta',16),
    ('Viota',16),
    ('Yacopi',16),
    ('Zipacon',16),
    ('Zipaquira',16),
    ('Barranco Minas',17),
    ('Cacahual',17),
    ('Inirida',17),
    ('La Guadalupe',17),
    ('Mapiripana',17),
    ('Morichal',17),
    ('Pana Pana',17),
    ('Puerto Colombia',17),
    ('San Felipe',17),
    ('Calamar',18),
    ('El Retorno',18),
    ('Miraflores',18),
    ('San Jose Del Guaviare',18),
    ('Acevedo',19),
    ('Agrado',19),
    ('Aipe',19),
    ('Algeciras',19),
    ('Altamira',19),
    ('Baraya',19),
    ('Campoalegre',19),
    ('Colombia',19),
    ('Elias',19),
    ('Garzon',19),
    ('Gigante',19),
    ('Guadalupe',19),
    ('Hobo',19),
    ('Iquira',19),
    ('Isnos',19),
    ('La Argentina',19),
    ('La Plata',19),
    ('Nataga',19),
    ('Neiva',19),
    ('Oporapa',19),
    ('Paicol',19),
    ('Palermo',19),
    ('Palestina',19),
    ('Pital',19),
    ('Pitalito',19),
    ('Rivera',19),
    ('Saladoblanco',19),
    ('San Agustin',19),
    ('Santa Maria',19),
    ('Suaza',19),
    ('Tarqui',19),
    ('Tello',19),
    ('Teruel',19),
    ('Tesalia',19),
    ('Timana',19),
    ('Villavieja',19),
    ('Yaguara',19),
    ('Albania',20),
    ('Barrancas',20),
    ('Dibulla',20),
    ('Distraccion',20),
    ('El Molino',20),
    ('Fonseca',20),
    ('Hatonuevo',20),
    ('La Jagua Del Pilar',20),
    ('Maicao',20),
    ('Manaure',20),
    ('Riohacha',20),
    ('San Juan Del Cesar',20),
    ('Uribia',20),
    ('Urumita',20),
    ('Villanueva',20),
    ('Algarrobo',21),
    ('Aracataca',21),
    ('Ariguani',21),
    ('Cerro San Antonio',21),
    ('Chivolo',21),
    ('Cienaga',21),
    ('Concordia',21),
    ('El Banco',21),
    ('El Piñon',21),
    ('El Reten',21),
    ('Fundacion',21),
    ('Guamal',21),
    ('Nueva Granada',21),
    ('Pedraza',21),
    ('Pijiño Del Carmen',21),
    ('Pivijay',21),
    ('Plato',21),
    ('Puebloviejo',21),
    ('Remolino',21),
    ('Sabanas De San Angel',21),
    ('Salamina',21),
    ('San Zenon',21),
    ('Santa Ana',21),
    ('Santa Barbara De Pinto',21),
    ('Santa Marta',21),
    ('Sitionuevo',21),
    ('Tenerife',21),
    ('Zapayan',21),
    ('Zona Bananera',21),
    ('San Sebastian',21),
    ('Acacias',22),
    ('Barranca De Upia',22),
    ('Cabuyaro',22),
    ('Castilla La Nueva',22),
    ('Cubarral',22),
    ('Cumaral',22),
    ('El Calvario',22),
    ('El Castillo',22),
    ('El Dorado',22),
    ('Fuente De Oro',22),
    ('Granada',22),
    ('Guamal',22),
    ('La Macarena',22),
    ('Lejanias',22),
    ('Mapiripan',22),
    ('Mesetas',22),
    ('Puerto Concordia',22),
    ('Puerto Gaitan',22),
    ('Puerto Lleras',22),
    ('Puerto Lopez',22),
    ('Puerto Rico',22),
    ('Restrepo',22),
    ('San Carlos De Guaroa',22),
    ('San Juan De Arama',22),
    ('San Juanito',22),
    ('San Martin',22),
    ('Uribe',22),
    ('Villavicencio',22),
    ('Vista Hermosa',22),
    ('Alban',23),
    ('Aldana',23),
    ('Ancuya',23),
    ('Arboleda',23),
    ('Barbacoas',23),
    ('Belen',23),
    ('Buesaco',23),
    ('Chachagüi',23),
    ('Colon',23),
    ('Consaca',23),
    ('Contadero',23),
    ('Cordoba',23),
    ('Cuaspud',23),
    ('Cumbal',23),
    ('Cumbitara',23),
    ('El Charco',23),
    ('El Peñol',23),
    ('El Rosario',23),
    ('El Tablon De Gomez',23),
    ('El Tambo',23),
    ('Francisco Pizarro',23),
    ('Funes',23),
    ('Guachucal',23),
    ('Guaitarilla',23),
    ('Gualmatan',23),
    ('Iles',23),
    ('Imues',23),
    ('Ipiales',23),
    ('La Cruz',23),
    ('La Florida',23),
    ('La Llanada',23),
    ('La Tola',23),
    ('La Union',23),
    ('Leiva',23),
    ('Linares',23),
    ('Los Andes',23),
    ('Magüi',23),
    ('Mallama',23),
    ('Mosquera',23),
    ('Nariño',23),
    ('Olaya Herrera',23),
    ('Ospina',23),
    ('Pasto',23),
    ('Policarpa',23),
    ('Potosi',23),
    ('Providencia',23),
    ('Puerres',23),
    ('Pupiales',23),
    ('Ricaurte',23),
    ('Roberto Payan',23),
    ('Samaniego',23),
    ('San Bernardo',23),
    ('San Lorenzo',23),
    ('San Pablo',23),
    ('San Pedro De Cartago',23),
    ('Sandona',23),
    ('Santa Barbara',23),
    ('Santacruz',23),
    ('Sapuyes',23),
    ('Taminango',23),
    ('Tangua',23),
    ('Tumaco',23),
    ('Tuquerres',23),
    ('Yacuanquer',23),
    ('Abrego',24),
    ('Arboledas',24),
    ('Bochalema',24),
    ('Bucarasica',24),
    ('Cachira',24),
    ('Cacota',24),
    ('Chinacota',24),
    ('Chitaga',24),
    ('Convencion',24),
    ('Cucuta',24),
    ('Cucutilla',24),
    ('Durania',24),
    ('El Carmen',24),
    ('El Tarra',24),
    ('El Zulia',24),
    ('Gramalote',24),
    ('Hacari',24),
    ('Herran',24),
    ('La Esperanza',24),
    ('La Playa',24),
    ('Labateca',24),
    ('Los Patios',24),
    ('Lourdes',24),
    ('Mutiscua',24),
    ('Ocaña',24),
    ('Pamplona',24),
    ('Pamplonita',24),
    ('Puerto Santander',24),
    ('Ragonvalia',24),
    ('Salazar',24),
    ('San Calixto',24),
    ('San Cayetano',24),
    ('Santiago',24),
    ('Sardinata',24),
    ('Silos',24),
    ('Teorama',24),
    ('Tibu',24),
    ('Toledo',24),
    ('Villa Caro',24),
    ('Villa Del Rosario',24),
    ('Colon',25),
    ('Leguizamo',25),
    ('Mocoa',25),
    ('Orito',25),
    ('Puerto Asis',25),
    ('Puerto Caicedo',25),
    ('Puerto Guzman',25),
    ('San Francisco',25),
    ('San Miguel',25),
    ('Santiago',25),
    ('Sibundoy',25),
    ('Valle Del Guamuez',25),
    ('Villagarzon',25),
    ('Armenia',26),
    ('Buenavista',26),
    ('Calarca',26),
    ('Circasia',26),
    ('Cordoba',26),
    ('Filandia',26),
    ('Genova',26),
    ('La Tebaida',26),
    ('Montenegro',26),
    ('Pijao',26),
    ('Quimbaya',26),
    ('Salento',26),
    ('Apia',27),
    ('Balboa',27),
    ('Belen De Umbria',27),
    ('Dosquebradas',27),
    ('Guatica',27),
    ('La Celia',27),
    ('La Virginia',27),
    ('Marsella',27),
    ('Mistrato',27),
    ('Pereira',27),
    ('Pueblo Rico',27),
    ('Quinchia',27),
    ('Santa Rosa De Cabal',27),
    ('Santuario',27),
    ('Aguada',28),
    ('Albania',28),
    ('Aratoca',28),
    ('Barbosa',28),
    ('Barichara',28),
    ('Barrancabermeja',28),
    ('Betulia',28),
    ('Bolivar',28),
    ('Bucaramanga',28),
    ('Cabrera',28),
    ('California',28),
    ('Capitanejo',28),
    ('Carcasi',28),
    ('Cepita',28),
    ('Cerrito',28),
    ('Charala',28),
    ('Charta',28),
    ('Chima',28),
    ('Chipata',28),
    ('Cimitarra',28),
    ('Concepcion',28),
    ('Confines',28),
    ('Contratacion',28),
    ('Coromoro',28),
    ('Curiti',28),
    ('El Carmen De Chucuri',28),
    ('El Guacamayo',28),
    ('El Peñon',28),
    ('El Playon',28),
    ('Encino',28),
    ('Enciso',28),
    ('Florian',28),
    ('Floridablanca',28),
    ('Galan',28),
    ('Gambita',28),
    ('Giron',28),
    ('Guaca',28),
    ('Guadalupe',28),
    ('Guapota',28),
    ('Guavata',28),
    ('Güepsa',28),
    ('Hato',28),
    ('Jesus Maria',28),
    ('Jordan',28),
    ('La Belleza',28),
    ('La Paz',28),
    ('Landazuri',28),
    ('Lebrija',28),
    ('Los Santos',28),
    ('Macaravita',28),
    ('Malaga',28),
    ('Matanza',28),
    ('Mogotes',28),
    ('Molagavita',28),
    ('Ocamonte',28),
    ('Oiba',28),
    ('Onzaga',28),
    ('Palmar',28),
    ('Palmas Del Socorro',28),
    ('Paramo',28),
    ('Piedecuesta',28),
    ('Pinchote',28),
    ('Puente Nacional',28),
    ('Puerto Parra',28),
    ('Puerto Wilches',28),
    ('Rionegro',28),
    ('Sabana De Torres',28),
    ('San Andres',28),
    ('San Benito',28),
    ('San Gil',28),
    ('San Joaquin',28),
    ('San Jose De Miranda',28),
    ('San Miguel',28),
    ('San Vicente De Chucuri',28),
    ('Santa Barbara',28),
    ('Santa Helena Del Opon',28),
    ('Simacota',28),
    ('Socorro',28),
    ('Suaita',28),
    ('Sucre',28),
    ('Surata',28),
    ('Tona',28),
    ('Valle De San Jose',28),
    ('Velez',28),
    ('Vetas',28),
    ('Villanueva',28),
    ('Zapatoca',28),
    ('Buenavista',29),
    ('Caimito',29),
    ('Chalan',29),
    ('Coloso',29),
    ('Corozal',29),
    ('El Roble',29),
    ('Galeras',29),
    ('Guaranda',29),
    ('La Union',29),
    ('Los Palmitos',29),
    ('Majagual',29),
    ('Morroa',29),
    ('Ovejas',29),
    ('Palmito',29),
    ('Sampues',29),
    ('San Benito Abad',29),
    ('San Juan De Betulia',29),
    ('San Marcos',29),
    ('San Onofre',29),
    ('San Pedro',29),
    ('Santiago De Tolu',29),
    ('Since',29),
    ('Sincelejo',29),
    ('Sucre',29),
    ('Toluviejo',29),
    ('Alpujarra',30),
    ('Alvarado',30),
    ('Ambalema',30),
    ('Anzoategui',30),
    ('Armero',30),
    ('Ataco',30),
    ('Cajamarca',30),
    ('Carmen De Apicala',30),
    ('Casabianca',30),
    ('Chaparral',30),
    ('Coello',30),
    ('Coyaima',30),
    ('Cunday',30),
    ('Dolores',30),
    ('Espinal',30),
    ('Falan',30),
    ('Flandes',30),
    ('Fresno',30),
    ('Guamo',30),
    ('Herveo',30),
    ('Honda',30),
    ('Ibague',30),
    ('Icononzo',30),
    ('Lerida',30),
    ('Libano',30),
    ('Mariquita',30),
    ('Melgar',30),
    ('Murillo',30),
    ('Natagaima',30),
    ('Ortega',30),
    ('Palocabildo',30),
    ('Piedras',30),
    ('Planadas',30),
    ('Prado',30),
    ('Purificacion',30),
    ('Rioblanco',30),
    ('Roncesvalles',30),
    ('Rovira',30),
    ('Saldaña',30),
    ('San Antonio',30),
    ('San Luis',30),
    ('Santa Isabel',30),
    ('Suarez',30),
    ('Valle De San Juan',30),
    ('Venadillo',30),
    ('Villahermosa',30),
    ('Villarrica',30),
    ('Alcala',31),
    ('Andalucia',31),
    ('Ansermanuevo',31),
    ('Argelia',31),
    ('Bolivar',31),
    ('Buenaventura',31),
    ('Bugalagrande',31),
    ('Caicedonia',31),
    ('Cali',31),
    ('Calima',31),
    ('Candelaria',31),
    ('Cartago',31),
    ('Dagua',31),
    ('El Aguila',31),
    ('El Cairo',31),
    ('El Cerrito',31),
    ('El Dovio',31),
    ('Florida',31),
    ('Ginebra',31),
    ('Guacari',31),
    ('Guadalajara De Buga',31),
    ('Jamundi',31),
    ('La Cumbre',31),
    ('La Union',31),
    ('La Victoria',31),
    ('Obando',31),
    ('Palmira',31),
    ('Pradera',31),
    ('Restrepo',31),
    ('Riofrio',31),
    ('Roldanillo',31),
    ('San Pedro',31),
    ('Sevilla',31),
    ('Toro',31),
    ('Trujillo',31),
    ('Tulua',31),
    ('Ulloa',31),
    ('Versalles',31),
    ('Vijes',31),
    ('Yotoco',31),
    ('Yumbo',31),
    ('Zarzal',31),
    ('Caruru',32),
    ('Mitu',32),
    ('Pacoa',32),
    ('Papunaua',32),
    ('Taraira',32),
    ('Yavarate',32),
    ('Cumaribo',33),
    ('La Primavera',33),
    ('Puerto Carreño',33),
    ('Santa Rosalia',33);

INSERT INTO aseguradora (aseguradora, logo)
VALUES
    ('Allianz','../icons/aseguradoras/Allianz.svg'),
    ('HDI Seguros','../icons/aseguradoras/HDI_seguros.svg'),
    ('Liberty Seguros','../icons/aseguradoras/Liberty_seguros.svg'),
    ('MAPFRE','../icons/aseguradoras/Mapfre.svg'),
    ('SBS','../icons/aseguradoras/SBS.svg'),
    ('Seguros SURA','../icons/aseguradoras/SURA.svg'),
    ('ZURICH Seguros','../icons/aseguradoras/Zurich.svg');

INSERT INTO seguro (seguro, imagen)
VALUES
    ('Arrendamiento','../icons/seguros/arrendamiento.svg'),
    ('Autos','../icons/seguros/autos.svg'),
    ('Copropiedades','../icons/seguros/copropiedades.svg'),
    ('Hogar','../icons/seguros/hogar.svg'),
    ('Mascotas','../icons/seguros/mascotas.svg'),
    ('Responsabilidad Civil','../icons/responsabilidadCivil.svg'),
    ('Vida','../icons/seguros/vida.svg');

INSERT INTO seguroaseguradora
VALUES
    (1,1),
    (2,1),
    (3,1),
    (4,1),
    (5,1),
    (6,1),
    (4,2),
    (5,2),
    (6,2),
    (2,2),
    (3,3),
    (7,3),
    (1,4),
    (5,4),
    (7,4);
    
    
INSERT INTO `cliente` (`documento`, `primerNombre`, `segundoNombre`, `primerApellido`, `segundoApellido`, `email`, `tipoDocumento`, `fechaNacimiento`, `estado`, `ciudad`, `telefono1`, `telefono2`, `direccion1`, `direccion2`) VALUES
                                                                                                                                                                                              (564684, 'camila ', 'andrea', 'sanchez', '', 'camila@gmail.com', 1, '2022-03-04', 1, 1, '51814984', '', 'cra 98', ''),
                                                                                                                                                                                              (585818, 'David', 'fernando', 'urrea', 'daza', 'juan@gmail.com', 1, '2022-03-18', 1, 2, '2198259', '', 'cra 98b', ''),
                                                                                                                                                                                              (5184184, 'juan', 'sebastian', 'alarcon', '', 'juan@gmail.com', 2, '2022-03-01', 1, 2, '31182215', '', 'cra 15 ', 'calle 100'),
                                                                                                                                                                                              (5196149, 'katherine', '', 'Cárdenas ', '', 'khaterine@gmail.com', 1, '2003-07-16', 1, 1, '846848812', '', 'cra 125', ''),
                                                                                                                                                                                              (8486414, 'juanes', 'fernando', 'urrea', '', 'daniel@gmail.com', 2, '2022-03-03', 2, 1, '31182215', '', 'cra 200', 'calle 100'),
                                                                                                                                                                                              (51658418, 'oscar', 'gyovanny', 'lopez', '', 'oscar@gmail.com', 1, '2022-03-19', 1, 1, '31528454', '', 'cra 15 ', 'calle 100'),
                                                                                                                                                                                              (1010760139, 'David', 'Santiago', 'caro', 'escobar', 'santiagocaro816@gmail.com', 1, '2004-02-24', 2, 1, '31182215', '5109816', 'cra 200', 'calle 100');