<br />
<div>
    <input type="hidden" name="op" value="consultas" />
    <label for="proveedor">Proveedor Epp: </label>
     <input type="text" name="proveedor" id="proveedor" class="cambio" placeholder="Nombre del proveedor"  title="Ingrese el nombre del proveedor del Epp" required />
</div> 
<input type="submit" id="enviar-buscar" class="cambio" name="enviar_btn" value="buscar" />
<br />
<?php
if($_GET["proveedor"]!=null)
{
	$proveedor = $_GET["proveedor"];
	$consulta = "SELECT * FROM epp WHERE eppProveedor LIKE '$proveedor%';";
	include("eppTabla-resutados.php");
}
?>
<br />
<a href="pdf/ReportesPdf/eppRepProveedor.php?dato=<?php echo $proveedor?>" title="Generar Pdf">Generar Pdf</a>
