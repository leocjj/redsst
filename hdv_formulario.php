<?php

//INCREMENTAR EN CONSECUTIVO DE LA VARIABLE CÃ“DIGO PARA EVITAR REPETICIÃ“N Y ERRORES AL MOSTRAR LA MISMA VARIABLE EN UN DOCUMENTO

$codigo = "";

$codigo .= <<<"ENDTitulo"
<br/><div Style="color:blue;"><h3>Datos de contacto</h3></div>
<div><input type='email' name='correo_ingreso2' id="correo_ingreso2" maxlength="55" placeholder=" * Correo electr&oacute;nico " class="email" required/></div>
<div><input type='text' name='codigo_ingreso2' id="codigo_ingreso2" maxlength="8" placeholder=" * C&oacute;digo de acceso " class="email" required/></div>
<div><input type='text' name='nombre' id="nombre" maxlength="55" placeholder=" * Nombre(s) " class="nombre" required/></div>
<div><input type='text' name='apellido' id="apellido" maxlength="55" placeholder=" * Apellido(s) " required/></div>
<div ><select name='pais' id="pais" required>
		  <option value="Ninguno"> * Seleccionar pa&iacute;s</option>
		  <option value="Argentina">Argentina</option>
		  <option value="Bolivia">Bolivia</option>
		  <option value="Chile">Chile</option>
  		  <option value="Colombia">Colombia</option>
		  <option value="Costa Rica">Costa Rica</option>
		  <option value="Cuba">Cuba</option>
		  <option value="Ecuador">Ecuador</option>
		  <option value="El Salvador">El Salvador</option>
		  <option value="Espana">Espa&ntilde;a</option>
		  <option value="Guatemala">Guatemala</option>
		  <option value="Honduras">Honduras</option>
		  <option value="M&eacute;xico">M&eacute;xico</option>
		  <option value="Nicaragua">Nicaragua</option>
		  <option value="Panam&aacute;">Panam&aacute;</option>
		  <option value="Paraguay">Paraguay</option>
		  <option value="Per&uacute;">Per&uacute;</option>
		  <option value="Portugal">Portugal</option>
		  <option value="Rep&uacute;blica Dominicana">Rep&uacute;blica Dominicana</option>
		  <option value="Uruguay">Uruguay</option>
		  <option value="Venezuela">Venezuela</option>
		  </select></div>
<div><input type='text' name='ciudad' id="ciudad" maxlength="30" placeholder=" * Ciudad " required/></div>
<div><input type="text" name='telefono1' id="telefono1" maxlength="20" placeholder=" * Tel&eacute;fono m&oacute;vil " required/></div>
<div><input type='text' name='telefono2' id="telefono2" maxlength="20" placeholder=" Tel&eacute;fono fijo " /></div>
<div><input type='text' name='linkedin' id="linkedin" maxlength="50" placeholder=" Usuario de LinkedIn "/></div>
<div><input type='text' name='facebook' id="facebook" maxlength="50" placeholder=" Usuario de Facebook "/></div>


<br/><br/><div Style="color:blue;"><h3>Estudios acad&eacute;micos formales realizados</h3></div><br/>

<b>Estudio realizado:</b>
<div><select name='estudio1' id="estudio1" required>
		  <option value="Ninguno"> * Seleccionar nivel de estudio</option>
		  <option value="T&eacute;cnico">T&eacute;cnico: 1 a 2 a&ntilde;os de estudio</option>
		  <option value="Tecn&oacute;logo">Tecn&oacute;logo: 2.5 a 4 a&ntilde;os de estudio</option>
		  <option value="Profesional">Profesional: 4.5 a 6 a&ntilde;os de estudio</option>
		  <option value="Especialista">Especialista: posgrado de 1 a 1.5 a&ntilde;os</option>
		  <option value="Magister">Magister: posgrado de 2 a 2.5 a&ntilde;os de estudio</option>
		  <option value="Doctorado">Doctorado: posgrado de 3 a 4 a&ntilde;os de estudio</option>
		  </select></div>
<div><input type='text' name='estudiodescripcion1' id="estudiodescripcion1" maxlength="50" placeholder=" * T&iacute;tulo obtenido" required/></div>
<div><input type='text' name='estudioinstitucion1' id="estudioinstitucion1" maxlength="50" placeholder=" * Instituci&oacute;n que otorga el t&iacute;tulo" required/></div>

<b>Estudio realizado:</b>
<div><select name='estudio2' id="estudio2">
		  <option value="Ninguno">Seleccionar nivel de estudio</option>
		  <option value="T&eacute;cnico">T&eacute;cnico: 1 a 2 a&ntilde;os de estudio</option>
		  <option value="Tecn&oacute;logo">Tecn&oacute;logo: 2.5 a 4 a&ntilde;os de estudio</option>
		  <option value="Profesional">Profesional: 4.5 a 6 a&ntilde;os de estudio</option>
		  <option value="Especialista">Especialista: posgrado de 1 a 1.5 a&ntilde;os</option>
		  <option value="Magister">Magister: posgrado de 2 a 2.5 a&ntilde;osde estudio</option>
		  <option value="Doctorado">Doctorado: posgrado de 3 a 4 a&ntilde;os de estudio</option>
		  </select></div>
<div><input type='text' name='estudiodescripcion2' id="estudiodescripcion2" maxlength="50" placeholder=" T&iacute;tulo obtenido "/></div>
<div><input type='text' name='estudioinstitucion2' id="estudioinstitucion2" maxlength="50" placeholder=" Instituci&oacute;n que otorga el t&iacute;tulo "/></div>

<b>Estudio realizado:</b>
<div><select name='estudio3' id="estudio3">
		  <option value="Ninguno">Seleccionar nivel de estudio</option>
		  <option value="T&eacute;cnico">T&eacute;cnico: 1 a 2 a&ntilde;os de estudio</option>
		  <option value="Tecn&oacute;logo">Tecn&oacute;logo: 2.5 a 4 a&ntilde;os de estudio</option>
		  <option value="Profesional">Profesional: 4.5 a 6 a&ntilde;os de estudio</option>
		  <option value="Especialista">Especialista: posgrado de 1 a 1.5 a&ntilde;os</option>
		  <option value="Magister">Magister: posgrado de 2 a 2.5 a&ntilde;osde estudio</option>
		  <option value="Doctorado">Doctorado: posgrado de 3 a 4 a&ntilde;os de estudio</option>
		  </select></div>
<div><input type='text' name='estudiodescripcion3' id="estudiodescripcion3" maxlength="50" placeholder=" T&iacute;tulo obtenido "/></div>
<div><input type='text' name='estudioinstitucion3' id="estudioinstitucion3" maxlength="50" placeholder=" Instituci&oacute;n que otorga el t&iacute;tulo "/></div>


<br/><br/><div Style="color:blue;"><h3>Otros estudios realizados</h3></div><br/>

<b>Estudio adicional:</b>
<div><select name='estudio4' id="estudio4"> 
		  <option value="Ninguno">Seleccionar tipo de evento</option>
		  <option value="Curso">Curso</option>
		  <option value="Seminario">Seminario</option>
		  <option value="Taller">Taller</option>
		  <option value="Capacitaci&oacute;n">Capacitaci&oacute;n</option>
		  <option value="Entrenamiento">Entrenamiento</option>
		  <option value="Conferencia">Conferencia</option>
  		  <option value="Congreso">Congreso</option>
  		  <option value="Encuentro">Encuentro</option>
		  <option value="Diplomado">Diplomado</option>
		  </select></div>
<div><input type='text' name='estudiodescripcion4' id="estudiodescripcion4" maxlength="50" placeholder=" Nombre del evento "/></div>
<div><input type='text' name='estudioinstitucion4' id="estudioinstitucion4" maxlength="50" placeholder=" Organizador "/></div>
<div>Horas de duraci&oacute;n: <input type='number' name='estudioduracion4' id="estudioduracion4" min="0" max="550" value="0"/></div>

<b>Estudio adicional:</b>
<div><select name='estudio5' id="estudio5">
		  <option value="Ninguno">Seleccionar tipo de evento</option>
		  <option value="Curso">Curso</option>
		  <option value="Seminario">Seminario</option>
		  <option value="Taller">Taller</option>
		  <option value="Capacitaci&oacute;n">Capacitaci&oacute;n</option>
		  <option value="Entrenamiento">Entrenamiento</option>
		  <option value="Conferencia">Conferencia</option>
  		  <option value="Congreso">Congreso</option>
  		  <option value="Encuentro">Encuentro</option>
		  <option value="Diplomado">Diplomado</option>
		  </select></div>
<div><input type='text' name='estudiodescripcion5' id="estudiodescripcion5" maxlength="50" placeholder=" Nombre del evento "/></div>
<div><input type='text' name='estudioinstitucion5' id="estudioinstitucion5" maxlength="50" placeholder=" Organizador "/></div>
<div>Horas de duraci&oacute;n: <input type='number' name='estudioduracion5' id="estudioduracion5" min="0" max="550" value="0"/></div>


<b>Estudio adicional:</b>
<div><select name='estudio6' id="">
		  <option value="Ninguno">Seleccionar tipo de evento</option>
		  <option value="Curso">Curso</option>
		  <option value="Seminario">Seminario</option>
		  <option value="Taller">Taller</option>
		  <option value="Capacitaci&oacute;n">Capacitaci&oacute;n</option>
		  <option value="Entrenamiento">Entrenamiento</option>
		  <option value="Conferencia">Conferencia</option>
  		  <option value="Congreso">Congreso</option>
  		  <option value="Encuentro">Encuentro</option>
		  <option value="Diplomado">Diplomado</option>
		  </select></div>
<div><input type='text' name='estudiodescripcion6' id="estudiodescripcion6" maxlength="50" placeholder=" Nombre del evento "/></div>
<div><input type='text' name='estudioinstitucion6' id="estudioinstitucion6" maxlength="50" placeholder=" Organizador "/></div>
<div>Horas de duraci&oacute;n: <input type='number' name='estudioduracion6' id="estudioduracion6" min="0" max="550" value="0"/></div>

<b>Estudio adicional:</b>
<div><select name='estudio7' id="estudio7">
		  <option value="Ninguno">Seleccionar tipo de evento</option>
		  <option value="Curso">Curso</option>
		  <option value="Seminario">Seminario</option>
		  <option value="Taller">Taller</option>
		  <option value="Capacitaci&oacute;n">Capacitaci&oacute;n</option>
		  <option value="Entrenamiento">Entrenamiento</option>
		  <option value="Conferencia">Conferencia</option>
  		  <option value="Congreso">Congreso</option>
  		  <option value="Encuentro">Encuentro</option>
		  <option value="Diplomado">Diplomado</option>
		  </select></div>
<div><input type='text' name='estudiodescripcion7' id="estudiodescripcion7" maxlength="50" placeholder=" Nombre del evento "/></div>
<div><input type='text' name='estudioinstitucion7' id="estudioinstitucion7" maxlength="50" placeholder=" Organizador "/></div>
<div>Horas de duraci&oacute;n: <input type='number' name='estudioduracion7' id="estudioduracion7" min="0" max="550" value="0"/></div>

<b>Estudio adicional:</b>
<div><select name='estudio8' id="estudio8">
		  <option value="Ninguno">Seleccionar tipo de evento</option>
		  <option value="Curso">Curso</option>
		  <option value="Seminario">Seminario</option>
		  <option value="Taller">Taller</option>
		  <option value="Capacitaci&oacute;n">Capacitaci&oacute;n</option>
		  <option value="Entrenamiento">Entrenamiento</option>
		  <option value="Conferencia">Conferencia</option>
  		  <option value="Congreso">Congreso</option>
  		  <option value="Encuentro">Encuentro</option>
		  <option value="Diplomado">Diplomado</option>
		  </select></div>
<div><input type='text' name='estudiodescripcion8' id="estudiodescripcion8" maxlength="50" placeholder=" Nombre del evento "/></div>
<div><input type='text' name='estudioinstitucion8' id="estudioinstitucion8" maxlength="50" placeholder=" Organizador "/></div>
<div>Horas de duraci&oacute;n: <input type='number' name='estudioduracion8' id="estudioduracion8" min="0" max="550" value="0"/></div>

<b>Estudio adicional:</b>
<div><select name='estudio9' id="estudio9">
		  <option value="Ninguno">Seleccionar tipo de evento</option>
		  <option value="Curso">Curso</option>
		  <option value="Seminario">Seminario</option>
		  <option value="Taller">Taller</option>
		  <option value="Capacitaci&oacute;n">Capacitaci&oacute;n</option>
		  <option value="Entrenamiento">Entrenamiento</option>
		  <option value="Conferencia">Conferencia</option>
  		  <option value="Congreso">Congreso</option>
  		  <option value="Encuentro">Encuentro</option>
		  <option value="Diplomado">Diplomado</option>
		  </select></div>
<div><input type='text' name='estudiodescripcion9' id="estudiodescripcion9" maxlength="50" placeholder=" Nombre del evento "/></div>
<div><input type='text' name='estudioinstitucion9' id="estudioinstitucion9" maxlength="50" placeholder=" Organizador "/></div>
<div>Horas de duraci&oacute;n: <input type='number' name='estudioduracion9' id="estudioduracion9" min="0" max="550" value="0"/></div>

<b>Estudio adicional:</b>
<div><select name='estudio10' id="estudio10">
		  <option value="Ninguno">Seleccionar tipo de evento</option>
		  <option value="Curso">Curso</option>
		  <option value="Seminario">Seminario</option>
		  <option value="Taller">Taller</option>
		  <option value="Capacitaci&oacute;n">Capacitaci&oacute;n</option>
		  <option value="Entrenamiento">Entrenamiento</option>
		  <option value="Conferencia">Conferencia</option>
  		  <option value="Congreso">Congreso</option>
  		  <option value="Encuentro">Encuentro</option>
		  <option value="Diplomado">Diplomado</option>
		  </select></div>
<div><input type='text' name='estudiodescripcion10' id="estudiodescripcion10" maxlength="50" placeholder=" Nombre del evento "/></div>
<div><input type='text' name='estudioinstitucion10' id="estudioinstitucion10" maxlength="50" placeholder=" Organizador "/></div>
<div>Horas de duraci&oacute;n: <input type='number' name='estudioduracion10' id="estudioduracion10" min="0" max="550" value="0"/></div>


<b>Estudio adicional:</b>
<div><select name='estudio11' id="estudio11">
		  <option value="Ninguno">Seleccionar tipo de evento</option>
		  <option value="Curso">Curso</option>
		  <option value="Seminario">Seminario</option>
		  <option value="Taller">Taller</option>
		  <option value="Capacitaci&oacute;n">Capacitaci&oacute;n</option>
		  <option value="Entrenamiento">Entrenamiento</option>
		  <option value="Conferencia">Conferencia</option>
  		  <option value="Congreso">Congreso</option>
  		  <option value="Encuentro">Encuentro</option>
		  <option value="Diplomado">Diplomado</option>
		  </select></div>
<div><input type='text' name='estudiodescripcion11' id="estudiodescripcion11" maxlength="50" placeholder=" Nombre del evento "/></div>
<div><input type='text' name='estudioinstitucion11' id="estudioinstitucion11" maxlength="50" placeholder=" Organizador "/></div>
<div>Horas de duraci&oacute;n: <input type='number' name='estudioduracion11' id="estudioduracion11" min="0" max="550" value="0"/></div>


<br/><br/><div Style="color:blue;"><h3>Certificaciones - Licencias</h3></div><br/>

<b>Certificado o licencia:</b>
<div><select name='estudio12' id="estudio12">
		  <option value="Ninguno">Seleccionar tipo</option>
		  <option value="Certificado">Certificado</option>
		  <option value="Licencia">Licencia</option>
		  <option value="Matr&iacute;cula">Matr&iacute;cula profesional</option>
		  <option value="Tarjeta">Tarjeta profesional</option>		  
		  <option value="Otro">Otro</option>
		  </select></div>
<div><input type='text' name='estudiodescripcion12' id="estudiodescripcion12" maxlength="50" placeholder=" Descripci&oacute;n"/></div>
<div><input type='text' name='estudioinstitucion12' id="estudioinstitucion12" maxlength="50" placeholder=" Entidad emisora del documento "/></div>

<b>Certificado o licencia:</b>
<div><select name='estudio13' id="estudio13">
		  <option value="Ninguno">Seleccionar tipo</option>
		  <option value="Certificado">Certificado</option>
		  <option value="Licencia">Licencia</option>
		  <option value="Matr&iacute;cula">Matr&iacute;cula profesional</option>
		  <option value="Tarjeta">Tarjeta profesional</option>		  
		  <option value="Otro">Otro</option>
		  </select></div>
<div><input type='text' name='estudiodescripcion13' id="estudiodescripcion13" maxlength="50" placeholder=" Descripci&oacute;n"/></div>
<div><input type='text' name='estudioinstitucion13' id="estudioinstitucion13" maxlength="50" placeholder=" Entidad emisora del documento "/></div>

<b>Certificado o licencia:</b>
<div><select name='estudio14' id="estudio14">
		  <option value="Ninguno">Seleccionar tipo</option>
		  <option value="Certificado">Certificado</option>
		  <option value="Licencia">Licencia</option>
		  <option value="Matr&iacute;cula">Matr&iacute;cula profesional</option>
		  <option value="Tarjeta">Tarjeta profesional</option>		  
		  <option value="Otro">Otro</option>
		  </select></div>
<div><input type='text' name='estudiodescripcion14' id="estudiodescripcion14" maxlength="50" placeholder=" Descripci&oacute;n"/></div>
<div><input type='text' name='estudioinstitucion14' id="estudioinstitucion14" maxlength="50" placeholder=" Entidad emisora del documento "/></div>

<b>Certificado o licencia:</b>
<div><select name='estudio15' id="estudio15">
		  <option value="Ninguno">Seleccionar tipo</option>
		  <option value="Certificado">Certificado</option>
		  <option value="Licencia">Licencia</option>
		  <option value="Matr&iacute;cula">Matr&iacute;cula profesional</option>
		  <option value="Tarjeta">Tarjeta profesional</option>		  
		  <option value="Otro">Otro</option>
		  </select></div>
<div><input type='text' name='estudiodescripcion15' id="estudiodescripcion15" maxlength="50" placeholder=" Descripci&oacute;n"/></div>
<div><input type='text' name='estudioinstitucion15' id="estudioinstitucion15" maxlength="50" placeholder=" Entidad emisora del documento "/></div>

<b>Certificado o licencia:</b>
<div><select name='estudio16' id="estudio16">
		  <option value="Ninguno">Seleccionar tipo</option>
		  <option value="Certificado">Certificado</option>
		  <option value="Licencia">Licencia</option>
		  <option value="Matr&iacute;cula">Matr&iacute;cula profesional</option>
		  <option value="Tarjeta">Tarjeta profesional</option>		  
		  <option value="Otro">Otro</option>
		  </select></div>
<div><input type='text' name='estudiodescripcion16' id="estudiodescripcion16" maxlength="50" placeholder=" Descripci&oacute;n"/></div>
<div><input type='text' name='estudioinstitucion16' id="estudioinstitucion16" maxlength="50" placeholder=" Entidad emisora del documento "/></div>


<br/><br/><div Style="color:blue;"><h3>Intereses profesionales</h3></div><br/>

<b> * Seleccione los niveles de cargo de su inter&eacute;s</b><br>
<div class="col-6 col-12-small"><input type="checkbox" id="cargodeinteres1" name="cargodeinteres1"><label for="cargodeinteres1">	Operativo </label></div>
<div class="col-6 col-12-small"><input type="checkbox" id="cargodeinteres2" name="cargodeinteres2"><label for="cargodeinteres2">	Auxiliar/Asistente </label></div>
<div class="col-6 col-12-small"><input type="checkbox" id="cargodeinteres3" name="cargodeinteres3"><label for="cargodeinteres3"> Profesional Junior (0 a 5 a&ntilde;os de experiencia)</label></div>
<div class="col-6 col-12-small"><input type="checkbox" id="cargodeinteres4" name="cargodeinteres4"><label for="cargodeinteres4"> Profesional Senior (m&aacute;s de 5 a&ntilde;os de experiencia)</label></div>
<div class="col-6 col-12-small"><input type="checkbox" id="cargodeinteres5" name="cargodeinteres5"><label for="cargodeinteres5"> Supervisi&oacute;n </label></div>
<div class="col-6 col-12-small"><input type="checkbox" id="cargodeinteres6" name="cargodeinteres6"><label for="cargodeinteres6"> Gerencial </label></div>
<div class="col-6 col-12-small"><input type="checkbox" id="cargodeinteres7" name="cargodeinteres7"><label for="cargodeinteres7"> Asesor o Consultor</label></div>
<div class="col-6 col-12-small"><input type="checkbox" id="cargodeinteres8" name="cargodeinteres8"><label for="cargodeinteres8"> Alta gerencia </label></div>
<div class="col-6 col-12-small"><input type="checkbox" id="cargodeinteres9" name="cargodeinteres9"><label for="cargodeinteres9"> Auditor </label></div>
<div class="col-6 col-12-small"><input type="checkbox" id="cargodeinteres10" name="cargodeinteres10"><label for="cargodeinteres10"> Proveedor o Contratista </label></div>

<br><br><b>Seleccione el tipo de contrato de su inter&eacute;s</b><br>
<div class="col-6 col-12-small"><input type="checkbox" id="contratodeinteres1" name="contratodeinteres1"><label for="contratodeinteres1"> Tiempo completo - T&eacute;rmino indefinido </label></div>
<div class="col-6 col-12-small"><input type="checkbox" id="contratodeinteres2" name="contratodeinteres2"><label for="contratodeinteres2"> Tiempo completo - T&eacute;rmino fijo </label></div>
<div class="col-6 col-12-small"><input type="checkbox" id="contratodeinteres3" name="contratodeinteres3"><label for="contratodeinteres3"> TIempo parcial - T&eacute;rmino indefinido </label></div>
<div class="col-6 col-12-small"><input type="checkbox" id="contratodeinteres4" name="contratodeinteres4"><label for="contratodeinteres4"> TIempo parcial - T&eacute;rmino fijo </label></div>
<div class="col-6 col-12-small"><input type="checkbox" id="contratodeinteres5" name="contratodeinteres5"><label for="contratodeinteres5"> Por horas </label></div>
<div class="col-6 col-12-small"><input type="checkbox" id="contratodeinteres6" name="contratodeinteres6"><label for="contratodeinteres6"> Aprendizaje, pr&aacute;ctica o pasant&iacute;a</label></div>
<div class="col-6 col-12-small"><input type="checkbox" id="contratodeinteres7" name="contratodeinteres7"><label for="contratodeinteres7"> Teletrabajo o virtual </label></div>
<div class="col-6 col-12-small"><input type="checkbox" id="contratodeinteres8" name="contratodeinteres8"><label for="contratodeinteres8"> Por proyecto, obra o labor</label></div>
<div class="col-6 col-12-small"><input type="checkbox" id="contratodeinteres9" name="contratodeinteres9"><label for="contratodeinteres9"> Otros </label></div>

<br><br><b>Seleccione otros intereses espec&iacute;ficos en SST</b><br>
<div class="col-6 col-12-small"><input type="checkbox" id="otrointeres1" name="otrointeres1"><label for="otrointeres1"> Vig&iacute;a o inspector SST </label></div>
<div class="col-6 col-12-small"><input type="checkbox" id="otrointeres2" name="otrointeres2"><label for="otrointeres2"> Especialista o Supervisor SST </label></div>
<div class="col-6 col-12-small"><input type="checkbox" id="otrointeres3" name="otrointeres3"><label for="otrointeres3"> L&iacute;der SST </label></div>
<div class="col-6 col-12-small"><input type="checkbox" id="otrointeres4" name="otrointeres4"><label for="otrointeres4"> Gerente SST </label></div>
<div class="col-6 col-12-small"><input type="checkbox" id="otrointeres5" name="otrointeres5"><label for="otrointeres5"> Asesor o consultor SST </label></div>
<div class="col-6 col-12-small"><input type="checkbox" id="otrointeres6" name="otrointeres6"><label for="otrointeres6"> Seguridad en el trabajo </label></div>
<div class="col-6 col-12-small"><input type="checkbox" id="otrointeres7" name="otrointeres7"><label for="otrointeres7"> Salud en el trabajo </label></div>
<div class="col-6 col-12-small"><input type="checkbox" id="otrointeres8" name="otrointeres8"><label for="otrointeres8"> Ergonom&iacute;a </label></div>
<div class="col-6 col-12-small"><input type="checkbox" id="otrointeres9" name="otrointeres9"><label for="otrointeres9"> Higiene industrial </label></div>
<div class="col-6 col-12-small"><input type="checkbox" id="otrointeres10" name="otrointeres10"><label for="otrointeres10"> Medio Ambiente </label></div>
<div class="col-6 col-12-small"><input type="checkbox" id="otrointeres11" name="otrointeres11"><label for="otrointeres11"> Seguridad F&iacute;sica </label></div>
<div class="col-6 col-12-small"><input type="checkbox" id="otrointeres12" name="otrointeres12"><label for="otrointeres12"> Sistemas de emergencia </label></div>
<div class="col-6 col-12-small"><input type="checkbox" id="otrointeres13" name="otrointeres13"><label for="otrointeres13"> Plan de emergencia </label></div>
<div class="col-6 col-12-small"><input type="checkbox" id="otrointeres14" name="otrointeres14"><label for="otrointeres14"> Plan de recuperaci&oacute;n de negocio</label></div>
<div class="col-6 col-12-small"><input type="checkbox" id="otrointeres15" name="otrointeres15"><label for="otrointeres15"> Trabajos de alto riesgo </label></div>
<div class="col-6 col-12-small"><input type="checkbox" id="otrointeres16" name="otrointeres16"><label for="otrointeres16"> Sistemas de gesti&oacute;n en SST </label></div>

<br><br><b>Perfil profesional, otros estudios o intereses (m&aacute;ximo 2000 caracteres):</b><br>
<div class="12u$"><textarea name="otrosestudiosintereses" maxlength="2000" id="otrosestudiosintereses" placeholder="Escriba otros estudios o inter&eacute;s (m&aacute;ximo 2000 caracteres):" rows="6"></textarea></div>
ENDTitulo;

echo $codigo;

?>