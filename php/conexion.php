<?php 
function getConn(){
	$mysqli = mysqli_connect('localhost', 'root', 'ingmorales', "departamentos_municipios");
	if (mysqli_connect_errno($mysqli))
		echo "Error al Conectar la Base de Datos: " . mysqli_connect_error();
	$mysqli->set_charset('utf8');
	return $mysqli;
}
?>