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
<?php	
}
//$conexio->close();
?>