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
  <legend>VEHICULOS</legend>  
    <div>
     <?php 	 	  
	 date_default_timezone_set("America/Bogota");
	 $fecha = date("Y-m-d (H:i:s)");	 
	 $hoy = date("Y-m-d");
	 $dt_15DiasDespues = date('Y-m-d', strtotime('+30 day')) ;
	
	 $consulta = "SELECT * FROM vehiculo JOIN trabajador WHERE vehIdTra=identificacion AND vehSoat BETWEEN '$hoy' AND '$dt_15DiasDespues'"; 
	 $ejecutar_consulta = $conexion->query($consulta);
	 $num_regs = $ejecutar_consulta->num_rows;
	 	
	 $consulta = "SELECT * FROM vehiculo JOIN trabajador WHERE vehIdTra=identificacion AND vehTecno BETWEEN '$hoy' AND '$dt_15DiasDespues'"; 
	 $ejecutar_cons = $conexion->query($consulta);
	 $num_regis = $ejecutar_cons->num_rows; 
	 ?> 
         
     <p align="right" style="color:#009;"><?php echo "Fecha: " .$fecha;?></p> 
     <?php echo "Bienvenid@: " . $usuario['usuNombre'];?>
     <br />       
     <br />       
     <p>Este es el menu de administración de vehiculos, en esta sección usted podra realizar el manejo de la información de los vehiculos de la compañia, por medio de la insersión podra asignar un vehiculo al trabajador, ademas ingresar los datos mas importantes de estos, podra vizualizar editar y generar reportes de los vehiculos requeridos.</p>
     <br />
     <p><b>Informacion importante:</b></p>
    </div>
    <?php echo "<br>" ."Hay    ".'<b>'.$num_regs.'</b>'. "   seguro(s) de transito a vencer dentro de los proximos 30 dias";?>
     
    &nbsp;&nbsp;
    <a href=" " id="mirar"> VER </a>	
	<br /><br />
    <table id="resultado">      
       <thead>
           <tr>
               <th>trabajador</th>
               <th>Nombre Trabajador</th>
               <th>Placas</th>
               <th>Tipo</th>
               <th>Marca</th>
               <th>Modelo</th>
               <th>Targeta de propiedad</th>
               <th>Kilometraje</th>
               <th>Ven Licencia</th>
               <th>Ven Soat</th>
               <th>Ven tecno</th>               
           </tr>       
       </thead>
       <tbody>
           <?php
		    while($registro = $ejecutar_consulta->fetch_assoc())
			{
			?>
               <tr>
                  <td><?php echo utf8_encode($registro["vehIdTra"]); ?></td>
                  <td><?php echo utf8_encode($registro["traNombre"]); ?>&nbsp;<?php echo utf8_encode($registro["traApellido"]); ?></td>
                  <td><?php echo utf8_encode($registro["vehPlaca"]); ?></td>
                  <td><?php echo utf8_encode($registro["vehTipo"]); ?></td>
                  <td><?php echo utf8_encode($registro["vehMarca"]); ?></td>
                  <td><?php echo utf8_encode($registro["vehModelo"]); ?></td>
                  <td><?php echo utf8_encode($registro["vehTarPro"]); ?></td>               
                  <td><?php echo utf8_encode($registro["vehKm"]); ?></td>
                  <td><?php echo utf8_encode($registro["vehLicencia"]); ?></td>
                  <td><?php echo utf8_encode($registro["vehSoat"]); ?></td>
                  <td><?php echo utf8_encode($registro["vehTecno"]); ?></td>                                 
               </tr>
            <?php	
			}
           ?>
       </tbody>    
    </table>
    <?php echo "<br>" ."Hay   ".'<b>'.$num_regis.'</b>'. "   revision(es) tecnomecanica(s) a vencer dentro de los proximos 30 dias";?>
     
    &nbsp;&nbsp;
    <a href=" " id="ver"> VER </a>	
	<br /><br />
    <table id="resultados">      
       <thead>
           <tr>
               <th>trabajador</th>
               <th>Nombre Trabajador</th>
               <th>Placas</th>
               <th>Tipo</th>
               <th>Marca</th>
               <th>Modelo</th>
               <th>Targeta de propiedad</th>
               <th>Kilometraje</th>
               <th>Ven Licencia</th>
               <th>Ven Soat</th>
               <th>Ven tecno</th>               
           </tr>       
       </thead>
       <tbody>
           <?php
		    while($registro = $ejecutar_cons->fetch_assoc())
			{
			?>
               <tr>
                  <td><?php echo utf8_encode($registro["vehIdTra"]); ?></td>
                  <td><?php echo utf8_encode($registro["traNombre"]); ?>&nbsp;<?php echo utf8_encode($registro["traApellido"]); ?></td>
                  <td><?php echo utf8_encode($registro["vehPlaca"]); ?></td>
                  <td><?php echo utf8_encode($registro["vehTipo"]); ?></td>
                  <td><?php echo utf8_encode($registro["vehMarca"]); ?></td>
                  <td><?php echo utf8_encode($registro["vehModelo"]); ?></td>
                  <td><?php echo utf8_encode($registro["vehTarPro"]); ?></td>               
                  <td><?php echo utf8_encode($registro["vehKm"]); ?></td>
                  <td><?php echo utf8_encode($registro["vehLicencia"]); ?></td>
                  <td><?php echo utf8_encode($registro["vehSoat"]); ?></td>
                  <td><?php echo utf8_encode($registro["vehTecno"]); ?></td>                                 
               </tr>
            <?php	
			}
           ?>
       </tbody>    
    </table>    
</fieldset>   