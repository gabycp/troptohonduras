<?php
	require_once ('datosConexion.php');
	require_once('Conexion.php');
	$conexion = new Conexion($server,$user,$pass,$db);
	$conexion->connect();

	$query = "SELECT categoria_boletin FROM Categoria_Boletin";
	$conexion->select($query);
		$html = "<select name='categoria'>";
	while($row = mysqli_fetch_array($conexion)) {
		$html .= "<option>" . $row[0] . "<option>";
	}
	$html .= "</select>";
	echo $html;

?> 
