
<!-- CÓDIGO PARA FORMULARIO DE CONTACTO -->

<?php 
	include "a_lib_descrakear_input.php";	//Aplicar descrakear_input ($conexion, $consulta, "PALABRA_PERMITIDA") antes de hacer un query.
	include "a_configurar_servidor.php";	//Definir variables globales para conexión a servidor y base de datos MySQL.
	
		$conexion = mysqli_connect($servidor, $user, $password, $basededatos);
		mysqli_set_charset($conexion, 'utf8');		//CONECTARSE AL SERVIDOR CON UTF8 PARA HACER COMPATIBLES LOS CARACTERES Y EN ESPECIAR A a_lib_descrakear_input.php
		
		// --- CARGARLAS EN VARIABLES LOCALES LAS SUPERGLOBALES POST y luego DESCRACREAR TODAS
	    $nombre = $_POST['nombre_contacto'];
	    $email = $_POST['correo_contacto'];
	    $mensaje_temp = $_POST['mensaje_contacto']; //Cuerpo del mensaje

		$nombre = descrakear_input ($conexion , $nombre, "@");
		$email = descrakear_input ($conexion , $email, "@");
		$mensaje_temp = descrakear_input ($conexion , $mensaje_temp, "@");

		//--- CODIGO VERIFICACIÓN DE CÓDIGO EVITAR BOTS. ---------------------------------------------		
	    $codigo_aleatorio = $_POST['codigo_aleatorio'];
	    $codigo_ingresado = $_POST['codigo_ingresado']; 
	    $codigo_aleatorio = descrakear_input ($conexion , $codigo_aleatorio, "@");
	    $codigo_ingresado = descrakear_input ($conexion , $codigo_ingresado, "@");	    
		//--- CODIGO VERIFICACIÓN DE CÓDIGO EVITAR BOTS. ---------------------------------------------		

		// --------------- DE AQUÍ EN ADELANTE NO DEBEN HABER LECTURAS DE SENTENCIAS $_POST------------------------------------		
				
		$mensaje  = 'Nombre:  '.$nombre.PHP_EOL;
		$mensaje .= 'Correo:  '.$email.PHP_EOL.PHP_EOL;
		$mensaje .= $mensaje_temp.PHP_EOL;		
		
		// VALIDATING AN EMAIL:
			// Check for presence of at least one @ symbol in the address. 
			// Ensure the local-part is no longer than 64 octets.
			// Ensure the domain is no longer than 255 octets.
			// Ensure the address is deliverable
			// Email verification links should only satisfy the requirement of verify email address ownership and
			// should not provide the user with an authenticated session (e.g. the user must still authenticate as normal to access the application).
			// Email verification codes must expire after the first use or expire after 8 hours if not used. https://www.owasp.org/index.php/Password_Storage_Cheat_Sheet
		
		if ($conexion){
				if ( strlen($email) < 10 or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$email))
				{
					// if($_POST['email'] == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['email']))
						echo ("Ingrese un correo electr&oacute;nico v&aacute;lido.");
				}
				elseif ( strlen($nombre) < 3  )
				{
						echo ("Ingrese su nombre.");
				}
				elseif ( strlen($mensaje) < 10 )
				{
						echo ("Ingrese un mensaje.");
				}
				//--- CODIGO VERIFICACIÓN DE CÓDIGO EVITAR BOTS. ---------------------------------------------
				elseif ( $codigo_aleatorio != $codigo_ingresado )
				{
						echo ("Ingrese el pin de 3 d&iacute;gitos mostrado.");
				}
				//--- CODIGO VERIFICACIÓN DE CÓDIGO EVITAR BOTS. ---------------------------------------------
				else{						
						$dest = "K&L Consultores <kylconsultores@outlook.com>"; //Email de destino
					    $asunto = "Contacto Red SST"; //$_POST['asunto']; //Asunto
					    
					    //Cabeceras del correo
					    /*$header = "From: $nombre <$email>\r\n"; //Quien envia?
					    //$header = "From: noreply@redsst.com\r\n";
					    $header .= "X-Mailer: PHP7\n";
					    $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; */
				
						$header = "From: noreply@redsst.com".PHP_EOL; 
						$header.= "MIME-Version: 1.0".PHP_EOL; 
						//$header.= "Content-Type: text/plain; charset=utf-8".PHP_EOL; 		//No acepta tildes
						$header.= "Content-Type: text/plain; charset=ISO-8859-1".PHP_EOL; 	//Acepta tildes
						$header.= "X-Priority: 2".PHP_EOL;

						//https://github.com/PHPMailer/PHPMailer
						//https://www.w3schools.com/php/func_mail_mail.asp
				
					    if(mail($dest,$asunto,$mensaje,$header)){
								$_POST['nombre_contacto'] = '';
								$_POST['correo_contacto'] = '';
								$_POST['mensaje_contacto'] = '';
								//echo "Mensaje enviado correctamente.."; //haciendo  este echo estas respondiendo la solicitud ajax
							// si el envio fue exitoso reseteamos lo que el usuario escribio:
				
						}else{
								echo "Mensaje no pudo ser enviado. Int&eacute;ntelo nuevamente."; //haciendo  este echo estas respondiendo la solicitud ajax
						}
						
						// --- CONTAR NÚMERO DE USUARIOS PARA ASIGNAR EL SIGUIENTE id.				
						$sql = "SELECT * FROM `mensajes`";
						$resultado = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
						$contador = mysqli_num_rows($resultado);
						
						// --- CONTAR NÚMERO DE VECES QUE ESTÁ EL CORREO EN LA BASE DE DATOS, SI ES CERO -> SUSCRIBIR (INSERT INTO)...				
						$sql = "SELECT * FROM `mensajes` WHERE correo = '".$email."'";	//SI NO SE COLOCA EMAIL ENTRE COMILLAS SIMPLES SALE ERROR POR LA ARROBA
						$resultado = mysqli_query($conexion , $sql) or die(mysqli_error($conexion));
						$repetido = mysqli_num_rows($resultado);
						//echo $repetido;
						
						if($repetido < 10){
								// GUARDAR EL MENSAJE DEL USUARIO EN LA BASE DE DATOS, talba mensajes
								$sql = "INSERT INTO `mensajes` (`ID`, `nombre`,`correo`,`mensaje`) VALUES ($contador, '$nombre' , '".$email."', '$mensaje')";
								mysqli_query($conexion , $sql) or die(mysqli_error($conexion )); 
								echo ("Mensaje enviado correctamente.");
								$_POST['correo_suscribirse'] = '';	// si el envio fue exitoso reseteamos lo que el usuario escribio (LA VARIABLE POST).
						}else{
								//echo ("<?php $_POST["."'"."correo_suscribirse"."'"."] = 0;"."?".">");
								echo ("Has enviado demasiados mensajes, puedes enviarnos un correo electr&oacute;nico directamente a info@redsst.com");
						}
				}
				mysqli_close($conexion);
		}
		else{
				echo ("Error (2) al conectar la base de datos, actualice la p&aacute;gina e int&eacute;ntelo nuevamente.");
		}

?>