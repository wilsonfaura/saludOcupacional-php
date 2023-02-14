<?php
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;

if($num_regs==0)
{
	echo"<br /><br /><span class='mensajes'>No se encontraron registros con esta busqueda :(</span><br /><br />";
}
else
{
?>
    <br /><br />
    <table>
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
<?php	
}
?>