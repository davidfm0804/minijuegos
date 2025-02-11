CREATE TABLE ambito(
    idAmbito tinyint NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(100) NOT NULL UNIQUE
);
CREATE TABLE minijuegos(
    idMinijuego smallint unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(150)NOT NULL,
    idAmbito tinyint NULL,
    urljuego varchar(60),
    constraint fk_ambito FOREIGN KEY(idAmbito)REFERENCES ambito(idAmbito)
);


--INSERCION MASIVA

INSERT INTO ambito (nombre) VALUES ('Inclusión social');
INSERT INTO ambito (nombre) VALUES ('Participacion democratica');
INSERT INTO ambito (nombre) VALUES ('Equidad de Genero');

INSERT minijuegos(nombre,idAmbito,urljuego) VALUES ('Viaje Entre Culturas',2,'https://25.2daw.esvirgua.com/01Juego/index.php');
INSERT minijuegos(nombre,idAmbito,urljuego) VALUES ('Culturizame',2,'urljuego2');

INSERT minijuegos(nombre,idAmbito,urljuego) VALUES ('Poltica Didactica',3,'urljuego1');
INSERT minijuegos(nombre,idAmbito,urljuego) VALUES ('Aprende sobre Participacion democratica',3,'urljuego2');

INSERT minijuegos(nombre,idAmbito,urljuego) VALUES ('Respeta Jugando',1,'urljuego1');
INSERT minijuegos(nombre,idAmbito,urljuego) VALUES ('Aprende de Equidad de Genero',1,'urljuego2');
 