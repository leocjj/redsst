<!-- CODIGO PARA MOSTAR HOJAS DE VIDA FILTRADAS --->

<?php 

	include "a_lib_descrakear_input.php";	//Aplicar descrakear_input ($conexion, $consulta, "PALABRA_PERMITIDA") antes de hacer un query.
	include "a_configurar_servidor.php";	//Definir variables globales para conexi√É¬≥n a servidor y base de datos MySQL.

		$conexion = mysqli_connect($servidor, $user, $password, $basededatos);
		mysqli_set_charset($conexion, 'utf8');		//CONECTARSE AL SERVIDOR CON UTF8 PARA HACER COMPATIBLES LOS CARACTERES Y EN ESPECIAL A a_lib_descrakear_input.php

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

			if ($mensaje != "" ){	echo ($mensaje);	goto end;	}
		
			// ------ 	CONTAR PARA EL CORREO INGRESADO, LA CANTIDAD DE OFERTAS DE EMPLEO YA INGRESAS.
			//'$contador','$correo_ingreso2','$titulo1',
			$sql = "SELECT * FROM empleo WHERE correo = '$correo_ingreso2'";	//VARIABLES PHP VAN ENTRE COMILLAS SIMPLES SALE ERROR POR LA ARROBA						
			$resultado = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
			$contador = mysqli_num_rows($resultado);			
			$fila = mysqli_fetch_row($resultado);	// LEER FILA DEL RESULTADO. $fila es un array

//   0   1      2       3      4    5       6          7         8          9           10        11            12                  13                14            15            16                17                18               19           20              21             22
// ID,correo,titulo1,titulo2,pais,ciudad,telefono1,telefono2,paginaweb1,paginaweb2,fechainicio,fechafin,rangosalarioinferior,rangosalariosuperior,experiencia,requiereviajar,requierelicencia,sectordelaempresa,nombredelaempresa,niveldeestudio,niveldecargo,tipodecontrato,interesprincipal

				echo("<script>document.getElementById('correo_ingreso2').value='".$correo_ingreso2."';</script>");
				echo("<script>document.getElementById('codigo_ingreso2').value='".$codigo_ingreso2."';</script>");						

				if ($fila[2] != ""){ echo("<script>document.getElementById('titulo1').value='".$fila[2]."';</script>"); }
				if ($fila[3] != ""){ echo("<script>document.getElementById('titulo2').value='".$fila[3]."';</script>"); }
				if ($fila[4] != ""){ echo("<script>document.getElementById('pais').value='".$fila[4]."';</script>"); }
				if ($fila[5] != ""){ echo("<script>document.getElementById('ciudad').value='".$fila[5]."';</script>"); }
				if ($fila[6] != ""){ echo("<script>document.getElementById('telefono1').value='".$fila[6]."';</script>"); }
				if ($fila[7] != ""){ echo("<script>document.getElementById('telefono2').value='".$fila[7]."';</script>"); }
				if ($fila[8] != ""){ echo("<script>document.getElementById('paginaweb1').value='".$fila[8]."';</script>"); }
				if ($fila[9] != ""){ echo("<script>document.getElementById('paginaweb2').value='".$fila[9]."';</script>"); }
				if ($fila[10] != ""){ echo("<script>document.getElementById('fechainicio').value='".$fila[10]."';</script>"); }
				if ($fila[11] != ""){ echo("<script>document.getElementById('fechafin').value='".$fila[11]."';</script>"); }
				if ($fila[12] != ""){ echo("<script>document.getElementById('rangosalarioinferior').value='".$fila[12]."';</script>"); }
				if ($fila[13] != ""){ echo("<script>document.getElementById('rangosalariosuperior').value='".$fila[13]."';</script>"); }													
				if ($fila[14] != ""){ echo("<script>document.getElementById('experiencia').value='".$fila[14]."';</script>"); }
				if ($fila[15] == "Si"){ echo("<script>document.getElementById('requiereviajar').checked = true;</script>"); }							
				if ($fila[16] == "Si"){ echo("<script>document.getElementById('requierelicencia').checked = true;</script>"); }							
				if ($fila[17] != ""){ echo("<script>document.getElementById('sectordelaempresa').value='".$fila[17]."';</script>"); }
				if ($fila[18] != ""){ echo("<script>document.getElementById('nombredelaempresa').value='".$fila[18]."';</script>"); }
				if ($fila[19] != ""){ echo("<script>document.getElementById('niveldeestudio').value='".$fila[19]."';</script>"); }
				if ($fila[20] != ""){ echo("<script>document.getElementById('niveldecargo').value='".$fila[20]."';</script>"); }
				if ($fila[21] != ""){ echo("<script>document.getElementById('tipodecontrato').value='".$fila[21]."';</script>"); }
				if ($fila[22] != ""){ echo("<script>document.getElementById('interesprincipal').value='".$fila[22]."';</script>"); }

				//CHECKBOXES se debe cargar true en la propiedad checked
				//if ($fila[66] == "on"){ echo("<script>document.getElementById('cargodeinteres1').checked = true;</script>"); }

				if ($fila[23] == "Si"){ echo("<script>document.getElementById('interesespecifico1').checked = true;</script>"); }							
				if ($fila[24] == "Si"){ echo("<script>document.getElementById('interesespecifico2').checked = true;</script>"); }	
				if ($fila[25] == "Si"){ echo("<script>document.getElementById('interesespecifico3').checked = true;</script>"); }	
				if ($fila[26] == "Si"){ echo("<script>document.getElementById('interesespecifico4').checked = true;</script>"); }
				if ($fila[27] == "Si"){ echo("<script>document.getElementById('interesespecifico5').checked = true;</script>"); }	
				if ($fila[28] == "Si"){ echo("<script>document.getElementById('interesespecifico6').checked = true;</script>"); }	
				if ($fila[29] == "Si"){ echo("<script>document.getElementById('interesespecifico7').checked = true;</script>"); }	
				if ($fila[30] == "Si"){ echo("<script>document.getElementById('interesespecifico8').checked = true;</script>"); }	
				if ($fila[31] == "Si"){ echo("<script>document.getElementById('interesespecifico9').checked = true;</script>"); }	
				if ($fila[32] == "Si"){ echo("<script>document.getElementById('interesespecifico10').checked = true;</script>"); }	
				if ($fila[33] == "Si"){ echo("<script>document.getElementById('interesespecifico11').checked = true;</script>"); }	
				if ($fila[34] == "Si"){ echo("<script>document.getElementById('interesespecifico12').checked = true;</script>"); }	
				if ($fila[35] == "Si"){ echo("<script>document.getElementById('interesespecifico13').checked = true;</script>"); }	
				if ($fila[36] == "Si"){ echo("<script>document.getElementById('interesespecifico14').checked = true;</script>"); }	
				if ($fila[37] == "Si"){ echo("<script>document.getElementById('interesespecifico15').checked = true;</script>"); }	
				if ($fila[38] == "Si"){ echo("<script>document.getElementById('interesespecifico16').checked = true;</script>"); }	

				if ($fila[39] != ""){ echo("<script>document.getElementById('descripciondelcargo').value='".$fila[39]."';</script>"); }
				if ($fila[40] != ""){ echo("<script>document.getElementById('requisitosobligatorios').value='".$fila[40]."';</script>"); }
				if ($fila[41] != ""){ echo("<script>document.getElementById('requisitosdeseables').value='".$fila[41]."';</script>"); }
			
				echo ("Datos cargados exit&oacute;samente. En el siguiente paso puede modificarlos y luego guardarlos con el bot&oacute;n <b><em>Guardar</em></b> al final del formulario.");			
				
			end:
			mysqli_free_result($resultado);				//LIBERAR RESULTADO SIEMPRE, DESPUES DE USARLO.
			mysqli_close($conexion);
				
		}	//CIERRE DE if($conexion){
		else{
				echo ("Error (2) al conectar la base de datos, actualice la p&aacute;gina e int&eacute;ntelo nuevamente.");
				mysqli_close($conexion);
		}
	
?>