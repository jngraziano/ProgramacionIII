<?php 

	require_once("clases/AccesoDatos.php");
	require_once("clases/usuario.php");
	$arrayDeUsuarios=Usuario::TraerTodosLosUsuariosBD();

 ?>


<table class="table"  style=" background-color: beige;">
	<thead>
		<tr>
			<th>Editar</th><th>Borrar</th><th>Mail</th><th>Clave</th><th>Foto</th>
		</tr>
	</thead>
	<tbody>

		<?php 

foreach ($arrayDeUsuarios as $usuario) {
	echo"<tr>
			<td><a onclick='EditarUsuario($usuario->id)' class='btn btn-warning'> <span class='glyphicon glyphicon-pencil'>&nbsp;</span>Editar</a></td>
			<td><a onclick='BorrarUsuario($usuario->id)' class='btn btn-danger'>   <span class='glyphicon glyphicon-trash'>&nbsp;</span>  Borrar</a></td>
			<td>$usuario->mail</td>
			<td>$usuario->clave</td>
			<td><img src='".$usuario->archivo."' width='50px' height='50px'/></td>
		</tr>   ";
}
		 ?>
	</tbody>
</table>