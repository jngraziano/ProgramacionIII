<?PHP
    require_once "clases/AccesoDatos.php";
    $objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
    $consulta = $objetoAcceso->RetornarConsulta('UPDATE producto SET codigo_barra= :codBarra, nombre= :nombre, path_foto = :pathFoto WHERE codigo_barra=:codAnterior');
    $consulta->bindvalue(":codAnterior", $_POST["codAnterior"],PDO::PARAM_INT);
    $consulta->bindvalue(':codBarra',$_POST["codBarra"], PDO::PARAM_INT);
    $consulta->bindvalue(':nombre',$_POST["nombre"], PDO::PARAM_STR);
    $consulta->bindvalue(':pathFoto',$_FILES["archivo"]["name"], PDO::PARAM_STR);
    $consulta->execute();

    //alerta de javascript para mostrar el pop app de que se actualizó.    
    echo '<script type="text/javascript">alert("Se actualizo 1 articulo");</script>';
    //meta sirve para refrescar la pagina directamente a donde vos quieras
    echo '<meta http-equiv="refresh" content="0; url=http://localhost/ProgramacionIII/Clase06(Carpeta_abm)/modificacionenBD.php" />'
?>