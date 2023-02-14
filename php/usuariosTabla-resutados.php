<?php
//include("conexion.php");
//include("funciones.php");
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;

//echo $num_regs;
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
<?php	
}
//$conexion->close();
?>