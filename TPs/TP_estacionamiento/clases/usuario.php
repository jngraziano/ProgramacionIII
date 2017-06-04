<?php
require "AccesoDatos.php";
class Usuario
{
//--------------------------------------------------------------------------------//
//--ATRIBUTOS
    private $NOMBRE;
 	private $TURNO;
    private $PASSWORD;
	private $TIPO;
    private $ESTADO;
//--------------------------------------------------------------------------------//

//--------------------------------------------------------------------------------//
//--GETTERS Y SETTERS
    public function GetNombre()
    {
        return $this->NOMBRE;
    }
	public function GetTurno()
	{
		return $this->TURNO;
	}
	public function GetPassword()
	{
		return $this->PASSWORD;
	}
	public function GetTipo()
	{
		return $this->TIPO;
	}
    public function GetEstado()
	{
		return $this->ESTADO;
	}
    public function SetNombre($valor)
	{
		$this->NOMBRE = $valor;
	}

	public function SetTurno($valor)
	{
		$this->TURNO = $valor;
	}
	public function SetPassword($valor)
	{
		$this->PASSWORD = $valor;
	}
    public function SetTipo($valor)
	{
		$this->TIPO = $valor;
	}
     public function SetEstado($valor)
	{
		$this->ESTADO = $valor;
	}
//--------------------------------------------------------------------------------//
//--CONSTRUCTOR
	public function __construct($NOMBRE=NULL,$TURNO=NULL, $PASSWORD=NULL,$TIPO=NULL,$ESTADO=NULL)
	{
		if($NOMBRE=NULL && $TURNO !== NULL && $TIPO !== NULL && $ESTADO !==NULL && $HABILITADA !==NULL){
			$this->NOMBRE = $NOMBRE;
            $this->TURNO = $TURNO;
			$this->PASSWORD = $PASSWORD;
			$this->TIPO = $TIPO;
            $this->ESTADO = $ESTADO;
		}
	}

//--------------------------------------------------------------------------------//
//--TOSTRING	
  	public function ToString()
	{
	  	return $this->NOMBRE." - ".$this->TURNO." - ".$this->PASSWORD" - ".$this->TIPO." - ".$this->ESTADO."\r\n";
	}
//--------------------------------------------------------------------------------//

//--------------------------------------------------------------------------------//
//--METODOS DE CLASE
	
	public static function Alta($obj)
	{
		$objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
		$consulta = $objetoAcceso->RetornarConsulta('INSERT INTO `usuario`(`NOMBRE`, `TURNO`, `PASSWORD`, `TIPO`,`ESTADO`) VALUES ($obj[0],$obj[1],$obj[2],$obj[3],"DISPONIBLE")');
		$consulta->Execute();
	}

	public static function Baja($aux)
	{
		$objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
		$consulta = $objetoAcceso->RetornarConsulta('UPDATE `usuario` SET `ESTADO`=["NO DISPONIBLE"] WHERE NOMBRE=:nombre');
		$consulta->bindvalue(':nombre',$aux, PDO::PARAM_STRING);
		$consulta->Execute();
	}
    
	public static function Modificacion($obj)
	{
		$objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
		$consulta = $objetoAcceso->RetornarConsulta('UPDATE `usuario` SET `NOMBRE`=["$obj[0]"] TURNO=["$obj[1]"] `PASSWORD`=["obj[2]"] TIPO=["obj[3]"] ESTADO=["$obj[4]"] WHERE NOMBRE=:nombre');
		$consulta->bindvalue(':nombre',$aux, PDO::PARAM_INT);//ARREGLAAR DOBLE NROCOCHERA
		$consulta->Execute();


	}

	public static function TraerTodosLosUsuarios()
	{
		
		$arrayRetorno = array();
		$objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
		$consulta = $objetoAcceso->RetornarConsulta('SELECT NOMBRE, TURNO, TIPO, ESTADO FROM `usuarios`');
		$consulta->Execute();
		 while ($fila = $consulta->fetchObject("Usuario"))
		 {
			 array_push($arrayRetorno,$fila);
		 }
		 
		 return $arrayRetorno;
	}
	public static function TraerUnUsuario($aux)
	{
		$objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
        $consulta = $objetoAcceso->RetornarConsulta('SELECT NOMBRE, TURNO, TIPO, ESTADO FROM usuarios WHERE NOMBRE=:nombre');
        $consulta->bindParam("nombre", $aux);
        $consulta->execute();
        $uno = $consulta->fetchAll();
         if($uno == NULL)
          {
              $uno="No existe";
              return $uno;
          }
        return $uno;
	}
//--------------------------------------------------------------------------------//
}