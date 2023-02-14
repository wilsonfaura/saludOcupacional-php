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
	$consulta = "SELECT * FROM evento JOIN trabajador WHERE evIdTrabajador=identificacion AND evIdTrabajador like '%$tra%'";
	include("eventoTabla-resutados.php");
}
?>
<br />
<a href="pdf/ReportesPdf/eventoRepTrabajador.php?dato=<?php echo $tra?>" title="Generar Pdf">Generar Pdf</a>