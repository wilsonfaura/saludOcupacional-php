    <div>
      <label for="identificacion">Identificacion:</label>
      <input type="text" name="identificacion" id="identificacion" placeholder="Identificacion del trabajador" class="cambio" title="Identificacion trabajador" value="<?php echo $registro_trabajador["identificacion"]?>"  disabled required />      
      <input type="hidden" name="identificacion_hdn" value="<?php echo $registro_trabajador["identificacion"]; ?>" />      
    </div>      
    <div>
      <label for="Nombres">Nombres: </label>
      <input type="text" name="traNombres" id="traNombres" placeholder="Nombre del trabajador" class="cambio" title="Nombre trabajador" value="<?php echo $registro_trabajador["traNombre"];?>" required />
    </div>
    <div>
      <label for="Apellidos">Apellidos: </label>
      <input type="text" name="traApellidos" id="traApellidos" placeholder="Apellidos del trabajador" class="cambio" title="Apellidos trabajador" value="<?php echo $registro_trabajador["traApellido"];?>" required />
    </div>
    <div>
       <label for="traArea">Area: </label>
      <select id="traArea" class="cambio" name="traArea" title="Seleccione el area del trabajador" required>
      <option value="">- - - </option>
      <?php include("selectArea.php"); ?>      
      </select>
    </div>
    <div>
      <label for="Cargos">Cargo: </label>
      <select id="cargos" class="cambio" name="cargo_slc" title="Seleccione el cargo del trabajador" required>
      <option value="">- - - </option>
      <?php include("selectCargo.php"); ?>      
      </select>     
    </div>
    <div>
      <label for="Ingreso">Fecha de Ingreso: </label>
      <input type="Date" name="traIngreso" id="traIngreso"placeholder="Fecha de ingreso" class="cambio" title="Ingrese la fecha de ingreso del trabajador" value="<?php echo $registro_trabajador["traIngreso"];?>" required/>
    </div>    
    <div>
      &nbsp;<label for="Sexo">Sexo: </label>
      <input type="radio" name="traSexo" id="traSexo" title="Sexo trabajador" value="M" <?php if($registro_trabajador["traSexo"]=="M"){ echo "checked";} ?> required />&nbsp;<label for="m">Masculino</label>
      &nbsp;&nbsp;&nbsp;
      <input type="radio" name="traSexo" id="traSexo" title="Sexo trabajador" value="F" <?php if($registro_trabajador["traSexo"]=="F"){ echo "checked";} ?> required />&nbsp;<label for="f">Femenino</label>
    </div>
    <div>
      <label for="Rh">RH: </label>      
      <select name="traRh" id="traRh" placeholder="RH del trabajador" class="cambio" title="Seleccione el tipo de sangre del trabajador"  required />
          <option value=""<?php if($registro_trabajador["traRh"]==""){echo " selected";} ?>>- - -</option>
          <option value="A+"<?php if($registro_trabajador["traRh"]=="A+"){echo " selected";} ?>>A+</option>
          <option value="A-"<?php if($registro_trabajador["traRh"]=="A-"){echo " selected";} ?>>A-</option>
          <option value="B+"<?php if($registro_trabajador["traRh"]=="B+"){echo " selected";} ?>>B+</option>
          <option value="B-"<?php if($registro_trabajador["traRh"]=="B-"){echo " selected";} ?>>B-</option>
          <option value="AB+"<?php if($registro_trabajador["traRh"]=="AB+"){echo " selected";} ?>>AB+</option>
          <option value="AB-+"<?php if($registro_trabajador["traRh"]=="AB-"){echo " selected";} ?>>AB-</option>
          <option value="O+"<?php if($registro_trabajador["traRh"]=="O+"){echo " selected";} ?>>O+</option>
          <option value="O-"<?php if($registro_trabajador["traRh"]=="O-"){echo " selected";} ?>>O-</option>          
        </select> 
    </div>
    <div>
      <label for="Direccion">Direccion: </label>
      <input type="text" name="traDir" id="traDir"placeholder="Direccion del trabajador" class="cambio" title="Direccion trabajador" value="<?php echo $registro_trabajador["traDir"];?>" required>
    </div>
    <div>
        <label for="Telefono">Telefono: </label>
        <input type="number" name="traTel" id="traTel"placeholder="Telefono del trabajador" class="cambio" title="Telefono trabajador" value="<?php echo $registro_trabajador["traTel"];?>" required>
    </div>
    <div>
      <label for="Email">Email: </label>
      <input type="Email" name="traEmail" id="traEmail" placeholder="Email del trabajador" class="cambio" title="Ingrese el Email del trabajador" value="<?php echo $registro_trabajador["traEmail"];?>" required />
    </div> 
    <div>
      <label for="NombresContacto">Nombres de Contacto: </label>
      <input type="text" name="traContacNombres" id="traContacNombres" placeholder="Nombre del Contacto" class="cambio" title="Ingrese el nombre del contacto" value="<?php echo $registro_trabajador["traContacNombre"];?>" required />
    </div>
    <div>
      <label for="ApellidosContacto">Apellidos de Contacto: </label>
      <input type="text" name="traContacApellidos" id="traContacApellidos" placeholder="Apellidos del Contacto" class="cambio" title="Ingrese el apellido del contacto" value="<?php echo $registro_trabajador["traContacApellido"];?>" required />
    </div> 
    <div>
       <label for="TelefonoContacto">Telefono de Contacto: </label>
       <input type="number" name="traContacTelefono" id="traContacTelefono"placeholder="Telefono del Contacto" class="cambio" title="Ingrese el telefono del contacto" value="<?php echo $registro_trabajador["traContacTelefono"];?>" required />
    </div>
    <div>
    <Label for="foto_fls">Foto: </Label>
    <div class="adjuntar-archivo cambio">
    <input type="file" id="foto_fls" name="foto_fls" title="sube una foto" />
    <input type="hidden" name="foto_hdn" value="<?php echo $registro_trabajador["traImagen"];?>" />
    </div>    
      <div>
        <img src="<?php echo "imagenes/fotos/".$registro_trabajador["traImagen"]; ?>" />
      </div>
    </div>      
    <div>
        <input type="submit" name="crear" id="crear" class="cambio" value="Modificar" />
    </div>
</div>    