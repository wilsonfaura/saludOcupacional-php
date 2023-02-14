<div>
    <div>
      <label for="identificacion">Identificacion:</label>
      <input type="text" name="identificacion" id="identificacion" placeholder="Identificacion del trabajador" class="cambio" title="Identificacion trabajador" value="<?php echo $registro_trabajador["identificacion"]?>"  disabled required />      
      <input type="hidden" name="identificacion_hdn" value="<?php echo $registro_trabajador["identificacion"]; ?>" />      
    </div>      
    <div>
      <label for="traNombre">Nombres: </label>
      <input type="text" name="traNombre" id="traNombre" placeholder="Nombre del trabajador" class="cambio" title="Nombre trabajador" value="<?php echo $registro_trabajador["traNombre"];?>" disabled required />
    </div>
    <div>
      <label for="traApellido">Apellidos: </label>
      <input type="text" name="traApellido" id="traApellido" placeholder="Apellidos del trabajador" class="cambio" title="Apellidos trabajador" value="<?php echo $registro_trabajador["traApellido"];?>" disabled required />
    </div>
    <div>
      <label for="placa">Placas del vehiculo: </label>
      <input type="text" name="placa" id="placa"placeholder="Placas del vehiculo" class="cambio" title="Ingrese la placa del vehiculo" required />
    </div>
    <div>
      <label for="tipo">Tipo de Vehiculo: </label>
      <select type="text" name="tipo" id="tipo" placeholder="Tipo del vehiculo" class="cambio" title="Ingrese el tipo de vehiculo" required />
      <option value="">- - -</option>
          <option value="Automovil">Automovil</option>
          <option value="Camioneta">Camioneta</option>
          <option value="Camion">Camion</option>
          <option value="Tractocamion">Tractocamion</option>          
        </select>
    </div>
    <div>
      <label for="marca">Marca del vehiculo: </label>
      <input type="text" name="marca" id="marca"placeholder="Marca del vehiculo" class="cambio" title="Ingrese la marca del vehiculo" required />
    </div>
    <div>
      <label for="modelo">Modelo del vehiculo: </label>
      <input type="text" name="modelo" id="modelo"placeholder="Modelo del vehiculo" class="cambio" title="Ingrese el modelo del vehiculo" required />
    </div>    
    <div>
      <label for="targeta">Targeta de Propiedad: </label>
      <input type="text" name="targeta" id="targeta"placeholder="Targeta del vehiculo" class="cambio" title="Ingrese el numero de la targeta" required />
    </div>
    <div>
      <label for="kilometraje">Kilometraje del Vehiculo: </label>
      <input type="text" name="kilometraje" id="kilometraje"placeholder="Kilometraje del vehiculo" class="cambio" title="Ingrese el Kilometraje" required />
    </div>   
   <div>
      <label for="licencia">Vencimiento de la Licencia: </label>
      <input type="Date" name="licencia" id="licencia" class="cambio" title="Ingrese la fecha de vencimiento" required/>
    </div>
    <div>
      <label for="soat">Vencimiento del Soat: </label>
      <input type="Date" name="soat" id="soat" class="cambio" title="Ingrese la fecha de vencimiento" required/>
    </div>
    <div>
      <label for="revision">Vencimiento de la Revision Tecnomecanica: </label>
      <input type="Date" name="revision" id="revision" class="cambio" title="Ingrese la fecha de vencimiento" required/>
    </div>       
    <div>
      <input type="reset" name="cancelar" id="cancelar" class="cambio" value="Cancelar" />
      <input type="submit" name="crear" id="crear" class="cambio" value="Enviar" />
    </div>
</div>    