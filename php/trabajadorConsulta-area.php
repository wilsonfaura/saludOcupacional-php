<br />
<div>
     <input type="hidden" name="op" value="consultas" />
    <label for="traArea">Area: </label>
    <select id="traArea" class="cambio" name="traArea" title="Seleccione el area del trabajador" required>
      <option value="">- - - </option>
      <?php include("selectArea.php"); ?>      
    </select>
</div> 
<input type="submit" id="enviar-buscar" class="cambio" name="enviar_btn" value="buscar" />
<?php
if($_GET["traArea"]!=null)
{
	$area=$_GET["traArea"];
	$consulta = "SELECT * FROM trabajador WHERE traArea='$area'";
	include("trabajadorTabla-resutados.php");
}
?>
<br />
<a href="pdf/ReportesPdf/trabajadorRepArea.php?dato=<?php echo $area?>" title="Generar Pdf">Generar Pdf</a>