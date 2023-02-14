<br />
<div>
     <input type="hidden" name="op" value="consultas" />
    <label for="area">Area: </label>
    <select id="area" class="cambio" name="area" title="Seleccione el area de actividad" required>
      <option value="">- - - </option>
      <?php include("selectArea.php"); ?>      
    </select>
</div> 
<input type="submit" id="enviar-buscar" class="cambio" name="enviar_btn" value="buscar" />
<?php
if($_GET["area"]!=null)
{
	$area=$_GET["area"];
	$consulta = "SELECT * FROM actividad WHERE actArea='$area'";
	include("actividadTabla-resutados.php");
}
?>
<br />
<a href="pdf/ReportesPdf/actividadRepArea.php?dato=<?php echo $area?>" title="Generar Pdf">Generar Pdf</a>