<br />
<div>
    <input type="hidden" name="op" value="consultas" />
     <label for="tipo">Tipo de evento del trabajador: </label>      
      <select id="tipo"  class="cambio" name="tipo" title="Seleccione el tipo de evento que sufrio el trabajador" required />
          <option value="">- - -</option>
          <option value="Accidente">Accidente</option>
          <option value="Incidente">Incidente</option>                  
        </select> 
</div> 
<input type="submit" id="enviar-buscar" class="cambio" name="enviar_btn" value="buscar" />
<br />
<?php
if($_GET["tipo"]!=null)
{
	$tip=$_GET["tipo"];
	$consulta = "SELECT * FROM evento JOIN trabajador WHERE evIdTrabajador=identificacion AND evTipo='$tip'";
	include("eventoTabla-resutados.php");
}
?>
<br />
<a href="pdf/ReportesPdf/eventoRepTipo.php?dato=<?php echo $tip?>" title="Generar Pdf">Generar Pdf</a>