<br />
<div>
    <input type="hidden" name="op" value="consultas" />
    <label for="trabajador">Trabajador: </label>
     <input type="text" name="trabajador" id="tipo" class="cambio" placeholder="Documento del trabajador"  title="Ingrese la cedula del trabajador" required />
</div> 
<input type="submit" id="enviar-buscar" class="cambio" name="enviar_btn" value="buscar" />
<br />
<?php
if($_GET["trabajador"]!=null)
{
	$tra=$_GET["trabajador"];
	$consulta = "SELECT * FROM vehiculo JOIN trabajador WHERE vehIdTra=identificacion AND vehIdTra like '%$tra%'";
	include("vehiculosTabla-resutados.php");
}
?>
<br />
<a href="pdf/ReportesPdf/vehiculosReptrabajador.php?dato=<?php echo $tra?>" title="Generar Pdf">Generar Pdf</a>