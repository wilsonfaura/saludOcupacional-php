<script>
	window.onload=function()
	{
	 var lista= document.getElementById("identificacion");	
	 lista.onchange=seleccionarIdentificacion;
	 
	 function seleccionarIdentificacion()
	 {
		window.location="?op=eliminar&idTrabajador_slc="+lista.value
	 }
	}
</script>

<form id="trabajadorEliminarForm" name="eliminar_form" action="php/trabajadorEliminar.php" method="post" enctype="application/x-www-form-urlencoded">
  <fieldset>  
   <legend>ELIMINAR TRABAJADOR</legend>  
     <div>       
         <label for="identificacion">IdTrabajador: </label>
         <select id="identificacion" class="cambio" name="idTrabajador_slc" required>
           <option value="">- - - </option>           
           <?php  include("trabajadorSelect.php"); ?>
         </select>
     </div>     
<?php
if ($_GET["idTrabajador_slc"]!=null)
{
$conexion2=conectarse();
$id=$_GET["idTrabajador_slc"];
$consulta_ref="SELECT * FROM trabajador WHERE identificacion ='$id'";

$ejecutar_consulta_ref=$conexion2->query($consulta_ref);
$registro_ref=$ejecutar_consulta_ref->fetch_assoc();
echo "Desea eliminar al trabajador: ".'<b>'.$registro_ref ['traNombre'].' '.$registro_ref['traApellido'].'</b>'.'</b>'.' con cedula '.'<b>'.$registro_ref['identificacion']; 
}
?>
     <div>
       <input type="submit" id="enviar-eliminar" class="cambio" name="enviar_btn" value="eliminar"/>
     </div>
     <?php  include("php/mensajes.php");?>
     </fieldset>
</form>     
