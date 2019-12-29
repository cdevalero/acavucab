INSERT INTO Lugar (nombre,tipo) VALUES 
('Distrito Capital','Estado'),
('Amazonas','Estado'),
('Anzoategui','Estado'),
('Apure','Estado'),
('Aragua','Estado'),
('Barinas','Estado'),
('Bolivar','Estado'),
('Carabobo','Estado'),
('Cojedes','Estado'),
('Delta Amacuro','Estado'),
('Falcon','Estado'),
('Guarico','Estado'),
('Lara','Estado'),
('Merida','Estado'),
('Miranda','Estado'),
('Monagas','Estado'),
('Nueva Esparta','Estado'),
('Portuguesa','Estado'),
('Sucre','Estado'),
('Tachira','Estado'),
('Trujillo','Estado'),
('Yaracuy','Estado'),
('Vargas','Estado'),
('Zulia','Estado');

INSERT INTO Lugar (nombre,tipo,FK_lugar_lugar) VALUES 
('Libertador','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Distrito Capital' AND tipo = 'Estado'
)),
('Altures','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Amazonas' AND tipo = 'Estado'
)),
('Alto Orinoco','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Amazonas' AND tipo = 'Estado'
)),
('Atabapo','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Amazonas' AND tipo = 'Estado'
)),
('Autana','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Amazonas' AND tipo = 'Estado'
)),
('Manapiare','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Amazonas' AND tipo = 'Estado'
)),
('Maroa','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Amazonas' AND tipo = 'Estado'
)),
('Rio Negro','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Amazonas' AND tipo = 'Estado'
)),
('Simon Bolivar','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Anzoategui' AND tipo = 'Estado'
)),
('Anaco','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Anzoategui' AND tipo = 'Estado'
)),
('Aragua','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Anzoategui' AND tipo = 'Estado'
)),
('Diego Bautista Urbaneja','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Anzoategui' AND tipo = 'Estado'
)),
('Fernando de Peñalver','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Anzoategui' AND tipo = 'Estado'
)),
('Francisco del Carmen Carvajal','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Anzoategui' AND tipo = 'Estado'
)),
('Francisco de Miranda','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Anzoategui' AND tipo = 'Estado'
)),
('Guanta','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Anzoategui' AND tipo = 'Estado'
)),
('Independencia','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Anzoategui' AND tipo = 'Estado'
)),
('Jose Gregorio Monagas','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Anzoategui' AND tipo = 'Estado'
)),
('Juan Antonio Sotillo','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Anzoategui' AND tipo = 'Estado'
)),
('Juan Manuel Cajigal','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Anzoategui' AND tipo = 'Estado'
)),
('Libertad','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Anzoategui' AND tipo = 'Estado'
)),
('Manuel Ezequiel Bruzual','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Anzoategui' AND tipo = 'Estado'
)),
('Pedro Maria Freites','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Anzoategui' AND tipo = 'Estado'
)),
('Piritu','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Anzoategui' AND tipo = 'Estado'
)),
('San Jose de Guanipa','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Anzoategui' AND tipo = 'Estado'
)),
('San Juan de Capistrano','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Anzoategui' AND tipo = 'Estado'
)),
('Santa Ana','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Anzoategui' AND tipo = 'Estado'
)),
('Simon Rodriguez','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Anzoategui' AND tipo = 'Estado'
)),
('Sir Arthur Mc Gregor','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Anzoategui' AND tipo = 'Estado'
)),
('San Fernando','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Apure' AND tipo = 'Estado'
)),
('Achaguas','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Apure' AND tipo = 'Estado'
)),
('Biruaca','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Apure' AND tipo = 'Estado'
)),
('Muñoz','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Apure' AND tipo = 'Estado'
)),
('Paez','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Apure' AND tipo = 'Estado'
)),
('Pedro Camejo','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Apure' AND tipo = 'Estado'
)),
('Romulo Gallegos','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Apure' AND tipo = 'Estado'
)),
('Girardot','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Aragua' AND tipo = 'Estado'
)),
('Bolivar','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Aragua' AND tipo = 'Estado'
)),
('Camatagua','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Aragua' AND tipo = 'Estado'
)),
('Francisco Linares Alcantara','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Aragua' AND tipo = 'Estado'
)),
('Jose Angel Lamas','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Aragua' AND tipo = 'Estado'
)),
('Jose Felix Ribas','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Aragua' AND tipo = 'Estado'
)),
('Jose Rafael Revenga','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Aragua' AND tipo = 'Estado'
)),
('Libertador','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Aragua' AND tipo = 'Estado'
)),
('Mario Briceño Iragorry','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Aragua' AND tipo = 'Estado'
)),
('Ocumare','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Aragua' AND tipo = 'Estado'
)),
('San Casimiro','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Aragua' AND tipo = 'Estado'
)),
('San Sebastian','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Aragua' AND tipo = 'Estado'
)),
('Santiago Mariño','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Aragua' AND tipo = 'Estado'
)),
('Santos Michelena','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Aragua' AND tipo = 'Estado'
)),
('Sucre','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Aragua' AND tipo = 'Estado'
)),
('Tovar','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Aragua' AND tipo = 'Estado'
)),
('Urdaneta','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Aragua' AND tipo = 'Estado'
)),
('Zamora','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Aragua' AND tipo = 'Estado'
)),
('Barinas','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Barinas' AND tipo = 'Estado'
)),
('Alberto Arvelo Torrealba','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Barinas' AND tipo = 'Estado'
)),
('Andres Eloy Blanco','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Barinas' AND tipo = 'Estado'
)),
('Antonio Jose de Sucre','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Barinas' AND tipo = 'Estado'
)),
('Arismendi','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Barinas' AND tipo = 'Estado'
)),
('Bolivar','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Barinas' AND tipo = 'Estado'
)),
('Cruz Paredes','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Barinas' AND tipo = 'Estado'
)),
('Ezequiel Zamora','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Barinas' AND tipo = 'Estado'
)),
('Obispos','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Barinas' AND tipo = 'Estado'
)),
('Pedraza','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Barinas' AND tipo = 'Estado'
)),
('Rojas','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Barinas' AND tipo = 'Estado'
)),
('Sosa','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Barinas' AND tipo = 'Estado'
)),
('Heres','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Bolivar' AND tipo = 'Estado'
)),
('Angostura','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Bolivar' AND tipo = 'Estado'
)),
('Caroni','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Bolivar' AND tipo = 'Estado'
)),
('Cedeño','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Bolivar' AND tipo = 'Estado'
)),
('El Callao','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Bolivar' AND tipo = 'Estado'
)),
('Gran Sabana','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Bolivar' AND tipo = 'Estado'
)),
('Padre Pedro Chien','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Bolivar' AND tipo = 'Estado'
)),
('Piar','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Bolivar' AND tipo = 'Estado'
)),
('Roscio','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Bolivar' AND tipo = 'Estado'
)),
('Sifontes','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Bolivar' AND tipo = 'Estado'
)),
('Sucre','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Bolivar' AND tipo = 'Estado'
)),
('Valencia','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Carabobo' AND tipo = 'Estado'
)),
('Bejuma','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Carabobo' AND tipo = 'Estado'
)),
('Carlos Arvelo','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Carabobo' AND tipo = 'Estado'
)),
('Diego Ibarra','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Carabobo' AND tipo = 'Estado'
)),
('Guacara','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Carabobo' AND tipo = 'Estado'
)),
('Juan Jose Mora','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Carabobo' AND tipo = 'Estado'
)),
('Libertador','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Carabobo' AND tipo = 'Estado'
)),
('Los Guayos','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Carabobo' AND tipo = 'Estado'
)),
('Miranda','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Carabobo' AND tipo = 'Estado'
)),
('Montalban','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Carabobo' AND tipo = 'Estado'
)),
('Naguanagua','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Carabobo' AND tipo = 'Estado'
)),
('Puerto Cabello','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Carabobo' AND tipo = 'Estado'
)),
('San Diego','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Carabobo' AND tipo = 'Estado'
)),
('San Joaquin','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Carabobo' AND tipo = 'Estado'
)),
('Ezequiel Zamora','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Cojedes' AND tipo = 'Estado'
)),
('Anzoategui','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Cojedes' AND tipo = 'Estado'
)),
('Girardot','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Cojedes' AND tipo = 'Estado'
)),
('Lima Blanco','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Cojedes' AND tipo = 'Estado'
)),
('Pao de San Juan Bautista','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Cojedes' AND tipo = 'Estado'
)),
('Ricaurte','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Cojedes' AND tipo = 'Estado'
)),
('Romulo Gallegos','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Cojedes' AND tipo = 'Estado'
)),
('Tinaco','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Cojedes' AND tipo = 'Estado'
)),
('Tinaquillo','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Cojedes' AND tipo = 'Estado'
)),
('Tucupita','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Delta Amacuro' AND tipo = 'Estado'
)),
('Antonio Diaz','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Delta Amacuro' AND tipo = 'Estado'
)),
('Casacoima','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Delta Amacuro' AND tipo = 'Estado'
)),
('Pedernales','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Delta Amacuro' AND tipo = 'Estado'
)),
('Miranda','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Falcon' AND tipo = 'Estado'
)),
('Acosta','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Falcon' AND tipo = 'Estado'
)),
('Bolivar','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Falcon' AND tipo = 'Estado'
)),
('Buchivacoa','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Falcon' AND tipo = 'Estado'
)),
('Cacique Manaure','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Falcon' AND tipo = 'Estado'
)),
('Carirubana','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Falcon' AND tipo = 'Estado'
)),
('Colina','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Falcon' AND tipo = 'Estado'
)),
('Dabajuro','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Falcon' AND tipo = 'Estado'
)),
('Democracia','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Falcon' AND tipo = 'Estado'
)),
('Falcon','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Falcon' AND tipo = 'Estado'
)),
('Federacion','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Falcon' AND tipo = 'Estado'
)),
('Jacura','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Falcon' AND tipo = 'Estado'
)),
('Los Taques','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Falcon' AND tipo = 'Estado'
)),
('Mauroa','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Falcon' AND tipo = 'Estado'
)),
('Monseñor Iturriza','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Falcon' AND tipo = 'Estado'
)),
('Palma Sola','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Falcon' AND tipo = 'Estado'
)),
('Petit','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Falcon' AND tipo = 'Estado'
)),
('Piritu','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Falcon' AND tipo = 'Estado'
)),
('San Francisco','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Falcon' AND tipo = 'Estado'
)),
('Silva','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Falcon' AND tipo = 'Estado'
)),
('Sucre','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Falcon' AND tipo = 'Estado'
)),
('Tocopero','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Falcon' AND tipo = 'Estado'
)),
('Union','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Falcon' AND tipo = 'Estado'
)),
('Urumaco','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Falcon' AND tipo = 'Estado'
)),
('Zamora','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Falcon' AND tipo = 'Estado'
)),
('Juan German Roscio','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Guarico' AND tipo = 'Estado'
)),
('Camaguan','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Guarico' AND tipo = 'Estado'
)),
('Chaguaramas','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Guarico' AND tipo = 'Estado'
)),
('El Socorro','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Guarico' AND tipo = 'Estado'
)),
('Infante','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Guarico' AND tipo = 'Estado'
)),
('Las Mercedes','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Guarico' AND tipo = 'Estado'
)),
('Mellado','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Guarico' AND tipo = 'Estado'
)),
('Miranda','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Guarico' AND tipo = 'Estado'
)),
('Monagas','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Guarico' AND tipo = 'Estado'
)),
('Ortiz','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Guarico' AND tipo = 'Estado'
)),
('Ribas','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Guarico' AND tipo = 'Estado'
)),
('San Geronimo de Guayabal','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Guarico' AND tipo = 'Estado'
)),
('San Jose de Guaribe','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Guarico' AND tipo = 'Estado'
)),
('Santa Maria de Ipire','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Guarico' AND tipo = 'Estado'
)),
('Zaraza','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Guarico' AND tipo = 'Estado'
)),
('Iribarren','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Lara' AND tipo = 'Estado'
)),
('Andres Eloy Blanco','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Lara' AND tipo = 'Estado'
)),
('Crespo','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Lara' AND tipo = 'Estado'
)),
('Jimenez','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Lara' AND tipo = 'Estado'
)),
('Moran','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Lara' AND tipo = 'Estado'
)),
('Palavecino','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Lara' AND tipo = 'Estado'
)),
('Simon Planas','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Lara' AND tipo = 'Estado'
)),
('Torres','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Lara' AND tipo = 'Estado'
)),
('Urdaneta','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Lara' AND tipo = 'Estado'
)),
('Libertador','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Merida' AND tipo = 'Estado'
)),
('Alberto Adriani','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Merida' AND tipo = 'Estado'
)),
('Andres Bello','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Merida' AND tipo = 'Estado'
)),
('Antonio Pinto Salinas','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Merida' AND tipo = 'Estado'
)),
('Aricagua','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Merida' AND tipo = 'Estado'
)),
('Arzobispo Chacon','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Merida' AND tipo = 'Estado'
)),
('Campo Elias','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Merida' AND tipo = 'Estado'
)),
('Caracciolo Parra Olmedo','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Merida' AND tipo = 'Estado'
)),
('Cardenal Quintero','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Merida' AND tipo = 'Estado'
)),
('Guaraque','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Merida' AND tipo = 'Estado'
)),
('Julio Cesar Salas','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Merida' AND tipo = 'Estado'
)),
('Justo Briceño','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Merida' AND tipo = 'Estado'
)),
('Miranda','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Merida' AND tipo = 'Estado'
)),
('Obispo Ramos de Lora','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Merida' AND tipo = 'Estado'
)),
('Padre Noguera','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Merida' AND tipo = 'Estado'
)),
('Pueblo Llano','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Merida' AND tipo = 'Estado'
)),
('Rangel','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Merida' AND tipo = 'Estado'
)),
('Rivas Davila','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Merida' AND tipo = 'Estado'
)),
('Santos Marquina','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Merida' AND tipo = 'Estado'
)),
('Sucre','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Merida' AND tipo = 'Estado'
)),
('Tovar','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Merida' AND tipo = 'Estado'
)),
('Tulio Febres Cordero','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Merida' AND tipo = 'Estado'
)),
('Zea','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Merida' AND tipo = 'Estado'
)),
('Guaicaipuro','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Miranda' AND tipo = 'Estado'
)),
('Acevedo','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Miranda' AND tipo = 'Estado'
)),
('Andres Bello','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Miranda' AND tipo = 'Estado'
)),
('Baruta','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Miranda' AND tipo = 'Estado'
)),
('Brion','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Miranda' AND tipo = 'Estado'
)),
('Buroz','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Miranda' AND tipo = 'Estado'
)),
('Carrizal','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Miranda' AND tipo = 'Estado'
)),
('Chacao','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Miranda' AND tipo = 'Estado'
)),
('Cristobal Rojas','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Miranda' AND tipo = 'Estado'
)),
('El Hatillo','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Miranda' AND tipo = 'Estado'
)),
('Independencia','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Miranda' AND tipo = 'Estado'
)),
('Los Salias','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Miranda' AND tipo = 'Estado'
)),
('Paez','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Miranda' AND tipo = 'Estado'
)),
('Paz Castillo','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Miranda' AND tipo = 'Estado'
)),
('Pedro Gual','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Miranda' AND tipo = 'Estado'
)),
('Plaza','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Miranda' AND tipo = 'Estado'
)),
('Simon Bolivar','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Miranda' AND tipo = 'Estado'
)),
('Sucre','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Miranda' AND tipo = 'Estado'
)),
('Tomas Lander','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Miranda' AND tipo = 'Estado'
)),
('Urdaneta','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Miranda' AND tipo = 'Estado'
)),
('Zamora','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Miranda' AND tipo = 'Estado'
)),
('Maturin','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Monagas' AND tipo = 'Estado'
)),
('Acosta','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Monagas' AND tipo = 'Estado'
)),
('Aguasay','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Monagas' AND tipo = 'Estado'
)),
('Bolivar','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Monagas' AND tipo = 'Estado'
)),
('Caripe','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Monagas' AND tipo = 'Estado'
)),
('Cedeño','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Monagas' AND tipo = 'Estado'
)),
('Ezequiel Zamora','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Monagas' AND tipo = 'Estado'
)),
('Libertador','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Monagas' AND tipo = 'Estado'
)),
('Piar','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Monagas' AND tipo = 'Estado'
)),
('Punceres','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Monagas' AND tipo = 'Estado'
)),
('Santa Barbara','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Monagas' AND tipo = 'Estado'
)),
('Sotillo','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Monagas' AND tipo = 'Estado'
)),
('Uracoa','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Monagas' AND tipo = 'Estado'
)),
('Arismendi','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Nueva Esparta' AND tipo = 'Estado'
)),
('Antolin del Campo','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Nueva Esparta' AND tipo = 'Estado'
)),
('Diaz','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Nueva Esparta' AND tipo = 'Estado'
)),
('Garcia','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Nueva Esparta' AND tipo = 'Estado'
)),
('Gomez','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Nueva Esparta' AND tipo = 'Estado'
)),
('Maneiro','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Nueva Esparta' AND tipo = 'Estado'
)),
('Marcano','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Nueva Esparta' AND tipo = 'Estado'
)),
('Mariño','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Nueva Esparta' AND tipo = 'Estado'
)),
('Peninsula de Macanao','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Nueva Esparta' AND tipo = 'Estado'
)),
('Tubores','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Nueva Esparta' AND tipo = 'Estado'
)),
('Villalba','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Nueva Esparta' AND tipo = 'Estado'
)),
('Guanare','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Portuguesa' AND tipo = 'Estado'
)),
('Agua Blanca','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Portuguesa' AND tipo = 'Estado'
)),
('Araure','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Portuguesa' AND tipo = 'Estado'
)),
('Esteller','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Portuguesa' AND tipo = 'Estado'
)),
('Guanarito','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Portuguesa' AND tipo = 'Estado'
)),
('Monseñor Jose Vicente de Unda','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Portuguesa' AND tipo = 'Estado'
)),
('Ospino','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Portuguesa' AND tipo = 'Estado'
)),
('Paez','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Portuguesa' AND tipo = 'Estado'
)),
('Papelon','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Portuguesa' AND tipo = 'Estado'
)),
('San Genaro de Boconoito','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Portuguesa' AND tipo = 'Estado'
)),
('San Rafael de Onoto','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Portuguesa' AND tipo = 'Estado'
)),
('Santa Rosalia','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Portuguesa' AND tipo = 'Estado'
)),
('Sucre','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Portuguesa' AND tipo = 'Estado'
)),
('Turen','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Portuguesa' AND tipo = 'Estado'
)),
('Sucre','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Sucre' AND tipo = 'Estado'
)),
('Andres Eloy Blanco','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Sucre' AND tipo = 'Estado'
)),
('Andres Mata','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Sucre' AND tipo = 'Estado'
)),
('Arismendi','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Sucre' AND tipo = 'Estado'
)),
('Benitez','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Sucre' AND tipo = 'Estado'
)),
('Bermudez','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Sucre' AND tipo = 'Estado'
)),
('Bolivar','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Sucre' AND tipo = 'Estado'
)),
('Cajigal','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Sucre' AND tipo = 'Estado'
)),
('Cruz Salmaron Acosta','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Sucre' AND tipo = 'Estado'
)),
('Libertador','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Sucre' AND tipo = 'Estado'
)),
('Mariño','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Sucre' AND tipo = 'Estado'
)),
('Mejia','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Sucre' AND tipo = 'Estado'
)),
('Montes','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Sucre' AND tipo = 'Estado'
)),
('Ribero','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Sucre' AND tipo = 'Estado'
)),
('Valdez','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Sucre' AND tipo = 'Estado'
)),
('San Cristobal','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Tachira' AND tipo = 'Estado'
)),
('Andres Bello','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Tachira' AND tipo = 'Estado'
)),
('Antonio Romulo Costa','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Tachira' AND tipo = 'Estado'
)),
('Ayacucho','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Tachira' AND tipo = 'Estado'
)),
('Bolivar','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Tachira' AND tipo = 'Estado'
)),
('Cardenas','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Tachira' AND tipo = 'Estado'
)),
('Cordoba','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Tachira' AND tipo = 'Estado'
)),
('Fernandez Feo','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Tachira' AND tipo = 'Estado'
)),
('Francisco de Miranda','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Tachira' AND tipo = 'Estado'
)),
('Garcia de Hevia','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Tachira' AND tipo = 'Estado'
)),
('Guasimos','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Tachira' AND tipo = 'Estado'
)),
('Independencia','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Tachira' AND tipo = 'Estado'
)),
('Jauregui','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Tachira' AND tipo = 'Estado'
)),
('Jose Maria Vargas','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Tachira' AND tipo = 'Estado'
)),
('Junin','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Tachira' AND tipo = 'Estado'
)),
('Libertad','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Tachira' AND tipo = 'Estado'
)),
('Libertador','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Tachira' AND tipo = 'Estado'
)),
('Lobatera','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Tachira' AND tipo = 'Estado'
)),
('Michelena','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Tachira' AND tipo = 'Estado'
)),
('Panamericano','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Tachira' AND tipo = 'Estado'
)),
('Pedro Maria de Ureña','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Tachira' AND tipo = 'Estado'
)),
('Rafael Urdaneta','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Tachira' AND tipo = 'Estado'
)),
('Samuel Dario Maldonado','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Tachira' AND tipo = 'Estado'
)),
('San Judas Tadeo','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Tachira' AND tipo = 'Estado'
)),
('Seboruco','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Tachira' AND tipo = 'Estado'
)),
('Simon Rodriguez','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Tachira' AND tipo = 'Estado'
)),
('Sucre','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Tachira' AND tipo = 'Estado'
)),
('Torbes','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Tachira' AND tipo = 'Estado'
)),
('Uribante','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Tachira' AND tipo = 'Estado'
)),
('Trujillo','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Trujillo' AND tipo = 'Estado'
)),
('Andres Bello','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Trujillo' AND tipo = 'Estado'
)),
('Bocono','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Trujillo' AND tipo = 'Estado'
)),
('Bolivar','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Trujillo' AND tipo = 'Estado'
)),
('Candelaria','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Trujillo' AND tipo = 'Estado'
)),
('Carache','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Trujillo' AND tipo = 'Estado'
)),
('Escuque','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Trujillo' AND tipo = 'Estado'
)),
('J. Felipe Marquez Cañizales','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Trujillo' AND tipo = 'Estado'
)),
('Juan Vicente Campo Elias','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Trujillo' AND tipo = 'Estado'
)),
('La Ceiba','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Trujillo' AND tipo = 'Estado'
)),
('Miranda','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Trujillo' AND tipo = 'Estado'
)),
('Monte Carmelo','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Trujillo' AND tipo = 'Estado'
)),
('Motatan','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Trujillo' AND tipo = 'Estado'
)),
('Pampan','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Trujillo' AND tipo = 'Estado'
)),
('Pampanito','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Trujillo' AND tipo = 'Estado'
)),
('Rafael Rangel','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Trujillo' AND tipo = 'Estado'
)),
('San Rafael de Carvajal','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Trujillo' AND tipo = 'Estado'
)),
('Sucre','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Trujillo' AND tipo = 'Estado'
)),
('Urdaneta','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Trujillo' AND tipo = 'Estado'
)),
('Valera','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Trujillo' AND tipo = 'Estado'
)),
('Vargas','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Vargas' AND tipo = 'Estado'
)),
('San Felipe','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Yaracuy' AND tipo = 'Estado'
)),
('Aristides Bastidas','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Yaracuy' AND tipo = 'Estado'
)),
('Bolivar','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Yaracuy' AND tipo = 'Estado'
)),
('Bruzual','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Yaracuy' AND tipo = 'Estado'
)),
('Cocorote','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Yaracuy' AND tipo = 'Estado'
)),
('Independencia','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Yaracuy' AND tipo = 'Estado'
)),
('Jose Antonio Paez','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Yaracuy' AND tipo = 'Estado'
)),
('La Trinidad','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Yaracuy' AND tipo = 'Estado'
)),
('Manuel Monge','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Yaracuy' AND tipo = 'Estado'
)),
('Nirgua','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Yaracuy' AND tipo = 'Estado'
)),
('Peña','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Yaracuy' AND tipo = 'Estado'
)),
('Sucre','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Yaracuy' AND tipo = 'Estado'
)),
('Urachiche','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Yaracuy' AND tipo = 'Estado'
)),
('Veroes','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Yaracuy' AND tipo = 'Estado'
)),
('Maracaibo','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Zulia' AND tipo = 'Estado'
)),
('','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Zulia' AND tipo = 'Estado'
)),
('Almirante Padilla','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Zulia' AND tipo = 'Estado'
)),
('Baralt','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Zulia' AND tipo = 'Estado'
)),
('Cabimas','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Zulia' AND tipo = 'Estado'
)),
('Catatumbo','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Zulia' AND tipo = 'Estado'
)),
('Colon','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Zulia' AND tipo = 'Estado'
)),
('Francisco Javier Pulgar','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Zulia' AND tipo = 'Estado'
)),
('Guajira','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Zulia' AND tipo = 'Estado'
)),
('Jesus Maria Semprun','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Zulia' AND tipo = 'Estado'
)),
('La Cañada de Urdaneta','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Zulia' AND tipo = 'Estado'
)),
('Lagunillas','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Zulia' AND tipo = 'Estado'
)),
('Lossada','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Zulia' AND tipo = 'Estado'
)),
('Machiques de Perija','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Zulia' AND tipo = 'Estado'
)),
('Mara','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Zulia' AND tipo = 'Estado'
)),
('Miranda','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Zulia' AND tipo = 'Estado'
)),
('Rosario de Perija','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Zulia' AND tipo = 'Estado'
)),
('San Francisco','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Zulia' AND tipo = 'Estado'
)),
('Santa Rita','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Zulia' AND tipo = 'Estado'
)),
('Simon Bolivar','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Zulia' AND tipo = 'Estado'
)),
('Sucre','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Zulia' AND tipo = 'Estado'
)),
('Valmore Rodriguez','Municipio',(
    SELECT codigo_lugar FROM Lugar
    WHERE nombre = 'Zulia' AND tipo = 'Estado'
));

INSERT INTO rol(nombre) VALUES 
('Cliente'),
('Visitante'),
('Administrador'),
('Jefde pasillo'),
('Jefe de almacen');

INSERT INTO privilegio(nombre) VALUES
('Completo'),
('parcial'),
('Compuesto'),
('Unico'),
('multiple');

INSERT INTO actividad(nombre,tipo,fecha_actividad,descripcion) VALUES
('Conversatorio sobre las cervezas','Conversatorio','18/11/2019 02:22:25','Debatir cuales son las cervezas mas vendidas y porque'),
('Feria de cerveza','Venta de cerveza','03/1/2019 19:04:02','Un dia sin igual todas nuestras marcas y tipos de cervezas en un mismo lugar'),
('Cata de cervezas','Cata','26/11/2019 14:15:00','Nuestros maestros cerveceros dando una provadita de lo que se viene'),
('Expo. Ventajas de la cerveza','Exposicion','30/11/2019 16:15:00','Un dia para recordarte lo bueno que es tomarte una cerveza despues del trabajo'),
('Expo. Concientizacion sobre el consumo','Exposicion','30/11/2019 18:15:00','Recordar las consecuencias de tomar grandes cantidades de alcohol');

INSERT INTO estatus(nombre) VALUES
('En camino'),
('Entregado'),
('En Almacen'),
('En area de despacho'),
('Entregado');

INSERT INTO estatusPago(nombre) VALUES
('Pagado'),
('Por cancelar'),
('Devolucion'),
('Pagado'),
('Por cancelar');

INSERT INTO banco(nombre,codigo_cuenta,codigo_cheque) VALUES
('Mercantil',105846410441076,18749790),
('Banesco',100846810441081,15749761),
('Venezuela',104846810441060,14749780),
('Provincial',103846810441053,17749759),
('Mercantil',105846810441067,18749770);

INSERT INTO tasaCambiaria(valor,fecha) VALUES
(47600.00,'13/12/2019'),
(46000.00,'10/12/2019'),
(44000.00,'6/12/2019'),
(42000.00,'25/11/2019'),
(38000.00,'16/11/2019');

INSERT INTO puntoCompra(cantidad) VALUES
(1000000),
(1500000),
(500000),
(200000),
(100000);

INSERT INTO beneficio(nombre,monto) VALUES
('Bono de alimentacion',350000),
('Bono regreso a clase',600000),
('Bono de agunaldo 1',150000),
('Bono de niño jesus',800000),
('Bono de agunaldo 2',150000);

INSERT INTO puntoValor(fecha,valor) VALUES
('13/12/2019',80),
('10/12/2019',10),
('6/12/2019',20),
('25/11/2019',5),
('16/11/2019',30);

INSERT INTO tipoCerveza (nombre, descripcion) VALUES 
('Pilsener','es el tipo de cerveza lager elaborada originalmente en el siglo XIX en la ciudad de Pilsen, al oeste de la región histórica de Bohemia, en el entonces Imperio austrohúngaro (actual República Checa). Están hechas con maltas de Moravia tipo pilsen, agua de baja dureza y sobre todo con lúpulo checo de Zatec (Saaz) que varía del 2 al 5 % de alfa ácidos, y es fermentado con levadura de baja fermentación. Es una bebida de color claro y su contenido de alcohol es medio (de en torno a 3 al 5 %) al igual que su extracto'),
('Indian Pale Ale','Es un tipo de cerveza ale obtenida mediante fermentacion templada empleando principalmente una variedad concreta de malta conocida como malta clara, estas suelen ser cervazas con mucho lupulo y por lo tanto con mucho sabor, algunas de ellas incluso bastante amarga.'),
('American Pale Ale','Es un tipo de cerveza de alta fermentacion con altas cantidades de lupulo americano y no son tan fuertes como las IPA'),
('Blonde o Rubias','Es una cerveza de alta fermentacion muy estandar de origen americano unque se produce en muchas regiones de distintos paises. es considerada una se las mejores para comenzar entre las cervezas artesanales'),
('Burton','Es una cerveza con ingredientes de origen ingles britanico que sorprenden al paladar,puede llegar a poseer diferentes grados de riqueza por su malta, lupulos finales y la tibieza del alcohol '),
('English bitter','Es una cerveza de origen ingles, de alta fermentacion, maltas palidas, es muy reconocida por su agradables sabor y color'),
('Strong pale ale','Son cervezas relativamente nuevas, de respetable intensidad alcoholica, tradicionalmente acondicionadas en botellas conaltos grados de de riquieza en malta, lupulos finales y amargor'),
('Stout','Son cervezas con alto contenido alcoholico desde sus origenes pero por su evolucion en la historia a diminuido su grado de alcohol para hacerla mas comercial'),
('Porter','Son consideradas el padre de las stout y gracias a gran envergadura son consideradas una de las grades clasicas inglesas'),
('Belgas', 'Es muy famosa por tradicion por sus peculiares sabores y muy adictivas, estas se elaboran con fermentacion espontanea por la aparicion de levaduras salvajes que estan presentes en el ambiente donde se reposa'),
('Pilsener','es el tipo de cerveza lager elaborada originalmente en el siglo XIX en la ciudad de Pilsen, al oeste de la región histórica de Bohemia, en el entonces Imperio austrohúngaro (actual República Checa). Están hechas con maltas de Moravia tipo pilsen, agua de baja dureza y sobre todo con lúpulo checo de Zatec (Saaz) que varía del 2 al 5 % de alfa ácidos, y es fermentado con levadura de baja fermentación. Es una bebida de color claro y su contenido de alcohol es medio (de en torno a 3 al 5 %) al igual que su extracto. '),
('Indian Pale Ale','Es un tipo de cerveza ale obtenida mediante fermentacion templada empleando principalmente una variedad concreta de malta conocida como malta clara, estas suelen ser cervazas con mucho lupulo y por lo tanto con mucho sabor, algunas de ellas incluso bastante amarga.'),
('American Pale Ale','Es un tipo de cerveza de alta fermentacion con altas cantidades de lupulo americano y no son tan fuertes como las IPA'),
('Blonde o Rubias','Es una cerveza de alta fermentacion muy estandar de origen americano unque se produce en muchas regiones de distintos paises. es considerada una se las mejores para comenzar entre las cervezas artesanales'),
('Burton','Es una cerveza con ingredientes de origen ingles britanico que sorprenden al paladar,puede llegar a poseer diferentes grados de riqueza por su malta, lupulos finales y la tibieza del alcohol '),
('English bitter','Es una cerveza de origen ingles, de alta fermentacion, maltas palidas, es muy reconocida por su agradables sabor y color'),
('Strong pale ale','Son cervezas relativamente nuevas, de respetable intensidad alcoholica, tradicionalmente acondicionadas en botellas conaltos grados de de riquieza en malta, lupulos finales y amargor'),
('Stout','Son cervezas con alto contenido alcoholico desde sus origenes pero por su evolucion en la historia a diminuido su grado de alcohol para hacerla mas comercial'),
('Porter','Son consideradas el padre de las stout y gracias a gran envergadura son consideradas una de las grades clasicas inglesas'),
('Belgas', 'Es muy famosa por tradicion por sus peculiares sabores y muy adictivas, estas se elaboran con fermentacion espontanea por la aparicion de levaduras salvajes que estan presentes en el ambiente donde se reposa');

INSERT INTO pasoPreparacion(numeropado,descripcionPado,FK_pasopreparacio_tipoCerveza) VALUES
(1,'coloCar en el bol',1),
(2,'Ingresar en el bol y batir',1),
(3,'colocar en una hornilla a fuego lento',1),
(4,'colocar mientras se esta en el fuego y luego de 15 min pagar',1),
(5,'Agregar y dejar reposar',1),
(1,'coloCar en el bol',2),
(2,'Ingresar en el bol y batir',2),
(3,'colocar en una hornilla a fuego lento',2),
(4,'colocar mientras se esta en el fuego y luego de 15 min pagar',2),
(5,'Agregar y dejar reposar',2),
(1,'coloCar en el bol',3),
(2,'Ingresar en el bol y batir',3),
(3,'colocar en una hornilla a fuego lento',3),
(4,'colocar mientras se esta en el fuego y luego de 15 min pagar',3),
(5,'Agregar y dejar reposar',3),
(1,'coloCar en el bol',4),
(2,'Ingresar en el bol y batir',4),
(3,'colocar en una hornilla a fuego lento',4),
(4,'colocar mientras se esta en el fuego y luego de 15 min pagar',4),
(5,'Agregar y dejar reposar',4),
(1,'coloCar en el bol',5),
(2,'Ingresar en el bol y batir',5),
(3,'colocar en una hornilla a fuego lento',5),
(4,'colocar mientras se esta en el fuego y luego de 15 min pagar',5),
(5,'Agregar y dejar reposar',5);

INSERT INTO revista(fecha_publicacion) VALUES
('1/08/2019'),
('1/09/2019'),
('1/10/2019'),
('1/11/2019'),
('1/12/2019');

INSERT INTO efectivo(cantidad) VALUES
(200000),
(100000),
(400000),
(150000),
(49000);

INSERT INTO horario(hora_entrada,hora_salida,dia) VALUES
('08:30:00','20:00:00',1),
('08:30:00','20:00:00',2),
('08:30:00','20:00:00',3),
('08:30:00','20:00:00',4),
('08:30:00','20:00:00',5);

INSERT INTO ingrediente(nombre,tipo) VALUES
('Maltosa enriquesida','Maltas'),
('Esencia de uva','Esencias'),
('cebada ale','Cebadas'),
('Azucar refinada caribu','Azucares'),
('Levadura ale forte','Levaduras');

INSERT INTO tipoCerveza_ingrediente(cantidad,peso,tiempo_agregar,FK_ti_tipoCerveza,FK_ti_ingrediente) VALUES
(100,80,5,1,1),
(50,80,8,2,2),
(10,80,1,3,3),
(20,80,7,4,4),
(300,80,3,5,5);

INSERT INTO monedaExtranjera(tipo,denominacion,numero_billete) VALUES
(1,1,1442110),
(1,1,2542414),
(1,1,2042443),
(1,1,7142897),
(1,1,3548466);

INSERT INTO evento(nombre,fecha_inicio,fecha_fin,FK_evento_lugar) VALUES
('Feria del November Fest','19/11/2019','20/11/2019',25),
('Cusica Fest','14/12/2019','15/12/2019',30),
('Amanecer gaitero 2019','1/12/2019','2/12/2019',40),
('Feria inicio de navidad','3/12/2019','4/12/2019',50),
('Fiesta del espiritu de la navidad','18/11/2019','20/11/2019',29),
('Feria del November Fest','10/11/2019','20/11/2019',62),
('Cusica Fest','14/12/2019','15/12/2019',72),
('Amanecer gaitero 2019','1/12/2019','2/12/2019',80),
('Feria inicio de navidad','3/12/2019','4/12/2019',90),
('Fiesta del espiritu de la navidad','18/11/2019','20/11/2019',100);

INSERT INTO inventarioArticulo(nombre,cantidad,FK_inventarioArticulo_evento) VALUES
('Tovar IPA',100,1),
('Tovar Pilsen',200,2),
('Morena',200,3),
('Tovar Klar',100,4),
('Solera IPA',250,5);

INSERT INTO tarjetaCredito(numero_tarjetaCredito,tipo,FK_tarjetaCredito_banco) VALUES
(50187820007984304,'Visa',1),
(90187820007979100,'Mastercard',2),
(70187820007964616,'Visa',3),
(54757820007986469,'Master Card',4),
(80027820007974067,'Visa',5);

INSERT INTO tarjetaDebito(numero_tarjetaDebito,FK_tarjetaDebito_banco) VALUES
(50187820007984304,1),
(90187820007979100,2),
(70187820007964616,3),
(54757820007986469,4),
(80027820007974067,5);

INSERT INTO entrada(nombre,tipo,FK_entrada_evento,estatus) VALUES
('Feria del November Fest','Feria',1,1000),
('Cusica Fest','concierto',2,2000),
('Amanecer gaitero 2019','concierto',3,3000),
('Feria inicio de navidad','Feria',4,5000),
('Fiesta del espiritu de la navidad','Feria',5,6000);

INSERT INTO cheque(numero_cheque,FK_cheque_banco) VALUES
(794683167552,1),
(826261224162,2),
(313461987314,3),
(649761349249,4),
(679623423491,5);

INSERT INTO transferencia(numero_transferencia,FK_transferencia_banco) VALUES
(154512334,1),
(174512546,2),
(845124341,3),
(064511337,5),
(751512439,4);

INSERT INTO proveedor(razon_social,denominacion_comercial,rif,web,FK_proveedorfisico_lugar,FK_proveedorfiscal_lugar) VALUES
('Hermanos Tovar','Cerveceria Tovar','7A5D21VA0QL63A','',25,28),
('gerencias guardabosques','Cerveceria el guardabosques','7A5D21VA0QL63A','',25,30),
('supremacy venezuela','Bodegon Supremacy','7A5D21VA0QL63A','',25,36),
('social club venezuela','Social Club','7A5D21VA0QL63A','',25,40),
('company venezuela','cerveceria company','7A5D21VA0QL63A','',25,50);

INSERT INTO proveedor_tipoCerveza(FK_ptc_proveedor,FK_ptc_tipocerveza) VALUES
(1,1),
(2,2),
(3,3),
(4,4),
(5,5);

INSERT INTO afiliacionproveedor(fecha_afiliacion,costo_afiliacion,FK_afiliacionProveedor_proveedor) VALUES
('10/10/2019',5500000,1),
('20/9/2019',4500000,2),
('01/8/2019',3500000,3),
('01/7/2019',3500000,4),
('10/6/2019',3500000,5);

INSERT INTO afiliacion_estatusPago(fecha,FK_eap_afiliacionProveedor,FK_aep_estatusPago) VALUES
('10/10/2019',1,1),
('20/9/2019',2,2),
('01/8/2019',3,3),
('01/7/2019',4,4),
('10/6/2019',5,5);

INSERT INTO compra(fecha,total,FK_compra_proveedor) VALUES
('12/12/2019',1000000,1),
('10/12/2019',2000000,2),
('02/12/2019',3000000,3),
('29/11/2019',4000000,4),
('25/11/2019',5000000,5);

INSERT INTO pagoWeb(monto_total,FK_pagoWeb_tarjetaCredito,FK_pagoWeb_tarjetaDebito) VALUES
(1000000,1,null),
(2000000,2,null),
(3000000,null,3),
(100000,4,null),
(400000,null,5);

INSERT INTO usuario(nombre,clave,FK_usuario_rol) VALUES 
('diegoard','Isapreciosa*20',1),
('Morecori','popeyeelmarino24',2),
('Juilmer11','ratoperez64',3),
('zulay66','Gato_volador*10',4),
('ramon30','rmkdfgd*/63',5);

INSERT INTO tienda(rif,nombre,FK_tienda_lugar) VALUES 
('7A5DV21VA0QL63A','Los duros de ACAVUCAV',25),
('G545gs5ad5D493A','Bodegon la pesquera',26),
('5D9W9X5E21VA0QL','Licoreria La Paz',27),
('ASF4A45F4AS5A6C','Supremacy club',28),
('5S5DAS0Y4NQL63A','social media beer',29);

INSERT INTO cargo(nombre) VALUES 
('Jefe de cajeros'),
('Jefe de almacen'),
('cajero'),
('Jefe de pasillo'),
('Supervisor');

INSERT INTO empleado(nombre,apellido,cedula,FK_empleado_usuario,FK_empleado_tienda,FK_empleado_cargo) VALUES 
('Diego','Rojas','26111750',1,1,1),
('Eylin','Diaz','26111750',2,2,2),
('Victoria','Diaz','26111750',3,3,3),
('Salvador','Perez','26111750',4,4,4),
('Alberto','Gonzalez','26111750',5,5,5);

INSERT INTO almacen(total_stock,FK_almacen_empleado) VALUES 
(1000,1),
(2000,1),
(3000,1),
(4000,1),
(5000,1);

INSERT INTO pasillo(numero_pasillo,letra_pasillo,FK_pasillo_almacen) VALUES 
(1,'A',1),
(2,'B',2),
(3,'C',3),
(4,'D',4),
(5,'E',5);

INSERT INTO anaquel(cantidad_productos,FK_anaquel_pasillo)VALUES
(200,1),
(500,2),
(300,3),
(400,4),
(99,5);

INSERT INTO clienteJuridico(rif,denominacion_comercial,numero_carnet,razon_social,capital_disponible,FK_clienteJuridicofisico_lugar,FK_clienteJuridicofiscal_lugar,FK_clienteJuridico_usuario) VALUES
('7A5DV21VA0QL63A','Supermercado los Ancestros',2,'Hermanos Diaz y Gonzales.',10000000,25,25,1),
('G545gs5ad5D493A','compañia Gonazales',2,'Hermanos  Gonzales',50000000,25,25,4),
('5D9W9X5E21VA0QL','licorereria las torres',2,'Hermanos Diaz',90000000,26,26,2),
('ASF4A45F4AS5A6C','licoreria el fogon',2,'aranceles del fogon.',10000000,27,27,3),
('5S5DAS0Y4NQL63A','Bodegon las extrellas',2,'extrellas venezuela.',70000000,28,28,5);

INSERT INTO clienteNatural(rif,numeroCarnet,nombre,apellido,cedula,FK_clienteNatural_lugar,FK_clienteNatural_usuario) VALUES
('5S5DAS0Y4NQL63A',1,'Alejandro','Gonzales',18031742,25,1),
('ASF4A45F4AS5A6C',2,'Miguel','Tovar',20764200,25,2),
('5D9W9X5E21VA0QL',3,'Thayris','Gonzales',10267347,25,3),
('7A5DV21VA0QL63A',4,'Rebeca','Perez',193014,25,4),
('H6F2C44M3Y9L40A',5,'Rabindra','Harichand',18031742,25,5);

INSERT INTO presupuesto(fecha_presupuesto,totalPresupuesto,FK_presupuesto_clienteNatural, FK_presupuesto_clienteJuridico) VALUES
('11/11/2019',1600000,Null,1),
('16/11/2019',800000,1,Null),
('20/11/2019',360000,4,Null),
('28/11/2019',1360000,Null,2),
('04/12/2019',400000,Null,5);

INSERT INTO email(direccion_email,FK_email_proveedor,FK_email_clienteJuridico) VALUES
('diego_ard10000@hotmail.com',1,1),
('elgato_volador96@gmail.com',2,2),
('victoriavdd_01@gmail.com',3,3),
('gerardoparra_96@gmail.com',4,4),
('IsabelMendez89@gmail.com',5,5);

INSERT INTO personaContacto(nombre,apellido,FK_personaContacto_clienteJuridico,FK_personaContacto_proveedor) VALUES
('Isabel','Mendez',1,1),
('Gerardo','Parra',2,2),
('Fabian','Diaz',3,3),
('Samuel','Zapata',4,4),
('Henry','Perez',5,5);

INSERT INTO rol_privilegio(FK_rp_rol,FK_rp_privilegio) VALUES
(1,1),
(2,2),
(3,3),
(4,4),
(5,5);

INSERT INTO tasa_monedaExtranjera(FK_tm_tasaCambiaria,FK_tm_monedaExtranjera) VALUES
(1,1),
(2,2),
(3,3),
(4,4),
(5,5);

INSERT INTO puntoVenta(cantidad,FK_puntoVenta_puntoValor) VALUES
(100000,1),
(600000,2),
(1000000,3),
(900000,4),
(1200000,5);

INSERT INTO pagoWeb_puntoVenta(FK_pwpv_pagoWeb,FK_pwpv_puntoVenta) VALUES
(1,1),
(2,2),
(3,3),
(4,4),
(5,5);

INSERT INTO telefono(numero,cod_area,FK_telefono_proveedor,FK_telefono_clienteNatural,FK_telefono_clienteJuridico) VALUES
(0204089,0412,Null,Null,1),
(4612331,0414,1,Null,Null),
(9642599,0416,Null,1,Null),
(2254784,0424,2,Null,Null),
(7785246,0426,Null,Null,2);

INSERT INTO evento_proveedor(FK_ep_evento,FK_ep_proveedor,FK_ep_actividad) VALUES
(1,1,1),
(2,2,2),
(3,3,3),
(4,4,4),
(5,5,5);

INSERT INTO empleado_beneficio(FK_empben_empleado,FK_empBEN_beneficio) VALUES
(1,1),
(2,2),
(3,3),
(4,4),
(5,5);

INSERT INTO cerveza(nombre,precio,caloria,Volumen,historia,FK_cerveza_anaquel,FK_cerveza_tipoCerveza) VALUES 
('La Loca',90000,200,222,'',1,1),
('Tovar Pilsen',90000,280,222,'',1,1),
('Tovar Klar',110000,300,222,'',1,1),
('solera IPA',80000,300,222,'',1,2),
('Tovar IPA',100000,400,230,'',1,2),
('Mito Brewhouse Lorona',120000,380,222,'',1,2),
('Yanqui Victor Guardabosque',80000,290,230,'',1,3),
('Benitz Pale Ale',120000,200,222,'',1,3),
('Aldarra Mantuana',100000,280,235,'',1,4),
('Cascade Blond',90000,250,222,'',1,4),
('Samuel Adams',15000,400,230,'',1,5),
('Bass',140000,350,222,'',1,5),
('Morena',1350000,380,222,'',1,6),
('LeMosa',100000,300,222,'',1,6),
('Yanqui victor Generalisimo',80000,220,225,'',1,7),
('Barricas Barricada',160000,390,235,'',1,7),
('Kuikas Quirachu',80000,203,222,'',1,8),
('Benitz Stout',180000,308,222,'',1,8);


INSERT INTO detalle_Compra(cantidad,precio,tipo,FK_dc_compra,FK_dc_cerveza) VALUES
(10,500000,'Compra',1,1),
(5,300000,'Compra ',2,2),
(26,1400000,'Compra',3,3),
(32,2200000,'Compra',4,4),
(8,400000,'Compra',5,5);


INSERT INTO inventario_cerveza(cantidad,FK_inverCer_evento,FK_incer_cerveza) VALUES
(1000,1,1),
(2000,2,2),
(4000,3,3),
(8000,4,4),
(10000,5,5);

INSERT INTO caracteristica (color,grado_alcohol,densidad_inicial,densidad_final,ibus,aroma,sabor,historia,FK_caracteristica_tipocerveza) VALUES 
('Dorado claro',4.4,1044,1013,45,'Tiene propiedades distintivas un leve caracter a malta pils y un caracteristico aroma floral o especiado de lupulos nobles','Sabor amargo u fresco, con un acabado a medio-seco, el sabor a malta es moderado y el amargor del lupulo domina el gusto ','Hasta la década de 1840, la mayoría de las cervezas de Bohemia eran de fermentación alta, oscuras y densas.',1),
('Maltoso Oscuro',3.8,1030,1011,25,'aroma a malta aveces con toque caramelizada, por lo que suelen ser entre dulces y moderadamente afrutadas','Sabor amargo','A finales del siglo XVIII, George Hodson, un cervecero londinense, se propuso crear una cerveza capaz dde soportar las condiciones adversas del viaje hacia la India, asi como la temperatura de la entonces colonia britanica,',2),
('dorado palido y ambar oscuro',4.5,1045,1015,45,'aroma a lupulo usualmentede moderado a fuere y con un caracter citrico que es muy comun','sabor usualmente de moderado a alto,comunmente presentando un caracter citrico','Una daptacion americada de las pale ale inglesas, empleando ingredientes nativos que se en cuentra solo en el pais',3),
('amarillo claro y dorado',3.8,1038,1013,28,'aroma maltoso medio bajo, esteres frutadis de bajo a moderado, a veces posee aroma a lupulo','inicialmente sabor a malta dulce, ocasionalmente se perciben esteres frutados sabor a lupulo','Elaborada actualmente en numerosos brewpubs y microcervecerias en EEUU. Existen algunas veriaciones regionales',4),
('dorado profundo',5.5,1080,1022,60,'Esteres frutales con dulzor de malta, a menudo con complejamezcla de frutos secos, caramelos y nueces ','caracter a malta medio alto a menudo con ricos sabores a nuez, caffe o caramelo.','Su origen viene dado 1822 en la colonia inglesa en donde sobresalia por ser menos fuerte y mas dulce que otras cervezas',5),
('Oscuro',3.8,1030,1011,25,'Posee aroma a malta aveces con toque caramelizada, por lo que suelen ser entre dulces y moderadamente afrutadas','Sabor amargo','A finales del siglo XVIII, George Hodson, un cervecero londinense, se propuso crear una cerveza capaz dde soportar las condiciones adversas del viaje hacia la India, asi como la temperatura de la entonces colonia britanica',6),
('marro-rojizo',5.5,1055,1022,60,'Aroma a esteres frutales con dulzor de malta, a menudo con una compleja mezcla de frutos secos, caramelos o nueces','Caracter a malta alto con ricos sabores a nuez, lijeras notas de chocolate y una interesante combinacion de azucares, todo gracias a los avances en la fabricacion de esta cerveza','',7),
('Negro azabache',6,1050,1022,60,'Aroma a malta tostada a menudo tambien se percibe olor a cafe o chocolate oscuro', 'Sabor a malta tostada a menudo tambien se percibe olor a cafe o chocolate oscuro','Caracter a malta alto con ricos sabores a nuez, lijeras notas de chocolate y una interesante combinacion de azucares',8);

INSERT INTO vacacion(fecha_inicio,fecha_fin,FK_vacacion_empleado) VALUES
('10/11/2019','10/12/2019',1),
('01/09/2019','01/10/2019',2),
('25/08/2019','25/09/2019',3),
('15/01/2019','15/02/2019',4),
('08/07/2019','08/08/2019',5);

INSERT INTO venta(numero_facturaVenta,fecha_venta,total,FK_venta_puntoCompra,FK_venta_presupuesto,FK_venta_empleado) VALUES
(0001,'10/10/2019',900000,1,1,1),
(0002,'25/10/2019',1350000,2,2,2),
(0003,'7/11/2019',2200000,3,3,3),
(0004,'30/11/2019',8000000,4,4,4),
(0005,'4/12/2019',20000000,5,5,5);

INSERT INTO estatus_conexe(fecha_hora,FK_ecx_venta,FK_ecx_compra) VALUES
('01/11/2019',1,1),
('09/11/2019',2,2),
('16/11/2019',3,3),
('20/11/2019',4,4),
('27/11/2019',5,5);

INSERT INTO punto_puntoValor(FK_pp_puntoValor,FK_pp_puntoCompra) VALUES
(1,1),
(2,2),
(3,3),
(4,4),
(5,5);

INSERT INTO detalleVenta(cantidad,precio,FK_detalleVenta_venta,FK_detalleVenta_cerveza) VALUES
(10,1000000,1,1),
(15,1500000,2,2),
(20,1200000,3,3),
(100,10000000,4,4),
(200,20000000,5,5);

INSERT INTO empleado_horario(FK_eh_empleado,FK_eh_horario) VALUES
(1,1),
(2,2),
(3,3),
(4,4),
(5,5);

INSERT INTO falta(tipo,fecha,FK_falta_empleado) VALUES
('Entrada Tarde','10/11/2019',1),
('Entrada Tarde','15/11/2019',2),
('Salida Temprano','18/11/2019',3),
('Salida Temprano','01/11/2019',4),
('Entrada Tarde','29/11/2019',5);

INSERT INTO revista_cerveza(porcentaje_descuento,FK_rc_revista,FK_rc_cerveza) VALUES
(5,1,6),
(7,2,7),
(8,3,8),
(9,4,9),
(10,5,10);

INSERT INTO comentario (calificacion,descripcion,FK_comentario_cerveza,Fk_comentario_clientejuridico,Fk_comentario_clientenatural) VALUES 
(9,'Bastante buena me agrada tomar una luego del trabajo',1,null,1),
(10,'LA mejor que existe',2,3,null),
(7,'Exelente',3,null,5),
(3,'Bastante agradable',4,null,3),
(1,'No me gusto es muy fuerte',5,2,null);

INSERT INTO pagoTienda(monto,FK_pagoTienda_efectivo,FK_pagoTienda_tarjetaDebito,FK_pagoTienda_tarjetaCredito,FK_pagoTienda_monedaExtranjera,FK_pagoTienda_cheque,FK_pagoTienda_transferencia,FK_pagoTienda_venta,FK_pagoTienda_puntoVenta) VALUES
(100000,Null,1,Null,Null,Null,Null,Null,1),
(500000,1,Null,Null,Null,Null,Null,Null,2),
(900000,Null,Null,1,Null,Null,Null,Null,3),
(1200000,Null,Null,Null,1,Null,Null,Null,4),
(1800000,Null,Null,Null,Null,1,Null,Null,5);


