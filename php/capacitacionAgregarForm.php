<body>
  <form id="insertar-capacitacion" name="insert_frm" method="post" action="php/capacitacionAgregar.php" enctype="multipart/form-data">  
    <fieldset>
    <legend><b>AGREGAR CAPACITACION</b></legend>
    <div>
      <label for="instructor">Instructor:</label>
      <input type="text" name="instructor" id="instructor" placeholder="Nombre instructor" class="cambio" title="Ingrese el nombre del instructor" required />
    </div>      
    <div>
      <label for="tema">Tema: </label>
      <input type="text" name="tema" id="tema" placeholder="Tema capacitacion" class="cambio" title="escriba el tema de la capacitacion" required />
    </div> 
    <div>
      <label for="descripcion">Descripcion: </label>
      <input type="text" name="descripcion" id="descripcion" placeholder="Descripcion tema" class="cambio" title="describa el tema de la capacitacion" required />
    </div>   
   
    <div>
      <label for="areas">Areas: </label>
      <input type="text" name="areas" id="areas" placeholder="areas a capacitar" class="cambio" title="Ingrese la areas que omaran la capacitacion" required/>
    </div>
    <div>
      <label for="fecha">Fecha: </label>
      <input type="Date" name="fecha" id="fecha" placeholder="Fecha de capacitacion" class="cambio" title="Ingrese la fecha de la capacitacion" required/>
    </div>
    <div>
      <label for="hora">Hora: </label>
      <input type="time" name="hora" id="hora" placeholder="hora capacitacion" class="cambio" title="Ingrese la hora de la capacitacion" required/>
    </div>    
    <div>
      <label for="estado">Estado: </label>      
      <select type="text" name="estado" id="estado" placeholder="Estado capacitacion" class="cambio" title="Seleccione el estado de la capacitacion" required />
          <option value="">- - -</option>
          <option value="Programado">Programado</option>
          <option value="Realizado">Realizado</option>                   
        </select> 
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