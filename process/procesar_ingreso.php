
<!-- CÓDIGO PARA FORMULARIO DE REGISTRO DE CORREO DE HOJA DE VIDA --->

<?php 
	include "a_lib_descrakear_input.php";	//Aplicar descrakear_input ($conexion, $consulta, "PALABRA_PERMITIDA") antes de hacer un query.
	include "a_configurar_servidor.php";	//Definir variables globales para conexión a servidor y base de datos MySQL.
	
		$conexion = mysqli_connect($servidor, $user, $password, $basededatos);
		mysqli_set_charset($conexion, 'utf8');		//CONECTARSE AL SERVIDOR CON UTF8 PARA HACER COMPATIBLES LOS CARACTERES Y EN ESPECIAR A a_lib_descrakear_input.php
				
		// --------------- DESCRACREAR TODA LAS SUPERGLOBALES POST Y LUEGO CARGARLAS EN VARIABLES LOCALES
		$email = $_POST['correo_ingreso'];

		//$email = filter_input(INPUT_POST, $email, FILTER_SANITIZE_STRING);		// FILTROS PARA SUPERGLOBALES (POST, GET)
		$email = descrakear_input ($conexion , $email, "@");

		//--- CODIGO VERIFICACIÓN DE CÓDIGO EVITAR BOTS. ---------------------------------------------		
	    $codigo_aleatorio = $_POST['codigo_aleatorio'];
	    $codigo_ingresado = $_POST['codigo_ingresado']; 
	    $codigo_aleatorio = descrakear_input ($conexion , $codigo_aleatorio, "@");
	    $codigo_ingresado = descrakear_input ($conexion , $codigo_ingresado, "@");	    
		//--- CODIGO VERIFICACIÓN DE CÓDIGO EVITAR BOTS. ---------------------------------------------		
		
		// --------------- DE AQUÍ EN ADELANTE NO DEBEN HABER LECTURAS DE SENTENCIAS $_POST------------------------------------				

			// VALIDATING AN EMAIL:
			// Check for presence of at least one @ symbol in the address. 
			// Ensure the local-part is no longer than 64 octets.
			// Ensure the domain is no longer than 255 octets.
			// Ensure the address is deliverable
			// Email verification links should only satisfy the requirement of verify email address ownership and
			// should not provide the user with an authenticated session (e.g. the user must still authenticate as normal to access the application).
			// Email verification codes must expire after the first use or expire after 8 hours if not used. https://www.owasp.org/index.php/Password_Storage_Cheat_Sheet

//$hoy = date("Y-m-d H:i:s"); // 2001-03-10 17:16:18 (el formato DATETIME de MySQL)

		if ($conexion){
				if ( strlen($email) < 10 or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$email))
				{
					// if($_POST['email'] == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['email']))
						echo ("Ingrese un correo electr&oacute;nico v&aacute;lido.");
				}
				//--- CODIGO VERIFICACIÓN DE CÓDIGO EVITAR BOTS. ---------------------------------------------
				elseif ( $codigo_aleatorio != $codigo_ingresado )
				{
						echo ("Ingrese el pin de 3 d&iacute;gitos mostrado.");
				}
				//--- CODIGO VERIFICACIÓN DE CÓDIGO EVITAR BOTS. ---------------------------------------------
				else{
						// ------ CONTAR NÚMERO DE USUARIOS PARA ASIGNAR EL SIGUIENTE id.				
						$sql = "SELECT * FROM `usuarios`";
						$resultado = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
						$contador = mysqli_num_rows($resultado);
						
						// ------- CONTAR NÚMERO DE VECES QUE ESTÁ EL CORREO EN LA BASE DE DATOS, SI ES CERO -> SUSCRIBIR (INSERT INTO)...				
						$sql = "SELECT * FROM `usuarios` WHERE correo = '".$email."'";	//SI NO SE COLOCA EMAIL ENTRE COMILLAS SIMPLES SALE ERROR POR LA ARROBA
						$resultado = mysqli_query($conexion , $sql) or die(mysqli_error($conexion));
						$repetido = mysqli_num_rows($resultado);
						//echo $repetido;

						//	------ CODIGO ALEATORIO DE 8 DIGITOS PARA SER ENVIADO AL CORREO INGRESADO PARA VERIFICAR EL USUARIO
						// mt_getrandmax()
						$codigo =mt_rand(10000000,99999999);
						
						// ------ PREPARACIÓN DEL CORREO PARA ENVIAR EL CÓGIGO
						$dest = $email;"K&L Consultores <kylconsultores@outlook.com>"; //Email de destino
					    $asunto = "Codigo para ingresar en RedSST.com"; //$_POST['asunto']; //Asunto
						$header = "From: noreply@redsst.com".PHP_EOL; 
						//$header .= "X-Mailer: PHP7\n";
						$header.= "MIME-Version: 1.0".PHP_EOL; 
						//$header.= "Content-Type: text/plain; charset=utf-8".PHP_EOL; 		//No acepta tildes
						$header.= "Content-Type: text/plain; charset=ISO-8859-1".PHP_EOL; 	//Acepta tildes
						$header.= "X-Priority: 2".PHP_EOL;
						$mensaje = "Utilice el siguiente código para poder ingresar en RedSST.Com".PHP_EOL.PHP_EOL;
						$mensaje.= "De esta forma estamos validando su correo electrónico y evitamos suplantaciones.".PHP_EOL.PHP_EOL;
						//$mensaje.= "Código: ".strval($codigo).PHP_EOL.PHP_EOL;
						$mensaje.= "Código:".(string)$codigo.PHP_EOL.PHP_EOL;
						$mensaje.= "Cordialmente, Equipo de RedSST.Com".PHP_EOL.PHP_EOL;
						$mensaje.= "Este correo ha sido enviado porque se solicitó a través de RedSST.com. Si usted no lo solicitó, puede hacer caso omiso y borrarlo. No serán enviado más correos de forma automática si no son solicitados directamente por medio de nuestra página web.".PHP_EOL.PHP_EOL;
												
						// MEJORAS
						// EVITAR QUE SE MANDEN MUCHOS CÓDIGOS VARIAS VECES
						// EN FORMULARIO, SOLICITAR ESCRIBIR EL RESULTADO DE UNA FÓRMULA PARA EVIAR ROBOTS
						// $hoy = date("Y-m-d H:i:s");
						// $cadena = (string) $entero;
						// $cadena = strval ($entero);
						// $cadena = "$entero";
						// $cadena = " $entero "; trim ($cadena);						
												
						if($repetido == 0){
								// SUSCRIBIR EL CORREO DEL USUARIO Y UN CÓDIGO A LA BASE DE DATOS Y ENVIARLOS POR CORREO AL USUARIO.
								$sql = "INSERT INTO `usuarios` (`ID`, `correo`, `codigo`) VALUES ('$contador', '$email', '$codigo')";
								mysqli_query($conexion , $sql) or die(mysqli_error($conexion ));
								if(mail($dest,$asunto,$mensaje,$header)){
										echo "C&oacute;digo enviado al correo. Por favor revise tambi&eacute;n la carpeta de correo no deseado (spam).";
								}else{
										echo "El c&oacute;digo no pudo ser enviado al correo. Int&eacute;ntelo nuevamente.";
								}
						}else{
								// ACTUALIZAR EL CÓDIGO ASIGNADO AL CORREO DEL USUARIO EN A LA BASE DE DATOS Y ENVIARLOS POR CORREO AL USUARIO.
								$sql = "UPDATE `usuarios` SET codigo='$codigo' WHERE correo = '$email'";

								     //"Update nombre_tabla Set nombre_campo1 = valor_campo1, nombre_campo2 = valor_campo2,... Where condiciones_de_selección 
								//$SQL = "Update Clientes Set telefono='$telefono' Where nombre='$nombre'";
								//$sql = "UPDATE agenda SET nombre='$nombre', direccion='$direccion',"."telefono='$telefono', email='$email' WHERE id=$id";
								
								mysqli_query($conexion , $sql) or die(mysqli_error($conexion ));
								if(mail($dest,$asunto,$mensaje,$header)){
										echo "Nuevo c&oacute;digo enviado al correo. Por favor revise tambi&eacute;n la carpeta de correo no deseado (spam).";
								}else{
										echo "El nuevo c&oacute;digo no pudo ser enviado al correo. Int&eacute;ntelo nuevamente.";
								}
						}
				}
				mysqli_close($conexion);
		}
		else{
				echo ("Error (2) al conectar la base de datos, actualice la p&aacute;gina e int&eacute;ntelo nuevamente.");
		}
	
?>