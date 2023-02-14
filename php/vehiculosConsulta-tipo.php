<br />
<div>
    <input type="hidden" name="op" value="consultas" />
    <label for="tipo">Tipo: </label>
     <select type="text" name="tipo" id="tipo" class="cambio" placeholder="Tipo de vehiculo"  title="Ingrese el tipo del vehiculo" required />
     <option value="">- - -</option>
          <option value="Automovil">Automovil</option>
          <option value="Camioneta">Camioneta</option>
          <option value="Camion">Camion</option>
          <option value="Tractocamion">Tractocamion</option>          
        </select>
</div> 
<input type="submit" id="enviar-buscar" class="cambio" name="enviar_btn" value="buscar" />
<br />
<?php
if($_GET["tipo"]!=null)
{
	$tipo=$_GET["tipo"];
	$consulta = "SELECT * FROM vehiculo JOIN trabajador WHERE vehIdTra=identificacion AND vehTipo='$tipo'";
	include("vehiculosTabla-resutados.php");
}
?>
<br />
<a href="pdf/ReportesPdf/vehiculosRepTipo.php?dato=<?php echo $tipo?>" title="Generar Pdf">Generar Pdf</a>