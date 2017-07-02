

function Mostrar(queMostrar)
{
		//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:queMostrar}
	});
	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);
		$("#informe").html("Correcto!!!");	
	});
	funcionAjax.fail(function(retorno){
		$("#principal").html(":(");
		$("#informe").html(retorno.responseText);	
	});
	funcionAjax.always(function(retorno){
		//alert("siempre "+retorno.statusText);

	});
}

function MostarLogin()
{
		
	var funcionAjax=$.ajax({
<<<<<<< HEAD:PracticaParcial(Dami)/js/funcionesAjax.js
		url:"http://localhost/ProgramacionIII/PracticaParcial(dami)/mostrarlogin",
=======
		url:"http://localhost/ProgramacionIII/SLIM2/index.php/mostrarlogin",
>>>>>>> 87c616424b7913353c0707cb9a9e05643be4fc35:SLIM2/js/funcionesAjax.js
		type:"post"
		//data:{queHacer:"MostarLogin"}
	});
	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);
		$("#informe").html("Form Login");	
	});
	funcionAjax.fail(function(retorno){
		$("#botonesABM").html("volvio por el fail");
		$("#informe").html(retorno.responseText);	
	});
	funcionAjax.always(function(retorno){
		//alert("siempre "+retorno.statusText);

	});
}

function MostrarAltaUsuarios()
{		
	
	
	var funcionAjax=$.ajax({
<<<<<<< HEAD:PracticaParcial(Dami)/js/funcionesAjax.js
		url:"http://localhost/ProgramacionIII/PracticaParcial(dami)/mostraralta",
=======
		url:"http://localhost/ProgramacionIII/SLIM2/index.php/mostraralta",
>>>>>>> 87c616424b7913353c0707cb9a9e05643be4fc35:SLIM2/js/funcionesAjax.js
		type:"post",
		//data:{queHacer:"que hace"}
		
	});
	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);
		//$("#informe").html("Correcto BOTONES!!!");	
	});
}

function MostrarGrilla()
{		
	
	//alert("llegue");
	var funcionAjax=$.ajax({
<<<<<<< HEAD:PracticaParcial(Dami)/js/funcionesAjax.js
		url:"http://localhost/ProgramacionIII/PracticaParcial(dami)/mostrargrilla",
=======
		url:"http://localhost/ProgramacionIII/SLIM2/index.php/mostrargrilla",
>>>>>>> 87c616424b7913353c0707cb9a9e05643be4fc35:SLIM2/js/funcionesAjax.js
		type:"post",
		data:{queHacer:"que hace"}
	});
	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);
		//$("#informe").html("Correcto BOTONES!!!");	
	});
}

function MostrarModificacion()
{		
	
	//alert("llegue");
	var funcionAjax=$.ajax({
<<<<<<< HEAD:PracticaParcial(Dami)/js/funcionesAjax.js
		url:"http://localhost/ProgramacionIII/PracticaParcial(dami)/mostrarmodificacion",
=======
		url:"http://localhost/ProgramacionIII/Parcial_2/Prog3Ejemplo/EjemploCDSlim/index.php/mostrarmodificacion",
>>>>>>> 87c616424b7913353c0707cb9a9e05643be4fc35:SLIM2/js/funcionesAjax.js
		type:"post",
		//data:{queHacer:"que hace"}
	});
	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);
		//$("#informe").html("Correcto BOTONES!!!");	
	});
}








function validarLogin()
{
		var varUsuario=$("#correo").val();
		var varClave=$("#clave").val();
		var recordar=$("#recordarme").is(':checked');
		
//$("#informe").html("<img src='imagenes/ajax-loader.gif' style='width: 30px;'/>");
	

	var funcionAjax=$.ajax({
<<<<<<< HEAD:PracticaParcial(Dami)/js/funcionesAjax.js
		url:"http://localhost/ProgramacionIII/PracticaParcial(dami)/validarusuario",
=======
		url:"http://localhost/ProgramacionIII/Parcial_2/Prog3Ejemplo/EjemploCDSlim/index.php/validarusuario",
>>>>>>> 87c616424b7913353c0707cb9a9e05643be4fc35:SLIM2/js/funcionesAjax.js
		type:"post",
		data:{
			/*Estos son los parametros que manda al slim
			(data sirve para esto)
			comolovaAtomarelSlim : eldatoquelepaso
			*/
			recordarme:recordar,
			usuario:varUsuario,
			clave:varClave
		}
	});


	funcionAjax.done(function(retorno){
			
			if(retorno=="ingreso"){	
				MostarLogin();

				$("#BotonLogin").html("Ir a salir<br>-Sesión-");
				$("#BotonLogin").addClass("btn btn-danger");				
				$("#usuario").val("Conectado");
				//$("#informe").html("Bienvenido.. los botones de Alta y Grilla se encuentran operativos");
					}else
						{
							alert("Usuario o clave incorrecta");
							$("#informe").html("usuario o clave incorrecta");	
							$("#formLogin").addClass("animated bounceInLeft");
						}
	});
	funcionAjax.fail(function(retorno){

		/*
		asigna a los id botonesABM y principal del index.html
		una carita triste para el botonesABM y el error que le 
		arroja la BD a informe
		*/
		$("#botonesABM").html(":(");
		$("#informe").html(retorno.responseText);	
	});
	
}

function deslogear()
{	
	var funcionAjax=$.ajax({
<<<<<<< HEAD:PracticaParcial(Dami)/js/funcionesAjax.js
		url:"http://localhost/ProgramacionIII/PracticaParcial(dami)/desloguear",
=======
		url:"http://localhost/ProgramacionIII/Parcial_2/Prog3Ejemplo/EjemploCDSlim/index.php/desloguear",
>>>>>>> 87c616424b7913353c0707cb9a9e05643be4fc35:SLIM2/js/funcionesAjax.js
		type:"post"		
	});
	funcionAjax.done(function(retorno){
			//MostarBotones();
			MostarLogin();
			$("#usuario").val("Sin usuario.");
			$("#BotonLogin").html("Login<br>-Sesión-");
			$("#BotonLogin").removeClass("btn-danger");
			$("#BotonLogin").addClass("btn-primary");
			
	});
}