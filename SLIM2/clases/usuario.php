<?php

require_once "AccesoDatos.php";
class Usuario
{
//--------------------------------------------------------------------------------//
//--ATRIBUTOS
	private $id;
	private $mail;
	private $estado;
	private $clave;
//--------------------------------------------------------------------------------//

//--------------------------------------------------------------------------------//
//--GETTERS Y SETTERS
	public function GetID()
	{
		return $this->id;
	}
	public function GetMail()
	{
		return $this->mail;
	}
	public function GetEstado()
	{
		return $this->estado;
	}
	public function GetClave()
	{
		return $this->clave;
	}

	public function SetMail($valor)
	{
		$this->mail = $valor;
	}
	public function SetEstado($valor)
	{
		$this->estado = $valor;
	}
	public function SetClave($valor)
	{
		$this->clave = $valor;
	}

//--------------------------------------------------------------------------------//
//--CONSTRUCTOR
	public function __construct($mail=NULL, $estado=NULL,$clave=NULL)
	{
		if($mail !== NULL && $estado !== NULL && $clave !== NULL){
			$this->mail = $mail;
			$this->estado = $estado;
			$this->clave = $clave;
		}
	}

//--------------------------------------------------------------------------------//
//--TOSTRING	
  	public function ToString()
	{
	  	return $this->id." - ".$this->mail." - ".$this->estado." - ".$this->clave."\r\n";
	}
//--------------------------------------------------------------------------------//

//--------------------------------------------------------------------------------//
//--METODOS DE CLASE
	public static function Guardar($obj)
	{
		$resultado = FALSE;
		
		
		$ar = fopen("archivos/usuario.txt", "a");
	
		$cant = fwrite($ar, $obj->ToString());
		
		if($cant > 0)
		{
			$resultado = TRUE;			
		}
		
		fclose($ar);
		
		return $resultado;
	}
	public static function TraerTodosLosUsuariosArchivo()
	{

		$ListaDeProductosLeidos = array();

		
		$archivo=fopen("archivos/usuarios.txt", "r");
		
		while(!feof($archivo))
		{
			$archAux = fgets($archivo);
			$usuarios = explode(" - ", $archAux);
			$usuarios[0] = trim($usuarios[0]);
			if($usuarios[0] != ""){
				$ListaDeUsuariosLeidos[] = new Usuario($usuarios[0], $usuarios[1],$usuarios[2],$usuarios[3]);
			}
		}
		fclose($archivo);
		
		return $ListaDeUsuariosLeidos;
		
	}

public static function TraerTodosLosUsuariosBD()
	{
		//http://localhost:8080/ProgramacionIII/Clase06/# aca tenemos los distintos tipos de fetch
		$arrayRetorno = array();
		//Este Metodo esta creado por nosotros este.
		$objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
		$consulta = $objetoAcceso->RetornarConsulta('SELECT * FROM usuario');
		$consulta->Execute();//Es para ejecutar la consulta.
		// $datos =$consulta->fetchall();
		// $datos_2 = $consulta->fetch(PDO::FETCH_LAZY);
		// $datos_3 = $consulta -> fetchObject("producto");
		// var_dump($consulta);
		//	var_dump($datos);
		// var_dump($datos_2);
		 while ($fila = $consulta->fetchObject("Usuario")) //devuelve true o false depende si encuentra o no el objeto. 
		 //Sale cuando es false claramente.
		 {//FETCHOBJECT -> RETORNA UN OBJETO DE UNA CALSE DADA
              // var_dump($fila);
			 array_push($arrayRetorno,$fila);
		 }
		 
		 return $arrayRetorno;
		// var_dump($datos_3);
	}
public static function TraerUnUsuarioBD($aux)
    {
        $objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
        $consulta = $objetoAcceso->RetornarConsulta('SELECT ID, CLAVE, MAIL, ESTADO FROM usuario WHERE id=:id');
        $consulta->bindParam("id", $aux);
        $consulta->execute();
        $uno = $consulta->fetchAll();
         if($uno == NULL)
          {
              $uno="no existe";
              return $uno;
          }
        return $uno;
    }
	
//--------------------------------------------------------------------------------//
}