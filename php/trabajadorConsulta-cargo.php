<br />
<div>
    <input type="hidden" name="op" value="consultas" />
    <label for="cargo">Cargo: </label>
    <select id="cargos" class="cambio" name="cargo_slc" title="Sleccione el cargo del trabajador" required>
      <option value="">- - - </option>
      <?php include("selectCargo.php"); ?>      
    </select> 
</div>
<input type="submit" id="enviar-buscar" class="cambio" name="enviar_btn" value="buscar" />
<?php
if($_GET["cargo_slc"]!=null)
{
	$cargo=$_GET["cargo_slc"];
	$consulta = "SELECT * FROM trabajador WHERE traCargo='$cargo'";
	include("trabajadorTabla-resutados.php");
}
?>
<br />
<a href="pdf/ReportesPdf/trabajadorRepCargo.php?dato=<?php echo $cargo?>" title="Generar Pdf">Generar Pdf</a>