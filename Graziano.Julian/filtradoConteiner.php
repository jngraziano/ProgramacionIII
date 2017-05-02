<?php require_once("clases/conteiner.php");

?>
<html>
<head>
	<title>LISTADO en DB</title>

	<meta charset="UTF-8">
		
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">

</head>
<body>
    <a class="btn btn-info" href="index.html">Menu Principal</a>

	<div class="container">
		<div class="page-header">
			<h1>LISTADO de Conteiners en BaseDatos</h1>      
		</div>
		<div class="CajaInicio animated bounceInRight">
			<h1>Listado de Conteiners</h1>

<?php 
	$ArrayDeProductos = conteiner::TraerTodosLosConteinerBD(); 
echo "<table class='table'>
		<thead>
			<tr>
				<th>  DESCRIPCION </th>
				<th>  PAIS     </th>
				<th>  FOTO       </th>
				<th>  ACCION     </th>
			</tr> 
		</thead>";   	
	foreach ($ArrayDeProductos as $contei){
		echo " 	<tr>
					<td>".$contei->GetDescripcion()."</td>
					<td>".$contei->GetPais()."</td>
					<td><img src='archivos/".$contei->GetFoto()."' width='100px' height='100px'/></td>
					   <td>
                                
								<form method=post name=eliminar1  action=BorrarenBD.php>
								<input type=submit name=botonEliminar1 class=MiBotonUTN value=Eliminar />
								<input type=hidden name=codBarra value=".$contei->GetNumero()." />
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