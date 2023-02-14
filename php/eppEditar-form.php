    <div>
      <label for="referencia">Referencia del epp:</label>
      <input type="text" name="referencia" id="referencia" class="cambio" title="Ingrese la referencia del EPP" value="<?php echo $registro_ref["eppReferencia"];?>"  disabled required /> 
      <input type="hidden" name="referencia_hdn" value="<?php echo $registro_ref["eppReferencia"]; ?>" />    
    </div>
    <div>
      <label for="nombre">Nombre del epp: </label>
      <input type="text" name="nombre" id="nombre" placeholder="Nombre del Epp" class="cambio" title="Ingrese el nombre del Epp"  value="<?php echo $registro_ref["eppNombre"];?>" required />       
    </div>   
    <div>
      <label for="talla">Talla del epp: </label>
      <input type="text" name="talla" id="talla" placeholder="Talla del Epp" class="cambio" title="Ingrese la talla del Epp"  value="<?php echo $registro_ref["eppTalla"];?>" required />
    </div>
    <div>
      <label for="proveedor">Proveedor del epp: </label>
      <input type="text" name="proveedor" id="proveedor" placeholder="Nombre proveedor" class="cambio" title="Ingrese nombre proveedor"  value="<?php echo $registro_ref["eppProveedor"];?>" required/>
    </div> 
    <div>
      <label for="codigo">Codigo del proveedor: </label>
      <input type="text" name="codigo" id="codigo" placeholder="Codigo proveedor" class="cambio" title="Ingrese codigo proveedor"  value="<?php echo $registro_ref["eppIdProveedor"];?>" required/>
    </div>    
    <div>
        <label for="telefono">Telefono del proveedor: </label>
        <input type="number" name="telefono" id="telefono"placeholder="Telefono proveedor" class="cambio" title="Ingrese el telefono del proveedor"   value="<?php echo $registro_ref["eppTelProveedor"];?>" required/>
    </div>    
     <div>
      <label for="email">Email del proveedor: </label>
      <input type="Email" name="email" id="email" placeholder="Email proveedor" class="cambio" title="Ingrese el Email del proveedor"  value="<?php echo $registro_ref["eppEmailProveedor"];?>" />
    </div> 
      
    <div>      
      <input type="submit" name="crear" id="crear" class="cambio" value="Modificar" />
    </div>