<?php
	require_once('clases/producto.php');
?>
<html>
<head>
	<title>GRILLA en Archivo</title>

	<meta charset="UTF-8">
		
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">

</head>
<body>
	<a class="btn btn-info" href="indexArchivo.html">Menu principal</a>

	<div class="container">
		<div class="page-header">
			<h1>GRILLA de Productos en Archivo</h1>      
		</div>
		<div class="CajaInicio animated bounceInRight">
			<h1>Listado de PRODUCTOS</h1>

<?php 
$ArrayDeProductos = Producto::TraerTodosLosProductos(); //MODIFIQUE ESTE POR BD AGREGADO AL FINAL LLAMANDO AL NUEVO METODO
echo "<table class='table'>
		<thead>
			<tr>
				<th>  COD. BARRA </th>
				<th>  NOMBRE     </th>
				<th>  FOTO       </th>
				<th>  ACCION     </th>
			</tr> 
		</thead>";   	
	foreach ($ArrayDeProductos as $prod){
		echo " 	<tr>
					<td>".$prod->GetCodBarra()."</td>
					<td>".$prod->GetNombre()."</td>
					<td><img src='archivos/".$prod->GetPathFoto()."' width='100px' height='100px'/></td>
					   <td>
                                <form method=post name=modificarProducto action= modificacionenArchivo.php>
                                <input type=submit name=botonModificacionA class=MiBotonUTN value=Modificar />
                                <input type=hidden name=codBarra value=".$prod->GetCodBarra()." />
								</form>
								<form method=post name=eliminar1  action=borrarenArchivo.php>
								<input type=submit name=botonEliminarA class=MiBotonUTN value=Eliminar />
								<input type=hidden name=codBarra value=".$prod->GetCodBarra()." />
								</form>
                   
					</td>
				</tr>";
	}	
echo "</table>";		
?>
		</div>
	</div>
</body>
</html>