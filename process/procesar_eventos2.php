
<!-- CÓDIGO PARA FORMULARIO DE REGISTRO DE EVENTO

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
</head>
 --->
<?php 
	include "a_lib_descrakear_input.php";	//Aplicar descrakear_input ($conexion, $consulta, "PALABRA_PERMITIDA") antes de hacer un query.
	include "a_configurar_servidor.php";	//Definir variables globales para conexión a servidor y base de datos MySQL.


		$conexion = mysqli_connect($servidor, $user, $password, $basededatos);
		mysqli_set_charset($conexion, 'utf8');		//CONECTARSE AL SERVIDOR CON UTF8 PARA HACER COMPATIBLES LOS CARACTERES Y EN ESPECIAL A a_lib_descrakear_input.php
		
		// --------------- CARGAR TODAS LAS SUPERGLOBALES POST EN VARIABLES LOCALES Y LUEGO DESCRACREARLAS
			$correo_ingreso2 = $_POST['correo_ingreso2'];
			$codigo_ingreso2 = $_POST['codigo_ingreso2'];
			$tipo = $_POST['tipo'];			
			$nombre = $_POST['nombre'];			
			$organiza = $_POST['organiza'];			
			$duracion = $_POST['duracion'];			
			$pais = $_POST['pais'];			
			$ciudad = $_POST['ciudad'];			
			$lugar = $_POST['lugar'];			
			$inicio = $_POST['inicio'];			
			$hora = $_POST['hora'];			
			$contacto = $_POST['contacto'];			
			$telefono = $_POST['telefono'];			
			$link = $_POST['link'];			
			$otros = $_POST['otros'];
			// The Notice comes up because you're trying to access items in an array that don't exist. It's not a problem, but PHP will spawn a Notice on it,
			// because it's not the intended way to do it. Check if something is set through isset or !empty. Chechbox is null if it isn't set.
			// ------------- VERIFICAR CADA CHECHBOX: SI FUE SELECCIONADO ENTONCES ASIGNARLE EL VALOR LEIDO "on", SI NO, ASIGNARLE "off".----------------------------------
			//if(isset($_POST['cargodeinteres1'])){$cargodeinteres1 = $_POST['cargodeinteres1'];}else{$cargodeinteres1 = "off";}
			if(isset($_POST['autorizohabeasdata'])){$autorizohabeasdata = "Acepto";}else{$autorizohabeasdata = "off";}

			$correo_ingreso2 = descrakear_input ($conexion , $correo_ingreso2, "@");
			$codigo_ingreso2 = descrakear_input ($conexion , $codigo_ingreso2, "@");
			$tipo = descrakear_input ($conexion , $tipo, "@");
			$nombre = descrakear_input ($conexion , $nombre, "@");
			$organiza = descrakear_input ($conexion , $organiza, "@");
			$duracion = descrakear_input ($conexion , $duracion, "@");
			$pais = descrakear_input ($conexion , $pais, "@");
			$ciudad = descrakear_input ($conexion , $ciudad, "@");
			$lugar = descrakear_input ($conexion , $lugar, "@");
			//$inicio = descrakear_input ($conexion , $inicio, "@");	// NO APLICAR PARA CONSERVAR EL FORMATO DE FECHA
			$hora = descrakear_input ($conexion , $hora, "@");
			$contacto = descrakear_input ($conexion , $contacto, "@");
			$telefono = descrakear_input ($conexion , $telefono, "@");
			$link = descrakear_input ($conexion , $link, "@");			
			$otros = descrakear_input ($conexion , $otros, "@");
			$autorizohabeasdata = descrakear_input ($conexion , $autorizohabeasdata, "@");


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
				if ( strlen($correo_ingreso2) < 10 or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$correo_ingreso2))
				{
					// if($_POST['email'] == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['email']))
						echo ("Ingrese un correo electr&oacute;nico v&aacute;lido.");
				}
				else{

						// http://php.net/manual/es/class.mysqli-result.php

						// ------- BUSCAR EL CÓDIGO DEL CORREO SUMINISTRADO EN TABLA usuarios PARA COMPARAR CON CÓDIGO SUMINISTRADO POR EL USUARIO-------------------------
						//$sql = "SELECT codigo FROM `usuarios` WHERE correo = '".$correo_ingreso2."'";	//SI NO SE COLOCA EMAIL ENTRE COMILLAS SIMPLES SALE ERROR POR LA ARROBA
						$sql = "SELECT codigo FROM usuarios WHERE correo = '$correo_ingreso2'";	//VARIABLES PHP VAN ENTRE COMILLAS SIMPLES SALE ERROR POR LA ARROBA
						$resultado = mysqli_query($conexion , $sql) or die(mysqli_error($conexion));
						$fila = mysqli_fetch_row($resultado);
						mysqli_free_result($resultado);				//LIBERAR RESULTADO SIEMPRE, DESPUÉS DE USARLO.
						/*while ($fila = mysqli_fetch_row($resultado)) {
							echo ($fila[0]);
						}*/						
						if ($codigo_ingreso2 != $fila[0]){
							echo ("La combinación de correo y c&oacute;digo no coinciden. Int&eacute;ntelo nuevamente o vaya al paso 1."."<br/>");
							goto end;
						}
						
// ------------------------------------- VERIFICACIONES DE INGRESO MÍNIMO DE DATOS REQUERIDOS.----------------------------------------------------------------------------
						$mensaje = "";
						if ( $tipo == 'Ninguno' ){
							 $mensaje .= "Por favor seleccione el tipo de evento."."<br/>";
						}
						if ( strlen($nombre) < 7 ){
							 $mensaje .= "Por favor ingrese el nombre y la descripci&oacute;n del evento."."<br/>";
						}
						if ( strlen($organiza) < 3 ){
							 $mensaje .= "Por favor ingrese el organizador del evento."."<br/>";
						}
						if ( $duracion == null ){
							$mensaje .= "Por favor ingrese la duración del evento"."<br/>";
						}
						if ( $pais == 'Ninguno' ){
							 $mensaje .= "Por favor seleccione el pa&iacute;s del evento."."<br/>";
						}						
						if ( strlen($ciudad) < 3 ){
							 $mensaje .= "Por favor ingrese la ciudad del evento."."<br/>";
						}						
						if ( strlen($lugar) < 3 ){
							 $mensaje .= "Por favor ingrese el lugar del evento."."<br/>";
						}
						if ( strlen($hora) < 3 ){
							 $mensaje .= "Por favor ingrese la hora de inicio u horario del evento."."<br/>";
						}
						if ( strlen($contacto) < 3 ){
							 $mensaje .= "Por favor ingrese nombre de la persona de contacto del evento."."<br/>";
						}
						if ( strlen($telefono) < 7 ){
							 $mensaje .= "Por favor ingrese tel&eacute;fono de contacto del evento."."<br/>";
						}
						
						//VERIFICAR FECHA inicio ES MAYOR QUE HOY()
						//$hoy = date("Y-m-d H:i:s"); // 2001-03-10 17:16:18 (el formato DATETIME de MySQL)
						if( strtotime($inicio) < strtotime( date("d-m-Y") )){
							 $mensaje .= "Por favor seleccione una fecha futura."."<br/>";
						}
							
						// DEBE AUTORIZAR EL TRATAMIENTO DE DATOS HABEAS DATA.
						if ( ($autorizohabeasdata=='off') )
						{
							$mensaje .= "Debe aceptar nuestra Pol&iacute;tica de manejo de informaci&oacute;n personal antes de continuar."."<br/>";
						}

						if ($mensaje != "" ){
							echo ($mensaje);
							goto end;
						}
						

						//mysqli_free_result($resultado);

						
						// ------ CONTAR NÚMERO DE USUARIOS PARA ASIGNAR EL SIGUIENTE id.				
						$sql = "SELECT * FROM eventos";
						$resultado = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
						$contador = mysqli_num_rows($resultado);
						mysqli_free_result($resultado);				//LIBERAR RESULTADO SIEMPRE, DESPUÉS DE USARLO.
						
						// ------- CONTAR NÚMERO DE VECES QUE ESTÁ EL CORREO EN LA TABLA eventos, SI ES CERO -> INGRESAR EVENTO (INSERT INTO), SI NO, ACTUALIZAR (UPDATE).
						$sql = "SELECT * FROM eventos WHERE correo = '$correo_ingreso2'";	//SI NO SE COLOCA EMAIL ENTRE COMILLAS SIMPLES SALE ERROR POR LA ARROBA
						$resultado = mysqli_query($conexion , $sql) or die(mysqli_error($conexion));
						$repetido = mysqli_num_rows($resultado);
						mysqli_free_result($resultado);
			
						// MEJORAS
						/* liberar la serie de resultados 						mysqli_free_result($resultado);*/
						// EVITAR QUE SE MANDEN MUCHOS CÓDIGOS VARIAS VECES
						// LEER RESULTADO DESPUES DE SQL INSERT O UPDATE PARA COMPROBAR QUE SE GRABÓ CON EXITO Y TIEMPO QUE TOMÓ.
						//"Update nombre_tabla Set nombre_campo1 = valor_campo1, nombre_campo2 = valor_campo2,... Where condiciones_de_selección 
						//$SQL = "Update Clientes Set telefono='$telefono' Where nombre='$nombre'";
						//$sql = "UPDATE agenda SET nombre='$nombre', direccion='$direccion',"."telefono='$telefono', email='$email' WHERE id=$id";
								
						// ------ INGRESAR evento  --------------------------------------------------------
						if($repetido == 0){			
								
								// INGRESAR EVENTO NUEVO A LA BASE DE DATOS.
$sql = "INSERT INTO eventos (ID, correo, tipo, nombre, organiza, duracion, pais, ciudad, lugar, inicio, hora, contacto, telefono, link, otros, autorizohabeasdata)  VALUES ('$contador','$correo_ingreso2','$tipo','$nombre','$organiza','$duracion','$pais','$ciudad','$lugar','$inicio','$hora','$contacto','$telefono','$link','$otros','$autorizohabeasdata')";
								mysqli_query($conexion , $sql) or die(mysqli_error($conexion ));							
								echo "Evento ingresado con &eacute;xito!!!  ".date("Y-m-d H:i:s");								
						}else{						
								// ACTUALIZAR HV EN LA BASE DE DATOS.
$sql = "UPDATE eventos SET tipo='$tipo', nombre='$nombre', organiza='$organiza', duracion='$duracion', pais='$pais', ciudad='$ciudad', lugar='$lugar', inicio='$inicio', hora='$hora', contacto='$contacto', telefono='$telefono', link='$link', otros='$otros', autorizohabeasdata='$autorizohabeasdata' WHERE correo = '$correo_ingreso2'";		
								
								mysqli_query($conexion , $sql) or die(mysqli_error($conexion ));
								echo "Evento actualizado con &eacute;xito!!!  ".date("Y-m-d H:i:s");
						}
						
				}	//cierre de else{
				
				end:
				mysqli_close($conexion);
				//echo (" Base de datos en contrucci&oacute;n, por favor int&eacute;ntelo m&aacute;s tarde.");
				
		}	//CIERRE DE if($conexion){
		else{
				echo ("Error (2) al conectar la base de datos, actualice la p&aacute;gina e int&eacute;ntelo nuevamente.");
				mysqli_close($conexion);
		}
	
?>