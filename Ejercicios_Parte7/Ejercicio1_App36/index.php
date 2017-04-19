<html>
<!--Aplicación Nº 36 (Generar Tabla de Imágnes)
Generar una tabla que posea fotos en un tamaño de 100x100 píxeles y que al pulsar se
muestre la foto en su tamaño original en una página distinta (agregarle un link para poder
volver a la página de inicio)-->

<body>
    <table border = "5" bordercolor="blue" align="center">
   <?php
        $arrayarchivo=scandir("Fotos/");
        foreach ($arrayarchivo as $key) {

           
           if($key!=="." && $key!=="..")
             {    
             echo "<a href=Fotos/$key target='_blank'><img src=Fotos/$key width=100 border=3 height=100 HSPACE=10 VSPACE=10></img></a>";
             echo "<a href=index.php><br></a>";
             }
        }
       

    ?>

    </table>

    
</body>








</html>