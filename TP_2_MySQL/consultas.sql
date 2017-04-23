--1. Obtener los detalles completos de todos los productos, ordenados alfabéticamente
SELECT * FROM productos ORDER BY productos.pNombre ASC

--2. Obtener los detalles completos de todos los proveedores de ‘Quilmes’.
SELECT * FROM `proveedores` WHERE Localidad = "QUILMES"
--  +--------+--------+-----------+-----------+
--  | Numero | Nombre | Domicilio | Localidad | 
--  +--------+--------+-----------+-----------+
--  | 100    | Perez  | Peron 876 | Quilmes   | 
--  +--------+--------+-----------+-----------+

-- 3. Obtener todos los envíos en los cuales la cantidad este entre 200 y 300 inclusive.
SELECT * FROM `envios` WHERE Cantidad > 200 and Cantidad <= 300

--  +--------+---------+----------+
--  | Numero | pNumero | Cantidad | 
--  +--------+---------+----------+
--  | 101    | 3       | 255      | 
--  | 102    | 3       | 300      | 
--  +--------+---------+----------+

--4. Obtener la cantidad total de todos los productos enviados.
SELECT SUM(Cantidad)FROM `envios`

--  +---------------+
--  | SUM(Cantidad) | 
--  +---------------+
--  | 3310          | 
--  +---------------+

--5. Mostrar los primeros 3 números de productos que se han enviado.
SELECT pNumero FROM `envios` LIMIT 3;
 
--  +---------+
--  | pNumero | 
--  +---------+
--  | 1       | 
--  | 2       | 
--  | 3       | 
--  +---------+
--6. Mostrar los nombres de proveedores y los nombres de los productos enviados.
SELECT proveedores.nombre, productos.pNombre
FROM `envios`,`proveedores`,`productos`
WHERE envios.Numero = proveedores.Numero
AND envios.Pnumero = productos.pNumero

--  +---------+-------------+
--  | nombre  | pNombre     | 
--  +---------+-------------+
--  | Perez   | Caramelos   | 
--  | Aguirre | Caramelos   | 
--  | Perez   | Cigarrillos | 
--  | Gimenez | Cigarrillos | 
--  | Perez   | Gaseosa     | 
--  | Gimenez | Gaseosa     | 
--  | Aguirre | Gaseosa     | 
--  +---------+-------------+

--7. Indicar el monto (cantidad * precio) de todos los envíos.
--Corrijo error en envios que lo cargue como 255 y era 225
UPDATE envios set Cantidad = 225
WHERE Numero=101 
AND pNumero=3;
SELECT * FROM `envios`

SELECT SUM(envios.Cantidad*productos.Precio) as Monto
FROM `envios`,`productos`
WHERE envios.pNumero=productos.pNumero

--  +-------------------+
--  | Monto             | 
--  +-------------------+
--  | 82883.94917011261 | 
--  +-------------------+

--8. Obtener la cantidad total del producto 1 enviado por el proveedor 102.
SELECT SUM(envios.Cantidad) as CantidadTotal
FROM `envios`
WHERE envios.Numero = 102
AND envios.pNumero = 1

--  +---------------+
--  | CantidadTotal | 
--  +---------------+
--  | 600           | SELECT ENVIOS.pNumero
FROM `envios`,`proveedores`
WHERE envios.Numero = proveedores.Numero 
AND PROVEEDORES.Localidad = "Avellaneda"
--  +---------------+

--9. Obtener todos los números de los productos suministrados por algún proveedor de
--‘Avellaneda’.
SELECT * FROM `proveedores`
SELECT * FROM `envios`
SELECT * FROM `productos`

SELECT ENVIOS.pNumero as NumeroProducto
FROM `envios`,`proveedores`
WHERE envios.Numero = proveedores.Numero 
AND PROVEEDORES.Localidad = "Avellaneda"

--  +----------------+
--  | NumeroProducto | 
--  +----------------+
--  | 2              | 
--  | 3              | 
--  +----------------+

--10. Obtener los domicilios y localidades de los proveedores cuyos nombres contengan la
--letra ‘I’.
SELECT * FROM `proveedores`
SELECT proveedores.Domicilio,proveedores.Localidad
FROM proveedores 
WHERE Nombre LIKE '%I%'

--  +-----------+------------+
--  | Domicilio | Localidad  | 
--  +-----------+------------+
--  | Mitre 750 | Avellaneda | 
--  | Boedo 634 | Bernal     | 
--  +-----------+------------+

--11. Agregar el producto numero 4, llamado ‘Chocolate’, de tamaño chico y con un precio
--de 25,35.
SELECT * FROM `productos`
INSERT INTO productos (pNumero,pNombre,Precio,Tamaño) 
VALUES (4,"Chocolate",25.35,"Chico")
SELECT * FROM `productos`

--  +---------+-------------+--------+---------+
--  | pNumero | pNombre     | Precio | Tamaño  | 
--  +---------+-------------+--------+---------+
--  | 1       | Caramelos   | 1.5    | Chico   | 
--  | 2       | Cigarrillos | 45.89  | Mediano | 
--  | 3       | Gaseosa     | 15.8   | Grande  | 
--  | 4       | Chocolate   | 25.35  | Chico   | 
--  +---------+-------------+--------+---------+

--12. Insertar un nuevo proveedor (únicamente con los campos obligatorios).
SELECT * FROM `proveedores`

INSERT INTO `proveedores`
VALUES ()
-- SELECT * FROM `proveedores`

--  +--------+---------+-----------+------------+
--  | Numero | Nombre  | Domicilio | Localidad  | 
--  +--------+---------+-----------+------------+
--  | 100    | Perez   | Peron 876 | Quilmes    | 
--  | 101    | Gimenez | Mitre 750 | Avellaneda | 
--  | 102    | Aguirre | Boedo 634 | Bernal     | 
--  | 103    | null    | null      | null       | 
--  +--------+---------+-----------+------------+
-- 13. Insertar un nuevo proveedor (107), donde el nombre y la localidad son ‘Rosales’ y ‘La
-- Plata’.
INSERT INTO `proveedores` (Numero,Nombre,Localidad)
VALUES (107,"Rosales","La Plata")
--SELECT * FROM `proveedores`

--  +--------+---------+-----------+------------+
--  | Numero | Nombre  | Domicilio | Localidad  | 
--  +--------+---------+-----------+------------+
--  | 100    | Perez   | Peron 876 | Quilmes    | 
--  | 101    | Gimenez | Mitre 750 | Avellaneda | 
--  | 102    | Aguirre | Boedo 634 | Bernal     | 
--  | 103    | null    | null      | null       | 
--  | 107    | Rosales | null      | La Plata   | 
--  +--------+---------+-----------+------------+

--14. Cambiar los precios de los productos de tamaño ‘grande’ a 97,50.
SELECT * from productos
UPDATE productos
SET Precio=97.50
WHERE productos.Tamaño = "Grande"
SELECT * from productos

--  +---------+-------------+--------+---------+
--  | pNumero | pNombre     | Precio | Tamaño  | 
--  +---------+-------------+--------+---------+
--  | 1       | Caramelos   | 1.5    | Chico   | 
--  | 2       | Cigarrillos | 45.89  | Mediano | 
--  | 3       | Gaseosa     | 97.5   | Grande  | 
--  | 4       | Chocolate   | 25.35  | Chico   | 
--  +---------+-------------+--------+---------+

-- 15. Cambiar el tamaño de ‘Chico’ a ‘Mediano’ de todos los productos cuyas cantidades
-- sean mayores a 300 inclusive.
SELECT * from productos

UPDATE productos, envios --Aca solo le paso las tablas
SET Tamaño="Mediano" --le paso lo que quiero cambiar
WHERE envios.Cantidad>=300 --condicion 1 
AND productos.pNumero = envios.pNumero --condicion 2

SELECT * from productos

--  +---------+-------------+--------+---------+
--  | pNumero | pNombre     | Precio | Tamaño  | 
--  +---------+-------------+--------+---------+
--  | 1       | Caramelos   | 1.5    | Mediano | 
--  | 2       | Cigarrillos | 45.89  | Mediano | 
--  | 3       | Gaseosa     | 97.5   | Mediano | 
--  | 4       | Chocolate   | 25.35  | Chico   | 
--  +---------+-------------+--------+---------+

--16. Eliminar el producto número 1
DELETE FROM `productos` 
WHERE pNumero = 1
SELECT * FROM `productos`

--  +---------+-------------+--------+---------+
--  | pNumero | pNombre     | Precio | Tamaño  | 
--  +---------+-------------+--------+---------+
--  | 2       | Cigarrillos | 45.89  | Mediano | 
--  | 3       | Gaseosa     | 97.5   | Mediano | 
--  | 4       | Chocolate   | 25.35  | Chico   | 
--  +---------+-------------+--------+---------+

--17. Eliminar a todos los proveedores que no han enviado productos.
SELECT * FROM `proveedores`
    DELETE 
    FROM PROVEEDORES 
    WHERE NUMERO IN
        (select * from ( SELECT prov.Numero
          FROM envios as env right join proveedores AS prov
          ON env.Numero = prov.Numero 
          GROUP BY prov.Numero
          HAVING COALESCE(sum(env.Cantidad),0)=0
        )as temp)   

SELECT * FROM PROVEEDORES

--  +--------+---------+-----------+------------+
--  | Numero | Nombre  | Domicilio | Localidad  | 
--  +--------+---------+-----------+------------+
--  | 100    | Perez   | Peron 876 | Quilmes    | 
--  | 101    | Gimenez | Mitre 750 | Avellaneda | 
--  | 102    | Aguirre | Boedo 634 | Bernal     | 
--  +--------+---------+-----------+------------+
