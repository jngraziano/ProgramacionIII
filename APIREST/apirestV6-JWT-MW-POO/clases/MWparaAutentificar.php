<?php

require_once "AutentificadorJWT.php";
class MWparaAutentificar
{
 /**
   * @api {any} /MWparaAutenticar/  Verificar Usuario
   * @apiVersion 0.1.0
   * @apiName VerificarUsuario
   * @apiGroup MIDDLEWARE
   * @apiDescription  Por medio de este MiddleWare verifico las credeciales antes de ingresar al correspondiente metodo 
   *
   * @apiParam {ServerRequestInterface} request  El objeto REQUEST.
 * @apiParam {ResponseInterface} response El objeto RESPONSE.
 * @apiParam {Callable} next  The next middleware callable.
   *
   * @apiExample Como usarlo:
   *    ->add(\MWparaAutenticar::class . ':VerificarUsuario')
   */
	public function VerificarUsuario($request, $response, $next) {
         
		$objDelaRespuesta= new stdclass();
		$objDelaRespuesta->respuesta="";
	   
		if($request->isGet())
		{
		// $response->getBody()->write('<p>NO necesita credenciales para los get </p>');
		 $response = $next($request, $response);
		}
		else
		{
			$response->getBody()->write('<p>verifico credenciales</p>');

			// perfil=Profesor (GET, POST)
			//$datos = array('usuario' => 'rogelio@agua.com','perfil' => 'profe', 'alias' => "PinkBoy");
			$ArrayDeParametros = $request->getParsedBody();
			$mail= $ArrayDeParametros['mail'];
			$password= $ArrayDeParametros['password'];
			
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select tipo from usuarios where mail=:mail AND password=:password");
			$consulta->bindValue(':mail', $mail, PDO::PARAM_STR);
			$consulta->bindValue(':password', $password, PDO::PARAM_STR);

			$consulta->execute();
			$resultado= $consulta->fetchObject();
			if($resultado == NULL)
			{
				 echo "No se encuentra usuario.";
				
			}	
			else{
				
			//	$arrayConToken = $request->getHeader('token');
		     	//$token= AutentificadorJWT::CrearToken($mail);
				
				//$token= AutentificadorJWT::CrearToken();
				 $token="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0OTc1Njc5NjUsImV4cCI6MTQ5NzU2NDM2NSwiYXVkIjoiNGQ5ODU5ZGU4MjY4N2Y0YzEyMDg5NzY5MzQ2OGFhNzkyYTYxNTMwYSIsImRhdGEiOnsidXN1YXJpbyI6InJvZ2VsaW9AYWd1YS5jb20iLCJwZXJmaWwiOiJBZG1pbmlzdHJhZG9yIiwiYWxpYXMiOiJQaW5rQm95In0sImFwcCI6IkFQSSBSRVNUIENEIDIwMTcifQ.GSpkrzIp2UbJWNfC1brUF_O4h8PyqykmW18vte1bhMw";
				
				//header($token);
					// var_dump($token);
					//echo "token nulo";
				}
					
					echo "veiricar";
					$tokenVer = AutentificadorJWT::VerificarToken($token);
					var_dump($tokenVer);
				//}
				//$arrayConToken = $request->getHeader('token');
				
				// $token2=$arrayConToken[0];
				
				// var_dump($token);
				////////////////VALIDACION TOKEN////////////////
				// try 
				// 	{
				// 		//$token="";
				// 		AutentificadorJWT::verificarToken($token);
				// 		$objDelaRespuesta->esValido=true;      
				// 	}
				// catch (Exception $e) {      
				// 	//guardar en un log
				// 		$objDelaRespuesta->excepcion=$e->getMessage();
				// 		$objDelaRespuesta->esValido=false;     
				// 	}




			}
			//token vencido
			//$token="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0OTc1Njc5NjUsImV4cCI6MTQ5NzU2NDM2NSwiYXVkIjoiNGQ5ODU5ZGU4MjY4N2Y0YzEyMDg5NzY5MzQ2OGFhNzkyYTYxNTMwYSIsImRhdGEiOnsidXN1YXJpbyI6InJvZ2VsaW9AYWd1YS5jb20iLCJwZXJmaWwiOiJBZG1pbmlzdHJhZG9yIiwiYWxpYXMiOiJQaW5rQm95In0sImFwcCI6IkFQSSBSRVNUIENEIDIwMTcifQ.GSpkrzIp2UbJWNfC1brUF_O4h8PyqykmW18vte1bhMw";

			//token error
			//$token="octavioAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE0OTc1Njc5NjUsImV4cCI6MTQ5NzU2NDM2NSwiYXVkIjoiNGQ5ODU5ZGU4MjY4N2Y0YzEyMDg5NzY5MzQ2OGFhNzkyYTYxNTMwYSIsImRhdGEiOnsidXN1YXJpbyI6InJvZ2VsaW9AYWd1YS5jb20iLCJwZXJmaWwiOiJBZG1pbmlzdHJhZG9yIiwiYWxpYXMiOiJQaW5rQm95In0sImFwcCI6IkFQSSBSRVNUIENEIDIwMTcifQ.GSpkrzIp2UbJWNfC1brUF_O4h8PyqykmW18vte1bhMw";
			
			//tomo el token del header
			
				///$arrayConToken = $request->getHeader('token');
				//$token=$arrayConToken[0];			
			
			var_dump($tokenVer);
			
		}
			
			// if($objDelaRespuesta->esValido)
			// {						
			// 	if($request->isPost())
			// 	{		
			// 		// el post sirve para todos los logeados			    
			// 		$response = $next($request, $response);
			// 	}
			// 	else
			// 	{
			// 		$payload=AutentificadorJWT::ObtenerData($token);
			// 		//var_dump($payload);
			// 		// DELETE,PUT y DELETE sirve para todos los logeados y admin
			// 		if($payload->perfil=="Administrador")
			// 		{
			// 			$response = $next($request, $response);
			// 		}		           	
			// 		else
			// 		{	
			// 			$objDelaRespuesta->respuesta="Solo administradores";
			// 		}
			// 	}		          
			// }    
			// else
			// {
			// 	//   $response->getBody()->write('<p>no tenes habilitado el ingreso</p>');
			// 	$objDelaRespuesta->respuesta="Solo usuarios registrados";
			// 	$objDelaRespuesta->elToken=$token;

			// }  
		//}		  
		// if($objDelaRespuesta->respuesta!="")
		// {
		// 	$nueva=$response->withJson($objDelaRespuesta, 401);  
		// 	return $nueva;
		// }
		  
		 //$response->getBody()->write('<p>vuelvo del verificador de credenciales</p>');
		//  return $response;   
	}
