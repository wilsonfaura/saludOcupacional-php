<br />
<div>
    <input type="hidden" name="op" value="consultas" />
    <label for="nombre">Nombre Epp: </label>
     <input type="text" name="nombre" id="nombre" class="cambio" placeholder="Nombre del elemento"  title="Ingrese el nombre del elemento" required />
</div> 
<input type="submit" id="enviar-buscar" class="cambio" name="enviar_btn" value="buscar" />
<br />
<?php
if($_GET["nombre"]!=null)
{
	$nombre = $_GET["nombre"];
	$consulta = "SELECT * FROM epp WHERE eppNombre LIKE '$nombre%';";
	include("eppTabla-resutados.php");
}
?>
<br />
<a href="pdf/ReportesPdf/eppRepNombre.php?dato=<?php echo $nombre?>" title="Generar Pdf">Generar Pdf</a>
