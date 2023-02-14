<body>
  <form id="agregar-epp" name="agregar_frm" method="post" action="php/eppEntrega.php" enctype="multipart/form-data">  
    <fieldset>
    <legend>ENTREGA EPP</legend>
    <div>       
         <label for="idTrabajador_slc">Trabajador: </label>
         <select id="idTrabajador_slc" class="cambio" name="idTrabajador_slc" title="Seleccione la cedula del trabajador" required />
           <option value="">- - - </option>           
           <?php  include("trabajadorSelect.php"); ?>
         </select>
     </div>   
    <div>
      <label for="eppNom_slc">Epp: </label>
      <select id="eppNom_slc" class="cambio" name="eppNom_slc" title="Seleccione el nombre del epp" required>
      <option value="">- - - </option>
      <?php include("eppSelect.php"); ?>      
      </select>     
    </div>    
    <div>
      <label for="fecha">Fecha de Entrega: </label>
      <input type="Date" name="fecha" id="fecha" placeholder="Fecha Entrega" class="cambio" title="Ingrese la fecha de entrega del epp" required/>
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