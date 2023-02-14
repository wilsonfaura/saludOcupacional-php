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
 <legend>ACTIVIDADES</legend>  
    <div>
     <?php 	 	  
	 date_default_timezone_set("America/Bogota");
	 $fecha = date("Y-m-d (H:i:s)");	 
	 $hoy = date("Y-m-d");
	 $dt_8DiasDespues = date('Y-m-d', strtotime('+8 day')) ;
	 
	 $consulta = "SELECT * FROM actividad WHERE actEstado = 'Programado' AND actFechaIni BETWEEN '$hoy' AND '$dt_8DiasDespues'"; 
	 $ejecutar_consulta = $conexion->query($consulta);
	 $num_regs = $ejecutar_consulta->num_rows;	 
	 ?> 
         
     <p align="right" style="color:#009;"><?php echo "Fecha: " .$fecha;?></p> 
     <?php echo "Bienvenid@: " . $usuario['usuNombre'];?>
     <br />       
     <br />            
     <p>Usted se encuentra en el menu de administración de actividades, en esta sección usted podra realizar la programacion y manejo de la información de las actividades a realizar en su area, por medio de la insersión, vizualización, modificación y eliminación de los mismos.</p>
   <br />
     <p><b>Informacion importante:</b></p>
    </div>
     
     <?php echo "<br>" ."Existe(n)  ".'<b>'.$num_regs.'</b>'. "   actividad(es) Programada(s) dentro de los proximos 8 días";?>
     
    &nbsp;&nbsp;
    <a href=" " id="ver"><b>VER</b></a>	
	<br /><br />
    <table id="resultados">
       <thead>
           <tr>
               <th>Actividad</th>
               <th>Nombre</th>
               <th>Descripcion</th>             
               <th>Area</th>               
               <th>Fecha inicio</th>
               <th>Fecha fin</th>               
               <th>Estado</th>
           </tr>       
       </thead>
       <tbody>
           <?php
		    while($registro = $ejecutar_consulta->fetch_assoc())
			{
			?>
               <tr>
                  <td><?php echo utf8_encode($registro["idActividad"]); ?></td>
                  <td><?php echo utf8_encode($registro["actNombre"]); ?></td>
                  <td><?php echo utf8_encode($registro["actDescripcion"]); ?></td>                 
                  <td><?php echo utf8_encode($registro["actArea"]); ?></td>
                  <td><?php echo utf8_encode($registro["actFechaIni"]); ?></td> 
                  <td><?php echo utf8_encode($registro["actFechaFin"]); ?></td>
                  <td><?php echo utf8_encode($registro["actEstado"]); ?></td>                                                      
               </tr>
            <?php	
			}
           ?>
       </tbody>    
    </table>    
</fieldset>   
  
