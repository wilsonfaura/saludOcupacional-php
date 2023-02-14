<?php 
  $consulta = "SELECT vehPlaca FROM vehiculo ORDER BY vehPlaca";
  $ejecutar_consulta = $conexion->query($consulta);

  while ($registro = $ejecutar_consulta->fetch_assoc())
  {
  echo "<option value='".utf8_encode($registro["vehPlaca"])."'";
  if($_GET["idPlaca_slc"]==$registro["vehPlaca"])
  {
	echo"selected";  
  }
  echo ">".utf8_encode($registro["vehPlaca"])."</option>";
  }
?>