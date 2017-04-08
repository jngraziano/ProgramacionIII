<?php

/**
 * 
 */
class Container// extends AnotherClass
{
    public $numero=0;
    public $producto;
    public $nombrearchivo="";
    
    function __construct($num,$nomarc)
    {
        $this->numero=$num;
        $this->nombrearchivo=$nomarc;
        $this->producto = array();
        
    }
     public function GetNombreArchivo()
    {
        return $this->nombrearchivo;
    }

    public function AgregarProducto($producto)
    {
        array_push($this->producto,$producto);
    }
    public function GuardarProductos()
    {
        $ListadoDeProductos=fopen("ListadoDeProductos.txt","w");

        foreach ($this->producto as $key) {
            fwrite($ListadoDeProductos,$key->ToString());
        }
        fclose($ListadoDeProductos);
        
    }
    public function LeerDeArchivo($archivo)
    {
        $archivoleido=fopen($archivo,"r");

        while (!feof($archivoleido))//Sirve para ver que no sea el final de la linea
        {
            $renglon=fgets($archivoleido);//devuelve un renglon
            //fijarse de usar fgets o fread
            $arrayaux=explode(";",$renglon);
             array_push($this->producto,new Producto($arrayaux[0],$arrayaux[1],$arrayaux[2]));        
            
         }
         var_dump($this->producto);

    }
     //1-En la clase container, crear el metodo leerdearchivo
    //que lea de un archivo, un listado de producto cuyos
    //atributos estan separados por ;
    //luego cargar el array de producto con los objetos creados
    //a partir de los datos del archivo
}






?>