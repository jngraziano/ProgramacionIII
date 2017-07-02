<!DOCTYPE HTML>
<html>
<head>
  <title>HOME</title>
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
         
          <h1><a href="EMP_index.html">ESTACIONAMIENTO - EMPLEADO<span class="logo_colour"></span></a></h1>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
         
          <li class="selected"><a href="./EMP_index.html">Home</a></li>
         <li><a href="operaciones/checkin_vehiculo.php?nombre=<?php echo $_GET['name']; ?>">Ingreso Vehiculo</a></li>
          <li><a href="operaciones/checkout_vehiculo.php?nombre=<?php echo $_GET['name']; ?>">Salida Vehiculo</a></li>
          <li><a href="login.html">LogOFF</a></li>
         
        </ul>
      </div>
    </div>
    <div id="site_content">
     
      <div id="content">
       
        <h1>Bienvenido</h1>
        <p>Esta es la pagina para utilizar el sistema del Estacionamiento.</p><br>
       
      </div>
    </div>
    <div id="footer">
     
    </div>
  </div> 
</body>
</html>
