<?php

class usuario
{
 	public $nombre;
  	public $mail;
  	public $clave;
	public $tipo;

//--------------------------------------------------------------------------------//
//--CONSTRUCTOR
	public function __construct($nombre=NULL, $mail=NULL, $clave=NULL, $tipo=NULL)
	{
		if($nombre !== NULL && $mail !== NULL && $clave!=NULL && $tipo !== NULL){
			$this->mail = $mail;
			$this->nombre = $nombre;
			$this->clave = $clave;
			$this->tipo = $tipo;
		}
	}

//--METODOS DE CLASE

	

	//TRAER BD
	// public static function TraerTodosLosusuarios()
	// {
	// 	$arrayRetorno = array();
	// 	$objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
	// 	$consulta = $objetoAcceso->RetornarConsulta('SELECT nombre, `password`, tipo, turno, estado  FROM `usuarios`');
	// 	$consulta->Execute();
	// 	while ($fila = $consulta->fetchObject("Usuario"))
	// 	{
	// 		 array_push($arrayRetorno,$fila);
	// 	 }
		 
	// 	 return $arrayRetorno;
	// }

	// public static function TraerUnUsuario($aux)
    // {
    //     $objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
    //     $consulta = $objetoAcceso->RetornarConsulta('SELECT nombre, `password`, tipo, turno, estado FROM usuarios WHERE nombre=:nombre');
    //     $consulta->bindParam("nombre", $aux);
    //     $consulta->execute();
    //     $uno = $consulta->fetchAll();
    //      if($uno == NULL)
    //       {
    //           $uno=0;
    //           return $uno;
    //       }
	// 	  else 
	// 	  {
	// 			return $uno;
	// 	  }
        
    // }



	
//////////////////////////////FUNC/////////////
	
	//VALIDAR
	public static function ValidarUsuario($mail,$clave,$nombre)
	{
		$objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
            $consulta = $objetoAcceso->RetornarConsulta('SELECT mail, clave, nombre, tipo FROM `usuario` WHERE mail=:mail and nombre=:nombre and clave=:clave');
				
            $consulta->bindParam("mail",$mail);
			$consulta->bindParam("nombre",$nombre);
            $consulta->bindParam("clave",$clave);
			
			$consulta->execute();

			$resultado = $consulta->fetchAll();
			
			
			$retorno = array();

			if($resultado==NULL)
			{
				$retorno['respuesta']="No existe el usuario";

			}
			else if($resultado==TRUE)
					{
						$retorno['respuesta']= "OK";
						$retorno['perfil']=$resultado[0]['tipo'];
					}
			
			return $retorno;
	}
}
?>