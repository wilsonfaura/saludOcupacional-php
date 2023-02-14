<script>
	window.onload=function()
	{
	 var lista= document.getElementById("nombre");	
	 lista.onchange=seleccionarNombre;
	 
	 function seleccionarNombre()
	 {
		window.location="?op=eliminar&eppNom_slc="+lista.value
	 }
	}
</script>

<form id="eppEliminarForm" name="eliminar_form" action="php/eppEliminar.php" method="post" enctype="application/x-www-form-urlencoded">
  <fieldset>  
   <legend>ELIMINAR ELEMENTO DE PROTECCIÓN PERSONAL</legend>
   <div>       
         <label for="nombre">Nombre EPP: </label>
         <select id="nombre" class="cambio" name="eppNom_slc" required>
           <option value="">- - - </option>           
           <?php  include("eppSelect.php"); ?>
         </select>
    </div>
<?php 

if ($_GET["eppNom_slc"]!=null)
{
$conexion2=conectarse();
$nom=$_GET["eppNom_slc"];
$consulta_ref="SELECT * FROM epp WHERE eppNombre ='$nom'";

$ejecutar_consulta_ref=$conexion2->query($consulta_ref);
$registro_ref=$ejecutar_consulta_ref->fetch_assoc();
echo "Desea eliminar el Elemento de Proteccion Personal:  " .'<b>'.$registro_ref['eppNombre'].'</b>'. ' de referencia '.'<b>'.$registro_ref ['eppReferencia'].'</b>'; 
}
?>
<br />
     <div>
       <input type="submit" id="enviar-eliminar" class="cambio" name="enviar_btn" value="eliminar"/>
     </div>
     

<div>
     <?php  include("php/mensajes.php");?>
     </fieldset>
</form>     
