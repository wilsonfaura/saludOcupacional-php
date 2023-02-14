<?php
$id = $_POST['identificacion_hdn'];
$placa = $_POST['placa'];
$tipo = $_POST['tipo'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$targeta = $_POST['targeta'];
$kilometraje = $_POST['kilometraje'];
$licencia = $_POST['licencia'];
$soat = $_POST['soat'];
$revision = $_POST['revision'];



include("conexion.php");

$consulta = "SELECT * FROM vehiculo WHERE vehPlaca='$placa'";
$ejecutar_consulta = $conexion->query($consulta);
$num_registros = $ejecutar_consulta->num_rows;

if($num_registros==0){
		
$consulta = "INSERT INTO vehiculo SET vehIdTra='$id',vehPlaca='$placa',vehTipo='$tipo',vehMarca='$marca',vehModelo='$modelo',vehTarPro='$targeta',vehKm='$kilometraje',vehLicencia='$licencia',vehSoat='$soat',vehTecno='$revision'";

$ejecutar_consulta = $conexion->query(utf8_encode($consulta));

  if ($ejecutar_consulta)
{
     $mensaje = "El  vehiculo con placa <b>$placa</b> fue registrado correctamente  :)";
}
  else

     $mensaje = "El vehiculo con placa <b>$placa</b> no se pudo registrar  :(";
}
  else 
 
     $mensaje = "El vehiculo con placa <b>$placa</b> ya se encuentra registrado  :/";


$conexion->close();
header("Location: ../vehiculosMenu.php?op=agregar&mensaje=$mensaje");
?>
