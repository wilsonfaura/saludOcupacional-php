<br />
<div>
    <input type="hidden" name="op" value="consultas" />
    <label for="area">Area: </label>
     <input type="text" name="area" id="area" class="cambio" placeholder="Area capacitacion"  title="ingrese el area a capacitar" required />
</div> 
<input type="submit" id="enviar-buscar" class="cambio" name="enviar_btn" value="buscar" />
<?php
if($_GET["area"]!=null)
{
	$area=$_GET["area"];
	$consulta = "SELECT * FROM capacitacion WHERE capArea like '%$area%'";
	include("capacitacionTabla-resutados.php");
}
?>
<br />
<a href="pdf/ReportesPdf/capacitacionRepArea.php?dato=<?php echo $area?>" title="Generar Pdf">Generar Pdf</a>