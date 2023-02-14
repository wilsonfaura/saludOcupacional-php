
<?php
$consulta = "SELECT * FROM entrega JOIN trabajador JOIN epp WHERE entTrabajador=identificacion AND entEpp=eppNombre";
include("php/eppEntregaTabla-resutados.php");
?>
<br />
<a href="pdf/ReportesPdf/entregasRepTodos.php" title="Generar Pdf">Generar Pdf</a>