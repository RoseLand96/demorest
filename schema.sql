USE gi7dwhbm867q5tbw;

CREATE TABLE  contactos (
  id_contacto int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nombre varchar(400) NOT NULL,
  telefono varchar(100) NOT NULL,
  email varchar(100) NOT NULL
);

INSERT INTO contactos (nombre,telefono,email) VALUES ("Dejah Toris","123456","dejah@barson.mar");
INSERT INTO contactos (nombre,telefono,email) VALUES ("John Carter","123456","john@barson.mar");
INSERT INTO contactos (nombre,telefono,email) VALUES ("Carthoris","4568","carthoris@barson.mar");