<br />
<div>
    <input type="hidden" name="op" value="consultas" />
     <label for="traRh">RH: </label>      
      <select id="traRh"  class="cambio" name="traRh" title="Seleccione el tipo de sangre del trabajador" required>
          <option value="">- - -</option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>          
        </select> 
</div> 
<input type="submit" id="enviar-buscar" class="cambio" name="enviar_btn" value="buscar" />
<br />
<?php
if($_GET["traRh"]!=null)
{
	$rh=$_GET["traRh"];
	$consulta = "SELECT * FROM trabajador WHERE traRh='$rh'";
	include("trabajadorTabla-resutados.php");
}
?>
<br />
<a href="pdf/ReportesPdf/trabajadorRepRh.php?dato=<?php echo $rh?>" title="Generar Pdf">Generar Pdf</a>