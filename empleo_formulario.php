<?php

//INCREMENTAR EN CONSECUTIVO DE LA VARIABLE CÓDIGO PARA EVITAR REPETICIÓN Y ERRORES AL MOSTRAR LA MISMA VARIABLE EN UN DOCUMENTO

$codigo7 = "";

$codigo7 .= <<<"ENDTitulo"

<br/><div Style="color:blue;"><h3>Datos de contacto</h3></div>

<div><input type='email' name='correo_ingreso2' id="correo_ingreso2" maxlength="55" placeholder=" * Correo electr&oacute;nico " class="email" required/></div>
<div><input type='text' name='codigo_ingreso2' id="codigo_ingreso2" maxlength="8" placeholder=" * C&oacute;digo de acceso " class="email" required/></div>
<div><input type='text' name='titulo1' id="titulo1" maxlength="100" placeholder=" * T&iacute;tulo principal " class="nombre" required/></div>
<div><input type='text' name='titulo2' id="titulo2" maxlength="100" placeholder=" T&iacute;tulo secundario " /></div>
<div ><select name='pais' id="pais" required>
		  <option value="Ninguno"> * Seleccionar pa&iacute;s</option>
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
		  <option value="RepublicaDominicana">Rep&uacute;blica Dominicana</option>
		  <option value="Uruguay">Uruguay</option>
		  <option value="Venezuela">Venezuela</option>	 </select></div>
<div><input type='text' name='ciudad' id="ciudad" maxlength="30" placeholder=" Ciudad " /></div>
<div><input type="text" name='telefono1' id="telefono1" maxlength="20" placeholder=" Tel&eacute;fono m&oacute;vil " /></div>
<div><input type='text' name='telefono2' id="telefono2" maxlength="20" placeholder=" Tel&eacute;fono fijo "/></div>
<div><input type='text' name='paginaweb1' id="paginaweb1" maxlength="150" placeholder=" P&aacute;gina Web 1 "/></div>
<div><input type='text' name='paginaweb2' id="paginaweb2" maxlength="150" placeholder=" P&aacute;gina Web 2 "/></div>


<br/><br/><div Style="color:blue;"><h3>Informaci&oacute;n general</h3></div><br/>

<table style="width:100%">
  <tr>
    <td><div><b> * Fecha inicio:</b></div></td>
    <td><input type="date" name='fechainicio' id="fechainicio" required/></td> 
  </tr>
  <tr>
    <td><div><b> * Fecha finalizaci&oacute;n:</b></div></td>
    <td><input type="date" name='fechafin' id="fechafin" required/> </td> 
  </tr>
  <tr>
    <td><div><b>Rango de salario</b></div></td>
    <td>(moneda local)</td> 
  </tr>
  <tr>
    <td><div>Inferior:</div></td>
    <td><input type='number' name='rangosalarioinferior' id="rangosalarioinferior" min="0" max="999999999" value="0"/></td> 
  </tr>
  <tr>
    <td><div>Superior:</div></td>
    <td><input type='number' name='rangosalariosuperior' id="rangosalariosuperior" min="0" max="999999999" value="0"/></td> 
  </tr>
  <tr>
    <td><div>A&ntilde;os de experiencia: </div></td>
    <td><input type='number' name='experiencia' id="experiencia" min="0" max="20" value="0"/></td> 
  </tr> 
</table>

<div><input type="checkbox" id="requiereviajar" name="requiereviajar"><label for="requiereviajar"> Requiere viajar </label></div>
<div><input type="checkbox" id="requierelicencia" name="requierelicencia"><label for="requierelicencia"> Requiere licencia </label></div>

<div><input type='text' name='sectordelaempresa' id="sectordelaempresa" maxlength="30" placeholder=" Sector/tipo de empresa"/></div>
<div><input type='text' name='nombredelaempresa' id="nombredelaempresa" maxlength="30" placeholder=" Nombre de la empresa"/></div>

<div><select name='niveldeestudio' id="niveldeestudio" required>
		  <option value="Ninguno"> * Nivel de estudio requerido</option>
		  <option value="T&eacute;cnico">T&eacute;cnico: 1 a 2 a&ntilde;os de estudio</option>
		  <option value="Tecn&oacute;logo">Tecn&oacute;logo: 2.5 a 4 a&ntilde;os de estudio</option>
		  <option value="Profesional">Profesional: 4.5 a 6 a&ntilde;os de estudio</option>
		  <option value="Especialista">Especialista: posgrado de 1 a 1.5 a&ntilde;os</option>
		  <option value="Magister">Magister: posgrado de 2 a 2.5 a&ntilde;os de estudio</option>
		  <option value="Doctorado">Doctorado: posgrado de 3 a 4 a&ntilde;os de estudio</option>
		  </select></div>
<div><select name='niveldecargo' id="niveldecargo" required>
		  <option value="Ninguno"> 				* Nivel del cargo ofrecido</option>
		  <option value="Operativo">			Operativo</option>
		  <option value="Auxiliar o Asistente">	Auxiliar/Asistente</option>
		  <option value="Profesional Junior">	Profesional Junior (0 a 5 a&ntilde;os de experiencia</option>
		  <option value="Profesional Senior">	Profesional Senior (m&aacute;s de 5 a&ntilde;os de experiencia)</option>
		  <option value="Supervisi&oacute;n">			Supervisi&oacute;n</option>
		  <option value="Gerencial">			Gerencial</option>
		  <option value="Asesor o Consultor">		Asesor o Consultor</option>
		  <option value="Alta Gerencia">			Alta gerencia</option>
		  <option value="Auditor">				Auditor</option>
		  <option value="Proveedor o Contratista">	Proveedor o Contratista</option>
		  </select></div>
<div><select name='tipodecontrato' id="tipodecontrato" required>
		  <option value="Ninguno">		* Tipo de contrato ofrecido</option>
		  <option value="TCTI">			Tiempo completo - T&eacute;rmino indefinido</option>
		  <option value="TCTF">			Tiempo completo - T&eacute;rmino fijo</option>
		  <option value="TPTI">			TIempo parcial - T&eacute;rmino indefinido</option>
		  <option value="TPTF">			TIempo parcial - T&eacute;rmino fijo</option>		  
		  <option value="Por Horas">		Por horas </option>
		  <option value="Aprendizaje">	Aprendizaje, pr&aacute;ctica o pasant&iacute;a</option>
		  <option value="Teletrabajo">	Teletrabajo o virtual </option>
		  <option value="Por Proyecto">	Por proyecto, obra o labor</option>
		  <option value="Otro">			Otros </option>
		  </select></div>
<div><select name='interesprincipal' id="interesprincipal" required>
		  <option value="Ninguno">									* Inter&eacute;s principal del cargo</option>
		  <option value="Vig&iacute;a o Inspector">					Vig&iacute;a o inspector SST</option>
		  <option value="Especialista o Supervisor">				Especialista o Supervisor SST</option>
		  <option value="L&iacute;der">								L&iacute;der SST</option>
		  <option value="Gerente">									Gerente SST</option>		  
		  <option value="Asesor o Consultor">						Asesor o consultor SST</option>
		  <option value="Seguridad en el Trabajo">					Seguridad en el trabajo</option>
		  <option value="Salud en el Trabajo">						Salud en el trabajo</option>
		  <option value="Ergonom&iacute;a">							Ergonom&iacute;a</option>
		  <option value="Higiene Industrial">						Higiene industrial</option>
		  <option value="Medio Ambiente">							Medio Ambiente</option>
		  <option value="Seguridad F&iacute;sica">					Seguridad F&iacute;sica</option>
		  <option value="Sistemas de Emergencia">					Sistemas de emergencia </option>
		  <option value="Plan de Emergencia">						Plan de emergencia</option>
		  <option value="Plan de Recuperaci&oacute;n de Negocio">	Plan de recuperaci&oacute;n de negocio</option>
		  <option value="Trabajos de Alto Riesgo">					Trabajos de alto riesgo</option>
		  <option value="Sistemas de Gesti&oacute;n">				Sistemas de gesti&oacute;n en SST</option>
		  <option value="Otros">									Otros en SST</option>
		  </select></div>

<br><b>Seleccione intereses espec&iacute;ficos requeridos para el cargo:</b><br>
<div><input type="checkbox" id="interesespecifico1" name="interesespecifico1"><label for="interesespecifico1"> Vig&iacute;a o inspector SST </label></div>
<div><input type="checkbox" id="interesespecifico2" name="interesespecifico2"><label for="interesespecifico2"> Especialista o Supervisor SST </label></div>
<div><input type="checkbox" id="interesespecifico3" name="interesespecifico3"><label for="interesespecifico3"> L&iacute;der SST </label></div>
<div><input type="checkbox" id="interesespecifico4" name="interesespecifico4"><label for="interesespecifico4"> Gerente SST </label></div>
<div><input type="checkbox" id="interesespecifico5" name="interesespecifico5"><label for="interesespecifico5"> Asesor o consultor SST </label></div>
<div><input type="checkbox" id="interesespecifico6" name="interesespecifico6"><label for="interesespecifico6"> Seguridad en el trabajo </label></div>
<div><input type="checkbox" id="interesespecifico7" name="interesespecifico7"><label for="interesespecifico7"> Salud en el trabajo </label></div>
<div><input type="checkbox" id="interesespecifico8" name="interesespecifico8"><label for="interesespecifico8"> Ergonom&iacute;a </label></div>
<div><input type="checkbox" id="interesespecifico9" name="interesespecifico9"><label for="interesespecifico9"> Higiene industrial </label></div>
<div><input type="checkbox" id="interesespecifico10" name="interesespecifico10"><label for="interesespecifico10"> Medio Ambiente </label></div>
<div><input type="checkbox" id="interesespecifico11" name="interesespecifico11"><label for="interesespecifico11"> Seguridad F&iacute;sica </label></div>
<div><input type="checkbox" id="interesespecifico12" name="interesespecifico12"><label for="interesespecifico12"> Sistemas de emergencia </label></div>
<div><input type="checkbox" id="interesespecifico13" name="interesespecifico13"><label for="interesespecifico13"> Plan de emergencia </label></div>
<div><input type="checkbox" id="interesespecifico14" name="interesespecifico14"><label for="interesespecifico14"> Plan de recuperaci&oacute;n de negocio</label></div>
<div><input type="checkbox" id="interesespecifico15" name="interesespecifico15"><label for="interesespecifico15"> Trabajos de alto riesgo </label></div>
<div><input type="checkbox" id="interesespecifico16" name="interesespecifico16"><label for="interesespecifico16"> Sistemas de gesti&oacute;n en SST </label></div>


<br/><br/><div Style="color:blue;"><h3>Informaci&oacute;n detallada</h3></div><br/><br/>

<b>Descripci&oacute;n detallada de la oferta de empleo (m&aacute;ximo 4000 caracteres):</b><br>
<div class="12u$"><textarea name="descripciondelcargo" maxlength="4000" id="descripciondelcargo" placeholder=" * Descripci&oacute;n detallada (m&aacute;ximo 4000 caracteres):" rows="6"></textarea></div>

<b>Descripci&oacute;n de requisitos obligatorios (m&aacute;ximo 1000 caracteres):</b><br>
<div ><textarea name="requisitosobligatorios" maxlength="1000" id="requisitosobligatorios" placeholder="Requisitos obligatorios (m&aacute;ximo 1000 caracteres):" rows="3"></textarea></div>

<b>Descripci&oacute;n de requisitos deseables (m&aacute;ximo 1000 caracteres):</b><br>
<div ><textarea name="requisitosdeseables" maxlength="1000" id="requisitosdeseables" placeholder="Requisitos deseables (m&aacute;ximo 1000 caracteres):" rows="3"></textarea></div>

ENDTitulo;

echo $codigo7;

?>