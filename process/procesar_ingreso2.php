
<!-- CÓDIGO PARA FORMULARIO DE REGISTRO DE HOJA DE VIDA

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
</head>
 --->
<?php 
	include "a_lib_descrakear_input.php";	//Aplicar descrakear_input ($conexion, $consulta, "PALABRA_PERMITIDA") antes de hacer un query.
	include "a_configurar_servidor.php";	//Definir variables globales para conexión a servidor y base de datos MySQL.


		$conexion = mysqli_connect($servidor, $user, $password, $basededatos);
		mysqli_set_charset($conexion, 'utf8');		//CONECTARSE AL SERVIDOR CON UTF8 PARA HACER COMPATIBLES LOS CARACTERES Y EN ESPECIAR A a_lib_descrakear_input.php
		
		// --------------- CARGAR TODAS LAS SUPERGLOBALES POST EN VARIABLES LOCALES Y LUEGO DESCRACREARLAS
			$correo_ingreso2 = $_POST['correo_ingreso2'];
			$codigo_ingreso2 = $_POST['codigo_ingreso2'];
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$pais = $_POST['pais'];
			$ciudad = $_POST['ciudad'];
			$telefono1 = $_POST['telefono1'];
			$telefono2 = $_POST['telefono2'];
			$linkedin = $_POST['linkedin'];
			$facebook = $_POST['facebook'];
			$estudio1 = $_POST['estudio1'];
			
			$estudio2 = $_POST['estudio2'];
			$estudio3 = $_POST['estudio3'];
			$estudio4 = $_POST['estudio4'];
			$estudio5 = $_POST['estudio5'];
			$estudio6 = $_POST['estudio6'];
			$estudio7 = $_POST['estudio7'];
			$estudio8 = $_POST['estudio8'];
			$estudio9 = $_POST['estudio9'];
			$estudio10 = $_POST['estudio10'];
			$estudio11 = $_POST['estudio11'];
			$estudio12 = $_POST['estudio12'];
			$estudio13 = $_POST['estudio13'];
			$estudio14 = $_POST['estudio14'];
			$estudio15 = $_POST['estudio15'];
			$estudio16 = $_POST['estudio16'];
			$estudiodescripcion1 = $_POST['estudiodescripcion1'];
			$estudiodescripcion2 = $_POST['estudiodescripcion2'];
			$estudiodescripcion3 = $_POST['estudiodescripcion3'];
			$estudiodescripcion4 = $_POST['estudiodescripcion4'];
			$estudiodescripcion5 = $_POST['estudiodescripcion5'];
			$estudiodescripcion6 = $_POST['estudiodescripcion6'];
			$estudiodescripcion7 = $_POST['estudiodescripcion7'];
			$estudiodescripcion8 = $_POST['estudiodescripcion8'];
			$estudiodescripcion9 = $_POST['estudiodescripcion9'];
			$estudiodescripcion10 = $_POST['estudiodescripcion10'];
			$estudiodescripcion11 = $_POST['estudiodescripcion11'];
			$estudiodescripcion12 = $_POST['estudiodescripcion12'];
			$estudiodescripcion13 = $_POST['estudiodescripcion13'];
			$estudiodescripcion14 = $_POST['estudiodescripcion14'];
			$estudiodescripcion15 = $_POST['estudiodescripcion15'];
			$estudiodescripcion16 = $_POST['estudiodescripcion16'];
			$estudioinstitucion1 = $_POST['estudioinstitucion1'];
			$estudioinstitucion2 = $_POST['estudioinstitucion2'];
			$estudioinstitucion3 = $_POST['estudioinstitucion3'];
			$estudioinstitucion4 = $_POST['estudioinstitucion4'];
			$estudioinstitucion5 = $_POST['estudioinstitucion5'];
			$estudioinstitucion6 = $_POST['estudioinstitucion6'];
			$estudioinstitucion7 = $_POST['estudioinstitucion7'];
			$estudioinstitucion8 = $_POST['estudioinstitucion8'];
			$estudioinstitucion9 = $_POST['estudioinstitucion9'];
			$estudioinstitucion10 = $_POST['estudioinstitucion10'];
			$estudioinstitucion11 = $_POST['estudioinstitucion11'];
			$estudioinstitucion12 = $_POST['estudioinstitucion12'];
			$estudioinstitucion13 = $_POST['estudioinstitucion13'];
			$estudioinstitucion14 = $_POST['estudioinstitucion14'];
			$estudioinstitucion15 = $_POST['estudioinstitucion15'];
			$estudioinstitucion16 = $_POST['estudioinstitucion16'];
			$estudioduracion4 = $_POST['estudioduracion4'];
			$estudioduracion5 = $_POST['estudioduracion5'];
			$estudioduracion6 = $_POST['estudioduracion6'];
			$estudioduracion7 = $_POST['estudioduracion7'];
			$estudioduracion8 = $_POST['estudioduracion8'];
			$estudioduracion9 = $_POST['estudioduracion9'];
			$estudioduracion10 = $_POST['estudioduracion10'];
			$estudioduracion11 = $_POST['estudioduracion11'];

			// The Notice comes up because you're trying to access items in an array that don't exist. It's not a problem, but PHP will spawn a Notice on it,
			// because it's not the intended way to do it. Check if something is set through isset or !empty. Chechbox is null if it isn't set.
			// ------------- VERIFICAR CADA CHECHBOX: SI FUE SELECCIONADO ENTONCES ASIGNARLE EL VALOR LEIDO "Si", SI NO, ASIGNARLE "No".----------------------------------
			if(isset($_POST['cargodeinteres1'])){$cargodeinteres1 = "Si";}else{$cargodeinteres1 = "No";}
			if(isset($_POST['cargodeinteres2'])){$cargodeinteres2 = "Si";}else{$cargodeinteres2 = "No";}
			if(isset($_POST['cargodeinteres3'])){$cargodeinteres3 = "Si";}else{$cargodeinteres3 = "No";}
			if(isset($_POST['cargodeinteres4'])){$cargodeinteres4 = "Si";}else{$cargodeinteres4 = "No";}
			if(isset($_POST['cargodeinteres5'])){$cargodeinteres5 = "Si";}else{$cargodeinteres5 = "No";}
			if(isset($_POST['cargodeinteres6'])){$cargodeinteres6 = "Si";}else{$cargodeinteres6 = "No";}
			if(isset($_POST['cargodeinteres7'])){$cargodeinteres7 = "Si";}else{$cargodeinteres7 = "No";}
			if(isset($_POST['cargodeinteres8'])){$cargodeinteres8 = "Si";}else{$cargodeinteres8 = "No";}
			if(isset($_POST['cargodeinteres9'])){$cargodeinteres9 = "Si";}else{$cargodeinteres9 = "No";}
			if(isset($_POST['cargodeinteres10'])){$cargodeinteres10 = "Si";}else{$cargodeinteres10 = "No";}
			if(isset($_POST['contratodeinteres1'])){$contratodeinteres1 = "Si";}else{$contratodeinteres1 = "No";}
			if(isset($_POST['contratodeinteres2'])){$contratodeinteres2 = "Si";}else{$contratodeinteres2 = "No";}

			if(isset($_POST['contratodeinteres3'])){$contratodeinteres3 = "Si";}else{$contratodeinteres3 = "No";}
			if(isset($_POST['contratodeinteres4'])){$contratodeinteres4 = "Si";}else{$contratodeinteres4 = "No";}
			if(isset($_POST['contratodeinteres5'])){$contratodeinteres5 = "Si";}else{$contratodeinteres5 = "No";}
			if(isset($_POST['contratodeinteres6'])){$contratodeinteres6 = "Si";}else{$contratodeinteres6 = "No";}
			if(isset($_POST['contratodeinteres7'])){$contratodeinteres7 = "Si";}else{$contratodeinteres7 = "No";}
			if(isset($_POST['contratodeinteres8'])){$contratodeinteres8 = "Si";}else{$contratodeinteres8 = "No";}
			if(isset($_POST['contratodeinteres9'])){$contratodeinteres9 = "Si";}else{$contratodeinteres9 = "No";}
			if(isset($_POST['otrointeres1'])){$otrointeres1 = "Si";}else{$otrointeres1 = "No";}
			if(isset($_POST['otrointeres2'])){$otrointeres2 = "Si";}else{$otrointeres2 = "No";}
			if(isset($_POST['otrointeres3'])){$otrointeres3 = "Si";}else{$otrointeres3 = "No";}
			if(isset($_POST['otrointeres4'])){$otrointeres4 = "Si";}else{$otrointeres4 = "No";}
			if(isset($_POST['otrointeres5'])){$otrointeres5 = "Si";}else{$otrointeres5 = "No";}
			if(isset($_POST['otrointeres6'])){$otrointeres6 = "Si";}else{$otrointeres6 = "No";}
			if(isset($_POST['otrointeres7'])){$otrointeres7 = "Si";}else{$otrointeres7 = "No";}
			if(isset($_POST['otrointeres8'])){$otrointeres8 = "Si";}else{$otrointeres8 = "No";}
			if(isset($_POST['otrointeres9'])){$otrointeres9 = "Si";}else{$otrointeres9 = "No";}
			if(isset($_POST['otrointeres10'])){$otrointeres10 = "Si";}else{$otrointeres10 = "No";}
			if(isset($_POST['otrointeres11'])){$otrointeres11 = "Si";}else{$otrointeres11 = "No";}
			if(isset($_POST['otrointeres12'])){$otrointeres12 = "Si";}else{$otrointeres12 = "No";}
			if(isset($_POST['otrointeres13'])){$otrointeres13 = "Si";}else{$otrointeres13 = "No";}
			if(isset($_POST['otrointeres14'])){$otrointeres14 = "Si";}else{$otrointeres14 = "No";}
			if(isset($_POST['otrointeres15'])){$otrointeres15 = "Si";}else{$otrointeres15 = "No";}
			if(isset($_POST['otrointeres16'])){$otrointeres16 = "Si";}else{$otrointeres16 = "No";}

			$otrosestudiosintereses = $_POST['otrosestudiosintereses'];

			if(isset($_POST['autorizohabeasdata'])){$autorizohabeasdata = "Acepto";}else{$autorizohabeasdata = "No";}
			if(isset($_POST['mayordeedad'])){$mayordeedad = "Si";}else{$mayordeedad = "No";}
			

			$correo_ingreso2 = descrakear_input ($conexion , $correo_ingreso2, "@_-.");
			$codigo_ingreso2 = descrakear_input ($conexion , $codigo_ingreso2, "@_-.");
			$nombre = descrakear_input ($conexion , $nombre, "");
			$apellido = descrakear_input ($conexion , $apellido, "");
			$pais = descrakear_input ($conexion , $pais, "");
			$ciudad = descrakear_input ($conexion , $ciudad, "");
			$telefono1 = descrakear_input ($conexion , $telefono1, "");
			$telefono2 = descrakear_input ($conexion , $telefono2, "");
			$linkedin = descrakear_input ($conexion , $linkedin, "@_-.");
			$facebook = descrakear_input ($conexion , $facebook, "@_-.");
			$estudio1 = descrakear_input ($conexion , $estudio1, "");
			
			$estudio2 = descrakear_input ($conexion , $estudio2, "");
			$estudio3 = descrakear_input ($conexion , $estudio3, "");
			$estudio4 = descrakear_input ($conexion , $estudio4, "");
			$estudio5 = descrakear_input ($conexion , $estudio5, "");
			$estudio6 = descrakear_input ($conexion , $estudio6, "");
			$estudio7 = descrakear_input ($conexion , $estudio7, "");
			$estudio8 = descrakear_input ($conexion , $estudio8, "");
			$estudio9 = descrakear_input ($conexion , $estudio9, "");
			$estudio10 = descrakear_input ($conexion , $estudio10, "");
			$estudio11 = descrakear_input ($conexion , $estudio11, "");
			$estudio12 = descrakear_input ($conexion , $estudio12, "");
			$estudio13 = descrakear_input ($conexion , $estudio13, "");
			$estudio14 = descrakear_input ($conexion , $estudio14, "");
			$estudio15 = descrakear_input ($conexion , $estudio15, "");
			$estudio16 = descrakear_input ($conexion , $estudio16, "");
			$estudiodescripcion1 = descrakear_input ($conexion , $estudiodescripcion1, "");
			$estudiodescripcion2 = descrakear_input ($conexion , $estudiodescripcion2, "");
			$estudiodescripcion3 = descrakear_input ($conexion , $estudiodescripcion3, "");
			$estudiodescripcion4 = descrakear_input ($conexion , $estudiodescripcion4, "");
			$estudiodescripcion5 = descrakear_input ($conexion , $estudiodescripcion5, "");
			$estudiodescripcion6 = descrakear_input ($conexion , $estudiodescripcion6, "");
			$estudiodescripcion7 = descrakear_input ($conexion , $estudiodescripcion7, "");
			$estudiodescripcion8 = descrakear_input ($conexion , $estudiodescripcion8, "");
			$estudiodescripcion9 = descrakear_input ($conexion , $estudiodescripcion9, "");
			$estudiodescripcion10 = descrakear_input ($conexion , $estudiodescripcion10, "");
			$estudiodescripcion11 = descrakear_input ($conexion , $estudiodescripcion11, "");
			$estudiodescripcion12 = descrakear_input ($conexion , $estudiodescripcion12, "");
			$estudiodescripcion13 = descrakear_input ($conexion , $estudiodescripcion13, "");
			$estudiodescripcion14 = descrakear_input ($conexion , $estudiodescripcion14, "");
			$estudiodescripcion15 = descrakear_input ($conexion , $estudiodescripcion15, "");
			$estudiodescripcion16 = descrakear_input ($conexion , $estudiodescripcion16, "");
			$estudioinstitucion1 = descrakear_input ($conexion , $estudioinstitucion1, "");
			$estudioinstitucion2 = descrakear_input ($conexion , $estudioinstitucion2, "");
			$estudioinstitucion3 = descrakear_input ($conexion , $estudioinstitucion3, "");
			$estudioinstitucion4 = descrakear_input ($conexion , $estudioinstitucion4, "");
			$estudioinstitucion5 = descrakear_input ($conexion , $estudioinstitucion5, "");
			$estudioinstitucion6 = descrakear_input ($conexion , $estudioinstitucion6, "");
			$estudioinstitucion7 = descrakear_input ($conexion , $estudioinstitucion7, "");
			$estudioinstitucion8 = descrakear_input ($conexion , $estudioinstitucion8, "");
			$estudioinstitucion9 = descrakear_input ($conexion , $estudioinstitucion9, "");
			$estudioinstitucion10 = descrakear_input ($conexion , $estudioinstitucion10, "");
			$estudioinstitucion11 = descrakear_input ($conexion , $estudioinstitucion11, "");
			$estudioinstitucion12 = descrakear_input ($conexion , $estudioinstitucion12, "");
			$estudioinstitucion13 = descrakear_input ($conexion , $estudioinstitucion13, "");
			$estudioinstitucion14 = descrakear_input ($conexion , $estudioinstitucion14, "");
			$estudioinstitucion15 = descrakear_input ($conexion , $estudioinstitucion15, "");
			$estudioinstitucion16 = descrakear_input ($conexion , $estudioinstitucion16, "");
			$estudioduracion4 = descrakear_input ($conexion , $estudioduracion4, "");
			$estudioduracion5 = descrakear_input ($conexion , $estudioduracion5, "");
			$estudioduracion6 = descrakear_input ($conexion , $estudioduracion6, "");
			$estudioduracion7 = descrakear_input ($conexion , $estudioduracion7, "");
			$estudioduracion8 = descrakear_input ($conexion , $estudioduracion8, "");
			$estudioduracion9 = descrakear_input ($conexion , $estudioduracion9, "");
			$estudioduracion10 = descrakear_input ($conexion , $estudioduracion10, "");
			$estudioduracion11 = descrakear_input ($conexion , $estudioduracion11, "");

			$cargodeinteres1 = descrakear_input ($conexion , $cargodeinteres1, "");
			$cargodeinteres2 = descrakear_input ($conexion , $cargodeinteres2, "");
			$cargodeinteres3 = descrakear_input ($conexion , $cargodeinteres3, "");
			$cargodeinteres4 = descrakear_input ($conexion , $cargodeinteres4, "");
			$cargodeinteres5 = descrakear_input ($conexion , $cargodeinteres5, "");
			$cargodeinteres6 = descrakear_input ($conexion , $cargodeinteres6, "");
			$cargodeinteres7 = descrakear_input ($conexion , $cargodeinteres7, "");
			$cargodeinteres8 = descrakear_input ($conexion , $cargodeinteres8, "");
			$cargodeinteres9 = descrakear_input ($conexion , $cargodeinteres9, "");
			$cargodeinteres10 = descrakear_input ($conexion , $cargodeinteres10, "");
			$contratodeinteres1 = descrakear_input ($conexion , $contratodeinteres1, "-");
			$contratodeinteres2 = descrakear_input ($conexion , $contratodeinteres2, "-");
			$contratodeinteres3 = descrakear_input ($conexion , $contratodeinteres3, "-");
			$contratodeinteres4 = descrakear_input ($conexion , $contratodeinteres4, "-");
			$contratodeinteres5 = descrakear_input ($conexion , $contratodeinteres5, "-");
			$contratodeinteres6 = descrakear_input ($conexion , $contratodeinteres6, "-");
			$contratodeinteres7 = descrakear_input ($conexion , $contratodeinteres7, "-");
			$contratodeinteres8 = descrakear_input ($conexion , $contratodeinteres8, "-");
			$contratodeinteres9 = descrakear_input ($conexion , $contratodeinteres9, "-");
			$otrointeres1 = descrakear_input ($conexion , $otrointeres1, "");
			$otrointeres2 = descrakear_input ($conexion , $otrointeres2, "");
			$otrointeres3 = descrakear_input ($conexion , $otrointeres3, "");
			$otrointeres4 = descrakear_input ($conexion , $otrointeres4, "");
			$otrointeres5 = descrakear_input ($conexion , $otrointeres5, "");
			$otrointeres6 = descrakear_input ($conexion , $otrointeres6, "");
			$otrointeres7 = descrakear_input ($conexion , $otrointeres7, "");
			$otrointeres8 = descrakear_input ($conexion , $otrointeres8, "");
			$otrointeres9 = descrakear_input ($conexion , $otrointeres9, "");
			$otrointeres10 = descrakear_input ($conexion , $otrointeres10, "");
			$otrointeres11 = descrakear_input ($conexion , $otrointeres11, "");
			$otrointeres12 = descrakear_input ($conexion , $otrointeres12, "");
			$otrointeres13 = descrakear_input ($conexion , $otrointeres13, "");
			$otrointeres14 = descrakear_input ($conexion , $otrointeres14, "");
			$otrointeres15 = descrakear_input ($conexion , $otrointeres15, "");
			$otrointeres16 = descrakear_input ($conexion , $otrointeres16, "");
			$otrosestudiosintereses = descrakear_input ($conexion , $otrosestudiosintereses, "");
			$autorizohabeasdata = descrakear_input ($conexion , $autorizohabeasdata, "");
			$mayordeedad = descrakear_input ($conexion , $mayordeedad, "");

		// --------------- DE AQUÍ EN ADELANTE NO DEBEN HABER LECTURAS DE SENTENCIAS $_POST------------------------------------				
	
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
							echo ("La combinaci&oacute;n de correo y c&oacute;digo no coinciden. Int&eacute;ntelo nuevamente o vaya al paso 1."."<br/>");
							goto end;
						}
						
// ------------------------------------- VERIFICACIONES DE INGRESO MÍNIMO DE DATOS REQUERIDOS.----------------------------------------------------------------------------
						$mensaje = "";
						if ( strlen($nombre) < 3 ){
							 $mensaje .= "Por favor ingrese su nombre."."<br/>";
						}
						if ( strlen($apellido) < 3 ){
							 $mensaje .= "Por favor ingrese su apellido."."<br/>";
						}
						if ( $pais == 'Ninguno' ){
							 $mensaje .= "Por favor seleccione un pa&iacute;s."."<br/>";
						}
						if ( strlen($ciudad) < 4 ){
							 $mensaje .= "Por favor ingrese una ciudad."."<br/>";
						}
						if ( strlen($telefono1) < 7 ){
							 $mensaje .= "Por favor ingrese un tel&eacute;fono de contacto."."<br/>";
						}
						
						// DEBE SELECCIONAR ALMENOS UN ESTUDIO, EL TÍTULO OBTENIDO Y LA INSTITUCIÓN QUE LO OTORGÓ.
						if ( $estudio1 == 'Ninguno' ){
							 $mensaje .= "Por favor ingrese al menos un estudio realizado."."<br/>";
						}
						if ( strlen($estudiodescripcion1) < 3 ){
							 $mensaje .= "Por favor ingrese el t&iacute;tulo obtenido."."<br/>";
						}
						if ( strlen($estudioinstitucion1) < 3 ){
							 $mensaje .= "Por favor ingrese la instituci&oacute;n que le otorg&oacute; el t&iacute;tulo."."<br/>";
						}
						
						// SI SELECCIONÓ UN ESTUDIO 2, DEBE ESCRIBIR EL TÍTULO OBTENIDO Y LA INSTITUCIÓN.
						if ( $estudio2 != 'Ninguno' ){
							if ( strlen($estudiodescripcion2) < 3 ){
								$mensaje .= "Por favor ingrese el t&iacute;tulo obtenido para: ".$estudio2."<br/>";
							}
							if ( strlen($estudioinstitucion2) < 3 ){
								$mensaje .= "Por favor ingrese la instituci&oacute;n que le otorg&oacute; el t&iacute;tulo de: ".$estudio2."<br/>";
							}
						}
						
						// SI SELECCIONÓ UN ESTUDIO 3 DEBE ESCRIBIR EL TÍTULO OBTENIDO Y LA INSTITUCIÓN.
						if ( $estudio3 != 'Ninguno' ){
							if ( strlen($estudiodescripcion3) < 3 ){
								$mensaje .= "Por favor ingrese el t&iacute;tulo obtenido para: ".$estudio3."<br/>";
							}
							if ( strlen($estudioinstitucion3) < 3 ){
								$mensaje .= "Por favor ingrese la instituci&oacute;n que le otorg&oacute; el t&iacute;tulo de: ".$estudio3."<br/>";
							}
						}
						
						// SI SELECCIONÓ UN ESTUDIO 4 DEBE ESCRIBIR EL TÍTULO OBTENIDO Y LA INSTITUCIÓN.
						if ( $estudio4 != 'Ninguno' ){
							if ( strlen($estudiodescripcion4) < 3 ){
								$mensaje .= "Por favor ingrese el nombre del evento en: ".$estudio4."<br/>";
							}
							if ( strlen($estudioinstitucion4) < 3 ){
								$mensaje .= "Por favor ingrese la instituci&oacute;n organizadora de: ".$estudio4."<br/>";
							}
							if ( $estudioduracion4 == null ){
								$mensaje .= "Por favor ingrese la duraci&oacute;n del evento: ".$estudio4."<br/>";
							}
						}
						
						// SE DEBE SELECCIONAR AL MENOS UN CARGO DE INTERÉS.
						if ( ($cargodeinteres1=='No') AND ($cargodeinteres2=='No') AND ($cargodeinteres3=='No') AND ($cargodeinteres4=='No') AND ($cargodeinteres5=='No') AND ($cargodeinteres6=='No') AND ($cargodeinteres7=='No') AND ($cargodeinteres8=='No') AND ($cargodeinteres9=='No') AND ($cargodeinteres10=='No') )
						{
							$mensaje .= "Por favor seleccione al menos un nivel de cargo de inter&eacute;s."."<br/>";
						}
						
						// DEBE AUTORIZAR EL TRATAMIENTO DE DATOS HABEAS DATA.
						if ( ($autorizohabeasdata=='No') )
						{
							$mensaje .= "Debe aceptar nuestra Pol&iacute;tica de manejo de informaci&oacute;n personal antes de continuar."."<br/>";
						}
						
						// DEBE CERTIFICAR QUE ES MAYOR DE EDAD.
						if ( ($mayordeedad=='No') )
						{
							$mensaje .= "Debe certificar que es mayor de 18 a&ntilde;os antes de continuar."."<br/>";
						}



						if ($mensaje != "" ){
							echo ($mensaje);
							goto end;
						}
						
						
						//mysqli_free_result($resultado);

						
						// ------ CONTAR NÚMERO DE USUARIOS PARA ASIGNAR EL SIGUIENTE id.				
						$sql = "SELECT * FROM hv";
						$resultado = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
						$contador = mysqli_num_rows($resultado);
						mysqli_free_result($resultado);				//LIBERAR RESULTADO SIEMPRE, DESPUÉS DE USARLO.
						
						// ------- CONTAR NÚMERO DE VECES QUE ESTÁ EL CORREO EN LA TABLA hv, SI ES CERO -> INGRESAR HV (INSERT INTO), SI NO, ACTUALIZAR (UPDATE).
						$sql = "SELECT * FROM hv WHERE correo = '$correo_ingreso2'";	//SI NO SE COLOCA EMAIL ENTRE COMILLAS SIMPLES SALE ERROR POR LA ARROBA
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
								
						// ------ INGRESAR HV  --------------------------------------------------------
						if($repetido == 0){			
								
								// INGRESAR HV NUEVA A LA BASE DE DATOS.
$sql = "INSERT INTO hv (ID,correo,nombre,apellido,pais,ciudad,telefono1,telefono2,linkedin,facebook,estudio1,estudio2,estudio3,estudio4,estudio5,estudio6,estudio7,estudio8,estudio9,estudio10,estudio11,estudio12,estudio13,estudio14,estudio15,estudio16,estudiodescripcion1,estudiodescripcion2,estudiodescripcion3,estudiodescripcion4,estudiodescripcion5,estudiodescripcion6,estudiodescripcion7,estudiodescripcion8,estudiodescripcion9,estudiodescripcion10,estudiodescripcion11,estudiodescripcion12,estudiodescripcion13,estudiodescripcion14,estudiodescripcion15,estudiodescripcion16,estudioinstitucion1,estudioinstitucion2,estudioinstitucion3,estudioinstitucion4,estudioinstitucion5,estudioinstitucion6,estudioinstitucion7,estudioinstitucion8,estudioinstitucion9,estudioinstitucion10,estudioinstitucion11,estudioinstitucion12,estudioinstitucion13,estudioinstitucion14,estudioinstitucion15,estudioinstitucion16,estudioduracion4,estudioduracion5,estudioduracion6,estudioduracion7,estudioduracion8,estudioduracion9,estudioduracion10,estudioduracion11,cargodeinteres1,cargodeinteres2,cargodeinteres3,cargodeinteres4,cargodeinteres5,cargodeinteres6,cargodeinteres7,cargodeinteres8,cargodeinteres9,cargodeinteres10,contratodeinteres1,contratodeinteres2,contratodeinteres3,contratodeinteres4,contratodeinteres5,contratodeinteres6,contratodeinteres7,contratodeinteres8,contratodeinteres9,otrointeres1,otrointeres2,otrointeres3,otrointeres4,otrointeres5,otrointeres6,otrointeres7,otrointeres8,otrointeres9,otrointeres10,otrointeres11,otrointeres12,otrointeres13,otrointeres14,otrointeres15,otrointeres16,otrosestudiosintereses,autorizohabeasdata)  VALUES ('$contador','$correo_ingreso2','$nombre','$apellido','$pais','$ciudad','$telefono1','$telefono2','$linkedin','$facebook','$estudio1','$estudio2','$estudio3','$estudio4','$estudio5','$estudio6','$estudio7','$estudio8','$estudio9','$estudio10','$estudio11','$estudio12','$estudio13','$estudio14','$estudio15','$estudio16','$estudiodescripcion1','$estudiodescripcion2','$estudiodescripcion3','$estudiodescripcion4','$estudiodescripcion5','$estudiodescripcion6','$estudiodescripcion7','$estudiodescripcion8','$estudiodescripcion9','$estudiodescripcion10','$estudiodescripcion11','$estudiodescripcion12','$estudiodescripcion13','$estudiodescripcion14','$estudiodescripcion15','$estudiodescripcion16','$estudioinstitucion1','$estudioinstitucion2','$estudioinstitucion3','$estudioinstitucion4','$estudioinstitucion5','$estudioinstitucion6','$estudioinstitucion7','$estudioinstitucion8','$estudioinstitucion9','$estudioinstitucion10','$estudioinstitucion11','$estudioinstitucion12','$estudioinstitucion13','$estudioinstitucion14','$estudioinstitucion15','$estudioinstitucion16','$estudioduracion4','$estudioduracion5','$estudioduracion6','$estudioduracion7','$estudioduracion8','$estudioduracion9','$estudioduracion10','$estudioduracion11','$cargodeinteres1','$cargodeinteres2','$cargodeinteres3','$cargodeinteres4','$cargodeinteres5','$cargodeinteres6','$cargodeinteres7','$cargodeinteres8','$cargodeinteres9','$cargodeinteres10','$contratodeinteres1','$contratodeinteres2','$contratodeinteres3','$contratodeinteres4','$contratodeinteres5','$contratodeinteres6','$contratodeinteres7','$contratodeinteres8','$contratodeinteres9','$otrointeres1','$otrointeres2','$otrointeres3','$otrointeres4','$otrointeres5','$otrointeres6','$otrointeres7','$otrointeres8','$otrointeres9','$otrointeres10','$otrointeres11','$otrointeres12','$otrointeres13','$otrointeres14','$otrointeres15','$otrointeres16','$otrosestudiosintereses','$autorizohabeasdata','$mayordeedad')";

								mysqli_query($conexion , $sql) or die(mysqli_error($conexion ));
								
								echo "Hoja de vida ingresada con &eacute;xito!!!  ".date("Y-m-d H:i:s");
								
						}else{						
							// ACTUALIZAR HV EN LA BASE DE DATOS.
							// $sql = "UPDATE hv SET nombre='$nombre', apellido='$apellido', pais='$pais', ciudad='$ciudad', telefono1='$telefono1', telefono2='$telefono2', linkedin='$linkedin', facebook='$facebook', estudio1='$estudio1', estudio2='$estudio2', estudio3='$estudio3', estudio4='$estudio4', estudio5='$estudio5', estudio6='$estudio6', estudio7='$estudio7', estudio8='$estudio8', estudio9='$estudio9', estudio10='$estudio10', estudio11='$estudio11', estudio12='$estudio12', estudio13='$estudio13', estudio14='$estudio14', estudio15='$estudio15', estudio16='$estudio16', estudiodescripcion1='$estudiodescripcion1', estudiodescripcion2='$estudiodescripcion2', estudiodescripcion3='$estudiodescripcion3', estudiodescripcion4='$estudiodescripcion4', estudiodescripcion5='$estudiodescripcion5', estudiodescripcion6='$estudiodescripcion6', estudiodescripcion7='$estudiodescripcion7', estudiodescripcion8='$estudiodescripcion8', estudiodescripcion9='$estudiodescripcion9', estudiodescripcion10='$estudiodescripcion10', estudiodescripcion11='$estudiodescripcion11', estudiodescripcion12='$estudiodescripcion12', estudiodescripcion13='$estudiodescripcion13', estudiodescripcion14='$estudiodescripcion14', estudiodescripcion15='$estudiodescripcion15', estudiodescripcion16='$estudiodescripcion16', estudioinstitucion1='$estudioinstitucion1', estudioinstitucion2='$estudioinstitucion2', estudioinstitucion3='$estudioinstitucion3', estudioinstitucion4='$estudioinstitucion4', estudioinstitucion5='$estudioinstitucion5', estudioinstitucion6='$estudioinstitucion6', estudioinstitucion7='$estudioinstitucion7', estudioinstitucion8='$estudioinstitucion8', estudioinstitucion9='$estudioinstitucion9', estudioinstitucion10='$estudioinstitucion10', estudioinstitucion11='$estudioinstitucion11', estudioinstitucion12='$estudioinstitucion12', estudioinstitucion13='$estudioinstitucion13', estudioinstitucion14='$estudioinstitucion14', estudioinstitucion15='$estudioinstitucion15', estudioinstitucion16='$estudioinstitucion16', estudioduracion4='$estudioduracion4', estudioduracion5='$estudioduracion5', estudioduracion6='$estudioduracion6', estudioduracion7='$estudioduracion7', estudioduracion8='$estudioduracion8', estudioduracion9='$estudioduracion9', estudioduracion10='$estudioduracion10', estudioduracion11='$estudioduracion11', cargodeinteres1='$cargodeinteres1', cargodeinteres2='$cargodeinteres2', cargodeinteres3='$cargodeinteres3', cargodeinteres4='$cargodeinteres4', cargodeinteres5='$cargodeinteres5', cargodeinteres6='$cargodeinteres6', cargodeinteres7='$cargodeinteres7', cargodeinteres8='$cargodeinteres8', cargodeinteres9='$cargodeinteres9', cargodeinteres10='$cargodeinteres10', contratodeinteres1='$contratodeinteres1', contratodeinteres2='$contratodeinteres2', contratodeinteres3='$contratodeinteres3', contratodeinteres4='$contratodeinteres4', contratodeinteres5='$contratodeinteres5', contratodeinteres6='$contratodeinteres6', contratodeinteres7='$contratodeinteres7', contratodeinteres8='$contratodeinteres8', contratodeinteres9='$contratodeinteres9', otrointeres1='$otrointeres1', otrointeres2='$otrointeres2', otrointeres3='$otrointeres3', otrointeres4='$otrointeres4', otrointeres5='$otrointeres5', otrointeres6='$otrointeres6', otrointeres7='$otrointeres7', otrointeres8='$otrointeres8', otrointeres9='$otrointeres9', otrointeres10='$otrointeres10', otrointeres11='$otrointeres11', otrointeres12='$otrointeres12', otrointeres13='$otrointeres13', otrointeres14='$otrointeres14', otrointeres15='$otrointeres15', otrointeres16='$otrointeres16', otrosestudiosintereses='$otrosestudiosintereses', autorizohabeasdata='$autorizohabeasdata', mayordeedad='$mayordeedad' WHERE correo = '$correo_ingreso2'";
							// mysqli_query($conexion , $sql) or die(mysqli_error($conexion ));
							// echo "Hoja de vida actualizada con &eacute;xito!!!  ".date("Y-m-d H:i:s");
							echo ("La Hoja de Vida ya se encuentra en nuestra base de datos.<br/>Si desea modificarla, vaya a al men&uacute; <b><em><a href='https://redsst.com/hdv_actualizar.php'>Actualizar Hoja de Vida</a></em></b>.<br/>");
							goto end;								
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