<br />
<div>
    <input type="hidden" name="op" value="consultas" />
    <label for="identificacion">Identificacion: </label>
     <input type="number" name="identificacion" id="identificacion" class="cambio" placeholder="Id del usuario"  title="Ingrese la identificacion del usuario" required />
</div> 
<input type="submit" id="enviar-buscar" class="cambio" name="enviar_btn" value="buscar" />
<?php
if($_GET["identificacion"]!=null)
{
	$id=$_GET["identificacion"];
	$consulta = "SELECT * FROM usuario WHERE usuIdentificacion like '%$id%'";
	include("usuariosTabla-resutados.php");
}
?>
<br />
<a href="pdf/ReportesPdf/usuariosRepIdentificacion.php?dato=<?php echo $id?>" title="Generar Pdf">Generar Pdf</a>