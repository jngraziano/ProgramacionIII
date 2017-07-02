
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ingreso.css" rel="stylesheet">

    <div class="container">

      <form class="form-ingreso" onsubmit="GuardarUsuario();return false" enctype="multipart/form-data" id="formcd">
        <h2 class="form-ingreso-heading">Alta de Usuario</h2>
        <!--<label for="cantante" value="natalia" class="sr-only">Cantante</label>-->
        <input type="text"  minlength="6"  id="mail" title="Se necesita un mail" class="form-control" placeholder="Mail" required="" autofocus="">
        <label for="clave" value="Una Clave" class="sr-only">Clave</label>
        <input type="text"  minlength="6"  id="clave" title="Se necesita una clave"  class="form-control" placeholder="Clave" required="" autofocus="">
       
       <input readonly   type="hidden"    id="idCD" class="form-control" >
       <input type="file" id="foto" name="foto" >

        <button  class="btn btn-lg btn-success btn-block" type="submit"><span class="glyphicon glyphicon-floppy-save">&nbsp;&nbsp;</span>Guardar </button>
        
      </form>

    </div> <!-- /container -->
    
  
