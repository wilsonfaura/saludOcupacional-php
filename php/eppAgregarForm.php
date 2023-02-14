<body>
  <form id="insertar-epp" name="insert_frm" method="post" action="php/eppAgregar.php" enctype="multipart/form-data">  
    <fieldset>
    <legend> AGREGAR ELEMENTO DE PROTECCION PERSONAL</legend>
    <div>
      <label for="referencia">Referencia del epp:</label>
      <input type="number" name="referencia" id="referencia" placeholder="Referencia EPP" class="cambio" title="Ingrese la referencia del EPP" required />
    </div>      
    <div>
      <label for="nombre">Nombre del epp: </label>
      <input type="text" name="nombre" id="nombre" placeholder="Nombre del Epp" class="cambio" title="Ingrese el nombre del Epp" required />
    </div>
<div>
      <label for="talla">Talla del epp: </label>
      <input type="text" name="talla" id="talla" placeholder="Talla del Epp" class="cambio" title="Ingrese la talla del Epp" required />
    </div>
    <div>
      <label for="proveedor">Proveedor del epp: </label>
      <input type="text" name="proveedor" id="proveedor" placeholder="Nombre proveedor" class="cambio" title="Ingrese nombre proveedor" required/>
    </div> 
    <div>
      <label for="codigo">Codigo del proveedor: </label>
      <input type="text" name="codigo" id="codigo" placeholder="Codigo proveedor" class="cambio" title="Ingrese codigo proveedor" required/>
    </div>    
    <div>
        <label for="telefono">Telefono del proveedor: </label>
        <input type="number" name="telefono" id="telefono"placeholder="Telefono proveedor" class="cambio" title="Ingrese el telefono del proveedor"  required/>
    </div>    
     <div>
      <label for="email">Email del proveedor: </label>
      <input type="Email" name="email" id="email" placeholder="Email proveedor" class="cambio" title="Ingrese el Email del proveedor" />
    </div> 
      
    <div>
      <input type="reset" name="cancelar" id="cancelar" class="cambio" value="Cancelar" />
      <input type="submit" name="crear" id="crear" class="cambio" value="Enviar" />
    </div>
    <p><?php include ("php/mensajes.php");?>&nbsp;</p>    
     </fieldset>   
  </form>
   
</body>
</html>