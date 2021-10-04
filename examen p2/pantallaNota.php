<html>
	<head>
		<title>Tabla BD</title>
		<style>
table {
  border-collapse: collapse;
  table-layout: fixed;
  width: 100%;
  background: white;
}

th, td {
  border: 1px solid lightgray;
  padding: 8px; 
  text-align: left;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
  
  &:first-child {
    width: 90px;
  }
  &:last-child {
    text-align: center;
    width: 60px;
  }
}

th {
  background: teal;
  color: white;
  text-transform: uppercase;
  font-weight: normal;
}

table tr:first-child td {
  border-top: none;
}

.container {
  background: tan;
  width: 100%;
  padding: 24px;
  height: 300px;
}

.tWrap {
  height: 100%;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  
  &__head {
    flex: 0 0 37px; // for Safari and IE
    overflow-y: scroll;
  }
  
  &__body {
    overflow-y: scroll;
  }
}
		</style>
	</head>
<body>
	<?php
	include "conexion.inc.php";
	$sql="select * from notas";
	$resultado=pg_query($conexion, $sql);
	//print_r($resultado);
	?>
	<table border="1">
		<thead>
		<tr>
			<th>Carnet</th>
			<th>notafinal</th>
		</tr>
		</thead>
		<tbody>
		<?php
			//$fila=mysqli_fetch_array($resultado)
			while($fila=pg_fetch_array ($resultado)) {
				//print_r($fila);
				//echo $fila["nombre"]."<br/>";
				echo "<tr>";
				echo "<td>".$fila["ci"]."</td>";
				echo "<td>".$fila['notafinal']."</td>";
				echo "</tr>";
			}
		?>
		</tbody>
	</table>
	
</body>
</html>