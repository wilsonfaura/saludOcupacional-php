    <div>
      <label for="placa">Placa:</label>
      <input type="text" name="placa" id="placa" class="cambio" title="Placa del vehiculo" value="<?php echo $registro_vehiculo["vehPlaca"]?>"  disabled required />      
      <input type="hidden" name="placa_hdn" value="<?php echo $registro_vehiculo["vehPlaca"]; ?>" />      
    </div> 
     <div>
       <label for="trabajador">Trabajador: </label>
      <select id="trabajador" class="cambio" name="trabajador" title="Seleccione el area del trabajador" required />
      <option value=""></option>
      <?php include("vehTraSelect.php"); ?>      
      </select>
       <div>
      <label for="nombre">Nombre del trabajador: </label>
      <input type="text" name="nombre" id="nombre" class="cambio" value="<?php echo $registro_vehiculo['traNombre'];?>" disabled required />
    </div>
    <div>
      <label for="apellido">Apellido del trabajador: </label>
      <input type="text" name="apellido" id="apellido" class="cambio" value="<?php echo $registro_vehiculo["traApellido"];?>" disabled required />
    </div>
     <div>
      <label for="tipo">Tipo de Vehiculo: </label>
      <select type="text" name="tipo" id="tipo" placeholder="Tipo del vehiculo" class="cambio" title="Ingrese el tipo de vehiculo" required />
      <option value=""<?php if($registro_vehiculo["vehTipo"]==""){echo " selected";} ?>>- - -</option>
          <option value="Automovil"<?php if($registro_vehiculo["vehTipo"]=="Automovil"){echo " selected";} ?>>Automovil</option>
          <option value="Camioneta"<?php if($registro_vehiculo["vehTipo"]=="Camioneta"){echo " selected";} ?>>Camioneta</option>
          <option value="Camion"<?php if($registro_vehiculo["vehTipo"]=="Camion"){echo " selected";} ?>>Camion</option>
          <option value="Tractocamion"<?php if($registro_vehiculo["vehTipo"]=="Tractocamion"){echo " selected";} ?>>Tractocamion</option>          
        </select> 
    </div>
    <div>
      <label for="marca">Marca del vehiculo: </label>
      <input type="text" name="marca" id="marca"placeholder="Marca del vehiculo" class="cambio" title="Ingrese la marca del vehiculo" value="<?php echo $registro_vehiculo["vehMarca"];?>" required />
    </div>
    <div>
      <label for="modelo">Modelo del vehiculo: </label>
      <input type="text" name="modelo" id="modelo"placeholder="Modelo del vehiculo" class="cambio" title="Ingrese el modelo del vehiculo" value="<?php echo $registro_vehiculo["vehModelo"];?>" required />
    </div>    
    <div>
      <label for="targeta">Targeta de Propiedad: </label>
      <input type="text" name="targeta" id="targeta"placeholder="Targeta del vehiculo" class="cambio" title="Ingrese el numero de la targeta" value="<?php echo $registro_vehiculo["vehTarPro"];?>" required />
    </div>
    <div>
      <label for="kilometraje">Kilometraje del Vehiculo: </label>
      <input type="text" name="kilometraje" id="kilometraje"placeholder="Kilometraje del vehiculo" class="cambio" title="Ingrese el Kilometraje" value="<?php echo $registro_vehiculo["vehKm"];?>" required />
    </div>   
   <div>
      <label for="licencia">Vencimiento de la Licencia: </label>
      <input type="Date" name="licencia" id="licencia" class="cambio" title="Ingrese la fecha de vencimiento" value="<?php echo $registro_vehiculo["vehLicencia"];?>" required/>
    </div>
    <div>
      <label for="soat">Vencimiento del Soat: </label>
      <input type="Date" name="soat" id="soat" class="cambio" title="Ingrese la fecha de vencimiento" value="<?php echo $registro_vehiculo["vehSoat"];?>" required/>
    </div>
    <div>
      <label for="revision">Vencimiento de la Revision Tecnomecanica: </label>
      <input type="Date" name="revision" id="revision" class="cambio" title="Ingrese la fecha de vencimiento" value="<?php echo $registro_vehiculo["vehTecno"];?>" required/>
    </div>         
    <div>
        <input type="submit" name="crear" id="crear" class="cambio" value="Modificar" />
    </div>
</div>    