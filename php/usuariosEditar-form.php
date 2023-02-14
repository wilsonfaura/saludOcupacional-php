<div>
    <div>
      <label for="identificacion">Identificacion:</label>
      <input type="text" name="identificacion" id="identificacion" placeholder="Identificacion del trabajador" class="cambio" title="Identificacion trabajador" value="<?php echo $registro_usuario["usuIdentificacion"]?>"  disabled required />      
      <input type="hidden" name="identificacion_hdn" value="<?php echo $registro_usuario["usuIdentificacion"]; ?>" />      
    </div>      
    <div>
      <label for="nombres">Nombres: </label>
      <input type="text" name="nombres" id="nombres" placeholder="Nombre del usuario" class="cambio" title="Nombre del usuario" value="<?php echo $registro_usuario["usuNombre"];?>" required />
    </div>
    <div>
      <label for="apellidos">Apellidos: </label>
      <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos del usuario" class="cambio" title="Apellidos del usuario" value="<?php echo $registro_usuario["usuApellido"];?>" required />
    </div>    
    <div>
      <label for="cargos">Cargo: </label>
      <select id="cargos" class="cambio" name="cargo_slc" title="Seleccione el cargo del usuario" required>
      <option value="">- - - </option>
      <?php include("selectCargoU.php"); ?>      
      </select>     
    </div>   
    <div>
      <label for="area">Area: </label>
     <select id="area" class="cambio" name="area" title="Seleccione el area del usuario" required />
      <option value="">- - - </option>
      <?php include("selectAreaU.php"); ?>      
      </select>     
    </div>     
    <div>
      <label for="contraseña">Contraseña: </label>
      <input type="text" name="contraseña" id="contraseña" placeholder="Contraseña del usuario" class="cambio" title="Ingrese la contraseña del usuario" value="<?php echo $registro_usuario["usuPassword"];?>" required />
    </div>       
    <div>
        <input type="submit" name="crear" id="crear" class="cambio" value="Modificar" />
    </div>
</div>    