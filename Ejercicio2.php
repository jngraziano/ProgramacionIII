<?php

    echo "FECHA ACTUAL -->  " . date("y/m/d");
    echo "<BR><BR>";
    
    if(date("m") == "12" || date("m") == "01" || date("m") == "02" || date("m") == "03")
    {echo "Es verano.";}
    if(date("m") == "04" || date ("m") == "05" || date("m") == "06")
    {echo "Es Otoño.";}
    if(date("m") == "07" || date ("m") == "08" || date("m") == "09")
    {echo "Es Primavera.";}
    if(date("m") == "10" || date ("m") == "11")
    {echo "Es Invierno.";}

    echo "<BR><BR>El ejercicio esta echo como un nene de 10 años";

?>