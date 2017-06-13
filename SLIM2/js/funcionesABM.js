


function BorrarUsuario(idParametro)
{
	//alert("Estoy en Borrar cd y quiero borrar el cd "+idParametro);

		var funcionAjax=$.ajax({
		url:"http://localhost/ProgramacionIII/SLIM2/index.php/borrar",
		type:"delete",
		data:{
			//queHacer:"BorrarCD",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		MostrarGrilla();
		$("#informe").html("cantidad de eliminados "+ retorno);	
		
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
}

function EditarUsuario(idParametro)
{
	//alert("entro al ajax de modificar CD");

	var funcionAjax=$.ajax({
		url:"http://localhost/ProgramacionIII/SLIM2/index.php/modificar",
		type:"post",
		data:{
			//queHacer:"TraerCD",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		
		$("#principal").html(retorno);
		
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
	
	


}

function GuardarUsuario()
{

	//alert("estoy en ajax de guardarCD");
	
	
	var inputFileImage = document.getElementById("foto");
	var file = inputFileImage.files[0];
	var datosDelForm = new FormData("formUsuario");
	//console.info(file);

	
	var mail=$("#mail").val();
	var id=$("#idCD").val();
	var clave=$("#clave").val();

	datosDelForm.append("foto",file);
	datosDelForm.append("mail",mail);
	datosDelForm.append("id",id);
	datosDelForm.append("clave",clave);		
		

	var funcionAjax=$.ajax({
		url:"http://localhost/ProgramacionIII/SLIM2/index.php/usuario",
		type:"post",
		data:datosDelForm,
		cache: false,
    	contentType: false,
    	processData: false

	}).then(function(respuesta){
		alert("Agregado correctamente");
		
		//$("#informe").html("cantidad de agregados "+ respuesta);	
		
		$("#mail").val("");
		$("#clave").val("");
		$("#foto").val("");

	},function(error){

			$("#informe").html(error.responseText);
			console.info("error", error);

	});
	
}

function UpdateUsuario()
{

	
	
	
	var inputFileImage = document.getElementById("foto");
	var file = inputFileImage.files[0];
	var datosDelForm = new FormData("formUsuario");
	//console.info(file);

	
	var mail=$("#mail").val();
	var id=$("#idCD").val();
	var clave=$("#clave").val();

	datosDelForm.append("foto",file);
	datosDelForm.append("mail",mail);
	datosDelForm.append("id",id);
	datosDelForm.append("clave",clave);	
		
		

	var funcionAjax=$.ajax({
		url:"http://localhost/ProgramacionIII/SLIM2/index.php/update",
		type:"post",
		data:datosDelForm,
		cache: false,
    	contentType: false,
    	processData: false

	}).then(function(respuesta){
		alert("Modificado correctamente");
		
		//$("#informe").html("cantidad de agregados "+ respuesta);	
		
		$("#mail").val("");
		$("#clave").val("");
		$("#foto").val("");

	},function(error){

			$("#informe").html(error.responseText);
			console.info("error", error);

	});
	
}