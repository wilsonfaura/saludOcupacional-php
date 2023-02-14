<div>
    <div>
      <label for="identificacion">Identificacion:</label>
      <input type="text" name="identificacion" id="identificacion" placeholder="Identificacion del trabajador" class="cambio" title="Identificacion trabajador" value="<?php echo $registro_trabajador["identificacion"]?>"  disabled required />      
      <input type="hidden" name="identificacion_hdn" value="<?php echo $registro_trabajador["identificacion"]; ?>" />      
    </div>      
    <div>
      <label for="traNombre">Nombres: </label>
      <input type="text" name="traNombre" id="traNombre" class="cambio" title="Nombre trabajador" value="<?php echo $registro_trabajador["traNombre"];?>" disabled required />
    </div>
    <div>
      <label for="traApellido">Apellidos: </label>
      <input type="text" name="traApellido" id="traApellido" class="cambio" title="Apellidos trabajador" value="<?php echo $registro_trabajador["traApellido"];?>" disabled required />
    </div>
      <div>
      <label for="traArea">Area: </label>
      <input type="text" name="traArea" id="traArea" class="cambio" title="Area del trabajador" value="<?php echo $registro_trabajador["traArea"];?>" disabled required />
    </div>
      <div>
      <label for="traCargo">Cargo: </label>
      <input type="text" name="traCargo" id="traCargo" class="cambio" title="Cargo del trabajador" value="<?php echo $registro_trabajador["traCargo"];?>" disabled required />
    </div>
    <div>
      <label for="traEdad">Edad: </label>
      <input type="number" name="traEdad" id="traEdad" placeholder="Edad del trabajador" class="cambio" title="Ingrese la edad del trabajador" required />
    </div> 
    <div>
      <label for="evVinculo">Vinculo del trabajador: </label>      
      <select type="text" name="evVinculo" id="evVinculo" placeholder="Vinculo del trabajador" class="cambio" title="Seleccione el tipo de vinculo del trabajador" required>
          <option value="">- - -</option>
          <option value="Directo">Directo</option>
          <option value="Temporal">Temporal</option>
          <option value="Contratista">Contratista</option>                    
        </select> 
    </div>
    <div>
      <label for="evTipo">Tipo de evento: </label>      
      <select type="text" name="evTipo" id="evTipo" placeholder="Tipo de evento" class="cambio" title="Seleccione el tipo de evento" required>
          <option value="">- - -</option>
          <option value="Accidente">Accidente</option>
          <option value="Incidente">Incidente</option>                   
        </select> 
    </div>
    <div>
      <label for="evFecha">Fecha de evento: </label>
      <input type="Date" name="evFecha" id="evFecha" class="cambio" title="Ingrese la fecha del evento" required/>
    </div>      
    <div>
      <label for="evHora">Hora de evento: </label>
      <input type="time" name="evHora" id="evHora"placeholder="Hora evento" class="cambio" title="Ingrese la hora del evento" required />
    </div>
    <div>
      <label for="evLugar">Lugar de evento: </label>
      <input type="text" name="evLugar" id="evLugar"placeholder="Lugar evento" class="cambio" title="Ingrese el lugar del evento" required />
    </div> 
    <div>
      <label for="evActividad">Actividad realizada: </label>
      <input type="text" name="evActividad" id="evActividad"placeholder="Actividad realizada" class="cambio" title="Ingrese la actividad realizada" required />
    </div>
    <div>
      <label for="evDescripcion">Descripcion de evento: </label>
      <input type="text" name="evDescripcion" id="evDescripcion"placeholder="Descripcion del evento" class="cambio" title="Ingrese la descripcion" required />
    </div>         
    <div>
      <input type="reset" name="cancelar" id="cancelar" class="cambio" value="Cancelar" />
      <input type="submit" name="crear" id="crear" class="cambio" value="Enviar" />
    </div>
</div>    