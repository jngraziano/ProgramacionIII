<!DOCTYPE HTML>
<html>

<head>
  <title>INGRESO</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
  <style>
  body {
          /*Imagen de fondo:*/
         background-image: url("https://i2.wp.com/www.roshfrans.com/wp-content/uploads/2016/06/Estacionamiento.png?fit=1400%2C600");
  } 
  
  </style>
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
         
           <h1><a href="..\EMP_index.php">INGRESO de VEHICULO<span class="logo_colour"></span></a></h1>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          
          <li class="selected"><a href="..\EMP_index.php">Home</a></li>
         <li><a href="checkin_vehiculo.php">INGRESO Vehiculo</a></li>
          <li><a href="checkout_vehiculo.php">Salida Vehiculo</a></li>
          <li><a href="..\login.html">LogOFF</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div id="content">

        <h1>Entrada de Vehiculo</h1>
        <p>Esta es la pagina para realizar la entrada de un vehiculo al sistema.</p><br>

     <form id="FormIngreso" method="post" >
    <h3>Datos vehiculo</h3>
      
      <input placeholder="Ingrese Patente" type="text" tabindex="1" id="patenteid" name="patente"  autofocus> 
      <input placeholder="Ingrese Color" type="text" tabindex="2" id="colorid" name="color" autofocus>
      <input placeholder="Ingrese Marca" type="text" tabindex="3" id="marcaid" name="marca"  autofocus>
      <br><br>
      <button name="submit" type="Aceptar1" value="validar"  onclick="AccionesIngresoVehic('<?php echo $_GET['nombre']; ?>')" >Aceptar</button>
     
        </ul>
      </div>
    </div>
    <div id="footer">
      <!--Espacio-->
    </div>
  </div>
   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

   
    <script src="../js/funciones.js"></script>
    <script src="../js/index.js"></script>
</body>
</html>