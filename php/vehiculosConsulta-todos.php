
<?php
$consulta = "SELECT * FROM vehiculo JOIN trabajador WHERE vehIdTra=identificacion";
include("php/vehiculosTabla-resutados.php");
?>
<br />
<a href="pdf/ReportesPdf/vehiculosRepTodos.php" title="Generar Pdf">Generar Pdf</a>