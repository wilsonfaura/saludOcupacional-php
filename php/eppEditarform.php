
<script>
	window.onload=function()
	{
	 var lista= document.getElementById("nombre");	
	 lista.onchange=seleccionarNombre;
	 
	 function seleccionarNombre()
	 {
		window.location="?op=cambios&eppNom_slc="+lista.value
	 }
	}
</script>

<form id="eppEditarForm" name="editar_form" action="php/eppEditar.php" method="post" enctype="application/x-www-form-urlencoded">
  <fieldset>  
   <legend> EDITAR ELEMENTO DE PROTECCION PERSONAL</legend>  
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
          $nombre=$_GET["eppNom_slc"];
          $consulta_ref="SELECT *FROM epp WHERE eppNombre ='$nombre'";
		  
		  //echo $consulta_trabajador;
          $ejecutar_consulta_ref=$conexion2->query($consulta_ref);
          $registro_ref=$ejecutar_consulta_ref->fetch_assoc();

       include ("php/eppEditar-form.php");
       }

       include("php/mensajes.php");
     ?>
   </fieldset>
</form>