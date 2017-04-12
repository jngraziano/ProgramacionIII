<html>


    <body>
        <br><p style="color:black;"><b><u>Imagenes almacenadas:</b></u></p>
         <?php 
         
        $rutaarray=scandir("Fotos/");
        
      
       foreach ($rutaarray as $key)
       	{
           
             if($key!=="." && $key!=="..")
             {
             echo "<img src=Fotos/$key width=850 height=567 HSPACE=10 VSPACE=10></img>";
             }
        }
        
        ?>
              

    
    
    
    </body>




</html>