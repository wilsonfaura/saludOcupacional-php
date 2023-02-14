<?php 
  $consulta = "SELECT usuIdentificacion FROM usuario ORDER BY usuIdentificacion";
  $ejecutar_consulta = $conexion->query($consulta);

  while ($registro = $ejecutar_consulta->fetch_assoc())
  {
  echo "<option value='".utf8_encode($registro["usuIdentificacion"])."'";
  if($_GET["idUsuario_slc"]==$registro["usuIdentificacion"])
  {
	echo"selected";  
  }
  echo ">".utf8_encode($registro["usuIdentificacion"])."</option>";
  }
?>