<?PHP
    require_once "clases/usuario.php";
    $arrayArchivo = Usuario::TraerTodosLosUsuarios();
    $i=0;
    $existeUsuario = 0;
    foreach ($arrayArchivo as $key ) {
        if($_POST["correo2"] == $key->GetCorreo() ||
            $_POST["clave2"] == $key->GetClave())
        {
            $existeUsuario = 1;
            break;
        }   
        $i++;
    }
    if($existeUsuario == 1)
    {
        echo '<script type="text/javascript">alert("Se encontro usuario");</script>';
        echo '<meta http-equiv="refresh" content="0; url=http://localhost:8080/ProgramacionIII/Parcial_1/Graziano.Julian/Listado.php" />';

    }
    else
    {
        echo '<script type="text/javascript">alert("No se encontro el usuario");</script>';
        echo '<meta http-equiv="refresh" content="0; url=http://localhost:8080/ProgramacionIII/Parcial_1/Graziano.Julian/ChequearUsuario.html" />';

    }
?>