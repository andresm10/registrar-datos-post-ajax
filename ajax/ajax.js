// JavaScript Document
	var xmlhttp;
function load(str, url, cfunc)
{

if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
	xmlhttp.onreadystatechange=cfunc;
	xmlhttp.open("POST",url,true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send(str);
}

function metodoAjax(datos, ruta)LOS RECIBE
{

 load(datos, ruta, function()
 { 
   if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	document.getElementById("cuerpo").innerHTML=xmlhttp.responseText;
    }
 });
}