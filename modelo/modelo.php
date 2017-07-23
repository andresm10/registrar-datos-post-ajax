<?php
	require "../conexion/conexion.php";
	class Registrar{
		var $conn;
		var $conexion;
		var $mensajeExito;
		var $mensajeError;
		function Registrar(){
			$this->conexion= new  Conexion();				
			$this->conn=$this->conexion->conectarse();
			$this->mensajeExito="Registro Exitoso";
			$this->mensajeError="Error al Registrar";
		}
		//---------------------------------------------------------------------------------------------------------------------------		
		function registrarPersona($nombre, $apellidos, $telefono, $ciudad){
			
			$queryRegistrar = "insert into usuarios (nombres, apellidos, telefono, ciudad) values ('".$nombre."', '".$apellidos."', '".$telefono."', '".$ciudad."')";
			$registrar = mysqli_query($this->conn, $queryRegistrar) or die(mysqli_error());
			
			if($registrar){
				echo $this->mensajeExito;				
			}else{
				echo $this->mensajeError;
			}
		}		
	}
?>