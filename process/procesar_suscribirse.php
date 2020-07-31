
<!-- CÓDIGO PARA FORMULARIO DE INGRESO CORREO EN SUSCRIPCIÓN -->

<?php 
	include "a_lib_descrakear_input.php";	//Aplicar descrakear_input ($conexion, $consulta, "PALABRA_PERMITIDA") antes de hacer un query.
	include "a_configurar_servidor.php";	//Definir variables globales para conexión a servidor y base de datos MySQL.
	
		$conexion = mysqli_connect($servidor, $user, $password, $basededatos);
		mysqli_set_charset($conexion, 'utf8');		//CONECTARSE AL SERVIDOR CON UTF8 PARA HACER COMPATIBLES LOS CARACTERES Y EN ESPECIAR A a_lib_descrakear_input.php
				
		// --------------- DESCRACREAR TODA LAS SUPERGLOBALES POST Y LUEGO CARGARLAS EN VARIABLES LOCALES
		$email = $_POST['correo_suscribirse'];
		//$email = filter_input(INPUT_POST, $email, FILTER_SANITIZE_STRING);		// FILTROS PARA SUPERGLOBALES (POST, GET)
		$email = descrakear_input ($conexion , $email, "@");
		// --------------- DE AQUÍ EN ADELANTE NO DEBEN HABER LECTURAS DE SENTENCIAS $_POST------------------------------------				

			// VALIDATING AN EMAIL:
			// Check for presence of at least one @ symbol in the address. 
			// Ensure the local-part is no longer than 64 octets.
			// Ensure the domain is no longer than 255 octets.
			// Ensure the address is deliverable
			// Email verification links should only satisfy the requirement of verify email address ownership and
			// should not provide the user with an authenticated session (e.g. the user must still authenticate as normal to access the application).
			// Email verification codes must expire after the first use or expire after 8 hours if not used. https://www.owasp.org/index.php/Password_Storage_Cheat_Sheet

		if ($conexion){
				if ( strlen($email) < 10 or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$email)){
					// if($_POST['email'] == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['email']))
							echo ("Ingrese un correo electr&oacute;nico v&aacute;lido.");
				}
				else{
						// --- CONTAR NÚMERO DE USUARIOS PARA ASIGNAR EL SIGUIENTE id.				
						$sql = "SELECT * FROM `usuarios`";
						$resultado = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
						$contador = mysqli_num_rows($resultado);
						
						// --- CONTAR NÚMERO DE VECES QUE ESTÁ EL CORREO EN LA BASE DE DATOS, SI ES CERO -> SUSCRIBIR (INSERT INTO)...				
						$sql = "SELECT * FROM `usuarios` WHERE correo = '".$email."'";	//SI NO SE COLOCA EMAIL ENTRE COMILLAS SIMPLES SALE ERROR POR LA ARROBA
						$resultado = mysqli_query($conexion , $sql) or die(mysqli_error($conexion));
						$repetido = mysqli_num_rows($resultado);
						//echo $repetido;
						
						if($repetido == 0){
								// SUSCRIBIR EL CORREO DEL USUARIO A LA BASE DE DATOS
								//$sql = "INSERT INTO `usuarios` (`ID`, `correo`) VALUES ($contador, '".$email."')";
								$sql = "INSERT INTO `usuarios` (`ID`, `correo`, `codigo`) VALUES ('$contador', '$email', 0)";
								mysqli_query($conexion , $sql) or die(mysqli_error($conexion )); 
								echo ("Email suscrito correctamente.");
								$_POST['correo_suscribirse'] = '';	// si el envio fue exitoso reseteamos lo que el usuario escribio (LA VARIABLE POST).
						}else{
								//echo ("<?php $_POST["."'"."correo_suscribirse"."'"."] = 0;"."?".">");
								echo ("El correo ingresado ya se encuentra en nuestra base de datos.");
						}
				}
				mysqli_close($conexion);
		}
		else{
				echo ("Error (2) al conectar la base de datos, actualice la p&aacute;gina e int&eacute;ntelo nuevamente.");
		}
	
?>