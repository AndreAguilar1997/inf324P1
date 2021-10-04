<?php
	require 'conexion_postgres.php';
	session_start();
	$usuario=$_POST['usuario'];
	$clave=$_POST['pass'];
	
	$query="select * from usuario where usuario='$usuario' and contrasena='$clave'";
	$resultado=pg_query($conexion,$query);
	$cantidad=pg_num_rows($resultado);
	if($cantidad>0){
		$_SESSION['nombre_usuario']=$usuario;
		header ("location:ingresar.php");
	}
	else{
		echo "datos incorectos ";
	}
?>
