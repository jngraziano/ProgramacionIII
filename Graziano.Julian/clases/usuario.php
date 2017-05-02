<?php
//Incluimos la clase AccesoDatos.php que no estaba. La copiamos desde la Carpeta Clases de Clase06
require_once "AccesoDatos.php";
class Usuario
{
//--------------------------------------------------------------------------------//
//--ATRIBUTOS
	private $nombre;
	private $correo;
	private $edad;
	private $clave;
//--------------------------------------------------------------------------------//

//--------------------------------------------------------------------------------//
//--GETTERS Y SETTERS
	public function GetNombre()
	{
		return $this->nombre;
	}
	public function GetCorreo()
	{
		return $this->correo;
	}
	public function GetEdad()
	{
		return $this->edad;
	}
	public function GetClave()
	{
		return $this->clave;
	}

	public function SetNombre($valor)
	{
		$this->nombre = $valor;
	}
	public function SetCorreo($valor)
	{
		$this->correo = $valor;
	}
	public function SetEdad($valor)
	{
		$this->edad = $valor;
	}
	public function SetClave($valor)
	{
		$this->clave = $valor;
	}

//--------------------------------------------------------------------------------//
//--CONSTRUCTOR
	public function __construct($nombre=NULL, $correo=NULL, $edad=NULL,$clave=NULL)
	{
		if($nombre !== NULL && $correo !== NULL && $edad !== NULL && $clave !== NULL){
			$this->nombre = $nombre;
			$this->correo = $correo;
			$this->edad = $edad;
			$this->clave = $clave;
		}
	}

//--------------------------------------------------------------------------------//
//--TOSTRING	
  	public function ToString()
	{
	  	return $this->nombre." - ".$this->correo." - ".$this->edad." - ".$this->clave."\r\n";
	}
//--------------------------------------------------------------------------------//

//--------------------------------------------------------------------------------//
//--METODOS DE CLASE
	public static function Guardar($obj)
	{
		$resultado = FALSE;
		
		//ABRO EL ARCHIVO
		$ar = fopen("archivos/usuario.txt", "a");
		
		//ESCRIBO EN EL ARCHIVO
		$cant = fwrite($ar, $obj->ToString());
		
		if($cant > 0)
		{
			$resultado = TRUE;			
		}
		//CIERRO EL ARCHIVO
		fclose($ar);
		
		return $resultado;
	}
	public static function TraerTodosLosUsuarios()
	{

		$ListaDeProductosLeidos = array();

		//leo todos los productos del archivo
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

	//FALTA MODIFICAR PARA BD ESTO
	public static function TraerTodosLosProductosBD()
	{
		//http://localhost:8080/ProgramacionIII/Clase06/# aca tenemos los distintos tipos de fetch
		$arrayRetorno = array();
		//Este Metodo esta creado por nosotros este.
		$objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
		$consulta = $objetoAcceso->RetornarConsulta('SELECT codigo_barra as codBarra, nombre, path_foto as pathFoto FROM `producto`');
		$consulta->Execute();//Es para ejecutar la consulta.
		// $datos =$consulta->fetchall();
		// $datos_2 = $consulta->fetch(PDO::FETCH_LAZY);
		// $datos_3 = $consulta -> fetchObject("producto");
		// var_dump($consulta);
		//	var_dump($datos);
		// var_dump($datos_2);
		 while ($fila = $consulta->fetchObject("producto")) //devuelve true o false depende si encuentra o no el objeto. 
		 //Sale cuando es false claramente.
		 {//FETCHOBJECT -> RETORNA UN OBJETO DE UNA CALSE DADA
              // var_dump($fila);
			 array_push($arrayRetorno,$fila);
		 }
		 
		 return $arrayRetorno;
		// var_dump($datos_3);
	}
//--------------------------------------------------------------------------------//
}