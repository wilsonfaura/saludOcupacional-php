<script>
	window.onload=function()
	{
	 var lista= document.getElementById("vehPlaca");	
	 lista.onchange=seleccionarPlaca;
	 
	 function seleccionarPlaca()
	 {
		window.location="?op=cambios&idPlaca_slc="+lista.value
	 }
	}
</script>

<form id="vehiculoEditarForm" name="editar_form" action="php/vehiculosEditar.php" method="post" enctype="application/x-www-form-urlencoded">
  <fieldset>  
   <legend> EDITAR VEHICULO</legend>  
     <div>       
         <label for="vehPlaca">Numero de Placa: </label>
         <select id="vehPlaca" class="cambio" name="idPlaca_slc" required>
           <option value="">- - - </option>           
           <?php  include("vehiculosSelect.php"); ?>
         </select>
     </div>
    <?php
       if ($_GET["idPlaca_slc"]!=null)
       {
          $conexion2=conectarse();
          $id=$_GET["idPlaca_slc"];
          $consulta_vehiculo="SELECT * FROM vehiculo JOIN trabajador WHERE vehiculo.vehPlaca ='$id' and vehiculo.vehIdTra= trabajador.identificacion";
		  //echo $consulta_vehiculo;
          $ejecutar_consulta_vehiculo=$conexion2->query($consulta_vehiculo);
          $registro_vehiculo=$ejecutar_consulta_vehiculo->fetch_assoc();

       include ("php/vehiculosEditar-form.php");
       }

       include("php/mensajes.php");
     ?>
   </fieldset>
</form>