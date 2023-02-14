<?php
//include("conexion.php");
include("funciones.php");
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
		    while($registro = $ejecutar_consulta->fetch_assoc())
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
<?php	
}
//$conexio->close();
?>