
<?php
$consulta = "SELECT * FROM evento JOIN trabajador WHERE evIdTrabajador=identificacion";
include("php/eventoTabla-resutados.php");
?>
<br />
<a href="pdf/ReportesPdf/eventoRepTodos.php" title="Generar Pdf">Generar Pdf</a>