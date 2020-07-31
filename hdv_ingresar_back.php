<!DOCTYPE HTML>
<!--
	Verti by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

	<head X-Frame-Options: SAMEORIGIN>  <!-- SOLO EN LAS PÁGINAS CRÍTICAS -->
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
								<h3>Hojas de vida de profesionales especializados en SST.</h3> Ingresa tu hoja de vida <b>en solo 3 pasos</b> y s&eacute; parte de Red SST.
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

								<div style=" color:navy; text-align:justify ">
										Tu hoja de vida estar&aacute; vinculada a un correo electr&oacute;nico. Para evitar la suplantaci&oacute;n debes tener un c&oacute;digo
										de acceso. Si a&uacute;n no tienes uno, no lo recuerdas o quieres cambiarlo, escribe tu correo y da clic en el bot&oacute;n
										<b><em>Solicitar c&oacute;digo</em></b>. Te ser&aacute; enviado un nuevo c&oacute;digo. Recuerda revisar la carpeta de <em>
										correo no deseado</em> o <em>spam</em><br/><br/>
								</div>								
								<!------------------------------------ ESCRIBIR CORREO ELECTRÃ“NICO Y SOLICITAR CÃ“DIGO --------------------------------------------->
								<div style="line-height:95%;  color:navy; text-align:justify ">
										
								</div>
								<form method="post" id="formulario_ingreso" action="" class='contacto' autocomplete="off">
								            <div >
													<input type='email' name='correo_ingreso' maxlength="55" placeholder=" Correo electr&oacute;nico" class="email"/>
								            </div>
							            <!---------------------  DOS CAMPOS PARA QUE LA PERSONA INGRESE UN CÃ“DIGO ALEATORIO. EVITAR BOTS ------ -->
							            <div class="field half first">	
												<input type="text" name='codigo_aleatorio' value=<?php echo rand(0,999); ?> readonly/>
							            </div>
							            <div class="field half">
												<input type='text' name='codigo_ingresado' maxlength="3" placeholder="Digite el pin del campo anterior" class='nombre'/>
							            </div>
										<!--------------------------------------------------------------------------------------------------------->					            
								            <div >	
								            		<br/><input type='submit' value='Solicitar c&oacute;digo' class="special" />
								            </div>			
								            <div Style="color:red;" id="respuesta_ingreso">  </div>		<!-- debe ser con ID, no funciona con name  -->
								</form>

								<!--<hr style="color: #0056b2;" align="center" noshade="noshade" size="2" width="80%" />
								javascript:window.open('https://www.google.es','','toolbar=yes');void 0
								-->
								<br/>

<!-- ------------------------- SEGUNDO PASO ----- INGRESAR DATOS PERSONALES ----------------------------------------------------------------------------------------------->
								<!--------------------- INGRESAR CORREO, CÃ“DIGO VÃLIDO Y HOJA DE VIDA. SE VERIFICAN EN EL ARCHIVO procesar_ingreso2.php  -------------->	
								<div Style="color:red;"><h3>2) Ingreso de datos personales</h3></div>
										Utilizar solo caracteres alfanum&eacute;ricos y signos de puntuaci&oacute;n. Otros s&iacute;mbolos ser&aacute;n omitidos.
								
								<form method="post" id="formulario_ingreso2" action="" class='contacto' autocomplete="on">
<br/><div Style="color:blue;"><h3>Datos de contacto</h3></div>
<div><input type='email' name='correo_ingreso2' maxlength="55" placeholder=" Correo electr&oacute;nico (Requerido)" class="email" required/></div>
<div><input type='text' name='codigo_ingreso2' maxlength="8" placeholder=" C&oacute;digo de acceso  (Requerido)" class="email" required/></div>
<div><input type='text' name='nombre' maxlength="55" placeholder=" Nombre(s)  (Requerido)" class="nombre" required/></div>
<div><input type='text' name='apellido' maxlength="55" placeholder=" Apellido(s)  (Requerido)" required/></div>
<div ><select name='pais'>
		  <option value="Ninguno">Seleccionar pa&iacute;s</option>
		  <option value="Argentina">Argentina</option>
		  <option value="Bolivia">Bolivia</option>
		  <option value="Chile">Chile</option>
  		  <option value="Colombia">Colombia</option>
		  <option value="CostaRica">Costa Rica</option>
		  <option value="Cuba">Cuba</option>
		  <option value="Ecuador">Ecuador</option>
		  <option value="ElSalvador">El Salvador</option>
		  <option value="Espana">Espa&ntilde;a</option>
		  <option value="Guatemala">Guatemala</option>
		  <option value="Honduras">Honduras</option>
		  <option value="Mexico">M&eacute;xico</option>
		  <option value="Nicaragua">Nicaragua</option>
		  <option value="Panama">Panam&aacute;</option>
		  <option value="Paraguay">Paraguay</option>
		  <option value="Peru">Per&uacute;</option>
		  <option value="Portugal">Portugal</option>
		  <option value="ReplublicaDominicana">Repl&uacute;blica Dominicana</option>
		  <option value="Uruguay">Uruguay</option>
		  <option value="Venezuela">Venezuela</option>	 </select></div>
<div><input type='text' name='ciudad' maxlength="30" placeholder=" Ciudad  (Requerido)" required/></div>
<div><input type="text" name='telefono1' maxlength="20" placeholder=" Tel&eacute;fono m&oacute;vil (Requerido)" required/></div>
<div><input type='text' name='telefono2' maxlength="20" placeholder=" Tel&eacute;fono fijo "/></div>
<div><input type='text' name='linkedin' maxlength="30" placeholder=" Usuario de LinkedIn "/></div>
<div><input type='text' name='facebook' maxlength="30" placeholder=" Usuario de Facebook "/></div>


<br/><br/><div Style="color:blue;"><h3>Estudios académicos formales realizados</h3></div><br/>

<b>Estudio realizado:</b>
<div><select name='estudio1'>
		  <option value="Ninguno">Seleccionar nivel de estudio</option>
		  <option value="Tecnico">T&eacute;cnico: 1 a 2 a&ntilde;os de estudio</option>
		  <option value="Tecnologo">Tecn&oacute;logo: 2.5 a 4 a&ntilde;os de estudio</option>
		  <option value="Profesional">Profesional: 4.5 a 6 a&ntilde;os de estudio</option>
		  <option value="Especialista">Especialista: posgrado de 1 a 1.5 a&ntilde;os</option>
		  <option value="Magister">Magister: posgrado de 2 a 2.5 a&ntilde;os de estudio</option>
		  <option value="Doctorado">Doctorado: posgrado de 3 a 4 a&ntilde;os de 
		  estudio</option></select></div>
<div><input type='text' name='estudiodescripcion1' maxlength="50" placeholder=" T&iacute;tulo obtenido (Requerido)"/></div>
<div><input type='text' name='estudioinstitucion1' maxlength="50" placeholder=" Instituci&oacute;n que otorga el t&iacute;tulo (Requerido)"/></div>

<b>Estudio realizado:</b>
<div><select name='estudio2'>
		  <option value="Ninguno">Seleccionar nivel de estudio</option>
		  <option value="Tecnico">T&eacute;cnico: 1 a 2 a&ntilde;os de estudio</option>
		  <option value="Tecnologo">Tecn&oacute;logo: 2.5 a 4 a&ntilde;os de estudio</option>
		  <option value="Profesional">Profesional: 4.5 a 6 a&ntilde;os de estudio</option>
		  <option value="Especialista">Especialista: posgrado de 1 a 1.5 a&ntilde;os</option>
		  <option value="Magister">Magister: posgrado de 2 a 2.5 a&ntilde;osde estudio</option>
		  <option value="Doctorado">Doctorado: posgrado de 3 a 4 a&ntilde;os de 
		  estudio</option></select></div>
<div><input type='text' name='estudiodescripcion2' maxlength="50" placeholder=" T&iacute;tulo obtenido "/></div>
<div><input type='text' name='estudioinstitucion2' maxlength="50" placeholder=" Instituci&oacute;n que otorga el t&iacute;tulo "/></div>

<b>Estudio realizado:</b>
<div><select name='estudio3'>
		  <option value="Ninguno">Seleccionar nivel de estudio</option>
		  <option value="Tecnico">T&eacute;cnico: 1 a 2 a&ntilde;os de estudio</option>
		  <option value="Tecnologo">Tecn&oacute;logo: 2.5 a 4 a&ntilde;os de estudio</option>
		  <option value="Profesional">Profesional: 4.5 a 6 a&ntilde;os de estudio</option>
		  <option value="Especialista">Especialista: posgrado de 1 a 1.5 a&ntilde;os</option>
		  <option value="Magister">Magister: posgrado de 2 a 2.5 a&ntilde;osde estudio</option>
		  <option value="Doctorado">Doctorado: posgrado de 3 a 4 a&ntilde;os de 
		  estudio</option></select></div>
<div><input type='text' name='estudiodescripcion3' maxlength="50" placeholder=" T&iacute;tulo obtenido "/></div>
<div><input type='text' name='estudioinstitucion3' maxlength="50" placeholder=" Instituci&oacute;n que otorga el t&iacute;tulo "/></div>


<br/><br/><div Style="color:blue;"><h3>Otros estudios realizados</h3></div><br/>

<b>Estudio adicional:</b>
<div><select name='estudio4'>
		  <option value="Ninguno">Seleccionar tipo de evento</option>
		  <option value="Curso">Curso</option>
		  <option value="Seminario">Seminario</option>
		  <option value="Taller">Taller</option>
		  <option value="Capacitacion">Capacitaci&oacute;n</option>
		  <option value="Entrenamiento">Entrenamiento</option>
		  <option value="Conferencia">Conferencia</option>
  		  <option value="Congreso">Congreso</option>
  		  <option value="Encuentro">Encuentro</option>
		  <option value="Diplomado">Diplomado</option></select></div>
<div><input type='text' name='estudiodescripcion4' maxlength="50" placeholder=" Nombre del evento "/></div>
<div><input type='text' name='estudioinstitucion4' maxlength="50" placeholder=" Organizador "/></div>
<div><input type='number' name='estudioduracion4' min="1" max="250" placeholder=" Horas duraci&oacute;n "/></div>

<b>Estudio adicional:</b>
<div><select name='estudio5'>
		  <option value="Ninguno">Seleccionar tipo de evento</option>
		  <option value="Curso">Curso</option>
		  <option value="Seminario">Seminario</option>
		  <option value="Taller">Taller</option>
		  <option value="Capacitacion">Capacitaci&oacute;n</option>
		  <option value="Entrenamiento">Entrenamiento</option>
		  <option value="Conferencia">Conferencia</option>
  		  <option value="Congreso">Congreso</option>
  		  <option value="Encuentro">Encuentro</option>
		  <option value="Diplomado">Diplomado</option></select></div>
<div><input type='text' name='estudiodescripcion5' maxlength="50" placeholder=" Nombre del evento "/></div>
<div><input type='text' name='estudioinstitucion5' maxlength="50" placeholder=" Organizador "/></div>
<div><input type='number' name='estudioduracion5' min="1" max="250" placeholder=" Horas duraci&oacute;n "/></div>

<b>Estudio adicional:</b>
<div><select name='estudio6'>
		  <option value="Ninguno">Seleccionar tipo de evento</option>
		  <option value="Curso">Curso</option>
		  <option value="Seminario">Seminario</option>
		  <option value="Taller">Taller</option>
		  <option value="Capacitacion">Capacitaci&oacute;n</option>
		  <option value="Entrenamiento">Entrenamiento</option>
		  <option value="Conferencia">Conferencia</option>
  		  <option value="Congreso">Congreso</option>
  		  <option value="Encuentro">Encuentro</option>
		  <option value="Diplomado">Diplomado</option></select></div>
<div><input type='text' name='estudiodescripcion6' maxlength="50" placeholder=" Nombre del evento "/></div>
<div><input type='text' name='estudioinstitucion6' maxlength="50" placeholder=" Organizador "/></div>
<div><input type='number' name='estudioduracion6' min="1" max="250" placeholder=" Horas duraci&oacute;n "/></div>

<b>Estudio adicional:</b>
<div><select name='estudio7'>
		  <option value="Ninguno">Seleccionar tipo de evento</option>
		  <option value="Curso">Curso</option>
		  <option value="Seminario">Seminario</option>
		  <option value="Taller">Taller</option>
		  <option value="Capacitacion">Capacitaci&oacute;n</option>
		  <option value="Entrenamiento">Entrenamiento</option>
		  <option value="Conferencia">Conferencia</option>
  		  <option value="Congreso">Congreso</option>
  		  <option value="Encuentro">Encuentro</option>
		  <option value="Diplomado">Diplomado</option></select></div>
<div><input type='text' name='estudiodescripcion7' maxlength="50" placeholder=" Nombre del evento "/></div>
<div><input type='text' name='estudioinstitucion7' maxlength="50" placeholder=" Organizador "/></div>
<div><input type='number' name='estudioduracion7' min="1" max="250" placeholder=" Horas duraci&oacute;n "/></div>

<b>Estudio adicional:</b>
<div><select name='estudio8'>
		  <option value="Ninguno">Seleccionar tipo de evento</option>
		  <option value="Curso">Curso</option>
		  <option value="Seminario">Seminario</option>
		  <option value="Taller">Taller</option>
		  <option value="Capacitacion">Capacitaci&oacute;n</option>
		  <option value="Entrenamiento">Entrenamiento</option>
		  <option value="Conferencia">Conferencia</option>
  		  <option value="Congreso">Congreso</option>
  		  <option value="Encuentro">Encuentro</option>
		  <option value="Diplomado">Diplomado</option></select></div>
<div><input type='text' name='estudiodescripcion8' maxlength="50" placeholder=" Nombre del evento "/></div>
<div><input type='text' name='estudioinstitucion8' maxlength="50" placeholder=" Organizador "/></div>
<div><input type='number' name='estudioduracion8' min="1" max="250" placeholder=" Horas duraci&oacute;n "/></div>

<b>Estudio adicional:</b>
<div><select name='estudio9'>
		  <option value="Ninguno">Seleccionar tipo de evento</option>
		  <option value="Curso">Curso</option>
		  <option value="Seminario">Seminario</option>
		  <option value="Taller">Taller</option>
		  <option value="Capacitacion">Capacitaci&oacute;n</option>
		  <option value="Entrenamiento">Entrenamiento</option>
		  <option value="Conferencia">Conferencia</option>
  		  <option value="Congreso">Congreso</option>
  		  <option value="Encuentro">Encuentro</option>
		  <option value="Diplomado">Diplomado</option></select></div>
<div><input type='text' name='estudiodescripcion9' maxlength="50" placeholder=" Nombre del evento "/></div>
<div><input type='text' name='estudioinstitucion9' maxlength="50" placeholder=" Organizador "/></div>
<div><input type='number' name='estudioduracion9' min="1" max="250" placeholder=" Horas duraci&oacute;n "/></div>

<b>Estudio adicional:</b>
<div><select name='estudio10'>
		  <option value="Ninguno">Seleccionar tipo de evento</option>
		  <option value="Curso">Curso</option>
		  <option value="Seminario">Seminario</option>
		  <option value="Taller">Taller</option>
		  <option value="Capacitacion">Capacitaci&oacute;n</option>
		  <option value="Entrenamiento">Entrenamiento</option>
		  <option value="Conferencia">Conferencia</option>
  		  <option value="Congreso">Congreso</option>
  		  <option value="Encuentro">Encuentro</option>
		  <option value="Diplomado">Diplomado</option></select></div>
<div><input type='text' name='estudiodescripcion10' maxlength="50" placeholder=" Nombre del evento "/></div>
<div><input type='text' name='estudioinstitucion10' maxlength="50" placeholder=" Organizador "/></div>
<div><input type='number' name='estudioduracion10' min="1" max="250" placeholder=" Horas duraci&oacute;n "/></div>


<b>Estudio adicional:</b>
<div><select name='estudio11'>
		  <option value="Ninguno">Seleccionar tipo de evento</option>
		  <option value="Curso">Curso</option>
		  <option value="Seminario">Seminario</option>
		  <option value="Taller">Taller</option>
		  <option value="Capacitacion">Capacitaci&oacute;n</option>
		  <option value="Entrenamiento">Entrenamiento</option>
		  <option value="Conferencia">Conferencia</option>
  		  <option value="Congreso">Congreso</option>
  		  <option value="Encuentro">Encuentro</option>
		  <option value="Diplomado">Diplomado</option></select></div>
<div><input type='text' name='estudiodescripcion11' maxlength="50" placeholder=" Nombre del evento "/></div>
<div><input type='text' name='estudioinstitucion11' maxlength="50" placeholder=" Organizador "/></div>
<div><input type='number' name='estudioduracion11' min="1" max="250" placeholder=" Horas duraci&oacute;n "/></div>


<br/><br/><div Style="color:blue;"><h3>Certificaciones - Licencias</h3></div><br/>

<b>Certificado o licencia:</b>
<div><select name='estudio12'>
		  <option value="Ninguno">Seleccionar tipo</option>
		  <option value="Certificado">Certificado</option>
		  <option value="Licencia">Licencia</option>
		  <option value="Matricula">Matr&iacute;cula profesional</option>
		  <option value="Tarjeta">Tarjeta profesional</option>		  
		  <option value="Otro">Otro</option></select></div>
<div><input type='text' name='estudiodescripcion12' maxlength="50" placeholder=" Descripci&oacute;n"/></div>
<div><input type='text' name='estudioinstitucion12' maxlength="50" placeholder=" Entidad emisora del documento "/></div>

<b>Certificado o licencia:</b>
<div><select name='estudio13'>
		  <option value="Ninguno">Seleccionar tipo</option>
		  <option value="Certificado">Certificado</option>
		  <option value="Licencia">Licencia</option>
		  <option value="Matricula">Matr&iacute;cula profesional</option>
		  <option value="Tarjeta">Tarjeta profesional</option>		  
		  <option value="Otro">Otro</option></select></div>
<div><input type='text' name='estudiodescripcion13' maxlength="50" placeholder=" Descripci&oacute;n"/></div>
<div><input type='text' name='estudioinstitucion13' maxlength="50" placeholder=" Entidad emisora del documento "/></div>

<b>Certificado o licencia:</b>
<div><select name='estudio14'>
		  <option value="Ninguno">Seleccionar tipo</option>
		  <option value="Certificado">Certificado</option>
		  <option value="Licencia">Licencia</option>
		  <option value="Matricula">Matr&iacute;cula profesional</option>
		  <option value="Tarjeta">Tarjeta profesional</option>		  
		  <option value="Otro">Otro</option></select></div>
<div><input type='text' name='estudiodescripcion14' maxlength="50" placeholder=" Descripci&oacute;n"/></div>
<div><input type='text' name='estudioinstitucion14' maxlength="50" placeholder=" Entidad emisora del documento "/></div>

<b>Certificado o licencia:</b>
<div><select name='estudio15'>
		  <option value="Ninguno">Seleccionar tipo</option>
		  <option value="Certificado">Certificado</option>
		  <option value="Licencia">Licencia</option>
		  <option value="Matricula">Matr&iacute;cula profesional</option>
		  <option value="Tarjeta">Tarjeta profesional</option>		  
		  <option value="Otro">Otro</option></select></div>
<div><input type='text' name='estudiodescripcion15' maxlength="50" placeholder=" Descripci&oacute;n"/></div>
<div><input type='text' name='estudioinstitucion15' maxlength="50" placeholder=" Entidad emisora del documento "/></div>

<b>Certificado o licencia:</b>
<div><select name='estudio16'>
		  <option value="Ninguno">Seleccionar tipo</option>
		  <option value="Certificado">Certificado</option>
		  <option value="Licencia">Licencia</option>
		  <option value="Matricula">Matr&iacute;cula profesional</option>
		  <option value="Tarjeta">Tarjeta profesional</option>		  
		  <option value="Otro">Otro</option></select></div>
<div><input type='text' name='estudiodescripcion16' maxlength="50" placeholder=" Descripci&oacute;n"/></div>
<div><input type='text' name='estudioinstitucion16' maxlength="50" placeholder=" Entidad emisora del documento "/></div>


<br/><br/><div Style="color:blue;"><h3>Intereses profesionales</h3></div><br/>

<b>Seleccione los niveles de cargo de su inter&eacute;s</b><br>
<div class="6u 12u$(small)"><input type="checkbox" id="cargodeinteres1" name="cargodeinteres1"><label for="cargodeinteres1"> 
	Operativo </label></div>
<div class="6u 12u$(small)"><input type="checkbox" id="cargodeinteres2" name="cargodeinteres2"><label for="cargodeinteres2"> 
	Auxiliar/Asistente </label></div>
<div class="6u 12u$(small)"><input type="checkbox" id="cargodeinteres3" name="cargodeinteres3"><label for="cargodeinteres3"> 
	Profesional Junior (0 a 5 a&ntilde;os de experiencia </label></div>
<div class="6u 12u$(small)"><input type="checkbox" id="cargodeinteres4" name="cargodeinteres4"><label for="cargodeinteres4"> 
	Profesional Senior (más de 5 a&ntilde;os de experiencia)</label></div>
<div class="6u 12u$(small)"><input type="checkbox" id="cargodeinteres5" name="cargodeinteres5"><label for="cargodeinteres5"> 
	Supervisi&oacute;n </label></div>
<div class="6u 12u$(small)"><input type="checkbox" id="cargodeinteres6" name="cargodeinteres6"><label for="cargodeinteres6"> 
	Gerencial </label></div>
<div class="6u 12u$(small)"><input type="checkbox" id="cargodeinteres7" name="cargodeinteres7"><label for="cargodeinteres7"> 
	Asesor o Consultor</label></div>
<div class="6u 12u$(small)"><input type="checkbox" id="cargodeinteres8" name="cargodeinteres8"><label for="cargodeinteres8"> 
	Alta gerencia </label></div>
<div class="6u 12u$(small)"><input type="checkbox" id="cargodeinteres9" name="cargodeinteres9"><label for="cargodeinteres9"> 
	Auditor </label></div>
<div class="6u 12u$(small)"><input type="checkbox" id="cargodeinteres10" name="cargodeinteres10"><label for="cargodeinteres10"> 
	Proveedor o Contratista </label></div>

<br><br><b>Seleccione el tipo de contrato de su inter&eacute;s</b><br>
<div class="6u 12u$(small)"><input type="checkbox" id="contratodeinteres1" name="contratodeinteres1"><label for="contratodeinteres1"> 
	Tiempo completo - T&eacute;rmino indefinido </label></div>
<div class="6u 12u$(small)"><input type="checkbox" id="contratodeinteres2" name="contratodeinteres2"><label for="contratodeinteres2"> 
	Tiempo completo - T&eacute;rmino fijo </label></div>
<div class="6u 12u$(small)"><input type="checkbox" id="contratodeinteres3" name="contratodeinteres3"><label for="contratodeinteres3"> 
	TIempo parcial - T&eacute;rmino indefinido </label></div>
<div class="6u 12u$(small)"><input type="checkbox" id="contratodeinteres4" name="contratodeinteres4"><label for="contratodeinteres4"> 
	TIempo parcial - T&eacute;rmino fijo </label></div>
<div class="6u 12u$(small)"><input type="checkbox" id="contratodeinteres5" name="contratodeinteres5"><label for="contratodeinteres5"> 
	Por horas </label></div>
<div class="6u 12u$(small)"><input type="checkbox" id="contratodeinteres6" name="contratodeinteres6"><label for="contratodeinteres6"> 
	Aprendizaje, pr&aacute;ctica o pasant&iacute;a</label></div>
<div class="6u 12u$(small)"><input type="checkbox" id="contratodeinteres7" name="contratodeinteres7"><label for="contratodeinteres7"> 
	Teletrabajo o virtual </label></div>
<div class="6u 12u$(small)"><input type="checkbox" id="contratodeinteres8" name="contratodeinteres8"><label for="contratodeinteres8"> 
	Por proyecto, obra o labor</label></div>
<div class="6u 12u$(small)"><input type="checkbox" id="contratodeinteres9" name="contratodeinteres9"><label for="contratodeinteres9"> 
	Otros </label></div>

<br><br><b>Seleccione otros intereses espec&iacute;ficos en SST</b><br>
<div class="6u 12u$(small)"><input type="checkbox" id="otrointeres1" name="otrointeres1"><label for="otrointeres1"> 
	Vig&iacute;­a o inspector SST </label></div>
<div class="6u 12u$(small)"><input type="checkbox" id="otrointeres2" name="otrointeres2"><label for="otrointeres2"> 
	Especialista o Supervisor SST </label></div>
<div class="6u 12u$(small)"><input type="checkbox" id="otrointeres3" name="otrointeres3"><label for="otrointeres3"> 
	L&iacute;der SST </label></div>
<div class="6u 12u$(small)"><input type="checkbox" id="otrointeres4" name="otrointeres4"><label for="otrointeres4"> 
	Gerente SST </label></div>
<div class="6u 12u$(small)"><input type="checkbox" id="otrointeres5" name="otrointeres5"><label for="otrointeres5"> 
	Asesor o consultor SST </label></div>
<div class="6u 12u$(small)"><input type="checkbox" id="otrointeres6" name="otrointeres6"><label for="otrointeres6"> 
	Seguridad en el trabajo </label></div>
<div class="6u 12u$(small)"><input type="checkbox" id="otrointeres7" name="otrointeres7"><label for="otrointeres7"> 
	Salud en el trabajo </label></div>
<div class="6u 12u$(small)"><input type="checkbox" id="otrointeres8" name="otrointeres8"><label for="otrointeres8"> 
	Ergonom&iacute;a </label></div>
<div class="6u 12u$(small)"><input type="checkbox" id="otrointeres9" name="otrointeres9"><label for="otrointeres9"> 
	Higiene industrial </label></div>
<div class="6u 12u$(small)"><input type="checkbox" id="otrointeres10" name="otrointeres10"><label for="otrointeres10"> 
	Medio Ambiente </label></div>
<div class="6u 12u$(small)"><input type="checkbox" id="otrointeres11" name="otrointeres11"><label for="otrointeres11"> 
	Seguridad F&iacute;sica </label></div>
<div class="6u 12u$(small)"><input type="checkbox" id="otrointeres12" name="otrointeres12"><label for="otrointeres12"> 
	Sistemas de emergencia </label></div>
<div class="6u 12u$(small)"><input type="checkbox" id="otrointeres13" name="otrointeres13"><label for="otrointeres13"> 
	Plan de emergencia </label></div>
<div class="6u 12u$(small)"><input type="checkbox" id="otrointeres14" name="otrointeres14"><label for="otrointeres14"> 
	Plan de recuperaci&oacute;n de negocio</label></div>
<div class="6u 12u$(small)"><input type="checkbox" id="otrointeres15" name="otrointeres15"><label for="otrointeres15"> 
	Trabajos de alto riesgo </label></div>
<div class="6u 12u$(small)"><input type="checkbox" id="otrointeres16" name="otrointeres16"><label for="otrointeres16"> 
	Sistemas de gesti&oacute;n en SST </label></div>


<br><br><b>Perfil profesional, otros estudios o intereses (m&aacute;ximo 2000 caracteres):</b><br>
<div class="12u$"><textarea name="otrosestudiosintereses" maxlength="2000" id="demo-message" placeholder="Escriba otros estudios o inter&eacute;s (m&aacute;ximo 2000 caracteres):" rows="6"></textarea></div>


<!-- ------------------------- TERCER PASO ----- GUARDAR HOJA DE VIDA ---------------------------------------------------------------------------------------------------->
										<br/><br/>
							            <div Style="color:red;"><h3>3) Guardar hoja de vida</h3></div>
										<div style="color:navy; text-align:justify ">
												Se realizar&aacute; una verificaci&oacute;n del c&oacute;digo de acceso suministrado y se guardar&aacute; toda la 
												informaci&oacute;n en nuestra base de datospara su tratamiento.<br/><br/>

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
							            		<!--CÃ“DIGO SI SE QUIERE EVITAR QUE AL DAR ENTER SE SUBMITA EL FORMULARIO. PERO REFRESCA LA PÃGINA, NO FUNCIONA CON AJAX.
							            		<form name="formulario_ingreso2" method="post" action="script.php">-->
												<!--<input type="button" name="guardar" value="Guardar" class="special" onclick="formulario_ingreso2.submit()">-->
							            		
							            </div>			
							            <div Style="color:red;" id="respuesta_ingreso2">  </div>		<!-- debe ser con ID, no funciona con name  -->
								</form>
<!-- ------------------------- FIN DEL FORMULARIO  -------------------------------------------------------------------------------------------------------------------------->
								
								<div style="line-height:95%; color:navy; text-align:justify ">
										<br/><b>Nota:</b> esta p&aacute;gina se encuentra en continuo desarrollo. Si deseas modificar la hoja de vida despu&eacute;s de 
										ingresarla por primera vez, se deben ingresar nuevamente los datos como la primera vez y los datos anteriores se sobreescribir&aacute;n.
										Si deseas eliminar toda tu informaci&oacute;n de nuestra base de datos, escr&iacute;benos un correo electr&oacute;nico 
										a habeasdata@kylconsultores.com desde el correo que tienes registrado en nuestra p&aacute;gina con el asunto ELIMINAR DATOS.
								</div>
						
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
		<script src="assets/js/funciones.js"></script>		<!-- FUNCIONES PARA VERIFICACIÓN DE FORMULARIOS Y CORREOS -->
		<script type="text/javascript" 	src="assets/js/dinamica.js"></script>		<!-- ARCHIVO PROPIO, DIRIGE CONEXIONES AJAX PARA EJECUTAR ARCHIVOS PHP DINÁMICAMENTE. -->
		<script src="assets/js/jquery.dropotron.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>

	</body>
</html>