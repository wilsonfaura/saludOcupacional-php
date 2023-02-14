<script>
	window.onload=function()
	{
	 var lista= document.getElementById("identificacion");	
	 lista.onchange=seleccionarUsuario;
	 
	 function seleccionarUsuario()
	 {
		window.location="?op=agregar&idTrabajador_slc="+lista.value
	 }
	}
</script>
<?php 
date_default_timezone_set("America/Bogota");
?>

<form id="eventoAgregarForm" name="editar_form" action="php/eventoAgregar.php" method="post" enctype="application/x-www-form-urlencoded">
  <fieldset>  
   <legend>AGREGAR EVENTO</legend> 
     <div>
      <label for="date">fecha y hora de registro: </label>
      <input type="text" name="date" id="date" class="cambio" title="Hora y fecha actual de Reporte" value="<?php echo date("Y-m-d     H:i:s");?>" disabled required />
      <input type="hidden" name="date_hdn" value="<?php echo date("Y-m-d     H:i:s");?>" /> 
     </div> 
     <div>       
         <label for="identificacion">Trabajador: </label>
         <select id="identificacion" class="cambio" name="idTrabajador_slc" required />
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

       include ("php/eventoAgregar-form.php");
       }
       include("php/mensajes.php");
     ?>
     
   </fieldset>
</form>