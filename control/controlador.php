<?php 
	require "../modelo/modelo.php";
	$objRegistrar = new Registrar();
	if(isset($_POST["var_nombres"]) && isset($_POST["var_apellidos"]) && isset($_POST["var_telefono"]) && isset($_POST["var_ciudad"])){
		$objRegistrar->registrarPersona($_POST["var_nombres"], $_POST["var_apellidos"], $_POST["var_telefono"], $_POST["var_ciudad"]);
		//echo $_POST["var_nombres"]." ".$_POST["var_apellidos"];
	}
?>