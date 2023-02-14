<script>
	window.onload=function()
	{
	 var lista= document.getElementById("identificacion");	
	 lista.onchange=seleccionarIdentificacion;
	 
	 function seleccionarIdentificacion()
	 {
		window.location="?op=eliminar&idUsuario_slc="+lista.value
	 }
	}
</script>
<form id="usuariosEliminarForm" name="eliminar_form" action="php/usuariosEliminar.php" method="post" enctype="application/x-www-form-urlencoded">
  <fieldset>  
   <legend>ELIMINAR USUARIO</legend>  
     <div>       
         <label for="identificacion">IdUsuario: </label>
         <select id="identificacion" class="cambio" name="idUsuario_slc" required>
           <option value="">- - - </option>           
           <?php  include("usuariosSelect.php"); ?>
         </select>
     </div>
<?php
if ($_GET["idUsuario_slc"]!=null)
{
$conexion2=conectarse();
$id=$_GET["idUsuario_slc"];
$consulta_ref="SELECT * FROM usuario WHERE usuIdentificacion ='$id'";

$ejecutar_consulta_ref=$conexion2->query($consulta_ref);
$registro_ref=$ejecutar_consulta_ref->fetch_assoc();
echo "Desea eliminar el usuario:  ".'<b>'. $registro_ref ['usuNombre'].' '.$registro_ref ['usuApellido'].'</b>'. ' con cedula ' .'<b>'. $registro_ref['usuIdentificacion'].'</b>'; 
}
?>     
     <div>
       <input type="submit" id="enviar-eliminar" class="cambio" name="enviar_btn" value="eliminar"/>
     </div>
     <?php  include("php/mensajes.php");?>
     </fieldset>
</form>     
