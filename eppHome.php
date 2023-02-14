<script>
$(document).ready(function(e) {
    $("#resultados").hide();
	
	$("#ver").click(function(e){
		
		$("#resultados").fadeIn(2000);
		e.preventDefault();		
		});
});  
 </script>
 <script>
$(document).ready(function(e) {
    $("#resultado").hide();
	
	$("#mirar").click(function(e){
		
		$("#resultado").fadeIn(2000);
		e.preventDefault();		
		});
});  
 </script>
 
<fieldset>  
   <legend>ELEMENTOS DE PROTECCION PERSONAL</legend>  
    <div>
     <?php 	 	  
	 date_default_timezone_set("America/Bogota");
	 $fecha = date("Y-m-d (H:i:s)");	 
	 $hoy = date("Y-m-d");
	 $dt_15DiasAntes = date('Y-m-d', strtotime('-15 day')) ;
	
	 $consulta = "SELECT * FROM entrega JOIN Trabajador JOIN epp WHERE entTrabajador=identificacion AND entEpp=eppNombre AND entFecha BETWEEN '$dt_15DiasAntes' AND '$hoy'"; 
	 $ejecutar_consulta = $conexion->query($consulta);
	 $num_regs = $ejecutar_consulta->num_rows;	
	 
	 $consulta = "SELECT * FROM entrega JOIN Trabajador JOIN epp WHERE entTrabajador=identificacion AND entEpp=eppNombre AND traArea= '$dependencia'AND entFecha BETWEEN '2017-01-01' AND '$hoy'"; 
	 $ejecutar_cons = $conexion->query($consulta);
	 $num_regis = $ejecutar_cons->num_rows; 
	 ?> 
         
     <p align="right" style="color:#009;"><?php echo "Fecha: " .$fecha;?></p> 
     <?php echo "Bienvenid@: " . $usuario['usuNombre'];?>
     <br />       
     <br />
     <p>Este  es el menu para la administración de EPP (elementos de protección personal), en esta sección usted podra realizar el registro, edicion y eliminacion de todos lo elementos de protección utilizados en la empresa, ademas de llevar un control de los elementos entregados a los trabajdores.</p>
    <br />
     <p><b>Informacion importante:</b></p>
    </div>
    <?php echo "<br>" ."En lo corrido de este año se han entregado  ".'<b>'.$num_regis.'</b>'. "  elementos de proteccion personal en el area de".'<b>'." $dependencia".'</b>';?>&nbsp;&nbsp;
    <a href=" " id="mirar"><b>VER</b></a>	
	<br /><br />
    <table id="resultado">
       <thead>
           <tr>
               <th>trabajador</th>
               <th>Nombre Trabajador</th>
               <th>Area Trabajador</th>
               <th>Cargo Trabajador</th>
               <th>Epp</th>
               <th>Referencia Epp</th>
               <th>Talla Epp</th>
               <th>Proveedor</th>
               <th>Fecha de entrega</th>                            
           </tr>       
       </thead>
       <tbody>
           <?php
		    while($registro = $ejecutar_cons->fetch_assoc())
			{
			?>
               <tr>
                  <td><?php echo utf8_encode($registro["entTrabajador"]); ?></td>
                  <td><?php echo utf8_encode($registro["traNombre"]); ?>&nbsp;<?php echo utf8_encode($registro["traApellido"]); ?></td>
                  <td><?php echo utf8_encode($registro["traArea"]); ?></td>
                  <td><?php echo utf8_encode($registro["traCargo"]); ?></td>                 
                  <td><?php echo utf8_encode($registro["entEpp"]); ?></td>
                  <td><?php echo utf8_encode($registro["eppReferencia"]); ?></td>               
                  <td><?php echo utf8_encode($registro["eppTalla"]); ?></td>
                  <td><?php echo utf8_encode($registro["eppProveedor"]); ?></td>                
                  <td><?php echo utf8_encode($registro["entFecha"]); ?></td>                                 
               </tr>
            <?php	
			}
           ?>
       </tbody>    
    </table>  
     
     <?php echo "<br>" ."Se han entregado  ".'<b>'.$num_regs.'</b>'. "  elementos de proteccion personal en los ultimos 15 días en la ".'<b>'."compañia".'</b>';?>&nbsp;&nbsp;
    <a href=" " id="ver"><b>VER</b></a>	
	<br /><br />
    <table id="resultados">
       <thead>
           <tr>
               <th>trabajador</th>
               <th>Nombre Trabajador</th>
               <th>Area Trabajador</th>
               <th>Cargo Trabajador</th>
               <th>Epp</th>
               <th>Referencia Epp</th>
               <th>Talla Epp</th>
               <th>Proveedor</th>
               <th>Fecha de entrega</th>                            
           </tr>       
       </thead>
       <tbody>
           <?php
		    while($registro = $ejecutar_consulta->fetch_assoc())
			{
			?>
               <tr>
                  <td><?php echo utf8_encode($registro["entTrabajador"]); ?></td>
                  <td><?php echo utf8_encode($registro["traNombre"]); ?>&nbsp;<?php echo utf8_encode($registro["traApellido"]); ?></td>
                  <td><?php echo utf8_encode($registro["traArea"]); ?></td>
                  <td><?php echo utf8_encode($registro["traCargo"]); ?></td>                 
                  <td><?php echo utf8_encode($registro["entEpp"]); ?></td>
                  <td><?php echo utf8_encode($registro["eppReferencia"]); ?></td>               
                  <td><?php echo utf8_encode($registro["eppTalla"]); ?></td>
                  <td><?php echo utf8_encode($registro["eppProveedor"]); ?></td>                
                  <td><?php echo utf8_encode($registro["entFecha"]); ?></td>                                 
               </tr>
            <?php	
			}
           ?>
       </tbody>    
    </table>    
</fieldset>   
  
   