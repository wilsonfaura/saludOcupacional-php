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
               <th>Id</th>
               <th>Referencia</th>
               <th>Nombre</th>
               <th>Talla</th>
               <th>Proveedor</th>
               <th>Codigo Proveedor</th>
               <th>Telefono Proveedor</th>
               <th>Email Proveedor</th>               
           </tr>       
       </thead>
       <tbody>
           <?php
		    while($registro = $ejecutar_consulta->fetch_assoc())
			{
			?>
               <tr>
                  <td><?php echo utf8_encode($registro["idEpp"]); ?></td>
                  <td><?php echo utf8_encode($registro["eppReferencia"]); ?></td>
                  <td><?php echo utf8_encode($registro["eppNombre"]); ?></td>
                  <td><?php echo utf8_encode($registro["eppTalla"]); ?></td>
                  <td><?php echo utf8_encode($registro["eppProveedor"]); ?></td>
                  <td><?php echo utf8_encode($registro["eppIdProveedor"]); ?></td>
                  <td><?php echo utf8_encode($registro["eppTelProveedor"]); ?></td>                  
                  <td><?php echo utf8_encode($registro["eppEmailProveedor"]); ?></td>                                    
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