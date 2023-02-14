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
               <th>trabajador</th>
               <th>Nombre Trabajador</th>
               <th>Placas</th>
               <th>Tipo</th>
               <th>Marca</th>
               <th>Modelo</th>
               <th>Targeta de propiedad</th>
               <th>Kilometraje</th>
               <th>Ven Licencia</th>
               <th>Ven Soat</th>
               <th>Ven tecno</th>               
           </tr>       
       </thead>
       <tbody>
           <?php
		    while($registro = $ejecutar_consulta->fetch_assoc())
			{
			?>
               <tr>
                  <td><?php echo utf8_encode($registro["vehIdTra"]); ?></td>
                  <td><?php echo utf8_encode($registro["traNombre"]); ?>&nbsp;<?php echo utf8_encode($registro["traApellido"]); ?></td>
                  <td><?php echo utf8_encode($registro["vehPlaca"]); ?></td>
                  <td><?php echo utf8_encode($registro["vehTipo"]); ?></td>
                  <td><?php echo utf8_encode($registro["vehMarca"]); ?></td>
                  <td><?php echo utf8_encode($registro["vehModelo"]); ?></td>
                  <td><?php echo utf8_encode($registro["vehTarPro"]); ?></td>               
                  <td><?php echo utf8_encode($registro["vehKm"]); ?></td>
                  <td><?php echo utf8_encode($registro["vehLicencia"]); ?></td>
                  <td><?php echo utf8_encode($registro["vehSoat"]); ?></td>
                  <td><?php echo utf8_encode($registro["vehTecno"]); ?></td>                                 
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