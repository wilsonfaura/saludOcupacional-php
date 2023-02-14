<br />
<div>
    <input type="hidden" name="op" value="consultasEntrega" />
    <label for="nombre">Nombre Epp: </label>
     <input type="text" name="nombre" id="nombre" class="cambio" placeholder="Nombre del elemento"  title="Ingrese el nombre del elemento" required />
</div> 
<input type="submit" id="enviar-buscar" class="cambio" name="enviar_btn" value="buscar" />
<br />
<?php
if($_GET["nombre"]!=null)
{
$nombre = $_GET["nombre"];
$consulta = "SELECT * FROM entrega JOIN trabajador JOIN epp WHERE entTrabajador=identificacion AND entEpp=eppNombre AND entEpp like '%$nombre%'";
 include("php/eppEntregaTabla-resutados.php");
}
?>
<br />
<a href="pdf/ReportesPdf/entregasRepEpp.php?dato=<?php echo $nombre?>" title="Generar Pdf">Generar Pdf</a>
