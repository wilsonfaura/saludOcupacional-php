<?php
if(!$registro["actArea"]){
    include("conexion.php");
}

//require "conexion.php";
$consulta="SELECT * FROM area ORDER BY area";
$ejecutar_consulta = $conexion->query($consulta);

while($reg= $ejecutar_consulta->fetch_assoc())
{
	$nombre_area = ($reg["area"]);
	echo "<option value='$nombre_area'";
	if($nombre_area==($registro["actArea"]))
	{
		echo " selected";
	}
	echo ">$nombre_area</option>";
}

?>