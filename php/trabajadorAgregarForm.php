<body>
  <form id="insertar-trabajador" name="insert_frm" method="post" action="php/trabajadorAgregar.php" enctype="multipart/form-data">  
    <fieldset>
    <legend>AGREGAR TRABAJADOR</legend>
    <div>
      <label for="identificacion">Identificacion:</label>
      <input type="number" name="identificacion" id="identificacion" placeholder="Identificacion del trabajador" class="cambio" title="Ingrese la identificacion del trabajador" required />
    </div>      
    <div>
      <label for="traNombres">Nombres: </label>
      <input type="text" name="traNombres" id="traNombres" placeholder="Nombre del trabajador" class="cambio" title="Ingrese el nombre del trabajador" required />
    </div>
    <div>
      <label for="traApellidos">Apellidos: </label>
      <input type="text" name="traApellidos" id="traApellidos" placeholder="Apellidos del trabajador" class="cambio" title="Ingrese el apellido del trabajador" required />
    </div>
    <div>
      <label for="traArea">Area: </label>
      <select id="traArea" class="cambio" name="traArea" title="Seleccione el area del trabajador" required>
      <option value="">- - - </option>
      <?php include("selectArea.php"); ?>      
      </select>      
    </div>
    <div>
      <label for="Cargo_slc">Cargo: </label>
      <select id="Cargo_slc" class="cambio" name="cargo_slc" title="Seleccione el cargo del trabajador" required>
      <option value="">- - - </option>
      <?php include("selectCargo.php"); ?>      
      </select>     
    </div>    
    <div>
      <label for="traIngreso">Fecha de Ingreso: </label>
      <input type="Date" name="traIngreso" id="traIngreso" placeholder="Fecha de ingreso" class="cambio" title="Ingrese la fecha de ingreso del trabajador" required/>
    </div>    
    <div>
      &nbsp;<label for="traSexo">Sexo: </label>
      <input type="radio" name="traSexo" id="traSexo" title="Sexo trabajador" value="M" required />&nbsp;<label for="m">Masculino</label>
      &nbsp;&nbsp;&nbsp;
      <input type="radio" name="traSexo" id="traSexo" title="Sexo trabajador" value="F" required />&nbsp;<label for="f">Femenino</label>
    </div>
    <div>
      <label for="traRh">RH: </label>      
      <select type="text" name="traRh" id="traRh" placeholder="RH del trabajador" class="cambio" title="Seleccione el tipo de sangre del trabajador" required />
          <option value="">- - -</option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="AB+">AB+</option>
          <option value="AB-+">AB-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>          
        </select> 
    </div>       
    <div>
      <label for="traDir">Direccion: </label>
      <input type="text" name="traDir" id="traDir"placeholder="Direccion del trabajador" class="cambio" title="Ingrese la direccion trabajador" required />
    </div>
    <div>
        <label for="traTel">Telefono: </label>
        <input type="number" name="traTel" id="traTel"placeholder="Telefono del trabajador" class="cambio" title="Ingrese el numero de telefono trabajador" required />
    </div>    
     <div>
      <label for="traEmail">Email: </label>
      <input type="Email" name="traEmail" id="traEmail" placeholder="Email del trabajador" class="cambio" title="Ingrese el Email del trabajador" required />
    </div> 
    <div>
      <label for="traContacNombres">Nombres de Contacto: </label>
      <input type="text" name="traContacNombres" id="traContacNombres" placeholder="Nombre del Contacto" class="cambio" title="Ingrese el nombre del contacto" required />
    </div>
    <div>
      <label for="traContacApellidos">Apellidos de Contacto: </label>
      <input type="text" name="traContacApellidos" id="traContacApellidos" placeholder="Apellidos del Contacto" class="cambio" title="Ingrese el apellido del contacto" required />
    </div> 
    <div>
        <label for="traContacTelefono">Telefono de Contacto: </label>
        <input type="number" name="traContacTelefono" id="traContacTelefono"placeholder="Telefono del Contacto" class="cambio" title="Ingrese el telefono del contacto" required />
    </div>
    <div>
    <label for="foto_fls">Foto: </label>
    <div class="adjuntar-archivo cambio">
    <input type="file" id="foto_fls" name="foto_fls" title="Sube una Foto" />
    </div>
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