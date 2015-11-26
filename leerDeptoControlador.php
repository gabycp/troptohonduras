<?php
	require_once ('datosConexion.php');
	require_once('Conexion.php');
	$conexion = new Conexion($server,$user,$pass,$db);
	$conexion->connect();

	$query = "SELECT nombre FROM Departamento";
	$conexion->select($query);
	$html = "<select name='departamento'>";
	while($row = mysqli_fetch_array($conexion)) {
		$html .= "<option>" . $row[0] . "<option>";
	}
	$html .= "</select>";
	echo $html;

?> 
