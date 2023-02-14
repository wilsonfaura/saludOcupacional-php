<?php 
$consulta = "SELECT * FROM evento JOIN trabajador WHERE evIdTrabajador=identificacion AND idEvento='$_REQUEST[id]'";
$ejecutar_consulta = $conexion->query($consulta);
$registro_evento = $ejecutar_consulta->fetch_assoc();
?>

<body>
  <form id="editar-evento" name="editar_frm" method="post" action="php/eventoEditar.php" enctype="multipart/form-data">  
    <fieldset>
    <legend>EDITAR EVENTO</legend>
    <div>
    <input type="hidden" name="evento_hdn" value="<?php echo $registro_evento["idEvento"]; ?>" />
    </div>
     <div>
      <label for="identificacion">Identificacion:</label>
      <input type="text" name="identificacion" id="identificacion" class="cambio" title="Identificacion trabajador" value="<?php echo $registro_evento["evIdTrabajador"]?>"  disabled required />      
      <input type="hidden" name="identificacion_hdn" value="<?php echo $registro_evento["evIdTrabajador"]; ?>" />      
    </div>      
    <div>
      <label for="traNombre">Nombres: </label>
      <input type="text" name="traNombre" id="traNombre" class="cambio" title="Nombre trabajador" value="<?php echo $registro_evento["traNombre"];?>" disabled required />
    </div>
    <div>
      <label for="traApellido">Apellidos: </label>
      <input type="text" name="traApellido" id="traApellido" class="cambio" title="Apellidos trabajador" value="<?php echo $registro_evento["traApellido"];?>" disabled required />
    </div>
      <div>
      <label for="traArea">Area: </label>
      <input type="text" name="traArea" id="traArea" class="cambio" title="Area del trabajador" value="<?php echo $registro_evento["traArea"];?>" disabled required />
    </div>
      <div>
      <label for="traCargo">Cargo: </label>
      <input type="text" name="traCargo" id="traCargo" class="cambio" title="Cargo del trabajador" value="<?php echo $registro_evento["traCargo"];?>" disabled required />
    </div>
    <div>
      <label for="evEdad">Edad: </label>
      <input type="number" name="evEdad" id="traEdad" placeholder="Edad del trabajador" class="cambio" title="Ingrese la edad del trabajador" value="<?php echo $registro_evento["evEdad"];?>" required />
    </div> 
    <div>
      <label for="evVinculo">Vinculo del trabajador: </label>      
      <select type="text" name="evVinculo" id="evVinculo" class="cambio" title="Seleccione el tipo de vinculo del trabajador" required />
          <option value=""<?php if($registro_evento["evVinculo"]==""){echo " selected";} ?>>- - -</option>
          <option value="Directo"<?php if($registro_evento["evVinculo"]=="Directo"){echo " selected";} ?>>Directo</option>
          <option value="Temporal"<?php if($registro_evento["evVinculo"]=="Temporal"){echo " selected";} ?>>Temporal</option>
          <option value="Contratista"<?php if($registro_evento["evVinculo"]=="Contratista"){echo " selected";} ?>>Contratista</option>              
        </select> 
    </div>
    <div>
      <label for="evTipo">Tipo de evento: </label>      
      <select type="text" name="evTipo" id="evTipo" placeholder="Tipo de evento" class="cambio" title="Seleccione el tipo de evento" required />
          <option value=""<?php if($registro_evento["evTipo"]==""){echo " selected";} ?>>- - -</option>
          <option value="Accidente"<?php if($registro_evento["evTipo"]=="Accidente"){echo " selected";} ?>>Accidente</option>
          <option value="Incidente"<?php if($registro_evento["evTipo"]=="Incidente"){echo " selected";} ?>>Incidente</option>                      
        </select> 
    </div>
    <div>
      <label for="evFecha">Fecha de evento: </label>
      <input type="Date" name="evFecha" id="evFecha" class="cambio" title="Ingrese la fecha del evento" value="<?php echo $registro_evento["evFecha"];?>" required/>
    </div>      
    <div>
      <label for="evHora">Hora de evento: </label>
      <input type="time" name="evHora" id="evHora"placeholder="Hora evento" class="cambio" title="Ingrese la hora del evento" value="<?php echo $registro_evento["evHora"];?>" required />
    </div>
    <div>
      <label for="evLugar">Lugar de evento: </label>
      <input type="text" name="evLugar" id="evLugar"placeholder="Lugar evento" class="cambio" title="Ingrese el lugar del evento" value="<?php echo $registro_evento["evLugar"];?>" required />
    </div> 
    <div>
      <label for="evActividad">Actividad realizada: </label>
      <input type="text" name="evActividad" id="evActividad"placeholder="Actividad realizada" class="cambio" title="Ingrese la actividad realizada" value="<?php echo $registro_evento["evActividad"];?>" required />
    </div>
    <div>
      <label for="evDescripcion">Descripcion de evento: </label>
      <input type="text" name="evDescripcion" id="evDescripcion"placeholder="Descripcion del evento" class="cambio" title="Ingrese la descripcion" value="<?php echo $registro_evento["evDescripcion"];?>" required />
    </div>         
    <div>
      <input type="submit" name="crear" id="crear" class="cambio" value="Modificar" />
    </div>
       
     </fieldset>   
  </form>
   
</body>
</html>