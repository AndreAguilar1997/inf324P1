<html>
	<head>
	 <center>
	<body background="fondo1.jpg" bgcolor="C6A1F6">
	<?php
	session_start();
	$usuario=$_SESSION['nombre_usuario'];

	echo "<h1 text-aling:center>FACULTAD DE CIENCIAS PURAS Y NATURALES <br> usuario $usuario</h1>";
	
	echo "<td>";
	echo "<a href='http://www.informatica.edu.bo/'>Informatica</a>";
	echo " - ";
	echo "<a href='https://estadistica.umsa.bo/'>Estadistica</a>";
	echo " - ";
	echo "<a href='http://www.fiumsa.edu.bo/'>FISICA</a>";
	echo "</td>";


?>
	
</center>
	</body>
	</html>