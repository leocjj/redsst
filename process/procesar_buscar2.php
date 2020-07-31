<!-- CODIGO PARA MOSTAR HOJAS DE VIDA FILTRADAS --->

<?php 
	include "a_lib_descrakear_input.php";	//Aplicar descrakear_input ($conexion, $consulta, "PALABRA_PERMITIDA") antes de hacer un query.
	include "a_configurar_servidor.php";	//Definir variables globales para conexi√É¬≥n a servidor y base de datos MySQL.

		$conexion = mysqli_connect($servidor, $user, $password, $basededatos);
		mysqli_set_charset($conexion, 'utf8');		//CONECTARSE AL SERVIDOR CON UTF8 PARA HACER COMPATIBLES LOS CARACTERES Y EN ESPECIAL A a_lib_descrakear_input.php
	
		// --------------- CARGAR TODAS LAS SUPERGLOBALES POST EN VARIABLES LOCALES Y LUEGO DESCRACREARLAS
			$correo_ingreso2 = $_POST['correo_ingreso2'];
			$codigo_ingreso2 = $_POST['codigo_ingreso2'];
			$filtrar_pais = $_POST['filtrar_pais'];
			$correo_ingreso2 = descrakear_input ($conexion , $correo_ingreso2, "@");
			$codigo_ingreso2 = descrakear_input ($conexion , $codigo_ingreso2, "@");
			$filtrar_pais = descrakear_input ($conexion , $filtrar_pais, "@");
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

						// DEBE SELECCIONAR UN PAIS PARA FILTRAR LA B⁄SQUEDA.
						if ( $filtrar_pais == 'Ninguno' ){
							 $mensaje .= "Por favor seleccione un pa&iacute;s para realizar la b&uacute;squeda."."<br/>";
						}

						if ($mensaje != "" ){
							echo ($mensaje);
							goto end;
						}
						//mysqli_free_result($resultado);
						
						//------------------------ CONSULTAR LAS HV CON FILTROS
						// $sql = "SELECT * FROM hv"; // Mostrar todo sin filtar 
						$sql = "SELECT * FROM hv WHERE pais = '$filtrar_pais'";	//VARIABLES PHP VAN ENTRE COMILLAS SIMPLES SALE ERROR POR LA ARROBA						
						$resultado = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));

//-------------IMPRIMIR INICIO DE LA TABLA CON LOS ENCABEZADOS --------------------------------------------------------------------------------------------------
$codigo .= <<<"ENDTitulo"
<br/><br/><section><div class='table-wrapper'>
<table id="myTable" class="tablesorter">
<thead><tr> <th>Correo</th> <th>Nombre</th> <th>Pa&iacute;s</th> <th>Ciudad</th> <th>Nivel de estudio</th> </tr> </thead> <tbody>
ENDTitulo;

//-------------LEER Y MOSTRAR CADA UNA DE LAS FILAS DE $resultado -----------------------------------------------------------------------------------------------		
						//$codigo .= "<tr><td>Item One</td><td>Ante turpis integer aliquet porttitor.</td><td>29.99</td></tr>";
						while ($fila = mysqli_fetch_row($resultado)){			// LEER FILA POR FILA DEL RESULTADO. $fila es un array	
							$codigo .= "<tr>";									// CREAR FILA DE LA TABLA
							for ( $i=0 ; $i<= count($fila) ; $i++){				// CARGAR LA FILA CON VARIAS COLUMNAS HASTA LLEGAR EL FINAL DE LA $fila
								if( $i==1 OR $i==4 OR $i==5 OR $i==10  ){		// CONDICIONALES PARA MOSTRAR SOLO ALGUNAS DE LAS COLUMNAS
									$codigo .= "<td>".$fila[$i]."</td>";
								}elseif( $i==2 ) {
									//$codigo .= "<td>".  $fila[$i]."</td>";

//--------------CODIGO PARA COLOCAR LINK EN UNO DE LOS ELEMENTOS DE LA FIJA QUE LLAMA A UN JAVASCRIPT mostrar PARA OCULTAR/MOSTRAR TEXTO EN <div> ----------------
$codigo .= <<<"ENDLink"
<td>
	<a href="#" onclick="mostrar('texto$fila[0]'); return false;" >$fila[$i]</a>
		<div id='texto$fila[0]' style="display: none;">
			<b>Nombre:</b> $fila[2] <br/>
			<b>Apellido:</b> $fila[3] <br/>
			<b>Pais:</b> $fila[4] <br/>
			<b>Ciudad:</b> $fila[5] <br/>
			<b>Tel&eacute;fono 1</b> $fila[6] <br/>
			<b>Tel&eacute;fono 2:</b> $fila[7] <br/>
			<b>LinkedIn:</b> $fila[8] <br/>
			<b>Facebook:</b> $fila[9] <br/>
			<b>Estudio 1:</b> $fila[26] <br/>
			<b>Estudio 2:</b> $fila[27] <br/>
			<b>Estudio 3:</b> $fila[28] <br/>
			<b>Estudio 4:</b> $fila[29] <br/>
			$fila[101] <br/>
			<b><a href='https://redsst.com/hdv_buscar2.php?id=$fila[0]' target='_blank'> Ver m&aacute; detalles...</b></a><br/>
		</div>
</td>
ENDLink;
//ETIQUETA DE CIERRE END, DEBE ESTAR SOLA AL INICIO DE LA FILA, SIN ESPACIOS NI CARACTERES AL FINAL.
								}
							}
						}
//-------------IMPRIMIR FINAL DE LA TABLA CON PIE DE PAGINA --------------------------------------------------------------------------------------------------
						$codigo .= "</tbody><tfoot><tr><td colspan='2'></td><td></td></tr></tfoot>  </table></div></section>";

						mysqli_free_result($resultado);				//LIBERAR RESULTADO SIEMPRE, DESPU√É‚Ä∞S DE USARLO.
						echo $codigo;
				
				end:
				mysqli_close($conexion);
				//echo (" Base de datos en contrucci&oacute;n, por favor int&eacute;ntelo m&aacute;s tarde.");
				
		}	//CIERRE DE if($conexion){
		else{
				echo ("Error (2) al conectar la base de datos, actualice la p&aacute;gina e int&eacute;ntelo nuevamente.");
				mysqli_close($conexion);
		}
	
?>