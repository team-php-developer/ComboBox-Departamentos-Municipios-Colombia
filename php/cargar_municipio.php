<?php 
require_once 'conexion.php';

function getMunicipio(){
	$mysqli = getConn();
	$id = $_POST['id'];
	$query = "SELECT * FROM `municipios` WHERE departamento_id = $id ORDER BY municipio ASC";
	$result = $mysqli->query($query);
	$municipio = '<option value="0">Elige una opción</option>';
	while($row = $result->fetch_array(MYSQLI_ASSOC)){
		$municipio .= "<option value='$row[id_municipio]'>$row[municipio]</option>";
	}
	return $municipio;
}

echo getMunicipio();
?>
