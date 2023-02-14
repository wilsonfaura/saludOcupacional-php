<body>
  <form id="insertar-usuario" name="insert_frm" method="post" action="php/usuariosAgregar.php" enctype="multipart/form-data">  
    <fieldset>
    <legend>AGREGAR USUARIO</legend>
    <div>
      <label for="identificacion">Identificacion:</label>
      <input type="number" name="identificacion" id="identificacion" placeholder="Identificacion del usuario" class="cambio" title="Ingrese la identificacion del usuario" required />
    </div>      
    <div>
      <label for="nombres">Nombres: </label>
      <input type="text" name="nombres" id="nombres" placeholder="Nombre del usuario" class="cambio" title="Ingrese el nombre del usuario" required />
    </div>
    <div>
      <label for="apellidos">Apellidos: </label>
      <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos del usuario" class="cambio" title="Ingrese el apellido del usuario" required />
    </div>
     <div>
      <label for="area">Area: </label>
     <select id="area" class="cambio" name="area" title="Seleccione el area del usuario" required />
      <option value="">- - - </option>
      <?php include("selectArea.php"); ?>      
      </select>     
    </div> 
    <div>
      <label for="cargo_slc">Cargo: </label>
      <select id="cargos" class="cambio" name="cargo_slc" title="Seleccione el cargo del usuario" required />
      <option value="">- - - </option>
      <?php include("selectCargo.php"); ?>      
      </select>     
    </div>           
    <div>
      <label for="contraseña">Contraseña: </label>
      <input type="text" name="contraseña" id="contraseña" placeholder="Contraseña del usuario" class="cambio" title="Ingrese la contraseña del usuario" required />
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