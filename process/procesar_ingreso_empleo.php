
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
			$titulo1 = $_POST['titulo1'];
			$titulo2 = $_POST['titulo2'];
			$pais = $_POST['pais'];
			$ciudad = $_POST['ciudad'];
			$telefono1 = $_POST['telefono1'];
			$telefono2 = $_POST['telefono2'];
			$paginaweb1 = $_POST['paginaweb1'];
			$paginaweb2 = $_POST['paginaweb2'];
			$fechainicio = $_POST['fechainicio'];
			$fechafin = $_POST['fechafin'];
			$rangosalarioinferior = $_POST['rangosalarioinferior'];
			$rangosalariosuperior = $_POST['rangosalariosuperior'];
			$experiencia = $_POST['experiencia'];

			if(isset($_POST['requiereviajar'])){$requiereviajar = "Si";}else{$requiereviajar = "No";}
			if(isset($_POST['requierelicencia'])){$requierelicencia = "Si";}else{$requierelicencia = "No";}

			$sectordelaempresa = $_POST['sectordelaempresa'];
			$nombredelaempresa = $_POST['nombredelaempresa'];
			$niveldeestudio = $_POST['niveldeestudio'];
			$niveldecargo = $_POST['niveldecargo'];
			$tipodecontrato = $_POST['tipodecontrato'];
			$interesprincipal= $_POST['interesprincipal'];
			
			if(isset($_POST['interesespecifico1'])){$interesespecifico1 = "Si";}else{$interesespecifico1 = "No";}
			if(isset($_POST['interesespecifico2'])){$interesespecifico2 = "Si";}else{$interesespecifico2 = "No";}
			if(isset($_POST['interesespecifico3'])){$interesespecifico3 = "Si";}else{$interesespecifico3 = "No";}
			if(isset($_POST['interesespecifico4'])){$interesespecifico4 = "Si";}else{$interesespecifico4 = "No";}
			if(isset($_POST['interesespecifico5'])){$interesespecifico5 = "Si";}else{$interesespecifico5 = "No";}
			if(isset($_POST['interesespecifico6'])){$interesespecifico6 = "Si";}else{$interesespecifico6 = "No";}
			if(isset($_POST['interesespecifico7'])){$interesespecifico7 = "Si";}else{$interesespecifico7 = "No";}
			if(isset($_POST['interesespecifico8'])){$interesespecifico8 = "Si";}else{$interesespecifico8 = "No";}
			if(isset($_POST['interesespecifico9'])){$interesespecifico9 = "Si";}else{$interesespecifico9 = "No";}
			if(isset($_POST['interesespecifico10'])){$interesespecifico10 = "Si";}else{$interesespecifico10 = "No";}
			if(isset($_POST['interesespecifico11'])){$interesespecifico11 = "Si";}else{$interesespecifico11 = "No";}
			if(isset($_POST['interesespecifico12'])){$interesespecifico12 = "Si";}else{$interesespecifico12 = "No";}
			if(isset($_POST['interesespecifico13'])){$interesespecifico13 = "Si";}else{$interesespecifico13 = "No";}
			if(isset($_POST['interesespecifico14'])){$interesespecifico14 = "Si";}else{$interesespecifico14 = "No";}
			if(isset($_POST['interesespecifico15'])){$interesespecifico15 = "Si";}else{$interesespecifico15 = "No";}
			if(isset($_POST['interesespecifico16'])){$interesespecifico16 = "Si";}else{$interesespecifico16 = "No";}

			$descripciondelcargo = $_POST['descripciondelcargo'];
			$requisitosobligatorios = $_POST['requisitosobligatorios'];
			$requisitosdeseables = $_POST['requisitosdeseables'];

			// The Notice comes up because you're trying to access items in an array that don't exist. It's not a problem, but PHP will spawn a Notice on it,
			// because it's not the intended way to do it. Check if something is set through isset or !empty. Chechbox is null if it isn't set.
			// ------------- VERIFICAR CADA CHECHBOX: SI FUE SELECCIONADO ENTONCES ASIGNARLE EL VALOR LEIDO "Si", SI NO, ASIGNARLE "No".----------------------------------

			if(isset($_POST['autorizohabeasdata'])){$autorizohabeasdata = "Acepto";}else{$autorizohabeasdata = "No";}
			if(isset($_POST['mayordeedad'])){$mayordeedad = "Si";}else{$mayordeedad = "No";}
			$actualizar = $_POST['actualizar'];
			$ide = $_POST['ide'];

			$correo_ingreso2 = descrakear_input ($conexion , $correo_ingreso2, "@_-.");
			$codigo_ingreso2 = descrakear_input ($conexion , $codigo_ingreso2, "@_-.");
			$titulo1 = descrakear_input ($conexion , $titulo1, "-");
			$titulo2 = descrakear_input ($conexion , $titulo2, "-");
			$pais = descrakear_input ($conexion , $pais, "");
			$ciudad = descrakear_input ($conexion , $ciudad, "");
			$telefono1 = descrakear_input ($conexion , $telefono1, "");
			$telefono2 = descrakear_input ($conexion , $telefono2, "");
			$paginaweb1 = descrakear_input ($conexion , $paginaweb1, ":./-=");
			$paginaweb2 = descrakear_input ($conexion , $paginaweb2, ":./-=");
			$fechainicio = descrakear_input ($conexion , $fechainicio, "-");
			$fechafin = descrakear_input ($conexion , $fechafin, "-");			
			$rangosalarioinferior = descrakear_input ($conexion , $rangosalarioinferior, "");
			$rangosalariosuperior = descrakear_input ($conexion , $rangosalariosuperior, "");
			$experiencia = descrakear_input ($conexion , $experiencia, "");
			$requiereviajar = descrakear_input ($conexion , $requiereviajar, "");
			$requierelicencia = descrakear_input ($conexion , $requierelicencia, "");
			$sectordelaempresa = descrakear_input ($conexion , $sectordelaempresa, "");
			$nombredelaempresa = descrakear_input ($conexion , $nombredelaempresa, "");
			$niveldeestudio = descrakear_input ($conexion , $niveldeestudio, "");
			$niveldecargo = descrakear_input ($conexion , $niveldecargo, "");
			$tipodecontrato = descrakear_input ($conexion , $tipodecontrato, "");
			$interesprincipal = descrakear_input ($conexion , $interesprincipal, "");
			
			$interesespecifico1 = descrakear_input ($conexion , $interesespecifico1, "");
			$interesespecifico2 = descrakear_input ($conexion , $interesespecifico2, "");
			$interesespecifico3 = descrakear_input ($conexion , $interesespecifico3, "");
			$interesespecifico4 = descrakear_input ($conexion , $interesespecifico4, "");
			$interesespecifico5 = descrakear_input ($conexion , $interesespecifico5, "");
			$interesespecifico6 = descrakear_input ($conexion , $interesespecifico6, "");
			$interesespecifico7 = descrakear_input ($conexion , $interesespecifico7, "");
			$interesespecifico8 = descrakear_input ($conexion , $interesespecifico8, "");
			$interesespecifico9 = descrakear_input ($conexion , $interesespecifico9, "");
			$interesespecifico10 = descrakear_input ($conexion , $interesespecifico10, "");
			$interesespecifico11 = descrakear_input ($conexion , $interesespecifico11, "");
			$interesespecifico12 = descrakear_input ($conexion , $interesespecifico12, "");
			$interesespecifico13 = descrakear_input ($conexion , $interesespecifico13, "");
			$interesespecifico14 = descrakear_input ($conexion , $interesespecifico14, "");
			$interesespecifico15 = descrakear_input ($conexion , $interesespecifico15, "");
			$interesespecifico16 = descrakear_input ($conexion , $interesespecifico16, "");
			
			$descripciondelcargo = descrakear_input ($conexion , $descripciondelcargo, "");
			$requisitosobligatorios = descrakear_input ($conexion , $requisitosobligatorios, "");
			$requisitosdeseables = descrakear_input ($conexion , $requisitosdeseables, "");

			$autorizohabeasdata = descrakear_input ($conexion , $autorizohabeasdata, "");
			$mayordeedad = descrakear_input ($conexion , $mayordeedad, "");
			$actualizar = descrakear_input ($conexion , $actualizar, "");

		// --------------- DE AQUÍ EN ADELANTE NO DEBEN HABER LECTURAS DE SENTENCIAS $_POST------------------------------------				
	
		if ($conexion){     
				if ( strlen($correo_ingreso2) < 10 or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$correo_ingreso2))
				{
					// if($_POST['email'] == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['email']))
						echo ("Ingrese un correo electr&oacute;nico v&aacute;lido.");
				}
				else{
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
						if ( strlen($titulo1) < 3 ){
							 $mensaje .= "Por favor ingrese el t&iacute;tulo de la oferta."."<br/>";
						}
						if ( $pais == 'Ninguno' ){
							 $mensaje .= "Por favor seleccione el pa&iacute;s de la oferta."."<br/>";
						}
						$fechaactual = date("Y-m-d");								// DEBE SELECCIONAR FECHAS VIGENTES
						if ($fechainicio < $fechaactual) {
							 $mensaje .= "La fecha de inicio no puede ser anterior al dia de hoy."."<br/>";
						}
						if ($fechafin < $fechaactual) {
							 $mensaje .= "La fecha de finalizaci&oacute;n no puede ser anterior al dia de hoy."."<br/>";
						}
						if ( $niveldeestudio == 'Ninguno' ){								// DEBE SELECCIONAR NIVEL DE ESTUDIO REQUERIDO
							 $mensaje .= "Por favor ingrese el nivel de estudio requerido."."<br/>";
						}
						if ( $niveldecargo == 'Ninguno' ){
							 $mensaje .= "Por favor ingrese el nivel del cargo ofrecido."."<br/>";
						}
						if ( $tipodecontrato == 'Ninguno' ){
							 $mensaje .= "Por favor ingrese el tipo de contrato ofrecido."."<br/>";
						}
						if ( $interesprincipal == 'Ninguno' ){
							 $mensaje .= "Por favor seleccione el Inter&eacute;s principal del cargo ofrecido."."<br/>";
						}
						if ( strlen($descripciondelcargo) < 10 ){
							 $mensaje .= "Por favor ingrese la descripci&oacute;n detallada de la oferta."."<br/>";
						}
						if ( ($autorizohabeasdata=='No') )		// DEBE AUTORIZAR EL TRATAMIENTO DE DATOS HABEAS DATA.
						{
							$mensaje .= "Debe aceptar nuestra Pol&iacute;tica de manejo de informaci&oacute;n personal antes de continuar."."<br/>";
						}
						if ( ($mayordeedad=='No') )						// DEBE CERTIFICAR QUE ES MAYOR DE EDAD.
						{
							$mensaje .= "Debe certificar que es mayor de 18 a&ntilde;os antes de continuar."."<br/>";
						}


						// ------ SI HAY ALGUN MENSAJE (ALERTA), MOSTRARÁ EL MENSAJE Y TERMINARÁ ESTE PROCESO
						if ($mensaje != "" ){
							echo ($mensaje);
							goto end;
						}

						if($actualizar == "No"){	// VIENE DE empleo_ingresar.php
								// ------ CONTAR NÚMERO DE OFERTAS EMPLEOS PARA ASIGNAR EL SIGUIENTE id. EN CASO DE INGRESAR UNA OFERTA DE EMPLEO NUEVA
								$sql = "SELECT * FROM empleo";
								$resultado = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
								$contador = mysqli_num_rows($resultado);
								mysqli_free_result($resultado);				//LIBERAR RESULTADO SIEMPRE, DESPUÉS DE USARLO.
		
								// ------ 	VERIFICAR SI PARA EL CORREO INGRESADO, YA EXISTE UNA OFERTA DE EMPLEO CON EL MISMO TÍTULO PRINCIPAL ($titulo1).
								$sql = "SELECT * FROM empleo WHERE correo = '$correo_ingreso2'";	//VARIABLES PHP VAN ENTRE COMILLAS SIMPLES SALE ERROR POR LA ARROBA						
								$resultado = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
								$repetida = false;
								while ($fila = mysqli_fetch_row($resultado)){			// LEER FILA POR FILA DEL RESULTADO. $fila es un array
									if( $fila[2] == $titulo1 ){
										$repetida = true;
									}
								}						
								mysqli_free_result($resultado);
								
								if ($repetida){
									echo ("La oferta de empleo ya se encuentra en nuestra base de datos.<br/>Si desea modificarla, vaya a al men&uacute; <b><em><a href='https://redsst.com/empleo_actualizar.php'>Actualizar empleo</a></em></b>.<br/>Si desea ingresar una nueva oferta laboral, debe usar otro t&iacute;tulo principal.<br/>");
									goto end;
								}
								
								// INGRESAR OFERTA EMPLEO NUEVA A LA BASE DE DATOS.
								$sql = "INSERT INTO empleo (ID,correo,titulo1,titulo2,pais,ciudad,telefono1,telefono2,paginaweb1,paginaweb2,fechainicio,fechafin,rangosalarioinferior,rangosalariosuperior,experiencia,requiereviajar,requierelicencia,sectordelaempresa,nombredelaempresa,niveldeestudio,niveldecargo,tipodecontrato,interesprincipal,interesespecifico1,interesespecifico2,interesespecifico3,interesespecifico4,interesespecifico5,interesespecifico6,interesespecifico7,interesespecifico8,interesespecifico9,interesespecifico10,interesespecifico11,interesespecifico12,interesespecifico13,interesespecifico14,interesespecifico15,interesespecifico16,descripciondelcargo,requisitosobligatorios,requisitosdeseables,autorizohabeasdata,mayordeedad)	VALUES ('$contador','$correo_ingreso2','$titulo1','$titulo2','$pais','$ciudad','$telefono1','$telefono2','$paginaweb1','$paginaweb2','$fechainicio','$fechafin','$rangosalarioinferior','$rangosalariosuperior','$experiencia','$requiereviajar','$requierelicencia','$sectordelaempresa','$nombredelaempresa','$niveldeestudio','$niveldecargo','$tipodecontrato','$interesprincipal','$interesespecifico1','$interesespecifico2','$interesespecifico3','$interesespecifico4','$interesespecifico5','$interesespecifico6','$interesespecifico7','$interesespecifico8','$interesespecifico9','$interesespecifico10','$interesespecifico11','$interesespecifico12','$interesespecifico13','$interesespecifico14','$interesespecifico15','$interesespecifico16','$descripciondelcargo','$requisitosobligatorios','$requisitosdeseables','$autorizohabeasdata','$mayordeedad')";
								mysqli_query($conexion , $sql) or die(mysqli_error($conexion ));
								echo "Oferta de Empleo ingresada con &eacute;xito!!!  ".date("Y-m-d H:i:s");
						}

						if ($actualizar == "Si") {		// VIENE DE empleo_actualizar2.php
								// VERIFICAR SI EL CORREO INGRESADO CORRESPONDE CON EL ID DE LA OFERTA DE EMPLEO A MODIFICAR (SI ES EL DUEÑO)
								$sql = "SELECT * FROM empleo WHERE ID = '$ide'";	//VARIABLES PHP VAN ENTRE COMILLAS SIMPLES SALE ERROR POR LA ARROBA
								$resultado = mysqli_query($conexion , $sql) or die(mysqli_error($conexion));
								$fila = mysqli_fetch_row($resultado);
								mysqli_free_result($resultado);				//LIBERAR RESULTADO SIEMPRE, DESPUÉS DE USARLO.

								if ($correo_ingreso2 != $fila[1]){
									echo ("El correo ingresado no corresponde a los datos guardados en esta Oferta de Empleo.<br/>");
									goto end;
								}
								
								// ACTUALIZAR HV EN LA BASE DE DATOS.
								$sql = "UPDATE empleo SET titulo1='$titulo1', titulo2='$titulo2', pais='$pais', ciudad='$ciudad', telefono1='$telefono1', telefono2='$telefono2', paginaweb1='$paginaweb1', paginaweb2='$paginaweb2', fechainicio='$fechainicio', fechafin='$fechafin', rangosalarioinferior='$rangosalarioinferior', rangosalariosuperior='$rangosalariosuperior', experiencia='$experiencia', requiereviajar='$requiereviajar', requierelicencia='$requierelicencia', sectordelaempresa='$sectordelaempresa', nombredelaempresa='$nombredelaempresa', niveldeestudio='$niveldeestudio', niveldecargo='$niveldecargo', tipodecontrato='$tipodecontrato', interesprincipal='$interesprincipal', interesespecifico1='$interesespecifico1', interesespecifico2='$interesespecifico2', interesespecifico3='$interesespecifico3', interesespecifico4='$interesespecifico4', interesespecifico5='$interesespecifico5', interesespecifico6='$interesespecifico6', interesespecifico7='$interesespecifico7', interesespecifico8='$interesespecifico8', interesespecifico9='$interesespecifico9', interesespecifico10='$interesespecifico10', interesespecifico11='$interesespecifico11', interesespecifico12='$interesespecifico12', interesespecifico13='$interesespecifico13', interesespecifico14='$interesespecifico14', interesespecifico15='$interesespecifico15', interesespecifico16='$interesespecifico16', descripciondelcargo='$descripciondelcargo', requisitosobligatorios='$requisitosobligatorios', requisitosdeseables='$requisitosdeseables', autorizohabeasdata='$autorizohabeasdata', mayordeedad='$mayordeedad' WHERE ID = '$ide'";
								mysqli_query($conexion , $sql) or die(mysqli_error($conexion ));
								echo "Oferta de Empleo actualizada con &eacute;xito!!!  ".date("Y-m-d H:i:s");
						}

						
				}	//cierre de else{
				
				end:
				mysqli_close($conexion);
				
		}	//CIERRE DE if($conexion){
		else{
				echo ("Error (2) al conectar la base de datos, actualice la p&aacute;gina e int&eacute;ntelo nuevamente.");
				mysqli_close($conexion);
		}
	
?>