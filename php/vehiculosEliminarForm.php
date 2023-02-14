<script>
	window.onload=function()
	{
	 var lista= document.getElementById("idPlaca_slc");	
	 lista.onchange=seleccionarIdPlaca_slc;
	 
	 function seleccionarIdPlaca_slc()
	 {
		window.location="?op=eliminar&idPlaca_slc="+lista.value
	 }
	}
</script>
<form id="vehiculosEliminarForm" name="eliminar_form" action="php/vehiculosEliminar.php" method="post" enctype="application/x-www-form-urlencoded">
  <fieldset>  
   <legend>ELIMINAR VEHICULO</legend>  
     <div>       
         <label for="idPlaca_slc">Placa vehiculo: </label>
         <select id="idPlaca_slc" class="cambio" name="idPlaca_slc" required>
           <option value="">- - - </option>           
           <?php  include("vehiculosSelect.php"); ?>
         </select>
     </div>
<?php
if ($_GET["idPlaca_slc"]!=null)
{
$conexion2=conectarse();
$id=$_GET["idPlaca_slc"];
$consulta_ref="SELECT * FROM vehiculo WHERE vehPlaca ='$id'";

$ejecutar_consulta_ref=$conexion2->query($consulta_ref);
$registro_ref=$ejecutar_consulta_ref->fetch_assoc();
echo "Desea eliminar el vehiculo de placa:  ".'<b>' . $registro_ref['vehPlaca'].'</b>'. ' y marca '.'<b>'. $registro_ref ['vehMarca'].'</b>'; 
}
?>     
     <div>
       <input type="submit" id="enviar-eliminar" class="cambio" name="enviar_btn" value="eliminar"/>
     </div>
     <?php  include("php/mensajes.php");?>
     </fieldset>
</form>     
