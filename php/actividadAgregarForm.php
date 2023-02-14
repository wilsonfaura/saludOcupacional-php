<body>
  <form id="insertar-actividad" name="insert_frm" method="post" action="php/actividadAgregar.php" enctype="multipart/form-data">  
    <fieldset>
    <legend>AGREGAR ACTIVIDAD</legend>
    <div>
      <label for="actividad">Nombre de la actividad:</label>
      <input type="text" name="actividad" id="actividad" placeholder="Nombre actividad" class="cambio" title="Ingrese el nombre de la actividad" required />
    </div>      
    <div>
      <label for="descripcion">Descripcion: </label>
      <input type="text" name="descripcion" id="descripcion" placeholder="Descripcion" class="cambio" title="describa la actividad" required />
    </div>    
    <div>
      <label for="area">Area: </label>
      <select id="area" class="cambio" name="area" title="Seleccione el area donde se realizara la actividad" required>
      <option value="">- - - </option>
      <?php include("selectArea.php"); ?>      
      </select>      
    </div>      
    <div>
      <label for="inicio">Fecha de Inicio: </label>
      <input type="Date" name="inicio" id="inicio" placeholder="Fecha de inicio" class="cambio" title="Ingrese la fecha de inicio de la actividad" required/>
    </div>
    <div>
      <label for="fin">Fecha de Fin: </label>
      <input type="Date" name="fin" id="fin" placeholder="Fecha de finalizacion" class="cambio" title="Ingrese la fecha de fin de la actividad" required/>
    </div>    
    <div>
      <label for="estado">Estado: </label>      
      <select type="text" name="estado" id="estado" placeholder="Estado de la actividad" class="cambio" title="Seleccione el estado de la actividad" required />
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