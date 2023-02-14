<?php 
  $consulta = "SELECT identificacion FROM trabajador ORDER BY identificacion";
  $ejecutar_consulta = $conexion->query($consulta);

  while ($registro = $ejecutar_consulta->fetch_assoc())
  {
  echo "<option value='".utf8_encode($registro["identificacion"])."'";
  if($_GET["idTrabajador_slc"]==$registro["identificacion"])
  {
	echo"selected";  
  }
  echo ">".utf8_encode($registro["identificacion"])."</option>";
  }
?>