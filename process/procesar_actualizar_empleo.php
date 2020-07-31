<!-- CODIGO PARA MOSTAR HOJAS DE VIDA FILTRADAS --->

<?php 

	include "a_lib_descrakear_input.php";	//Aplicar descrakear_input ($conexion, $consulta, "PALABRA_PERMITIDA") antes de hacer un query.
	include "a_configurar_servidor.php";	//Definir variables globales para conexiÃƒÂ³n a servidor y base de datos MySQL.

		$conexion = mysqli_connect($servidor, $user, $password, $basededatos);
		mysqli_set_charset($conexion, 'utf8');		//CONECTARSE AL SERVIDOR CON UTF8 PARA HACER COMPATIBLES LOS CARACTERES Y EN ESPECIAL A a_lib_descrakear_input.php

		// --------------- CARGAR TODAS LAS SUPERGLOBALES POST EN VARIABLES LOCALES Y LUEGO DESCRACREARLAS
			
			$correo_ingreso2 = $_POST['correo_ingreso2'];
			$codigo_ingreso2 = $_POST['codigo_ingreso2'];

			$correo_ingreso2 = descrakear_input ($conexion , $correo_ingreso2, "@");
			$codigo_ingreso2 = descrakear_input ($conexion , $codigo_ingreso2, "@");
	
		// --------------- DE AQUÍ EN ADELANTE NO DEBEN HABER LECTURAS DE SENTENCIAS $_POST------------------------------------				

		if ($conexion){     

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
			
				// ------ 	CONTAR PARA EL CORREO INGRESADO, LA CANTIDAD DE OFERTAS DE EMPLEO YA INGRESAS.
				$sql = "SELECT * FROM empleo WHERE correo = '$correo_ingreso2'";	//VARIABLES PHP VAN ENTRE COMILLAS SIMPLES SALE ERROR POR LA ARROBA						
				$resultado = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
				$contador = mysqli_num_rows($resultado);			
				//$fila = mysqli_fetch_row($resultado);	// LEER FILA DEL RESULTADO. $fila es un array
				
				if ($contador==0){
					echo("No se encontraron hojas de vida ingresadas con el correo electr&oacute;nico suministrado");
					goto end;
				}

$codigo_actualizar_empleo = "";
$codigo_actualizar_empleo .= <<<"ENDTitulo"
<br/><br/><section><div class='table-wrapper'>
<table id="myTable" class="tablesorter">
<thead><tr> <th>Oferta laboral (clic para actualizar)</th> <th> </th> <th>Pa&iacute;s</th> <th>Ciudad</th> <th>Inter&eacute;s principal</th> </tr> </thead> <tbody>
ENDTitulo;
				//-------------LEER Y MOSTRAR CADA UNA DE LAS FILAS DE $resultado ----------------------------------------------------------------
						while ($fila = mysqli_fetch_row($resultado)){			// LEER FILA POR FILA DEL RESULTADO. $fila es un array	
							$codigo_actualizar_empleo .= "<tr>";									// CREAR FILA DE LA TABLA
							for ( $i=1 ; $i<= count($fila) ; $i++){				// CARGAR LA FILA CON VARIAS COLUMNAS HASTA LLEGAR EL FINAL DE LA $fila
								if( $i==3 OR $i==4 OR $i==5 OR $i==22 ){		// CONDICIONALES PARA MOSTRAR SOLO ALGUNAS DE LAS COLUMNAS
									$codigo_actualizar_empleo .= "<td>".$fila[$i]."</td>";
								}elseif( $i==2 ) {
									$codigo_actualizar_empleo .= "<td><a href='https://redsst.com/empleo_actualizar2.php?id=$fila[0]' >$fila[$i]</a></td>";
								}
							}
						}
//-------------IMPRIMIR FINAL DE LA TABLA CON PIE DE PAGINA --------------------------------------------------------------------------------------------------
$codigo_actualizar_empleo .= "</tbody><tfoot><tr><td colspan='2'></td><td></td></tr></tfoot>  </table></div></section>";
echo $codigo_actualizar_empleo;

			mysqli_free_result($resultado);				//LIBERAR RESULTADO SIEMPRE, DESPUES DE USARLO.
			end:
			mysqli_close($conexion);
			//echo (" Base de datos en contrucci&oacute;n, por favor int&eacute;ntelo m&aacute;s tarde.");
				
		}	//CIERRE DE if($conexion){
		else{
				echo ("Error (2) al conectar la base de datos, actualice la p&aacute;gina e int&eacute;ntelo nuevamente.");
				mysqli_close($conexion);
		}
	
?>