<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
<script language="javascript" src="assets/js/ayuda.js"></script>
<style type="text/css">
.auto-style1 {
	background-color: #C0C0C0;
}
</style>
</head>

<body onload="iniayuda()">


<table style="width:100%" border="1">
  <tr>
    <th></th>
    <th>Tablero de Red SST</th> 
    <th></th>
  </tr>
  <tr>
    <td></td>
    <td><img usemap="#plaza" name=mapa id=mapa  style="background-color: white;" src="images/plazaRedSST3.png" alt="Plaza Red SST"></td> 
    <td></td> 
  </tr>
  <tr>
    <td></td>
    <td align="center"><a href="http://www.redsst.com">www.redsst.com</a></td> 
    <td></td>
  </tr>
</table>



<!-- MODIFICAR PORA CADA AREA: href, onmouseover, coords-->

<map name="plaza">	
	<area href="http://www.redsst.com" target="_blank" onmouseover="mostrarAyuda('0000', 'www.redsst.com')" coords='0,0,60,60' onmousemove="moverAyuda()" onmouseout="ocultarAyuda()" shape='rect'>
</map>

</body>
</html>