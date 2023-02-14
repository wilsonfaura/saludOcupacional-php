<br />
<div>
    <input type="hidden" name="op" value="consultas" />
     <label for="estado">Estado de la actividad: </label>      
      <select id="estado"  class="cambio" name="estado" title="Seleccione el estado de la actividad" required />
          <option value="">- - -</option>
          <option value="Programado">Programado</option>
          <option value="Realizado">Realizado</option>                  
        </select> 
</div> 
<input type="submit" id="enviar-buscar" class="cambio" name="enviar_btn" value="buscar" />
<br />
<?php
if($_GET["estado"]!=null)
{
	$est=$_GET["estado"];
	$consulta = "SELECT * FROM actividad WHERE actEstado='$est'";
	include("actividadTabla-resutados.php");
}
?>
<br />
<a href="pdf/ReportesPdf/actividadRepEstado.php?dato=<?php echo $est?>" title="Generar Pdf">Generar Pdf</a>