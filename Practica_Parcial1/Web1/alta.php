<!DOCTYPE HTML>
<html>

<head>
  <title>Sistema de Vehiculos</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>
  <?php     
	//  require_once("clases\vehiculo.php");
  ?>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">Sistema de Vehículos<span class="logo_colour"></span></a></h1>
          <h2>Pagina de cambio de informacion.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="index.html">Home</a></li>
          <li><a href="alta.php">Alta</a></li>
          <li><a href="modificacion.php">Modificar</a></li>
          <li><a href="eliminacion.php">Eliminar</a></li>
          <li><a href="listado.php">Listar</a></li>
          <li><a href="contact.html">Contacto</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
        <h3>Ultimas Modificaciones</h3>
        <h4>Update v1</h4>
        <h5>27 de Abril,2017</h5>
        <p>Creacion de la pagina.<br></p>
      
        <h3>Links utiles</h3>
        <ul>
         <li><a href="https://www.github.com/tanogrosso10">Mi Github</a></li>
          <li><a href="https://www.w3schools.com/">W3school</a></li>
          <li><a href="http://php.net/">Php.net</a></li>
          <li><a href="http://www.sistemas-utnfra.com.ar/#/home">UTN Fra</a></li>
        </ul>
        <h3>Search</h3>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <h1>Alta de Vehículos</h1>
        <p>Esta es la pagina para agregar Vehículos al sistema.</p><br>
        <!--<p style="color:blue">prueba </p>-->
     <form id="FormIngreso" method="post" action="administracion.php" >
    <h4>Agregar un Vehiculo</h4>
      
      <input placeholder="Ingrese Marca" type="text" tabindex="1" name="Marca1" required autofocus>
   
      <input placeholder="Ingrese Modelo" type="text" tabindex="2" name="Modelo1" required><br>
   
      <input placeholder="Ingrese Tipo" type="text" tabindex="3" name="Tipo1" required>
    
      <input placeholder="Ingrese Año" type="text" tabindex="4" name="Año1" required><br>

      <input placeholder="Ingrese Precio" type="text" tabindex="5" name="Precio1" required><br><br>
    
      <button name="submit" type="Aceptar1" id="contact-submit" data-submit="...Cargando">Aceptar</button>
     
        </ul>
      </div>
    </div>
    <div id="footer">
      Este template fue adquirido en: Copyright &copy; black_white | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">Free CSS Templates</a>
    </div>
  </div>
</body>
</html>
  <title>Alta de Vehiculos</title>
<div class="container">  
 
    <p class="copyright">Designed by <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib</a></p>
  </form>
</div>
</html>
