<br />
<div>
    <input type="hidden" name="op" value="consultas" />
    <label for="tema">Tema: </label>
     <input type="text" name="tema" id="tema" class="cambio" placeholder="Tema Capacitacion"  title="Ingrese el tema de la capacitacion" required />
</div> 
<input type="submit" id="enviar-buscar" class="cambio" name="enviar_btn" value="buscar" />
<?php
if($_GET["tema"]!=null)
{
	$tema=$_GET["tema"];
	$consulta = "SELECT * FROM capacitacion WHERE capTema like '%$tema%'";
	include("capacitacionTabla-resutados.php");
}
?>
<br />
<a href="pdf/ReportesPdf/capacitacionRepTema.php?dato=<?php echo $tema?>" title="Generar Pdf">Generar Pdf</a>