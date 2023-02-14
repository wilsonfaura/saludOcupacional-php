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
  <legend>USUARIOS</legend>  
    <div>
     <?php 	 	  
	 date_default_timezone_set("America/Bogota");
	 $fecha = date("Y-m-d (H:i:s)");	 
	 $hoy = date("Y-m-d");
	 $dt_15DiasDespues = date('Y-m-d', strtotime('+15 day')) ;
	
	 $consulta = "SELECT * FROM usuario"; 
	 $ejecutar_consulta = $conexion->query($consulta);
	 $num_regs = $ejecutar_consulta->num_rows;	 
	 ?> 
         
     <p align="right" style="color:#009;"><?php echo "Fecha: " .$fecha;?></p> 
     <?php echo "Bienvenid@: " . $usuario['usuNombre'];?>
     <br />       
     <br />       
     <p>Usted se encuentra en el menu de administración de usuarios, en esta sección usted podra realizar el manejo de la información de los usuarios que tendran acceso al sistema, por medio de la insersión, vizualización, modificación y eliminación de sus datos.</p>
     <br />
     <p><b>Informacion importante:</b></p>     
    </div>
    <?php echo "<br>" ."Existe(n)  ".'<b>'.$num_regs.'</b>'."   usuario(s) registrado(s) en el sistema";?>
    
    &nbsp;&nbsp;
    <a href=" " id="ver"><b>VER</b></a>	
	<br /><br />
    <table id="resultados">
       <thead>
           <tr>
               <th>Identificacion</th>
               <th>Nombres</th>
               <th>Apellidos</th>               
               <th>Cargo</th>
               <th>Area</th>               
               <th>Contraseña</th>
           </tr>       
       </thead>
       <tbody>
           <?php
		    while($registro = $ejecutar_consulta->fetch_assoc())
			{
			?>
               <tr>
                  <td><?php echo utf8_encode($registro["usuIdentificacion"]); ?></td>
                  <td><?php echo utf8_encode($registro["usuNombre"]); ?></td>
                  <td><?php echo utf8_encode($registro["usuApellido"]); ?></td>                  
                  <td><?php echo utf8_encode($registro["usuCargo"]); ?></td>
                  <td><?php echo utf8_encode($registro["usuArea"]); ?></td>
                  <td><?php echo utf8_encode($registro["usuPassword"]); ?></td>                                    
               </tr>
            <?php	
			}
           ?>
       </tbody>    
    </table> 
</fieldset>   