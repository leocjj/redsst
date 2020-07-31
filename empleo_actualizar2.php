<!DOCTYPE HTML>
<!--
	Verti by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

	<head X-Frame-Options: SAMEORIGIN>  <!-- SOLO EN LAS PÃGINAS CRÃTICAS -->
		<?php include 'head.php'; ?>
	</head>
	
	<body class="is-preload homepage">
		<div id="page-wrapper">

			<!-- Header   -->
				<?php include 'header.php'; ?>

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
					
						<div class="row gtr-200">
							<div class="col-12 col-12-medium">
							
								<!-- Content -->
									<div id="content">
										<section class="last">

<!-- ------------------------- TERCER PASO ----- ACTUALIZAR DATOS PERSONALES ----------------------------------------------------------------------------------------------->
								<!--------------------- INGRESAR CORREO, CODIGO VALIDO Y HOJA DE VIDA. SE VERIFICAN EN EL ARCHIVO procesar_ingreso2.php  -------------->	

								<div Style="color:red;"><h3>3) Actualizar datos de la Oferta de Empleo</h3></div>

								<div style=" color:blue; text-align:justify ">
										Utilizar solo caracteres alfanum&eacute;ricos y signos de puntuaci&oacute;n. Otros s&iacute;mbolos ser&aacute;n omitidos.<br/>
										Debes ingresar nuevamente tu correo y c&oacute;digo de acceso para poder guardar la informaci&oacute;n actualizada.<br/>
								</div>
								
								<form method="post" id="formulario_ingreso_empleo" action="" class='contacto' autocomplete="off">
										<?php include 'empleo_formulario.php'; ?>	<!--ARCHIVO DONDE ESTÁN TODOS LOS INPUT DEL FORMULARIO. ES COMUN A EMPLEO_INGRESAR Y EMPLEO_ACTUALIZAR-->

<?php
	include "process/a_lib_descrakear_input.php";	//Aplicar descrakear_input ($conexion, $consulta, "PALABRA_PERMITIDA") antes de hacer un query.
	include "process/a_configurar_servidor.php";	//Definir variables globales para conexiÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â³n a servidor y base de datos MySQL.
	$conexion = mysqli_connect($servidor, $user, $password, $basededatos);
	mysqli_set_charset($conexion, 'utf8');		//CONECTARSE AL SERVIDOR CON UTF8 PARA HACER COMPATIBLES LOS CARACTERES Y EN ESPECIAL A a_lib_descrakear_input.php
	$ide = $_GET['id'];	//VARIABLE GET PASADA DE procesar_buscar_empleo.php ver mas detalles.
	$ide = descrakear_input ($conexion , $ide, "");
	
	if ($conexion and is_numeric($ide)){
		//------------------------ CONSULTAR LA OFERTAS LABORALES SELECCIONADA POR LA VARIABLE GET
		$sql = "SELECT * FROM empleo WHERE id = '$ide'";	//VARIABLES PHP VAN ENTRE COMILLAS SIMPLES SALE ERROR POR LA ARROBA
		$resultado = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
		//-------------LEER Y MOSTRAR CADA UNA DE LAS FILAS DE $resultado ---------------------------------------------------------------------------------------------
		$fila = mysqli_fetch_row($resultado);			// LEER LA FILA DEL RESULTADO SELECCINADO POR ID (VARIABLE GET). $fila es un array

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

			//echo("<script>document.getElementById('ide').value='".$ide."';</script>"); NO FUNCIONA AQU�			
		end:
		mysqli_free_result($resultado);				//LIBERAR RESULTADO SIEMPRE, DESPUES DE USARLO.
				
	}	//CIERRE DE if($conexion){
	else{
		echo ("Error (2) al conectar la base de datos, actualice la p&aacute;gina e int&eacute;ntelo nuevamente.");
	}
	mysqli_close($conexion);
?>

<!-- ------------------------- CUARTO PASO ----- GUARDAR Oferta de Empleo---------------------------------------------------------------------------------------------------->
										<br/><br/>
							            <div Style="color:red;"><h3>4) Guardar Oferta de Empleo</h3></div>
										<div style="color:navy; text-align:justify ">
												Se realizar&aacute; una verificaci&oacute;n del c&oacute;digo de acceso suministrado y se guardar&aacute; toda la 
												informaci&oacute;n en nuestra base de datos para su tratamiento.<br/><br/>

												<div class="6u 12u$(small)">
														<input type="checkbox" id="autorizohabeasdata" name="autorizohabeasdata">
														<label for="autorizohabeasdata">
															Autorizo el tratamiento de mis datos personales de acuerdo con la <a href="habeas_data.pdf" target="_blank">
															<b>Pol&iacute;tica de manejo de informaci&oacute;n personal.</b></a><br/>
															<br/>
														</label>
												</div>
												<div class="6u 12u$(small)">
														<input type="checkbox" id="mayordeedad" name="mayordeedad">
														<label for="mayordeedad">
															Certifico que soy mayor de 18 a&ntilde;os.<br/>
															<br/>
														</label>
												</div>
										</div>								
							            <div >	
							            		<input type="hidden" name="ide" id="ide" value="<?php echo $ide;?>" class='special' hidden="hidden"/>
							            		<input type="hidden" name="actualizar" id="actualizar" value='Si' class="special" hidden="hidden" />
							            		<input type='submit' name="guardar" value='Guardar' class="special"/>
							            		<!--CÃƒâ€œDIGO SI SE QUIERE EVITAR QUE AL DAR ENTER SE SUBMITA EL FORMULARIO. PERO REFRESCA LA PÃƒÂGINA, NO FUNCIONA CON AJAX.
							            		<form name="formulario_ingreso2" method="post" action="script.php">-->
												<!--<input type="button" name="guardar" value="Guardar" class="special" onclick="formulario_ingreso2.submit()">-->
							            		
							            </div>			
							            <div Style="color:red;" id="respuesta_ingreso_empleo">  </div>		<!-- debe ser con ID, no funciona con name  -->
								</form>
<!-- ------------------------- FIN DEL FORMULARIO  -------------------------------------------------------------------------------------------------------------------------->

								<br/><br/>
								<div style="line-height:95%; color:navy; text-align:justify ">
										<br/><b>Nota:</b>
										Si deseas eliminar toda tu informaci&oacute;n de nuestra base de datos, escr&iacute;benos un correo electr&oacute;nico 
										a habeasdata@kylconsultores.com desde el correo que tienes registrado en nuestra p&aacute;gina con el asunto ELIMINAR DATOS.
								</div>

								<?php include 'temas_disclaimer.php'; ?>	<!--ARCHIVO DONDE ESTÁ EL DISCLAIMER, DEBE IR AL FINAL DE TODOS LOS FORMULARIOS -->
						
										</section>
									</div>
							</div>							
						</div>						
					</div>
				</div>

			<!-- Footer -->
				<?php include 'footer.php'; ?>

		</div>

		<!-- Scripts FUNCIONAN BIEN SI VAN AL FINAL ANTES DE /BODY -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/funciones.js"></script>		<!-- FUNCIONES PARA VERIFICACIÃ“N DE FORMULARIOS Y CORREOS -->
		<script type="text/javascript" 	src="assets/js/dinamica.js"></script>		<!-- ARCHIVO PROPIO, DIRIGE CONEXIONES AJAX PARA EJECUTAR ARCHIVOS PHP DINÃMICAMENTE. -->
		<script src="assets/js/jquery.dropotron.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>

	</body>
</html>