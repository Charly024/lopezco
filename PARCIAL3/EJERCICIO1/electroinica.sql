/*PHPMYADMIN*/
CREATE DATABASE electronica;

USE electronica;

CREATE TABLE componentes (
  id int(11) NOT NULL,
  codigo varchar(6) NOT NULL,
  componente varchar(30) NOT NULL,
  voltaje float NOT NULL,
  amperaje float NOT NULL,
  material varchar(25) NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO componentes (id, codigo, componente, voltaje, amperaje, material) VALUES
(1, "1N4007", "DIODO RECTIFICADOR", 100, 1, "SEMICONDUCTOR"),
(2, "1N4742", "DIODO ZENER", 12, 0.0038, "SEMICONDUCTOR"),
(3, "GEN", "CAPACITOR", 10, 0.5, "SEREMICA"),
(4, "UA741", "AMPLIFICADOR OPERACIONAL", 40, 2, "SEMICONDUCTOR"),
(5, "SN74L", "PORT AND", 5.25, 0.008, "CONDUCTOR"),
(6, "TM1444", "TIP120", 5, 5, "SEMEICONDUCTOR");
