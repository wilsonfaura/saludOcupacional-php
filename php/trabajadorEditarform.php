<script>
	window.onload=function()
	{
	 var lista= document.getElementById("identificacion");	
	 lista.onchange=seleccionarTrabajador;
	 
	 function seleccionarTrabajador()
	 {
		window.location="?op=cambios&idTrabajador_slc="+lista.value
	 }
	}
</script>

<form id="trabajadorEditarForm" name="editar_form" action="php/trabajadorEditar.php" method="post" enctype="application/x-www-form-urlencoded">
  <fieldset>  
   <legend> EDITAR TRABAJADOR</legend>  
     <div>       
         <label for="identificacion">Trabajador: </label>
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
          $consulta_trabajador="SELECT * FROM trabajador WHERE identificacion ='$id'";
		  //echo $consulta_trabajador;
          $ejecutar_consulta_trabajador=$conexion2->query($consulta_trabajador);
          $registro_trabajador=$ejecutar_consulta_trabajador->fetch_assoc();

       include ("php/trabajadorEditar-form.php");
       }

       include("php/mensajes.php");
     ?>
   </fieldset>
</form>