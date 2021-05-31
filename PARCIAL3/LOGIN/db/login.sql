/*PHPMYADMIN*/

CREATE DATABASE login;

USE login;

CREATE TABLE login (
  id int(11) NOT NULL AUTO_INCREMENT,
  correo varchar(123) NOT NULL,
  usuario varchar(100) NOT NULL,
  clave varchar(200) NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO login (id, correo, usuario, clave) VALUES
(8, "carloseugenio024@gmail.com", "carlos", "0d13d94bcc0546592826bd4be5e523b78bed80514ebde37ef857df92ad9bf68c3a17f99e504eab26c320e6eab7d2fd44228ddc911c5af1daba9ee6618356c780");

