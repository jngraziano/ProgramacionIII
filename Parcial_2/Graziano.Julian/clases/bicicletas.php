<?php
class bicicletas
{
	// public $id;
 	public $color;
  	public $rodado;
  	public $marca;
	// public $archivo;
	//--------------------------------------------------------------------------------//
//--CONSTRUCTOR
	public function __construct($color=NULL, $rodado=NULL, $marca=NULL)
	{
		if($color !== NULL && $rodado !== NULL && $marca!=NULL){
			$this->color = $color;
			$this->rodado = $rodado;
			$this->marca = $marca;
		}
	}



/////////////////ARRANCA LOS METODOS////////////////////////
// //ABM
	public static function Alta($color,$rodado,$marca)
	{

		$arraobjeto = array();
		$objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
		$consulta = $objetoAcceso->RetornarConsulta('INSERT INTO `bicicletas`(`color`, `rodado`, `marca`) VALUES (:color, :rodado, :marca)');
		$consulta->bindValue("color",$color);
		$consulta->bindValue("rodado",$rodado);
		$consulta->bindValue("marca",$marca);
		$consulta->Execute();
		if($consulta != NULL)
		{
			$retorno="Se agrego la bicicleta";
		}
		else
		{
			$retorno="error";
		}
		return $retorno;
	}
	public static function TraerTodasLasBicicletas()
	{
		$arrayRetorno = array();
		$objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
		$consulta = $objetoAcceso->RetornarConsulta('SELECT * FROM bicicletas');
		$consulta->Execute();
		while ($fila = $consulta->fetchObject("bicicletas"))
		{
			 array_push($arrayRetorno,$fila);
		 }
		 
		 return $arrayRetorno;
	}
	public static function TraerBicicletaPorColor($color)
	{
		$arrayRetorno = array();
		$objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
		$consulta = $objetoAcceso->RetornarConsulta('SELECT * FROM bicicletas WHERE color=:color');
		$consulta->bindParam("color",$color);
		$consulta->Execute();
		while ($fila = $consulta->fetchObject("bicicletas"))
		{
			 array_push($arrayRetorno,$fila);
		 }
		 
		 return $arrayRetorno;
		 	
	}
	public static function TraerBicicletaPorID($id) 
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("SELECT * FROM bicicletas WHERE id=:id");
			$consulta->bindParam("id",$id);
			$consulta->execute();
			$bicibuscada= $consulta->fetchObject('bicicletas');
			return $bicibuscada;				

			
	}
	public static function Baja($id)
	{
		$objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
		$consulta = $objetoAcceso->RetornarConsulta('DELETE FROM `bicicletas` WHERE `id`=:id');
		$consulta->bindParam("id",$id);
		$consulta->execute();
		if($consulta != NULL)
		{
			$retorno="Se borro la bicicleta";
		}
		else
		{
			$retorno="error";
		}
		return $retorno;
	}
	public static function Modificacion($color,$rodado,$marca,$id)
	{
		$objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
		$consulta = $objetoAcceso->RetornarConsulta('UPDATE `bicicletas` SET `color`=:color,`rodado`=:rodado,`marca`=:marca WHERE `id`=:id');
		$consulta->bindValue("id",$id);
		$consulta->bindValue("color",$color);
		$consulta->bindValue("rodado",$rodado);
		$consulta->bindValue("marca",$marca);
		
		$consulta->Execute();
		if($consulta != NULL)
		{
			$retorno="Se modificó la bicicleta";
		}
		else
		{
			$retorno="error";
		}
		return $retorno;
	}

}