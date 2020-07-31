<!-- CODIGO PARA MOSTAR HOJAS DE VIDA FILTRADAS --->

<?php 

	include "a_lib_descrakear_input.php";	//Aplicar descrakear_input ($conexion, $consulta, "PALABRA_PERMITIDA") antes de hacer un query.
	include "a_configurar_servidor.php";	//Definir variables globales para conexi√É¬≥n a servidor y base de datos MySQL.

		$conexion = mysqli_connect($servidor, $user, $password, $basededatos);
		mysqli_set_charset($conexion, 'utf8');		//CONECTARSE AL SERVIDOR CON UTF8 PARA HACER COMPATIBLES LOS CARACTERES Y EN ESPECIAL A a_lib_descrakear_input.php

		// --------------- CARGAR TODAS LAS SUPERGLOBALES POST EN VARIABLES LOCALES Y LUEGO DESCRACREARLAS
			$correo_ingreso2 = $_POST['correo_ingreso2'];
			$codigo_ingreso2 = $_POST['codigo_ingreso2'];

			$correo_ingreso2 = descrakear_input ($conexion , $correo_ingreso2, "@");
			$codigo_ingreso2 = descrakear_input ($conexion , $codigo_ingreso2, "@");
		// --------------- DE AQUÕ EN ADELANTE NO DEBEN HABER LECTURAS DE SENTENCIAS $_POST------------------------------------				

		if ($conexion){     
						// ------- BUSCAR EL C”DIGO DEL CORREO SUMINISTRADO EN TABLA usuarios PARA COMPARAR CON C”DIGO SUMINISTRADO POR EL USUARIO-------------------------
						//$sql = "SELECT codigo FROM `usuarios` WHERE correo = '".$correo_ingreso2."'";	//SI NO SE COLOCA EMAIL ENTRE COMILLAS SIMPLES SALE ERROR POR LA ARROBA
						$sql = "SELECT codigo FROM usuarios WHERE correo = '$correo_ingreso2'";	//VARIABLES PHP VAN ENTRE COMILLAS SIMPLES SALE ERROR POR LA ARROBA
						$resultado = mysqli_query($conexion , $sql) or die(mysqli_error($conexion));
						$fila = mysqli_fetch_row($resultado);
						mysqli_free_result($resultado);				//LIBERAR RESULTADO SIEMPRE, DESPU…S DE USARLO.
						/*while ($fila = mysqli_fetch_row($resultado)) {
							echo ($fila[0]);
						}*/						
						if ($codigo_ingreso2 != $fila[0]){
							echo ("La combinaci&oacute;n de correo y c&oacute;digo no coinciden. Int&eacute;ntelo nuevamente o vaya al paso 1."."<br/>");
							goto end;
						}

// ------------------------------------- VERIFICACIONES DE INGRESO M√É¬çNIMO DE DATOS REQUERIDOS.----------------------------------------------------------------------------

						if ($mensaje != "" ){
							echo ($mensaje);
							goto end;
						}
					
						//VERIFICAR FECHA inicio ES MAYOR QUE HOY()
						//$hoy = date("Y-m-d H:i:s"); // 2001-03-10 17:16:18 (el formato DATETIME de MySQL)
						//if( strtotime($inicio) < strtotime( date("d-m-Y") )){
						//	 $mensaje .= "Por favor seleccione una fecha futura."."<br/>";
						//}
						
						//https://www.anerbarrena.com/funciones-arrays-php-4718/
						//mysqli_free_result($resultado);
						
						//------------------------ CONSULTAR LAS HV CON FILTROS
						// $sql = "SELECT * FROM hv"; // Mostrar todo sin filtar 
						$sql = "SELECT * FROM hv WHERE correo = '$correo_ingreso2'";	//VARIABLES PHP VAN ENTRE COMILLAS SIMPLES SALE ERROR POR LA ARROBA						
						$resultado = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
						$fila = mysqli_fetch_row($resultado);	// LEER FILA DEL RESULTADO. $fila es un array
						mysqli_free_result($resultado);				//LIBERAR RESULTADO SIEMPRE, DESPUES DE USARLO.

						echo("<script>document.getElementById('correo_ingreso2').value='".$correo_ingreso2."';</script>");
						echo("<script>document.getElementById('codigo_ingreso2').value='".$codigo_ingreso2."';</script>");						

if ($fila[2] != ""){ echo("<script>document.getElementById('nombre').value='".$fila[2]."';</script>"); }
if ($fila[3] != ""){ echo("<script>document.getElementById('apellido').value='".$fila[3]."';</script>"); }
if ($fila[4] != ""){ echo("<script>document.getElementById('pais').value='".$fila[4]."';</script>"); }
if ($fila[5] != ""){ echo("<script>document.getElementById('ciudad').value='".$fila[5]."';</script>"); }
if ($fila[6] != ""){ echo("<script>document.getElementById('telefono1').value='".$fila[6]."';</script>"); }
if ($fila[7] != ""){ echo("<script>document.getElementById('telefono2').value='".$fila[7]."';</script>"); }
if ($fila[8] != ""){ echo("<script>document.getElementById('linkedin').value='".$fila[8]."';</script>"); }
if ($fila[9] != ""){ echo("<script>document.getElementById('facebook').value='".$fila[9]."';</script>"); }
if ($fila[10] != ""){ echo("<script>document.getElementById('estudio1').value='".$fila[10]."';</script>"); }
if ($fila[11] != ""){ echo("<script>document.getElementById('estudio2').value='".$fila[11]."';</script>"); }
if ($fila[12] != ""){ echo("<script>document.getElementById('estudio3').value='".$fila[12]."';</script>"); }
if ($fila[13] != ""){ echo("<script>document.getElementById('estudio4').value='".$fila[13]."';</script>"); }
if ($fila[14] != ""){ echo("<script>document.getElementById('estudio5').value='".$fila[14]."';</script>"); }
if ($fila[15] != ""){ echo("<script>document.getElementById('estudio6').value='".$fila[15]."';</script>"); }
if ($fila[16] != ""){ echo("<script>document.getElementById('estudio7').value='".$fila[16]."';</script>"); }
if ($fila[17] != ""){ echo("<script>document.getElementById('estudio8').value='".$fila[17]."';</script>"); }
if ($fila[18] != ""){ echo("<script>document.getElementById('estudio9').value='".$fila[18]."';</script>"); }
if ($fila[19] != ""){ echo("<script>document.getElementById('estudio10').value='".$fila[19]."';</script>"); }
if ($fila[20] != ""){ echo("<script>document.getElementById('estudio11').value='".$fila[20]."';</script>"); }
if ($fila[21] != ""){ echo("<script>document.getElementById('estudio12').value='".$fila[21]."';</script>"); }
if ($fila[22] != ""){ echo("<script>document.getElementById('estudio13').value='".$fila[22]."';</script>"); }
if ($fila[23] != ""){ echo("<script>document.getElementById('estudio14').value='".$fila[23]."';</script>"); }
if ($fila[24] != ""){ echo("<script>document.getElementById('estudio15').value='".$fila[24]."';</script>"); }
if ($fila[25] != ""){ echo("<script>document.getElementById('estudio16').value='".$fila[25]."';</script>"); }
if ($fila[26] != ""){ echo("<script>document.getElementById('estudiodescripcion1').value='".$fila[26]."';</script>"); }
if ($fila[27] != ""){ echo("<script>document.getElementById('estudiodescripcion2').value='".$fila[27]."';</script>"); }
if ($fila[28] != ""){ echo("<script>document.getElementById('estudiodescripcion3').value='".$fila[28]."';</script>"); }
if ($fila[29] != ""){ echo("<script>document.getElementById('estudiodescripcion4').value='".$fila[29]."';</script>"); }
if ($fila[30] != ""){ echo("<script>document.getElementById('estudiodescripcion5').value='".$fila[30]."';</script>"); }
if ($fila[31] != ""){ echo("<script>document.getElementById('estudiodescripcion6').value='".$fila[31]."';</script>"); }
if ($fila[32] != ""){ echo("<script>document.getElementById('estudiodescripcion7').value='".$fila[32]."';</script>"); }
if ($fila[33] != ""){ echo("<script>document.getElementById('estudiodescripcion8').value='".$fila[33]."';</script>"); }
if ($fila[34] != ""){ echo("<script>document.getElementById('estudiodescripcion9').value='".$fila[34]."';</script>"); }
if ($fila[35] != ""){ echo("<script>document.getElementById('estudiodescripcion10').value='".$fila[35]."';</script>"); }
if ($fila[36] != ""){ echo("<script>document.getElementById('estudiodescripcion11').value='".$fila[36]."';</script>"); }
if ($fila[37] != ""){ echo("<script>document.getElementById('estudiodescripcion12').value='".$fila[37]."';</script>"); }
if ($fila[38] != ""){ echo("<script>document.getElementById('estudiodescripcion13').value='".$fila[38]."';</script>"); }
if ($fila[39] != ""){ echo("<script>document.getElementById('estudiodescripcion14').value='".$fila[39]."';</script>"); }
if ($fila[40] != ""){ echo("<script>document.getElementById('estudiodescripcion15').value='".$fila[40]."';</script>"); }
if ($fila[41] != ""){ echo("<script>document.getElementById('estudiodescripcion16').value='".$fila[41]."';</script>"); }
if ($fila[42] != ""){ echo("<script>document.getElementById('estudioinstitucion1').value='".$fila[42]."';</script>"); }
if ($fila[43] != ""){ echo("<script>document.getElementById('estudioinstitucion2').value='".$fila[43]."';</script>"); }
if ($fila[44] != ""){ echo("<script>document.getElementById('estudioinstitucion3').value='".$fila[44]."';</script>"); }
if ($fila[45] != ""){ echo("<script>document.getElementById('estudioinstitucion4').value='".$fila[45]."';</script>"); }
if ($fila[46] != ""){ echo("<script>document.getElementById('estudioinstitucion5').value='".$fila[46]."';</script>"); }
if ($fila[47] != ""){ echo("<script>document.getElementById('estudioinstitucion6').value='".$fila[47]."';</script>"); }
if ($fila[48] != ""){ echo("<script>document.getElementById('estudioinstitucion7').value='".$fila[48]."';</script>"); }
if ($fila[49] != ""){ echo("<script>document.getElementById('estudioinstitucion8').value='".$fila[49]."';</script>"); }
if ($fila[50] != ""){ echo("<script>document.getElementById('estudioinstitucion9').value='".$fila[50]."';</script>"); }
if ($fila[51] != ""){ echo("<script>document.getElementById('estudioinstitucion10').value='".$fila[51]."';</script>"); }
if ($fila[52] != ""){ echo("<script>document.getElementById('estudioinstitucion11').value='".$fila[52]."';</script>"); }
if ($fila[53] != ""){ echo("<script>document.getElementById('estudioinstitucion12').value='".$fila[53]."';</script>"); }
if ($fila[54] != ""){ echo("<script>document.getElementById('estudioinstitucion13').value='".$fila[54]."';</script>"); }
if ($fila[55] != ""){ echo("<script>document.getElementById('estudioinstitucion14').value='".$fila[55]."';</script>"); }
if ($fila[56] != ""){ echo("<script>document.getElementById('estudioinstitucion15').value='".$fila[56]."';</script>"); }
if ($fila[57] != ""){ echo("<script>document.getElementById('estudioinstitucion16').value='".$fila[57]."';</script>"); }
if ($fila[58] != ""){ echo("<script>document.getElementById('estudioduracion4').value='".$fila[58]."';</script>"); }
if ($fila[59] != ""){ echo("<script>document.getElementById('estudioduracion5').value='".$fila[59]."';</script>"); }
if ($fila[60] != ""){ echo("<script>document.getElementById('estudioduracion6').value='".$fila[60]."';</script>"); }
if ($fila[61] != ""){ echo("<script>document.getElementById('estudioduracion7').value='".$fila[61]."';</script>"); }
if ($fila[62] != ""){ echo("<script>document.getElementById('estudioduracion8').value='".$fila[62]."';</script>"); }
if ($fila[63] != ""){ echo("<script>document.getElementById('estudioduracion9').value='".$fila[63]."';</script>"); }
if ($fila[64] != ""){ echo("<script>document.getElementById('estudioduracion10').value='".$fila[64]."';</script>"); }
if ($fila[65] != ""){ echo("<script>document.getElementById('estudioduracion11').value='".$fila[65]."';</script>"); }

//CHECKBOXES se debe cargar true en la propiedad checked
if ($fila[66] == "Si"){ echo("<script>document.getElementById('cargodeinteres1').checked = true;</script>"); }
if ($fila[67] == "Si"){ echo("<script>document.getElementById('cargodeinteres2').checked = true;</script>"); }
if ($fila[68] == "Si"){ echo("<script>document.getElementById('cargodeinteres3').checked = true;</script>"); }
if ($fila[69] == "Si"){ echo("<script>document.getElementById('cargodeinteres4').checked = true;</script>"); }
if ($fila[70] == "Si"){ echo("<script>document.getElementById('cargodeinteres5').checked = true;</script>"); }
if ($fila[71] == "Si"){ echo("<script>document.getElementById('cargodeinteres6').checked = true;</script>"); }
if ($fila[72] == "Si"){ echo("<script>document.getElementById('cargodeinteres7').checked = true;</script>"); }
if ($fila[73] == "Si"){ echo("<script>document.getElementById('cargodeinteres8').checked = true;</script>"); }
if ($fila[74] == "Si"){ echo("<script>document.getElementById('cargodeinteres9').checked = true;</script>"); }
if ($fila[75] == "Si"){ echo("<script>document.getElementById('cargodeinteres10').checked = true;</script>"); }
if ($fila[76] == "Si"){ echo("<script>document.getElementById('contratodeinteres1').checked = true;</script>"); }
if ($fila[77] == "Si"){ echo("<script>document.getElementById('contratodeinteres2').checked = true;</script>"); }
if ($fila[78] == "Si"){ echo("<script>document.getElementById('contratodeinteres3').checked = true;</script>"); }
if ($fila[79] == "Si"){ echo("<script>document.getElementById('contratodeinteres4').checked = true;</script>"); }
if ($fila[80] == "Si"){ echo("<script>document.getElementById('contratodeinteres5').checked = true;</script>"); }
if ($fila[81] == "Si"){ echo("<script>document.getElementById('contratodeinteres6').checked = true;</script>"); }
if ($fila[82] == "Si"){ echo("<script>document.getElementById('contratodeinteres7').checked = true;</script>"); }
if ($fila[83] == "Si"){ echo("<script>document.getElementById('contratodeinteres8').checked = true;</script>"); }
if ($fila[84] == "Si"){ echo("<script>document.getElementById('contratodeinteres9').checked = true;</script>"); }
if ($fila[85] == "Si"){ echo("<script>document.getElementById('otrointeres1').checked = true;</script>"); }
if ($fila[86] == "Si"){ echo("<script>document.getElementById('otrointeres2').checked = true;</script>"); }
if ($fila[87] == "Si"){ echo("<script>document.getElementById('otrointeres3').checked = true;</script>"); }
if ($fila[88] == "Si"){ echo("<script>document.getElementById('otrointeres4').checked = true;</script>"); }
if ($fila[89] == "Si"){ echo("<script>document.getElementById('otrointeres5').checked = true;</script>"); }
if ($fila[90] == "Si"){ echo("<script>document.getElementById('otrointeres6').checked = true;</script>"); }
if ($fila[91] == "Si"){ echo("<script>document.getElementById('otrointeres7').checked = true;</script>"); }
if ($fila[92] == "Si"){ echo("<script>document.getElementById('otrointeres8').checked = true;</script>"); }
if ($fila[93] == "Si"){ echo("<script>document.getElementById('otrointeres9').checked = true;</script>"); }
if ($fila[94] == "Si"){ echo("<script>document.getElementById('otrointeres10').checked = true;</script>"); }
if ($fila[95] == "Si"){ echo("<script>document.getElementById('otrointeres11').checked = true;</script>"); }
if ($fila[96] == "Si"){ echo("<script>document.getElementById('otrointeres12').checked = true;</script>"); }
if ($fila[97] == "Si"){ echo("<script>document.getElementById('otrointeres13').checked = true;</script>"); }
if ($fila[98] == "Si"){ echo("<script>document.getElementById('otrointeres14').checked = true;</script>"); }
if ($fila[99] == "Si"){ echo("<script>document.getElementById('otrointeres15').checked = true;</script>"); }
if ($fila[100] == "Si"){ echo("<script>document.getElementById('otrointeres16').checked = true;</script>"); }

if ($fila[101] != ""){ echo("<script>document.getElementById('otrosestudiosintereses').value='".$fila[101]."';</script>"); }

						
						echo ("Datos cargados exit&oacute;samente. En el siguiente paso puede modificarlos y luego guardarlos con el bot&oacute;n <b><em>Guardar</em></b> al final del formulario.");			
				
				end:
				mysqli_close($conexion);
				
		}	//CIERRE DE if($conexion){
		else{
				echo ("Error (2) al conectar la base de datos, actualice la p&aacute;gina e int&eacute;ntelo nuevamente.");
				mysqli_close($conexion);
		}
	
?>