<!DOCTYPE HTML>
<!--
	Verti by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	
	<head X-Frame-Options: SAMEORIGIN>  <!-- SOLO EN LAS PAGINAS CRITICAS -->
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
									
									<!-- ------------------------- SEGUNDO PASO ----- CARGAR HOJA DE VIDA  --------------------------------------------------------------------------------------->
									<div Style="color:red;"><h3>Hoja de Vida</h3></div>
	
										<!--<?php include 'hdv_formulario.php'; ?>	<!--ARCHIVO DONDE ESTÁN TODOS LOS INPUT DEL FORMULARIO. ES COMUN A HDV_INGRESAR Y HDV_ACTUALIZAR-->
<?php
	include "process/a_lib_descrakear_input.php";	//Aplicar descrakear_input ($conexion, $consulta, "PALABRA_PERMITIDA") antes de hacer un query.
	include "process/a_configurar_servidor.php";	//Definir variables globales para conexiÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â³n a servidor y base de datos MySQL.
	$conexion = mysqli_connect($servidor, $user, $password, $basededatos);
	mysqli_set_charset($conexion, 'utf8');		//CONECTARSE AL SERVIDOR CON UTF8 PARA HACER COMPATIBLES LOS CARACTERES Y EN ESPECIAL A a_lib_descrakear_input.php
	$i = $_GET['id'];	//VARIABLE GET PASADA DE procesar_buscar_empleo.php ver mas detalles.
	$i = descrakear_input ($conexion , $i, "");
	
	if ($conexion and is_numeric($i)){
		//------------------------ CONSULTAR LA OFERTAS LABORALES SELECCIONADA POR LA VARIABLE GET
		$sql = "SELECT * FROM hv WHERE id = '$i'";	//VARIABLES PHP VAN ENTRE COMILLAS SIMPLES SALE ERROR POR LA ARROBA
		$resultado = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
		$fila = mysqli_fetch_row($resultado);			// LEER LA FILA DEL RESULTADO SELECCINADO POR ID (VARIABLE GET). $fila es un array
		mysqli_free_result($resultado);				//LIBERAR RESULTADO SIEMPRE, DESPUES DE USARLO.

		$tabla = "<table style='width:100%'>";
		$titulos = array("ID","correo","nombre","apellido","pais","ciudad","telefono1","telefono2","linkedin","facebook","estudio1","estudio2","estudio3","estudio4","estudio5","estudio6","estudio7","estudio8","estudio9","estudio10","estudio11","estudio12","estudio13","estudio14","estudio15","estudio16","estudiodescripcion1","estudiodescripcion2","estudiodescripcion3","estudiodescripcion4","estudiodescripcion5","estudiodescripcion6","estudiodescripcion7","estudiodescripcion8","estudiodescripcion9","estudiodescripcion10","estudiodescripcion11","estudiodescripcion12","estudiodescripcion13","estudiodescripcion14","estudiodescripcion15","estudiodescripcion16","estudioinstitucion1","estudioinstitucion2","estudioinstitucion3","estudioinstitucion4","estudioinstitucion5","estudioinstitucion6","estudioinstitucion7","estudioinstitucion8","estudioinstitucion9","estudioinstitucion10","estudioinstitucion11","estudioinstitucion12","estudioinstitucion13","estudioinstitucion14","estudioinstitucion15","estudioinstitucion16","estudioduracion4","estudioduracion5","estudioduracion6","estudioduracion7","estudioduracion8","estudioduracion9","estudioduracion10","estudioduracion11","cargodeinteres1","cargodeinteres2","cargodeinteres3","cargodeinteres4","cargodeinteres5","cargodeinteres6","cargodeinteres7","cargodeinteres8","cargodeinteres9","cargodeinteres10","contratodeinteres1","contratodeinteres2","contratodeinteres3","contratodeinteres4","contratodeinteres5","contratodeinteres6","contratodeinteres7","contratodeinteres8","contratodeinteres9","otrointeres1","otrointeres2","otrointeres3","otrointeres4","otrointeres5","otrointeres6","otrointeres7","otrointeres8","otrointeres9","otrointeres10","otrointeres11","otrointeres12","otrointeres13","otrointeres14","otrointeres15","otrointeres16","otrosestudiosintereses");

		foreach ($titulos as $clave => $valor) {
			if($clave <= 22 and $clave != 21){
		    	$tabla .= "<tr><td>".$valor."</td><td>".$fila[$clave]."</td></tr>";  //Mostrar la informaciÃ³n bÃ¡sica
		    }
	    	if($clave == 21){						//Decodificar el tipo de contrato
	    		switch ($fila[$clave]) {
				    case "TCTI":         $tabla .= "<tr><td>".$valor."</td><td>Tiempo completo - T&eacute;rmino indefinido</td></tr>"; break;
				    case "TCTF":         $tabla .= "<tr><td>".$valor."</td><td>Tiempo completo - T&eacute;rmino fijo</td></tr>"; break;
				    case "TPTI":         $tabla .= "<tr><td>".$valor."</td><td>TIempo parcial - T&eacute;rmino indefinido</td></tr>"; break;
				    case "TPTF":         $tabla .= "<tr><td>".$valor."</td><td>TIempo parcial - T&eacute;rmino fijo</td></tr>"; break;
				    case "Por Horas":    $tabla .= "<tr><td>".$valor."</td><td>Por horas</td></tr>"; break;
				    case "Aprendizaje":  $tabla .= "<tr><td>".$valor."</td><td>Aprendizaje, pr&aacute;ctica o pasant&iacute;a</td></tr>"; break;
				    case "Teletrabajo":  $tabla .= "<tr><td>".$valor."</td><td>Teletrabajo o virtual</td></tr>"; break;
				    case "Por Proyecto": $tabla .= "<tr><td>".$valor."</td><td>Por proyecto, obra o labor</td></tr>"; break;
					default:	         $tabla .= "<tr><td>".$valor."</td><td>No especificado</td></tr>"; break;
				}
		    }
		    if($clave >= 23 and $clave <= 38 and $fila[$clave]=="Si"){
		    	if($clave==23){$tabla .= "<tr><td><b>Intereses espec&iacute;ficos</b></td><td></td></tr>";}
		    	$tabla .= "<tr><td>".$valor."</td><td>".$fila[$clave]."</td></tr>";  //Mostrar los intereses especificos 1 al 16, solo los activos en "Si".
		    }
		    if($clave >= 39){
		    	$tabla .= "<tr><td><b>".$valor."</b></td><td>".$fila[$clave]."</td></tr>";  //Mostrar la informaciÃ³n detallada de la oferta de empleo
		    }
		}

		$tabla .= "</table>";
		echo $tabla;

		echo("<script>document.getElementById('codigo_ingreso2').value='********';</script>");
		if ($fila[1] != ""){ echo("<script>document.getElementById('correo_ingreso2').value='".$fila[1]."';</script>"); }
		if ($fila[2] != ""){ echo("<script>document.getElementById('nombre').value='".$fila[2]."';</script>"); }
		if ($fila[3] != ""){ echo("<script>document.getElementById('apellido').value='".$fila[3]."';</script>"); }
		if ($fila[4] != ""){ echo("<script>document.getElementById('pais').value='".$fila[4]."';</script>"); }
		if ($fila[5] != ""){ echo("<script>document.getElementById('ciudad').value='".$fila[5]."';</script>"); }
		if ($fila[6] != ""){ echo("<script>document.getElementById('telefono1').value='".$fila[6]."';</script>"); }
		if ($fila[7] != ""){ echo("<script>document.getElementById('telefono2').value='".$fila[7]."';</script>"); } else{echo("<script>document.getElementById('telefono2').style.display = 'none';</script>");}
		if ($fila[8] != ""){ echo("<script>document.getElementById('linkedin').value='".$fila[8]."';</script>"); } else{echo("<script>document.getElementById('linkedin').style.display = 'none';</script>");}
		if ($fila[9] != ""){ echo("<script>document.getElementById('facebook').value='".$fila[9]."';</script>"); } else{echo("<script>document.getElementById('facebook').style.display = 'none';</script>");}
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

		echo("<script>document.getElementById('otrosestudiosintereses').style.display = 'none';</script>");		// 'block' permite ver, 'none' no deja ver
		
		echo ("<div Style='color:red;'>Datos cargados exit&oacute;samente.</div>");

				
	}	//CIERRE DE if($conexion){
	else{
		echo ("Error (2) al conectar la base de datos, actualice la p&aacute;gina e int&eacute;ntelo nuevamente.");
	}
	mysqli_close($conexion);
	
									?>
									<br/><br/>
									<?php include 'temas_disclaimer.php'; ?>	<!--ARCHIVO DONDE ESTÃ EL DISCLAIMER, DEBE IR AL FINAL DE TODOS LOS FORMULARIOS -->
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
		<script src="assets/js/funciones.js"></script>		<!-- FUNCIONES PARA VERIFICACIÃƒâ€œN DE FORMULARIOS Y CORREOS -->
		<script type="text/javascript" 	src="assets/js/dinamica.js"></script>		<!-- ARCHIVO PROPIO, DIRIGE CONEXIONES AJAX PARA EJECUTAR ARCHIVOS PHP DINÃƒÂMICAMENTE. -->
		<script src="assets/js/jquery.dropotron.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>

	</body>
</html>