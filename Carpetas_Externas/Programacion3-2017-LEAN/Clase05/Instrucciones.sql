INSERT INTO `tablauno`(`DESCRIPCION`, `CODIGO`, `PRECIO`) VALUES ("PRODUCTO1",333,10)

INSERT INTO `tablauno`(`DESCRIPCION`, `CODIGO`, `PRECIO`) VALUES 
("PRODUCTO5",350,1001),("PRODUCTO6",351,1202),("PRODUCTO7",352,1)
("PRODUCTO8",398,10010),("PRODUCTO9",357,1240),("PRODUCTO10",354,200);

INSERT INTO `tablauno`(`DESCRIPCION`, `CODIGO`, `PRECIO`) VALUES 
"PRODUCTO5",350,1001),("PRODUCTO6",351,1202),("PRODUCTO7",352,1), 
("PRODUCTO8",398,10010),("PRODUCTO9",357,1240),("PRODUCTO10",354,200)

UPDATE `tablauno` SET `DESCRIPCION`="barato" WHERE PRECIO<=10

SELECT CODIGO AS MC
FROM `tablauno` WHERE 1

INSERT INTO `localidad`(`DESCRIPCION`) VALUES ('QUILMES'),('LOMAS'),('AVELLANEDA')

INSERT INTO `usuario`(`NOMBRE`, `APELLIDO`, `ID_LOC`) VALUES 
('USUARIO1','APELLIDO1',1),
('USUARIO2','APELLIDO2',1),
('USUARIO3','APELLIDO3',2),
('USUARIO4','APELLIDO4',2),
('USUARIO5','APELLIDO5',3);

SELECT 	U.NOMBRE	 	AS USER, 
	 	L.DESCRIPCION 	AS LOCALIDAD
FROM `usuario` as U, 
	 `localidad` as L
WHERE U.ID_LOC=L.ID

