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
<?php	
}
?>