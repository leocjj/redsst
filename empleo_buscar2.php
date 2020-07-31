<!DOCTYPE HTML>
<!--
	Verti by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	
	<head X-Frame-Options: SAMEORIGIN>  <!-- SOLO EN LAS PÃƒÂGINAS CRÃƒÂTICAS -->
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
<?php
	include "process/a_lib_descrakear_input.php";	//Aplicar descrakear_input ($conexion, $consulta, "PALABRA_PERMITIDA") antes de hacer un query.
	include "process/a_configurar_servidor.php";	//Definir variables globales para conexiÃƒÆ’Ã‚Â³n a servidor y base de datos MySQL.
	$conexion = mysqli_connect($servidor, $user, $password, $basededatos);
	mysqli_set_charset($conexion, 'utf8');		//CONECTARSE AL SERVIDOR CON UTF8 PARA HACER COMPATIBLES LOS CARACTERES Y EN ESPECIAL A a_lib_descrakear_input.php
	$i = $_GET['id'];	//VARIABLE GET PASADA DE procesar_buscar_empleo.php ver mas detalles.
	$i = descrakear_input ($conexion , $i, "");
	
	if ($conexion and is_numeric($i)){
		//------------------------ CONSULTAR LA OFERTAS LABORALES SELECCIONADA POR LA VARIABLE GET
		$sql = "SELECT * FROM empleo WHERE id = '$i'";	//VARIABLES PHP VAN ENTRE COMILLAS SIMPLES SALE ERROR POR LA ARROBA
		$resultado = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));

//   0   1      2       3      4    5       6          7         8          9           10        11            12                  13                14            15            16                17                18               19           20              21             22
// ID,correo,titulo1,titulo2,pais,ciudad,telefono1,telefono2,paginaweb1,paginaweb2,fechainicio,fechafin,rangosalarioinferior,rangosalariosuperior,experiencia,requiereviajar,requierelicencia,sectordelaempresa,nombredelaempresa,niveldeestudio,niveldecargo,tipodecontrato,interesprincipal

//-------------IMPRIMIR INICIO DE LA TABLA CON LOS ENCABEZADOS --------------------------------------------------------------------------------------------------
//-------------LEER Y MOSTRAR CADA UNA DE LAS FILAS DE $resultado -----------------------------------------------------------------------------------------------		
		$fila = mysqli_fetch_row($resultado);			// LEER LA FILA DEL RESULTADO SELECCINADO POR ID (VARIABLE GET). $fila es un array
		$tabla = "<table style='width:100%'>";
		
		$titulos = array("ID:","Correo","Oferta de empleo:","Oferta de empleo:","Pa&iacute;s:","Ciudad:","Tel&eacute;fono 1:","Tel&eacute;fono 2:","P&aacute;gina web 1:","P&aacute;gina web 2:","Fecha de inicio (A-M-D):","Fecha de finalizaci&oacute;n (A-M-D):","Rango salarial inferior","Rango salarial superior","A&ntilde;os de experiencia","Requiere viajar","Requiere licencia","Sector de la empresa","Nombre de la empresa","Nivel de estudio requerido","Nivel del cargo","Tipo de contrato","Inter&eacute;s principal","Vig&iacute;a o inspector SST","Especialista o Supervisor SST","L&iacute;der SST","Gerente SST","Asesor o consultor SST","Seguridad en el trabajo","Salud en el trabajo","Ergonom&iacute;a","Higiene industrial","Medio Ambiente","Seguridad F&iacute;sica","Sistemas de emergencia","Plan de emergencia","Plan de recuperaci&oacute;n de negocio","Trabajos de alto riesgo","Sistemas de gesti&oacute;n en SST","Descripci&oacute;n detallada","Requisitos obligatorios","Requisitos deseables");

		foreach ($titulos as $clave => $valor) {
			if($clave <= 22 and $clave != 21){
		    	$tabla .= "<tr><td>".$valor."</td><td>".$fila[$clave]."</td></tr>";  //Mostrar la información básica
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
		    	$tabla .= "<tr><td><b>".$valor."</b></td><td>".$fila[$clave]."</td></tr>";  //Mostrar la información detallada de la oferta de empleo
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
		<script src="assets/js/funciones.js"></script>		<!-- FUNCIONES PARA VERIFICACIÓN DE FORMULARIOS Y CORREOS -->
		<script type="text/javascript" 	src="assets/js/dinamica.js"></script>		<!-- ARCHIVO PROPIO, DIRIGE CONEXIONES AJAX PARA EJECUTAR ARCHIVOS PHP DINÁMICAMENTE. -->
		<script src="assets/js/jquery.dropotron.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>

	</body>
</html>