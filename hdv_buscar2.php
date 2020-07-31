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

		$tabla = "<table style='width:100%'>";

$titulos = array("ID:","Correo","Nombre","Apellido","Pais","Ciudad","Telefono 1","Telefono 2","Linkedin","Facebook","Estudio 1","Estudio 2","Estudio 3","Estudio 4","Estudio 5","Estudio 6","Estudio 7","Estudio 8","Estudio 9","Estudio 10","Estudio 11","Estudio 12","Estudio 13","Estudio 14","Estudio 15","Estudio 16","Estudiodescripcion 1","Estudiodescripcion 2","Estudiodescripcion 3","Estudiodescripcion 4","Estudiodescripcion 5","Estudiodescripcion 6","Estudiodescripcion 7","Estudiodescripcion 8","Estudiodescripcion 9","Estudiodescripcion 10","Estudiodescripcion11","Estudiodescripcion12","Estudiodescripcion13","Estudiodescripcion14","Estudiodescripcion15","Estudiodescripcion16","Estudioinstitucion1","Estudioinstitucion2","Estudioinstitucion3","Estudioinstitucion4","Estudioinstitucion5","Estudioinstitucion6","Estudioinstitucion7","Estudioinstitucion8","Estudioinstitucion9","Estudioinstitucion10","Estudioinstitucion11","Estudioinstitucion12","Estudioinstitucion13","Estudioinstitucion14","Estudioinstitucion15","Estudioinstitucion16","Estudioduracion4","Estudioduracion5","Estudioduracion6","Estudioduracion7","Estudioduracion8","Estudioduracion9","Estudioduracion10","Estudioduracion11","Cargodeinteres1","Cargodeinteres2","Cargodeinteres3","Cargodeinteres4","Cargodeinteres5","Cargodeinteres6","Cargodeinteres7","Cargodeinteres8","Cargodeinteres9","Cargodeinteres10","Contratodeinteres1","Contratodeinteres2","Contratodeinteres3","Contratodeinteres4","Contratodeinteres5","Contratodeinteres6","Contratodeinteres7","Contratodeinteres8","Contratodeinteres9","Otrointeres1","Otrointeres2","Otrointeres3","Otrointeres4","Otrointeres5","Otrointeres6","Otrointeres7","Otrointeres8","Otrointeres9","Otrointeres10","Otrointeres11","Otrointeres12","Otrointeres13","Otrointeres14","Otrointeres15","Otrointeres16","Otrosestudiosintereses");

		foreach ($titulos as $clave => $valor) {
	    	if($clave ==1){ $tabla .= "<tr><td><b>Datos de contacto</b></td><td></td></tr>";}  //TÍTULO
			if($clave >=1 and $clave <= 9 and $fila[$clave] !=""){
		    	$tabla .= "<tr><td>".$valor."</td><td>".$fila[$clave]."</td></tr>";  //Mostrar la informacion de contacto
		    }		    
	    	if($clave ==10){ $tabla .= "<tr><td><b>Estudios realizados</b></td><td></td></tr>"; }  //TÍTULO
		    if($clave >=10 and $clave <=12 and $fila[$clave] !="" and $fila[$clave] !="No"  and $fila[$clave] >=0 and $fila[$clave] !="0"){
		    	$tabla .= "<tr><td></td><td>".$fila[$clave].", ".$fila[$clave+16].", ".$fila[$clave+32]."</td></tr>";  // Mostrar estudios formales
		    }
		    if($clave ==13){ $tabla .= "<tr><td><b>Otros estudios</b></td><td></td></tr>"; }  //TÍTULO
		    if($clave >=13 and $clave <=20 and $fila[$clave] !="" and $fila[$clave] !="No"  and $fila[$clave] >=0 and $fila[$clave] !="0"){
		    	$tabla .= "<tr><td></td><td>".$fila[$clave].", ".$fila[$clave+16].", ".$fila[$clave+32].", ".$fila[$clave+45]." horas</td></tr>";  //Otros estudios
		    }
			if($clave ==21){ $tabla .= "<tr><td><b>Certificaciones - Licencias</b></td><td></td></tr>"; 	}  //TÍTULO		    
		    if($clave >=21 and $clave <=25 and $fila[$clave] !="" and $fila[$clave] !="No"  and $fila[$clave] >=0 and $fila[$clave] !="0"){
		    	$tabla .= "<tr><td></td><td>".$fila[$clave].", ".$fila[$clave+16].", ".$fila[$clave+32]."</td></tr>";
		    }
			if($clave ==66){     $tabla .= "<tr><td><b>Cargos de inter&eacute;s</b></td><td></td></tr>"; 	}  //TÍTULO
			if($clave >=66 and $clave <=75 and $fila[$clave] !="" and $fila[$clave] !="off"  and $fila[$clave] !="No"  and $fila[$clave] >=0 and $fila[$clave] !="0"){
				switch ($clave) {
				    case 66:         $tabla .= "<tr><td></td><td>Operativo</td></tr>"; break;
				    case 67:         $tabla .= "<tr><td></td><td>Auxiliar/Asistente</td></tr>"; break;
				    case 68:         $tabla .= "<tr><td></td><td>Profesional Junior (0 a 5 a&ntilde;os de experiencia)</td></tr>"; break;
				    case 69:         $tabla .= "<tr><td></td><td>Profesional Senior (m&aacute;s de 5 a&ntilde;os de experiencia)</td></tr>"; break;
				    case 70:         $tabla .= "<tr><td></td><td>Supervisi&oacute;n</td></tr>"; break;
				    case 71:         $tabla .= "<tr><td></td><td>Gerencial</td></tr>"; break;
				    case 72:         $tabla .= "<tr><td></td><td>Asesor o Consultor</td></tr>"; break;
				    case 73:         $tabla .= "<tr><td></td><td>Alta gerencia</td></tr>"; break;
				    case 74:         $tabla .= "<tr><td></td><td>Auditor</td></tr>"; break;				    
				    case 75:         $tabla .= "<tr><td></td><td>Proveedor o Contratista</td></tr>"; break;
				}
		    }
			if($clave ==76){     $tabla .= "<tr><td><b>Contratos de inter&eacute;s</b></td><td></td></tr>"; 	}  //TÍTULO
			if($clave >=76 and $clave <=84 and $fila[$clave] !="" and $fila[$clave] !="off"  and $fila[$clave] !="No"  and $fila[$clave] >=0 and $fila[$clave] !="0"){
				switch ($clave) {
				    case 76:         $tabla .= "<tr><td></td><td>Tiempo completo - T&eacute;rmino indefinido</td></tr>"; break;
				    case 77:         $tabla .= "<tr><td></td><td>Tiempo completo - T&eacute;rmino fijo</td></tr>"; break;
				    case 78:         $tabla .= "<tr><td></td><td>TIempo parcial - T&eacute;rmino indefinido</td></tr>"; break;
				    case 79:         $tabla .= "<tr><td></td><td>Iempo parcial - T&eacute;rmino fijo</td></tr>"; break;
				    case 80:         $tabla .= "<tr><td></td><td>Por horas</td></tr>"; break;
				    case 81:         $tabla .= "<tr><td></td><td>Aprendizaje, pr&aacute;ctica o pasant&iacute;a</td></tr>"; break;
				    case 82:         $tabla .= "<tr><td></td><td>Teletrabajo o virtual</td></tr>"; break;
				    case 83:         $tabla .= "<tr><td></td><td>Por proyecto, obra o labor</td></tr>"; break;
				    case 84:         $tabla .= "<tr><td></td><td>Otros</td></tr>"; break;
				}
		    }
		    if($clave ==85){     $tabla .= "<tr><td><b>Otros intereses</b></td><td></td></tr>"; 	}  //TÍTULO
			if($clave >=85 and $clave <=100 and $fila[$clave] !="" and $fila[$clave] !="off"  and $fila[$clave] !="No"  and $fila[$clave] >=0 and $fila[$clave] !="0"){
				switch ($clave) {
				    case 85:         $tabla .= "<tr><td></td><td>Vig&iacute;a o inspector SST</td></tr>"; break;
				    case 86:         $tabla .= "<tr><td></td><td>Especialista o Supervisor SST</td></tr>"; break;
				    case 87:         $tabla .= "<tr><td></td><td>L&iacute;der SST</td></tr>"; break;
				    case 88:         $tabla .= "<tr><td></td><td>Gerente SST</td></tr>"; break;
				    case 89:         $tabla .= "<tr><td></td><td>Asesor o consultor SST</td></tr>"; break;
				    case 90:         $tabla .= "<tr><td></td><td>Seguridad en el trabajo</td></tr>"; break;
				    case 91:         $tabla .= "<tr><td></td><td>Salud en el trabajo</td></tr>"; break;
				    case 92:         $tabla .= "<tr><td></td><td>Ergonom&iacute;a</td></tr>"; break;
				    case 93:         $tabla .= "<tr><td></td><td>Higiene industrial</td></tr>"; break;
				    case 94:         $tabla .= "<tr><td></td><td>Medio Ambiente</td></tr>"; break;
				    case 95:         $tabla .= "<tr><td></td><td>Seguridad F&iacute;sica</td></tr>"; break;
				    case 96:         $tabla .= "<tr><td></td><td>Sistemas de emergencia</td></tr>"; break;
				    case 97:         $tabla .= "<tr><td></td><td>Plan de emergencia</td></tr>"; break;
				    case 98:         $tabla .= "<tr><td></td><td>Plan de recuperaci&oacute;n de negocio</td></tr>"; break;
				    case 99:         $tabla .= "<tr><td></td><td>Trabajos de alto riesgo</td></tr>"; break;
				    case 100:        $tabla .= "<tr><td></td><td>Sistemas de gesti&oacute;n en SST</td></tr>"; break;
				}
			}
			if($clave ==101 and $fila[$clave] !=""){
		    	$tabla .= "<tr><td><b>Otros estudios e intereses</b></td><td>".$fila[$clave]."</td></tr>";  // Mostrar estudios formales
			}				
		}

		$tabla .= "</table>";

//-------------IMPRIMIR FINAL DE LA TABLA CON PIE DE PAGINA --------------------------------------------------------------------------------------------------

		mysqli_free_result($resultado);				//LIBERAR RESULTADO SIEMPRE, DESPUES DE USARLO.
		echo $tabla;
				
	}	//CIERRE DE if($conexion){
	else{
		echo ("Error (2) al conectar la base de datos, actualice la p&aacute;gina e int&eacute;ntelo nuevamente.");
	}
	mysqli_close($conexion);
	
									?>

									
									<br/><br/>
									<?php include 'temas_disclaimer.php'; ?>	<!--ARCHIVO DONDE ESTÃƒÂ EL DISCLAIMER, DEBE IR AL FINAL DE TODOS LOS FORMULARIOS -->
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
		<script src="assets/js/funciones.js"></script>		<!-- FUNCIONES PARA VERIFICACIÃƒÆ’Ã¢â‚¬Å“N DE FORMULARIOS Y CORREOS -->
		<script type="text/javascript" 	src="assets/js/dinamica.js"></script>		<!-- ARCHIVO PROPIO, DIRIGE CONEXIONES AJAX PARA EJECUTAR ARCHIVOS PHP DINÃƒÆ’Ã‚ÂMICAMENTE. -->
		<script src="assets/js/jquery.dropotron.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>

	</body>
</html>