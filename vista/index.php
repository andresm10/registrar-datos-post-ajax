<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registrar Datos por GET con AJAX</title>
<script src="../ajax/ajax.js"></script>
<script type="text/javascript">
	var nombres="", apellidos="", telefono="", ciudad="", datos="";
	function enviarDatos(){
		nombres = document.getElementById("nombres").value;
		apellidos = document.getElementById("apellidos").value;
		telefono = document.getElementById("telefono").value;
		ciudad = document.getElementById("ciudad").value;
		datos="var_nombres="+nombres+"&var_apellidos="+apellidos+"&var_telefono="+telefono+"&var_ciudad="+ciudad;
		metodoAjax(datos,"../control/controlador.php");
	}
</script>
<style type="text/css">
	body{
		background-color: #A63F64;		
	}
	#container{
		font-family:Verdana, Geneva, sans-serif;
		font-size:18px;
		width:80%;
		color:#FFF;
	}	
	.fila {padding-bottom: 6px;overflow:auto;overflow:auto;}
	.lab_camp {width:50%; float:left;}
	.boton {text-align:center;}
</style>
</head>

<body>
	<div id="container">
    	<fieldset>
        	<div>
            	<h1>Registrar datos por POST con AJAX - PHP - MySQL - Javascript - HTML</h1>
            </div>
        	<div class="fila" style="padding-bottom: 6px;overflow:auto;">
        	<label class="lab_camp">Nombres</label>
            <input class="lab_camp" type="text" name="nombres" id="nombres" value="" autofocus="autofocus" />
            </div>
            <div class="fila" style="padding-bottom: 6px;overflow:auto;"> 
            <label class="lab_camp" >Apellidos</label>
            <input class="lab_camp" type="text" name="apellidos" id="apellidos" value="" />
            </div>
            <div class="fila" style="padding-bottom: 6px;overflow:auto;"> 
            <label class="lab_camp" >Tel&eacute;fono</label>
            <input class="lab_camp" type="text" name="telefono" id="telefono" value="" />
            </div>
            <div class="fila" style="padding-bottom: 6px;overflow:auto;"> 
            <label class="lab_camp" >Ciudad</label>
            <input class="lab_camp" type="text" name="ciudad" id="ciudad" value="" />
            </div>
            <div>
                <input class="boton" type="button" value="Registrar" onClick="enviarDatos()" />
            </div>
            <div id="cuerpo"></div>
            <div>
            	<h2><a href="http://www.codigoweblibre.tk" target="_blank">http://www.codigoweblibre.tk</a></h2>
                <h2>Canal en youtube: codigoweblibre</h2>
                <h2>codigoweblibre</h2>
            </div>
        </fieldset>
    </div>    
</body>
</html>