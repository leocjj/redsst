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

			<!-- Banner -->
				<div id="banner-wrapper">
					<div id="banner" class="box container">
						<div class="row">
							<div class="col-12 col-12-medium">
								<h3>Hojas de vida de profesionales en SST.</h3> Ingresa tu hoja de vida <b>en solo 3 pasos</b> y s&eacute; parte de Red SST.
							</div>
						</div>
					</div>
				</div>
			<br/>
			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
					
						<div class="row gtr-200">
							<div class="col-12 col-12-medium">
							
								<!-- Content -->
									<div id="content">
										<section class="last">

<!-- ------------------------- PRIMER PASO ----- GUARDAR SOLICITAR CODIGO DE ACCESO --------------------------------------------------------------------------------------->
								<div Style="color:red;"><h3>1) Solicitud de c&oacute;digo de acceso</h3></div>
									<?php include 'solicitar_codigo_de_acceso.php'; ?>	<!--ARCHIVO DONDE ESTÁ EL FORMULARIO PARA PEDIR CÓDIGO DE ACCESO -->
								<br/>

<!-- ------------------------- SEGUNDO PASO ----- INGRESAR DATOS PERSONALES ----------------------------------------------------------------------------------------------->
								<!--------------------- INGRESAR CORREO, CÃƒâ€œDIGO VÃƒÂLIDO Y HOJA DE VIDA. SE VERIFICAN EN EL ARCHIVO procesar_ingreso2.php  -------------->	
								<div Style="color:red;"><h3>2) Ingreso de datos personales</h3></div>
								<div style=" color:navy; text-align:justify ">
									Utilizar solo caracteres alfanum&eacute;ricos y signos de puntuaci&oacute;n. Otros s&iacute;mbolos ser&aacute;n omitidos.
									Los campos marcados con este s&iacute;mbolo (*), son obligatorios.</div>
								<div class="row gtr-uniform">
									<form method="post" id="formulario_ingreso2" action=""  autocomplete="off">
											<?php include 'hdv_formulario.php'; ?>  <!--ARCHIVO DONDE ESTÁN TODOS LOS INPUT DEL FORMULARIO. ES COMUN A HDV_INGRESAR Y HDV_ACTUALIZAR-->

<!-- ------------------------- TERCER PASO ----- GUARDAR HOJA DE VIDA ---------------------------------------------------------------------------------------------------->
										<br/><br/>
							            <div Style="color:navy;"><h3>3) Guardar hoja de vida</h3></div>
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
							            		<br/><input type='submit' name="guardar" value='Guardar' class="special"/>
							            		<!--CÃƒâ€œDIGO SI SE QUIERE EVITAR QUE AL DAR ENTER SE SUBMITA EL FORMULARIO. PERO REFRESCA LA PÃƒÂGINA, NO FUNCIONA CON AJAX.
							            		<form name="formulario_ingreso2" method="post" action="script.php">-->
												<!--<input type="button" name="guardar" value="Guardar" class="special" onclick="formulario_ingreso2.submit()">-->
							            		
							            </div>			
							            <div Style="color:red;" id="respuesta_ingreso2">  </div>		<!-- debe ser con ID, no funciona con name  -->
									</form>
								</div>
								
<!-- ------------------------- FIN DEL FORMULARIO  -------------------------------------------------------------------------------------------------------------------------->

								<br/><br/>								
								<div style="line-height:95%; color:navy; text-align:justify ">
										<br/><b>Nota:</b> Para modificar los datos ingresados puedes ir a la opci&oacute;n Actualizar hoja de vida en el men&uacute;.
										Si deseas eliminar toda tu informaci&oacute;n de nuestra base de datos, escr&iacute;benos un correo electr&oacute;nico 
										a habeasdata@kylconsultores.com desde el correo que tienes registrado en nuestra p&aacute;gina con el asunto ELIMINAR DATOS.
								</div>
								
								<?php include 'temas_disclaimer.php'; ?>	<!--ARCHIVO DONDE EST� EL DISCLAIMER, DEBE IR AL FINAL DE TODOS LOS FORMULARIOS -->
						
			<!--			
				<form name="formulario" action="cualquiera.html" method="post">
					Acepto las condiciones <input type="check" value="acepto" onclick="document.formulario.enviar.disabled=!document.formulario.enviar.disabled"><br />
					<input type="submit" name="enviar" value="Enviar" disabled>
				</form>
			
	    		https://www.w3schools.com/html/html_form_elements.asp
	    		https://www.w3schools.com/js/js_regexp.asp
	    		
	    		<input type="reset">
	    		<input type="text" name="firstname" value="John" readonly>
	    		
	    		<input type="date" name="bday">
	    		<input type="date" name="bday" min="2000-01-02"><br>
	    		<input type="month">
	    		<input type="number" name="quantity" min="1" max="5">
	    		<input type="number" name="points" min="0" max="100" step="10" value="30">
	    		 <input type="range" name="points" min="0" max="10">
	    		
	    		Attribute 	Description
				disabled 	Specifies that an input field should be disabled
				max 		Specifies the maximum value for an input field
				maxlength 	Specifies the maximum number of character for an input field
				min 		Specifies the minimum value for an input field
				pattern 	Specifies a regular expression to check the input value against
				readonly 	Specifies that an input field is read only (cannot be changed)
				required 	Specifies that an input field is required (must be filled out)
				size 		Specifies the width (in characters) of an input field
				step 			Specifies the legal number intervals for an input field
				value 	Specifies the default value for an input field
				
				input type="text" name="country_code" pattern="[A-Za-z]{3}" title="Three letter country code">
	    		 <input type="text" name="fname" placeholder="First name"> 
	    		 <input type="text" name="usrname" required>
	    		
	    	-->
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