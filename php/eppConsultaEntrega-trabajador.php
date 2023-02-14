<br />
<div>
    <input type="hidden" name="op" value="consultasEntrega" />
    <label for="identificacion">Identificacion: </label>
     <input type="number" name="identificacion" id="identificacion" class="cambio" placeholder="Identificacion del trabajador"  title="Ingrese la identificacion del trabajador" required />
</div> 
<input type="submit" id="enviar-buscar" class="cambio" name="enviar_btn" value="buscar" />
<br />
<?php
if($_GET["identificacion"]!=null)
{
 $id=$_GET["identificacion"];
 $consulta = "SELECT * FROM entrega JOIN trabajador JOIN epp WHERE entTrabajador=identificacion AND entEpp=eppNombre AND entTrabajador like '%$id%'";
 include("php/eppEntregaTabla-resutados.php");
}
?>
<br />
<a href="pdf/ReportesPdf/entregasRepTrabajador.php?dato=<?php echo $id?>" title="Generar Pdf">Generar Pdf</a>
