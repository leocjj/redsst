var ns4 = (document.layers)? true:false
var ie4 = (document.all)? true:false
var ns6 = (document.getElementById && !document.all) ? true: false;
var coorX, coorY;
if (ns6) document.addEventListener("mousemove", mouseMove, true)
if (ns4) {document.captureEvents(Event.MOUSEMOVE); document.mousemove = mouseMove;}

var ayuda;

function mouseMove(e)	{
	if (ns4||ns6)	{
		coorX = e.pageX; 
		coorY = e.pageY;
	}
	if (ie4)	{
		coorX = event.x + document.documentElement.scrollLeft + document.body.scrollLeft;
		coorY = event.y + document.documentElement.scrollTop + document.body.scrollTop;
	}
	return true;
}

function iniayuda()	{
	if (ie4)	document.body.onmousemove = mouseMove;
	ayuda = document.createElement("div");	ayuda.id = "ayuda";ayuda.style.visibility = "hidden";ayuda.style.position = "absolute";ayuda.style.left = 0;ayuda.style.top = 0;
	ayuda.style.backgroundColor = "#eeeeee";
	ayuda.style.color = "black";
	ayuda.style.border = "solid 0px blue";
	ayuda.style.textAlign = "justify";
	ayuda.style.padding = 0;
	ayuda.style.margin = 0;
	document.body.appendChild(ayuda);
}

/*
<table cellspacing=0 border=0 style='padding: 5; margin:0 '>
	<tr style='background-color:blue; color: white;'>
		<td style='font-weight:900;text-align:center; text-indent: .5cm'>
				//AQUI VA CABECERA
		</td>
		<td><img style='margin:0 ' align=right width='30px' src='images/icons/0000.png'></td>
	</tr>
	<tr>
		<td colspan=2 style='background-color:blue;height:1'></td>
	</tr>
	<tr>
		<td colspan=2 style='padding: 5'>
				//AQUI VA MENSAJE
	</td></tr></table>
*/
/* ORIGINAL
var ini_msg = "<table cellspacing=0 border=0 style='padding: 5; margin:0 '><tr style='background-color:blue; color: white;'><td style='font-weight:900;text-align:center; text-indent: .5cm'>";
var med_msg = "</td><td><img style='margin:0 ' align=right width='20px' src='images/icons/0000.png'></td></tr><tr><td colspan=2 style='background-color:blue;height:1'></td></tr><tr><td colspan=2 style='padding: 5'>";
var fin_msg = "</td></tr></table>";
*/

var ini_msg = "<table cellspacing=0 border=0 style='padding: 3; margin:0 '><tr style='background-color:white; color: black;'><td><img style='margin:0' align=center width='180px' src='images/icons/";
var med_msg = ".png'></td></tr><tr><td colspan=2 style='padding: 0' align=center>";
var fin_msg = "</td></tr></table>";


//Muestra la imagen cabecera.png en 180px, tomada de la carpeta src='images/icons/  con un mensaje abajo
function mostrarAyuda(cabecera, mensaje)	{
	document.getElementById("ayuda").style.top = (coorY + 10) + "px";
	document.getElementById("ayuda").style.left = (coorX + 10) + "px";
	document.getElementById("ayuda").innerHTML = ini_msg + cabecera + med_msg + mensaje + fin_msg;
	document.getElementById("ayuda").style.visibility = "visible";
}

function ocultarAyuda()	{
	document.getElementById("ayuda").style.visibility = "hidden";
}

function moverAyuda()	{
	document.getElementById("ayuda").style.top = (coorY + 10) + "px";
	document.getElementById("ayuda").style.left = (coorX + 10) + "px";
}
