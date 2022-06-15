-- DROP TABLE USUARIOS if not exits;

CREATE TABLE USUARIOS (
 EMAIL  VARCHAR(100) NOT NULL,
 NOMBRE VARCHAR(100) NOT NULL,
 FECHA_NACIMIENTO DATE NOT NULL,
 APELLIDO VARCHAR(100),
 GANADAS INT(4),
 PERDIDAS INT(4),
 PRIMARY KEY (EMAIL));

INSERT INTO USUARIOS 
	VALUES ("USU1@GMAIL.COM", "Antonio", "2000-01-30", "Garcia", NULL, NULL);
INSERT INTO USUARIOS 
	VALUES ("USU2@GMAIL.COM", "Sara", "2000-02-20", "Moreno", NULL, NULL);

CREATE TABLE PREGUNTAS(
	PREGUNTA VARCHAR(120),
	RESPUESTA1 VARCHAR(120), 
	RESPUESTA2 VARCHAR(120), 
	RESPUESTA3 VARCHAR(120),
	SOLUCION INTEGER(4)
	CODIGO INTEGER(4));

INSERT INTO PREGUNTAS 
	VALUES ("Como se llama el escritor de El Senor de los Anillos", "JK Rowling", "JRR Tolkien", "George RR Martin", 2, 1);
INSERT INTO PREGUNTAS 
	VALUES ("Cual es el nombre de Hobbit de la criatura Gollum", "Smeagol", "Frodo", "Merry", 1, 2);
INSERT INTO PREGUNTAS 
	VALUES ("Que personaje humano vive la primera historia de amor entre humano y elfa", "Aragorn", "Legolas", "Beren", 3, 3);
INSERT INTO PREGUNTAS 
	VALUES ("En que puerta se puede leer el siguiente rotulo: “Di amigo y entra” ", "En Bolson Cerrado", "La Puerta de Bree", "La Puerta de Moria", 3, 4);
INSERT INTO PREGUNTAS 
	VALUES ("Cual es la criatura que lleva mas tiempo viviendo en la Tierra Media?", "Gandalf", "Tom Bombadil", "El Balrog", 2, 5);
INSERT INTO PREGUNTAS 
	VALUES ("Cual de estas armas no fue encontrada en la cueva de los trolls de las Montanas Nubladas?", "Orcrist", "Dardo", "Angrist", 3, 6);
INSERT INTO PREGUNTAS 
	VALUES ("Como le dicen los elfos a los hobbits", "Los Periannath", "Los Onodrim", "Los Mellon", 1, 7);

