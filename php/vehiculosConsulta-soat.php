<br />
<div>
    <input type="hidden" name="op" value="consultas" />
    <label for="inicio">Inicio: </label>
     <input type="date" name="inicio" id="inicio" class="cambio" title="Ingrese la fecha de inicio" required />
     <label for="fin">Fin: </label>
     <input type="date" name="fin" id="fin" class="cambio" title="Ingrese la fecha de fin" required />
</div> 
<input type="submit" id="enviar-buscar" class="cambio" name="enviar_btn" value="buscar" />
<?php
if($_GET["inicio"] and $_GET["fin"]!=null)
{
	$inicio=$_GET["inicio"];
	$fin=$_GET["fin"];
	$consulta = "SELECT * FROM vehiculo JOIN trabajador WHERE vehIdTra=identificacion AND vehSoat BETWEEN '$inicio' AND '$fin'";
	include("vehiculosTabla-resutados.php");
}
?>
<br />
<a href="pdf/ReportesPdf/vehiculosRepSoat.php?dato=<?php echo $inicio?>&dato1=<?php echo $fin?>" title="Generar Pdf">Generar Pdf</a>