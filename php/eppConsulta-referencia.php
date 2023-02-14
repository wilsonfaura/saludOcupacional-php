<br />
<div>
    <input type="hidden" name="op" value="consultas" />
    <label for="referencia">Referencia: </label>
     <input type="number" name="referencia" id="referencia" class="cambio" placeholder="Referencia del elemento"  title="Ingrese la referencia del elemento" required />
</div> 
<input type="submit" id="enviar-buscar" class="cambio" name="enviar_btn" value="buscar" />
<br />
<?php
if($_GET["referencia"]!=null)
{
	$ref=$_GET["referencia"];
	$consulta = "SELECT * FROM epp WHERE eppReferencia like '%$ref%'";
	include("eppTabla-resutados.php");
}
?>
<br />
<a href="pdf/ReportesPdf/eppRepReferencia.php?dato=<?php echo $ref?>" title="Generar Pdf">Generar Pdf</a>