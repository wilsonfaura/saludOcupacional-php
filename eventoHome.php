<script>
$(document).ready(function(e) {
    $("#resultado").hide();
	
	$("#mirar").click(function(e){
		
		$("#resultado").fadeIn(2000);
		e.preventDefault();		
		});
});  
</script>
<script>
$(document).ready(function(e) {
    $("#resultados").hide();
	
	$("#ver").click(function(e){
		
		$("#resultados").fadeIn(2000);
		e.preventDefault();		
		});
});  
</script>

<fieldset>  
  <legend>EVENTOS</legend> 
     <div>
     <?php 	 	  
	 date_default_timezone_set("America/Bogota");
	 $fecha = date("Y-m-d (H:i:s)");	 
	 $hoy = date("Y-m-d");
	 $dt_15DiasDespues = date('Y-m-d', strtotime('-30 day'));	
	
	 $consulta = "SELECT * FROM evento JOIN trabajador WHERE evIdTrabajador=identificacion AND evTipo='Accidente' AND evFecha BETWEEN '$dt_15DiasDespues' AND '$hoy'"; 
	 $ejecutar_consulta = $conexion->query($consulta);
	 $num_regs = $ejecutar_consulta->num_rows;
	 
	 $consulta ="SELECT * FROM evento JOIN trabajador WHERE evIdTrabajador=identificacion AND evTipo='Incidente'AND evFecha BETWEEN '$dt_15DiasDespues' AND '$hoy'"; 
	 $ejecutar_cons = $conexion->query($consulta);
	 $num_regis = $ejecutar_cons->num_rows; 
	 ?> 	   
     <p align="right" style="color:#009;"><?php echo "Fecha: " .$fecha;?></p> 
     <?php echo "Bienvenid@: " . $usuario['usuNombre'];?>
     <br />       
     <br />       
      <p>Este es el menu de administración de eventos, en esta sección usted podra realizar el manejo de la información de los accidentes e incidentes de los trabajadores a su cargo, por medio de la insersión, vizualización, modificación y eliminación de los mismos, ademas de esto puede obtener reportes Pdf de los eventos requeridos.</p>
      <br />
     <p><b>Informacion importante:</b></p>
     </div>
     <?php echo "<br>" ."Hay    ".'<b>'.$num_regs.'</b>'. "   accidente(s) registrado en el ultimo mes";?>
     
    &nbsp;&nbsp;
    <a href=" " id="mirar"><b>VER</b></a>	
	<br /><br />
    <table id="resultado">      
       <thead>
           <tr>
               <th>Evento</th>
               <th>Trabajador</th>
               <th>Nombre</th>
               <th>Fecha de registro</th>
               <th>Edad</th>
               <th>Vinculo</th>
               <th>Tipo</th>
               <th>Fecha</th>
               <th>Hora</th>
               <th>Lugar</th>
               <th>Actividad</th>
               <th>Descripcion</th>               
           </tr>       
       </thead>
       <tbody>
           <?php
		    while($registro = $ejecutar_consulta->fetch_assoc())
			{
			?>
               <tr>
                  <td><?php echo utf8_encode($registro["idEvento"]); ?></td>
                  <td><?php echo utf8_encode($registro["evIdTrabajador"]); ?></td>
                  <td><?php echo utf8_encode($registro["traNombre"]); ?>&nbsp;<?php echo utf8_encode($registro["traApellido"]); ?></td>
                  <td><?php echo utf8_encode($registro["evDateActual"]); ?></td>
                  <td><?php echo utf8_encode($registro["evEdad"]); ?></td>
                  <td><?php echo utf8_encode($registro["evVinculo"]); ?></td>               
                  <td><?php echo utf8_encode($registro["evTipo"]); ?></td>
                  <td><?php echo utf8_encode($registro["evFecha"]); ?></td>
                  <td><?php echo utf8_encode($registro["evHora"]); ?></td>
                  <td><?php echo utf8_encode($registro["evLugar"]); ?></td> 
                  <td><?php echo utf8_encode($registro["evActividad"]); ?></td>
                  <td><?php echo utf8_encode($registro["evDescripcion"]); ?></td>                                
               </tr>
            <?php	
			}
           ?>
       </tbody>    
    </table>
    <?php echo "<br>" ."Hay   ".'<b>'.$num_regis.'</b>'. "   incidente(s) registrado en el ultimo mes";?>
     
    &nbsp;&nbsp;
    <a href=" " id="ver"><b>VER</b></a>	
	<br /><br />
    <table id="resultados">      
       <thead>
           <tr>
               <th>Evento</th>
               <th>Trabajador</th>
               <th>Nombre</th>
               <th>Fecha de registro</th>
               <th>Edad</th>
               <th>Vinculo</th>
               <th>Tipo</th>
               <th>Fecha</th>
               <th>Hora</th>
               <th>Lugar</th>
               <th>Actividad</th>
               <th>Descripcion</th>               
           </tr>       
       </thead>
       <tbody>
           <?php
		    while($registro = $ejecutar_cons->fetch_assoc())
			{
			?>
               <tr>
                  <td><?php echo utf8_encode($registro["idEvento"]); ?></td>
                  <td><?php echo utf8_encode($registro["evIdTrabajador"]); ?></td>
                  <td><?php echo utf8_encode($registro["traNombre"]); ?>&nbsp;<?php echo utf8_encode($registro["traApellido"]); ?></td>
                  <td><?php echo utf8_encode($registro["evDateActual"]); ?></td>
                  <td><?php echo utf8_encode($registro["evEdad"]); ?></td>
                  <td><?php echo utf8_encode($registro["evVinculo"]); ?></td>               
                  <td><?php echo utf8_encode($registro["evTipo"]); ?></td>
                  <td><?php echo utf8_encode($registro["evFecha"]); ?></td>
                  <td><?php echo utf8_encode($registro["evHora"]); ?></td>
                  <td><?php echo utf8_encode($registro["evLugar"]); ?></td> 
                  <td><?php echo utf8_encode($registro["evActividad"]); ?></td>
                  <td><?php echo utf8_encode($registro["evDescripcion"]); ?></td>                                
               </tr>
            <?php	
			}
           ?>
       </tbody>    
    </table>     
</fieldset>      