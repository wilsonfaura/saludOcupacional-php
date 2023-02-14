<br />
<div>
    <input type="hidden" name="op" value="consultas" />
    <label for="placa">Placas: </label>
     <input type="text" name="placa" id="placa" class="cambio" placeholder="Placa del vehiculo"  title="Ingrese la placa del vehiculo" required />
</div> 
<input type="submit" id="enviar-buscar" class="cambio" name="enviar_btn" value="buscar" />
<br />
<?php
if($_GET["placa"]!=null)
{
	$placa=$_GET["placa"];
	$consulta = "SELECT * FROM vehiculo JOIN trabajador WHERE vehIdTra=identificacion AND vehPlaca like '%$placa%'";
	include("vehiculosTabla-resutados.php");
}
?>
<br />
<a href="pdf/ReportesPdf/vehiculosRepPlaca.php?dato=<?php echo $placa?>" title="Generar Pdf">Generar Pdf</a>