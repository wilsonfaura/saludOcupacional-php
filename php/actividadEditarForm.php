<?php 
$consulta = "SELECT * FROM actividad WHERE idActividad='$_REQUEST[id]'";
$ejecutar_consulta = $conexion->query($consulta);
$registro = $ejecutar_consulta->fetch_assoc();
?>

<body>
    <form id="editar-actividad" name="editar_frm" method="post" action="php/actividadEditar.php" enctype="multipart/form-data">  
      <fieldset>
       <legend><b>EDITAR ACTIVIDAD</b></legend>
       <div>
         <input type='hidden' name="idAct_hdn" id="idCap" class="cambio" value="<?php echo $registro['idActividad']; ?>"required />
       </div>
       <div>
        <label for="actividad">Nombre de la actividad:</label>
        <input type="text" name="actividad" id="actividad" placeholder="Nombre actividad" class="cambio" title="Ingrese el nombre de la actividad" value="<?php echo $registro['actNombre']; ?>" required />
      </div>      
      <div>
        <label for="descripcion">Descripcion: </label>
        <input type="text" name="descripcion" id="descripcion" placeholder="Descripcion" class="cambio" title="describa la actividad" value="<?php echo $registro['actDescripcion']; ?>" required />
      </div>    
      <div>
        <label for="area">Area: </label>
        <select id="area" class="cambio" name="area" title="Seleccione el area donde se realizara la actividad" required />
        <option value="">- - - </option>
        <?php include("selectAreaA.php"); ?>      
        </select>      
      </div>      
      <div>
        <label for="inicio">Fecha de Inicio: </label>
        <input type="Date" name="inicio" id="inicio" placeholder="Fecha de inicio" class="cambio" title="Ingrese la fecha de inicio de la actividad" value="<?php echo $registro['actFechaIni']; ?>" required/>
      </div>
      <div>
        <label for="fin">Fecha de Fin: </label>
        <input type="Date" name="fin" id="fin" placeholder="Fecha de finalizacion" class="cambio" title="Ingrese la fecha de fin de la actividad" value="<?php echo $registro['actFechaFin']; ?>" required/>
      </div>    
      <div>
       <label for="estado">Estado: </label> 
       <select name="estado" id="estado" placeholder="Estado actividad" class="cambio" title="Seleccione el estado de la actividad" required />
          <option value=""<?php if($registro["actEstado"]==""){echo " selected";} ?>>- - -</option>
          <option value="Programado"<?php if($registro["actEstado"]=="Programado"){echo " selected";} ?>>Programado</option>
          <option value="Realizado"<?php if($registro["actEstado"]=="Realizado"){echo " selected";} ?>>Realizado</option>                  
        </select> 
      </div>        
      <div>
        <input type="submit" name="crear" id="crear" class="cambio" value="Modificar" />
      </div>
    </fieldset>   
  </form>   
</body>
</html>