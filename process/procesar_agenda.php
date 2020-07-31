<!-- CÃ“DIGO PARA MOSTRAR PRÃ“XIMOS EVENTOS
 --->
<?php 
	include "a_lib_descrakear_input.php";	//Aplicar descrakear_input ($conexion, $consulta, "PALABRA_PERMITIDA") antes de hacer un query.
	include "a_configurar_servidor.php";	//Definir variables globales para conexiÃ³n a servidor y base de datos MySQL.

		$conexion = mysqli_connect($servidor, $user, $password, $basededatos);
		mysqli_set_charset($conexion, 'utf8');		//CONECTARSE AL SERVIDOR CON UTF8 PARA HACER COMPATIBLES LOS CARACTERES Y EN ESPECIAL A a_lib_descrakear_input.php
	
		//--- CODIGO VERIFICACIÃ“N DE CÃ“DIGO EVITAR BOTS. ---------------------------------------------		
	    $codigo_aleatorio = $_POST['codigo_aleatorio'];
	    $codigo_ingresado = $_POST['codigo_ingresado']; 
	    $codigo_aleatorio = descrakear_input ($conexion , $codigo_aleatorio, "@");
	    $codigo_ingresado = descrakear_input ($conexion , $codigo_ingresado, "@");	    
		//--- CODIGO VERIFICACIÃ“N DE CÃ“DIGO EVITAR BOTS. ---------------------------------------------		
	
		if ($conexion){     
		
				//--- CODIGO VERIFICACIÃ“N DE CÃ“DIGO EVITAR BOTS. ---------------------------------------------
				if ( $codigo_aleatorio != $codigo_ingresado )
				{
						echo ("Ingrese el c&oacute;digo correcto.");
						goto end;
				}
				//--- CODIGO VERIFICACIÃ“N DE CÃ“DIGO EVITAR BOTS. ---------------------------------------------

						// http://php.net/manual/es/class.mysqli-result.php

						// ------- BUSCAR EL CÃ“DIGO DEL CORREO SUMINISTRADO EN TABLA usuarios PARA COMPARAR CON CÃ“DIGO SUMINISTRADO POR EL USUARIO-------------------------
						//$sql = "SELECT codigo FROM `usuarios` WHERE correo = '".$correo_ingreso2."'";	//SI NO SE COLOCA EMAIL ENTRE COMILLAS SIMPLES SALE ERROR POR LA ARROBA
						//$sql = "SELECT codigo FROM usuarios WHERE correo = '$correo_ingreso2'";	//VARIABLES PHP VAN ENTRE COMILLAS SIMPLES SALE ERROR POR LA ARROBA
						//$resultado = mysqli_query($conexion , $sql) or die(mysqli_error($conexion));
						//$fila = mysqli_fetch_row($resultado);
						//mysqli_free_result($resultado);				//LIBERAR RESULTADO SIEMPRE, DESPUÃ‰S DE USARLO.
						/*while ($fila = mysqli_fetch_row($resultado)) {
							echo ($fila[0]);
						}*/	
						
// ------------------------------------- VERIFICACIONES DE INGRESO MÃNIMO DE DATOS REQUERIDOS.----------------------------------------------------------------------------
					
						//VERIFICAR FECHA inicio ES MAYOR QUE HOY()
						//$hoy = date("Y-m-d H:i:s"); // 2001-03-10 17:16:18 (el formato DATETIME de MySQL)
						//if( strtotime($inicio) < strtotime( date("d-m-Y") )){
						//	 $mensaje .= "Por favor seleccione una fecha futura."."<br/>";
						//}
						
						//https://www.anerbarrena.com/funciones-arrays-php-4718/
						//mysqli_free_result($resultado);
						
						//------------------------ CONSULTAR TODOS LOS CAMPOS DE TODOS LOS EVENTOS
						$sql = "SELECT ID, correo, tipo, nombre, organiza, duracion, pais, ciudad, lugar, inicio, hora, contacto, telefono, link, otros FROM eventos";
						$resultado = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
						
//-------------IMPRIMIR INICIO DE LA TABLA CON LOS ENCABEZADOS --------------------------------------------------------------------------------------------------
$codigo .= <<<"ENDTitulo"
<br/><br/><section><div class='table-wrapper'><table><thead><tr> <th>Evento</th> <th>Nombre</th> <th>Pa&iacute;s</th> <th>Ciudad</th> <th>Fecha</th> </tr> </thead> <tbody>
ENDTitulo;

//-------------LEER Y MOSTRAR CADA UNA DE LAS FILAS DE $resultado -----------------------------------------------------------------------------------------------		
						//$codigo .= "<tr><td>Item One</td><td>Ante turpis integer aliquet porttitor.</td><td>29.99</td></tr>";
						while ($fila = mysqli_fetch_row($resultado)){			// LEER FILA POR FILA DEL RESULTADO. $fila es un array	
							$codigo .= "<tr>";									// CREAR FILA DE LA TABLA
							for ( $i=0 ; $i<= count($fila) ; $i++){				// CARGAR LA FILA CON VARIAS COLUMNAS HASTA LLEGAR EL FINAL DE LA $fila
								if( $i==2 OR $i==6 OR $i==7 OR $i==9  ){		// CONDICIONALES PARA MOSTRAR SOLO ALGUNAS DE LAS COLUMNAS
									$codigo .= "<td>".$fila[$i]."</td>";
								}elseif( $i==3 ) {
									//$codigo .= "<td>".  $fila[$i]."</td>";

//--------------CODIGO PARA COLOCAR LINK EN UNO DE LOS ELEMENTOS DE LA FIJA QUE LLAMA A UN JAVASCRIPT mostrar PARA OCULTAR/MOSTRAR TEXTO EN <div> ----------------
$codigo .= <<<"ENDLink"
<td>
	<a href="#" onclick="mostrar('texto$fila[0]'); return false;" >$fila[$i]</a>
		<div id='texto$fila[0]' style="display: none;">
			<b>Organiza:</b> $fila[4] <br/>
			<b>Duraci&oacute;n:</b> $fila[5] <br/>
			<b>Lugar:</b> $fila[8] <br/>
			<b>Hora:</b> $fila[10] <br/>
			<b>Contacto:</b> $fila[11] <br/>
			<b>Tel&eacute;fono:</b> $fila[12] <br/>
			<b>Link:</b> $fila[13] <br/>
			<b>Correo:</b> $fila[1] <br/>
			$fila[14] <br/>
		</div>
</td>
ENDLink;
//ETIQUETA DE CIERRE END, DEBE ESTAR SOLA AL INICIO DE LA FILA, SIN ESPACIOS NI CARACTERES AL FINAL.
								}
							}
						}
//-------------IMPRIMIR FINAL DE LA TABLA CON PIE DE PAGINA --------------------------------------------------------------------------------------------------
						$codigo .= "</tbody><tfoot><tr><td colspan='2'></td><td></td></tr></tfoot>  </table></div></section>";
						
						// ------ CONTAR NÚMERO DE USUARIOS PARA ASIGNAR EL SIGUIENTE id.				
						/*
						$sql = "SELECT * FROM eventos";
						$resultado = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
						//$contador = mysqli_num_rows($resultado);
						
						$codigo = "<br/><br/><section><div class='table-wrapper'><table><thead><tr><th>ID</th> <th>Correo</th> <th>Tipo evento</th> <th>Nombre</th> <th>Organiza</th> <th>Horas</th> <th>Pa&iacute;s</th> <th>Ciudad</th> <th>Lugar</th> <th>Fecha</th> <th>Hora</th> <th>Contacto</th> <th>Tel&eacute;fono</th> <th>Link</th> <th>Descripci&oacute;n</th> </tr> </thead> <tbody>"; 
						
						//$codigo .= "<tr><td>Item One</td><td>Ante turpis integer aliquet porttitor.</td><td>29.99</td></tr>";
						
						while ($reg = mysqli_fetch_row($resultado)){
							$codigo .= "<tr>";
							foreach ($reg as $cambia){
								$codigo .= "<td>".$cambia."</td>";							
							}
						}
						
						$codigo .= "</tbody><tfoot><tr><td colspan='2'></td><td></td></tr></tfoot>  </table></div></section>";
						*/
						
						/*
						
echo <<<'END'
Aquí se utiliza la sintaxis de "here document" para mostrar múltiples líneas con interpolación de $variable.
Nótese que el finalizador de here document debe aparecer en una línea con solamente un punto y coma. ¡Nada de espacios extra!
Mi nombre es "$nombre". Esto debería mostrar una 'A' mayúscula: \x41
Si se quiere que NO ANALICE el texto, el marcador debe estar en comillas simples.
END;
						
$codigo = "<<<EOD
		<section>
			<div class="table-wrapper">
				<table>
					<thead>
						<tr>
							<th>Name</th>
							<th>Description</th>
							<th>Price</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Item One</td>
							<td>Ante turpis integer aliquet porttitor.</td>
							<td>29.99</td>
						</tr>
						<tr>
							<td>Item Two</td>
							<td>Vis ac commodo adipiscing arcu aliquet.</td>
							<td>19.99</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="2"></td>
							<td>100.00</td>
						</tr>
					</tfoot>
				</table>
			</div>
		</section>
EOD";*/

						mysqli_free_result($resultado);				//LIBERAR RESULTADO SIEMPRE, DESPUÃ‰S DE USARLO.
						echo $codigo;
						
						
						// ------- CONTAR NÃšMERO DE VECES QUE ESTÃ EL CORREO EN LA TABLA eventos, SI ES CERO -> INGRESAR EVENTO (INSERT INTO), SI NO, ACTUALIZAR (UPDATE).
						//$sql = "SELECT * FROM eventos WHERE correo = '$correo_ingreso2'";	//SI NO SE COLOCA EMAIL ENTRE COMILLAS SIMPLES SALE ERROR POR LA ARROBA
						//$resultado = mysqli_query($conexion , $sql) or die(mysqli_error($conexion));
						//$repetido = mysqli_num_rows($resultado);
						//mysqli_free_result($resultado);
			
						// MEJORAS
						/* liberar la serie de resultados 						mysqli_free_result($resultado);*/
						// EVITAR QUE SE MANDEN MUCHOS CÃ“DIGOS VARIAS VECES
						// LEER RESULTADO DESPUES DE SQL INSERT O UPDATE PARA COMPROBAR QUE SE GRABÃ“ CON EXITO Y TIEMPO QUE TOMÃ“.
						//"Update nombre_tabla Set nombre_campo1 = valor_campo1, nombre_campo2 = valor_campo2,... Where condiciones_de_selecciÃ³n 
						//$SQL = "Update Clientes Set telefono='$telefono' Where nombre='$nombre'";
						//$sql = "UPDATE agenda SET nombre='$nombre', direccion='$direccion',"."telefono='$telefono', email='$email' WHERE id=$id"				
				
				end:
				mysqli_close($conexion);
				//echo (" Base de datos en contrucci&oacute;n, por favor int&eacute;ntelo m&aacute;s tarde.");
				
		}	//CIERRE DE if($conexion){
		else{
				echo ("Error (2) al conectar la base de datos, actualice la p&aacute;gina e int&eacute;ntelo nuevamente.");
				mysqli_close($conexion);
		}
	
?>