<br />
<div>
    <input type="hidden" name="op" value="consultas" />
     <label for="vinculo">Tipo de vinculo del trabajador: </label>      
      <select id="vinculo"  class="cambio" name="vinculo" title="Seleccione el tipo de vinculo del trabajador" required />
          <option value="">- - -</option>
          <option value="Directo">Directo</option>
          <option value="Temporal">Temporal</option>
          <option value="Contratista">Contratista</option>                  
        </select> 
</div> 
<input type="submit" id="enviar-buscar" class="cambio" name="enviar_btn" value="buscar" />
<br />
<?php
if($_GET["vinculo"]!=null)
{
	$vin=$_GET["vinculo"];
	$consulta = "SELECT * FROM evento JOIN trabajador WHERE evIdTrabajador=identificacion AND evVinculo='$vin'";
	include("eventoTabla-resutados.php");
}
?>
<br />
<a href="pdf/ReportesPdf/eventoRepVinculo.php?dato=<?php echo $vin?>" title="Generar Pdf">Generar Pdf</a>