<script>
	window.onload=function()
	{
	 var lista= document.getElementById("identificacion");	
	 lista.onchange=seleccionarUsuario;
	 
	 function seleccionarUsuario()
	 {
		window.location="?op=cambios&idUsuario_slc="+lista.value
	 }
	}
</script>

<form id="usuariosEditarForm" name="editar_form" action="php/usuariosEditar.php" method="post" enctype="application/x-www-form-urlencoded">
  <fieldset>  
   <legend> EDITAR USUARIO</legend>  
     <div>       
         <label for="identificacion">Usuario: </label>
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
          $consulta_usuario="SELECT * FROM usuario WHERE usuIdentificacion ='$id'";
		  //echo $consulta_trabajador;
          $ejecutar_consulta_usuario=$conexion2->query($consulta_usuario);
          $registro_usuario=$ejecutar_consulta_usuario->fetch_assoc();

       include ("php/usuariosEditar-form.php");
       }

       include("php/mensajes.php");
     ?>
   </fieldset>
</form>