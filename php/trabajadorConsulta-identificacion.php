<br />
<div>
    <input type="hidden" name="op" value="consultas" />
    <label for="identificacion">Identificacion: </label>
     <input type="number" name="identificacion" id="identificacion" class="cambio" placeholder="Identificacion del trabajador"  title="Ingrese la identificacion del trabajador" required />
</div> 
<input type="submit" id="enviar-buscar" class="cambio" name="enviar_btn" value="buscar" />
<?php
if($_GET["identificacion"]!=null)
{
	$id=$_GET["identificacion"];
	$consulta = "SELECT * FROM trabajador WHERE identificacion like '%$id%'";
	include("trabajadorTabla-resutados.php");
}
?>
<br />
<a href="pdf/ReportesPdf/trabajadorRepIdentificacion.php?dato=<?php echo $id?>" title="Generar Pdf">Generar Pdf</a>