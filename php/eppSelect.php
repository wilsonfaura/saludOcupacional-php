<?php 
  $consulta = "SELECT eppNombre FROM epp ORDER BY eppNombre";
  $ejecutar_consulta = $conexion->query($consulta);

  while ($registro = $ejecutar_consulta->fetch_assoc())
  {
  echo "<option value='".utf8_encode($registro["eppNombre"])."'";
  if($_GET["eppNom_slc"]==$registro["eppNombre"])
  {
	echo"selected";  
  }
  echo ">".utf8_encode($registro["eppNombre"])."</option>";
  }
?>