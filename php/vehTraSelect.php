<?php 
  $consulta = "SELECT identificacion FROM trabajador ORDER BY identificacion";
  $ejecutar_consulta = $conexion->query($consulta);

while($registro= $ejecutar_consulta->fetch_assoc())
{
	$nombre_id = utf8_encode($registro["identificacion"]);
	echo "<option value='$nombre_id'";
	if($nombre_id==utf8_decode($registro_vehiculo["vehIdTra"]))
	{
		echo " selected";
	}
	echo ">$nombre_id</option>";
}  
?>