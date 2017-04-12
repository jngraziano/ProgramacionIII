<html>


    <body>
         <?php 
        $rutaarray=scandir("Fotos/");
        
      
       foreach ($rutaarray as $key)
       	{
           
             if($key!=="." && $key!=="..")
             {
            echo "<img src=Fotos/$key> </img>";
             }
        }
        
        ?>
              

    
    
    
    </body>




</html>