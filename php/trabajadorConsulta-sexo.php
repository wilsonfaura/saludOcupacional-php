<br />
<div>
    <input type="hidden" name="op" value="consultas" />
    <label for="Sexo">Sexo: </label>&nbsp;
    <input type="radio" name="traSexo" id="traSexo" title="Sexo trabajador" value="M" required />
    <label for="m">Masculino</label>&nbsp;&nbsp;
    <input type="radio" name="traSexo" id="traSexo" title="Sexo trabajador" value="F" required />
    <label for="f">Femenino</label>
</div>
<input type="submit" id="enviar-buscar" class="cambio" name="enviar_btn" value="buscar" />
<br />
<?php
if($_GET["traSexo"]!=null)
{
	$sexo=$_GET["traSexo"];
	$consulta = "SELECT * FROM trabajador WHERE traSexo='$sexo'";
	include("trabajadorTabla-resutados.php");
}
?>
<br />
<a href="pdf/ReportesPdf/trabajadorRepSexo.php?dato=<?php echo $sexo?>" title="Generar Pdf">Generar Pdf</a>