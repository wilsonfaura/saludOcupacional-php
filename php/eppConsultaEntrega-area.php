<br />
<div>
     <input type="hidden" name="op" value="consultasEntrega" />
    <label for="area">Area: </label>
    <select id="area" class="cambio" name="area" title="Seleccione el area del trabajador" required>
      <option value="">- - - </option>
      <?php include("selectArea.php"); ?>      
    </select>
</div> 
<input type="submit" id="enviar-buscar" class="cambio" name="enviar_btn" value="buscar" />
<br />
<?php
if($_GET["area"]!=null)
{
 $area=$_GET["area"];
 $consulta = "SELECT * FROM entrega JOIN trabajador JOIN epp WHERE entTrabajador=identificacion AND entEpp=eppNombre AND traArea = '$area'";
 include("php/eppEntregaTabla-resutados.php");
}
?>
<br />
<a href="pdf/ReportesPdf/entregasRepArea.php?dato=<?php echo $area?>" title="Generar Pdf">Generar Pdf</a>
