<html>
<head>
	<title>ALTA de PRODUCTOS</title>
	  
		<meta charset="UTF-8">

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<a class="btn btn-info" href="indexArchivo.html">Menu Archivos</a>
	<a class="btn btn-info"  href="index.html">Menu Principal</a>
<?php     
	require_once("clases\producto.php");
?>
	<div class="container">
	
		<div class="page-header">
			<h1>PRODUCTOS</h1>      
		</div>
		<div class="CajaInicio animated bounceInRight">
			<h1>ALTA-LISTADO - con archivos</h1>

			<!--GuardarenARCHIVO-->
			<form id="FormIngreso" method="post" enctype="multipart/form-data" action="guardarARCHIVO.php" >
				<input type="text" name="codBarra" placeholder="Ingrese c&oacute;digo de barras"  />
				<input type="text" name="nombre" placeholder="Ingrese nombre"  />
				<input type="file" name="archivo" /> 

				<input type="submit" class="MiBotonUTN" name="guardar" />
			</form>
			<?PHP
                require_once("clases\producto.php");
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