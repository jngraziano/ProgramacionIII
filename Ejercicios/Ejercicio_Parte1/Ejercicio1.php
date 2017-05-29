<?php
//ruta donde crear los archivos C:\xampp\htdocs
    //$variable;

    //echo "hola";
    //$nombre="JULIAN<BR>GRANA<BR><BR>";
    //echo $nombre;

    //echo "hola" . $nombre;
    //var_dump($nombre); //sirve para mostrar objetos/strings

    //EJERCICIO 1 guia
    $aux=0;
    $acumulador=0;
    $contador=0;
    for($i=1;$acumulador<1000;$i++)
    {
        
        $acumulador+=$i;
        $contador++;
        if($acumulador>1000)
        {$aux=$acumulador-$i;}
        
    }
    
    echo "Numero total: $aux <BR>";
    echo "Numero de veces: $contador";



?>