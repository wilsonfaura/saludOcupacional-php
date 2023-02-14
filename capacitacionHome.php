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
  <legend>CAPACITACIONES</legend>  
    <div>
     <?php 	 	  
	 date_default_timezone_set("America/Bogota");
	 $fecha = date("Y-m-d (H:i:s)");	 
	 $hoy = date("Y-m-d");
	 $dt_15DiasDespues = date('Y-m-d', strtotime('+15 day')) ;
	
	 $consulta = "SELECT * FROM capacitacion WHERE capEstado = 'Programado' AND capFecha BETWEEN '$hoy' AND '$dt_15DiasDespues'"; 
	 $ejecutar_consulta = $conexion->query($consulta);
	 $num_regs = $ejecutar_consulta->num_rows;	 
	 ?> 
         
     <p align="right" style="color:#009;"><?php echo "Fecha: " .$fecha;?></p> 
     <?php echo "Bienvenid@: " . $usuario['usuNombre'];?>
     <br />       
     <br />       
     <p>Usted se encuentra en el menu de administración de capacitaciones, en esta sección usted podra realizar el manejo de la información de las capacitaciones que se realizaran sobre salud ocupacional, por medio de la insersión, vizualización, modificación y eliminación .</p>
     <br />
     <p><b>Informacion importante:</b></p>
    </div>
     
     <?php echo "<br>" ."Existe(n)  ".'<b>'.$num_regs.'</b>'. "   capacitación(es) Programada(s) dentro de los proximos 15 días";?>
     
    &nbsp;&nbsp;
    <a href=" " id="ver"><b>VER</b></a>	
	<br /><br />
    <table id="resultados">
       <thead>
           <tr>
               <th>Numero</th>
               <th>Instructor</th>
               <th>Tema</th>             
               <th>Area</th>               
               <th>Fecha</th>
               <th>Hora</th>               
               <th>Estado</th>
           </tr>       
       </thead>
       <tbody>
           <?php
		    while($registro = $ejecutar_consulta->fetch_assoc())
			{
			?>
               <tr>
                  <td><?php echo utf8_encode($registro["idCapacitacion"]); ?></td>
                  <td><?php echo utf8_encode($registro["capInstructor"]); ?></td>
                  <td><?php echo utf8_encode($registro["capTema"]); ?></td>                 
                  <td><?php echo utf8_encode($registro["capArea"]); ?></td>
                  <td><?php echo utf8_encode($registro["capFecha"]); ?></td> 
                  <td><?php echo utf8_encode($registro["capHora"]); ?></td>
                  <td><?php echo utf8_encode($registro["capEstado"]); ?></td>                                                      
               </tr>
            <?php	
			}
           ?>
       </tbody>    
    </table>    
</fieldset>   
  
