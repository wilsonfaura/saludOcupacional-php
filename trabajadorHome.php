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
   <legend>TRABAJADORES</legend>  
    <div>
     <?php 	 	  
	 date_default_timezone_set("America/Bogota");
	 $fecha = date("Y-m-d (H:i:s)");	 
	 $hoy = date("Y-m-d");
	 $dt_15DiasDespues = date('Y-m-d', strtotime('+15 day')) ;
	
	 $consulta = "SELECT * FROM trabajador"; 
	 $ejecutar_consulta = $conexion->query($consulta);
	 $num_regs = $ejecutar_consulta->num_rows;
	 
	 $consulta = "SELECT * FROM trabajador WHERE traSexo='M'"; 
	 $ejecutar_co = $conexion->query($consulta);
	 $num_registro = $ejecutar_co->num_rows;
	 
	 $consulta = "SELECT * FROM trabajador WHERE traSexo='F'"; 
	 $ejecutar_con = $conexion->query($consulta);
	 $num_registros = $ejecutar_con->num_rows;
	 
	 $consulta = "SELECT * FROM trabajador WHERE traArea = '$dependencia'"; 
	 $ejecutar_cons = $conexion->query($consulta);
	 $num_regis = $ejecutar_cons->num_rows;	  	 
	 ?> 
         
     <p align="right" style="color:#009;"><?php echo "Fecha: " .$fecha;?></p> 
     <?php echo "Bienvenid@: " . $usuario['usuNombre'];?>
     <br />       
     <br />      
     <p>Este es el menu de administración de trabajadores, en esta sección usted podra realizar el manejo de la información de los trabajadores a su cargo, por medio de la insersión, vizualización, modificación y eliminación de los mismos, ademas puede generar reportes en Pdf de la informacion requerida.</p>
     <br />
     <p><b>Informacion importante:</b></p>
    </div>
    <?php echo "<br>" ."Hay    ".'<b>'.$num_regs.'</b>'. "   trabajador(es) registrado(s) en el sistema Salud Ocupacional, ".'<b>'.$num_registros.'</b>'.' mujer(es) y '.'<b>'.$num_registro.'</b>'.' hombre(s)' ;?>&nbsp;&nbsp;
    <a href="trabajadorMenu.php?op=consultas" id="mirar"><b>IR A CONSULTAS</b></a>
    
    <?php echo "<br>" .'En el area de '.'<b>'.$dependencia.'</b>'. ' hay '.'<b>'.$num_regis.'</b>'. " trabajador(es) registrado(s)";?>&nbsp;&nbsp;
    <a href=" " id="ver"><b>VER</b></a>	
	<br /><br />
    <table id="resultados">
       <thead>
           <tr>
               <th>Cedula</th>
               <th>Nombres</th>
               <th>Apellidos</th>
               <th>Area</th>
               <th>Cargo</th>
               <th>Fecha de ingreso</th>
               <th>Sexo</th>
               <th>Tipo de sangre</th>
               <th>Direccion</th>
               <th>Telefono</th>
               <th>Email</th>
               <th>Nombres del contacto</th>
               <th>Apellidos del contacto</th>
               <th>Telefono del contacto</th>
               <th>Imagen</th>
           </tr>       
       </thead>
       <tbody>
           <?php
		    while($registro = $ejecutar_cons->fetch_assoc())
			{
			?>
               <tr>
                  <td><?php echo utf8_encode($registro["identificacion"]); ?></td>
                  <td><?php echo utf8_encode($registro["traNombre"]); ?></td>
                  <td><?php echo utf8_encode($registro["traApellido"]); ?></td>
                  <td><?php echo utf8_encode($registro["traArea"]); ?></td>
                  <td><?php echo utf8_encode($registro["traCargo"]); ?></td>
                  <td><?php echo utf8_encode($registro["traIngreso"]); ?></td>
                  <td><?php echo ($registro["traSexo"]=="M")?"Masculino":"Femenino"; ?></td>
                  <td><?php echo utf8_encode($registro["traRh"]); ?></td>
                  <td><?php echo utf8_encode($registro["traDir"]); ?></td>
                  <td><?php echo utf8_encode($registro["traTel"]); ?></td>
                  <td><?php echo utf8_encode($registro["traEmail"]); ?></td>
                  <td><?php echo utf8_encode($registro["traContacNombre"]); ?></td>
                  <td><?php echo utf8_encode($registro["traContacApellido"]); ?></td>
                  <td><?php echo utf8_encode($registro["traContacTelefono"]); ?></td>
                  <td><img src="imagenes/fotos/<?php echo utf8_encode($registro["traImagen"]); ?>" /></td>                  
               </tr>
            <?php	
			}
           ?>
       </tbody>    
    </table> 
</fieldset>     