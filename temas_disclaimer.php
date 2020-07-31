<?php

//INCREMENTAR EN CONSECUTIVO DE LA VARIABLE CÓDIGO PARA EVITAR REPETICIÓN Y ERRORES AL MOSTRAR LA MISMA VARIABLE EN UN DOCUMENTO
//CAMBIAR LAS COMILLAS DOBLES DEL CÓDIGO HTML POR COMILLAS SIMPLES
$disclaimer = "";
$disclaimer .= <<<"ENDTitulo"
			<div style="line-height:95%; color:navy; text-align:justify ">
					<br/> Los datos aqu&iacute; publicados son responsabilidad de cada persona. Red SST no asume ninguna responsabilidad respecto a los mismos.
					Nuestro objetivo es compartir informaci&oacute;n especializada en Seguridad y Salud en el Trabajo (SST).
					Para evitar que se env&iacute;e informaci&oacute;n indiscriminadamente, realizamos una verificaci&oacute;n del correo
					de contacto suministrado al momento de ingresar datos por medio del env&iacute;o de un c&oacute;digo. 
					De esta forma podemos garantizar que el correo mostrado es un correo v&aacute;lido y la	persona quien ingres&oacute; la informaci&oacute;n, 
					tiene acceso al mismo. Los dem&aacute;s datos no son verificados. Solicitamos a cada uno hacer buen uso de esta
					herramienta y de la informaci&oacute;n aqu&iacute; suministrada.										
			</div>
ENDTitulo;

echo $disclaimer;

?>