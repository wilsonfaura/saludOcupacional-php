<?php 
//include("conexion.php");
$consulta = "SELECT * FROM capacitacion WHERE idCapacitacion='$_REQUEST[id]'";
$ejecutar_consulta = $conexion->query($consulta);
$registro = $ejecutar_consulta->fetch_assoc();
?>

<body>
  <form id="editar-capacitacion" name="editar_frm" method="post" action="php/capacitacionEditar.php" enctype="multipart/form-data">  
    <fieldset>
    <legend><b>EDITAR CAPACITACION</b></legend>
        <div>
            <input type='hidden' name="idCap_hdn" id="idCap" class="cambio" value="<?php echo $registro['idCapacitacion']; ?>"required />
    </div>
  
    <div>
      <label for="instructor">Instructor:</label>
      <input type="text" name="instructor" id="instructor" placeholder="Nombre instructor" class="cambio" title="Ingrese el nombre del instructor" value="<?php echo $registro['capInstructor']; ?>"required />
    </div>      
    <div>
      <label for="tema">Tema: </label>
      <input type="text" name="tema" id="tema" placeholder="Tema capacitacion" class="cambio" title="escriba el tema de la capacitacion" value="<?php echo $registro['capTema'];?>"required />
    </div> 
    <div>
      <label for="descripcion">Descripcion: </label>
      <input type="text" name="descripcion" id="descripcion" placeholder="Descripcion tema" class="cambio" title="describa el tema de la capacitacion" value="<?php echo $registro['capDescripcion'];?>" required />
    </div>   
   
    <div>
      <label for="areas">Areas: </label>
      <input type="text" name="areas" id="areas" placeholder="areas a capacitar" class="cambio" title="Ingrese la areas que omaran la capacitacion" value="<?php echo $registro['capArea'];?>" required/>
    </div>
    <div>
      <label for="fecha">Fecha: </label>
      <input type="Date" name="fecha" id="fecha" placeholder="Fecha de capacitacion" class="cambio" title="Ingrese la fecha de la capacitacion" value="<?php echo $registro['capFecha'];?>" required/>
    </div>
    <div>
      <label for="hora">Hora: </label>
      <input type="time" name="hora" id="hora" placeholder="hora capacitacion" class="cambio" title="Ingrese la hora de la capacitacion" value="<?php echo $registro['capHora']; ?>" required/>
    </div>    
    <div>
      <label for="estado">Estado: </label> 
      <select name="estado" id="estado" placeholder="Estado capacitacion" class="cambio" title="Seleccione el estado de la capacitacion" required />
          <option value=""<?php if($registro["capEstado"]==""){echo " selected";} ?>>- - -</option>
          <option value="Programado"<?php if($registro["capEstado"]=="Programado"){echo " selected";} ?>>Programado</option>
          <option value="Realizado"<?php if($registro["capEstado"]=="Realizado"){echo " selected";} ?>>Realizado</option>                  
        </select> 
    </div>      
    <div>
      <input type="reset" name="cancelar" id="cancelar" class="cambio" value="Cancelar" />
      <input type="submit" name="crear" id="crear" class="cambio" value="Enviar" />
    </div>

    
     </fieldset>   
  </form>
   
</body>
</html>