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
<?php	
}
?>