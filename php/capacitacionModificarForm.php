<form action="" id="capacitacionConsultarForm" name="consultar_form" method="get">
    <fieldset>
       <legend><b>MODIFICAR CAPACITACIONES</b></legend> 
<?php  include("php/mensajes.php");?>         
<?php
$consulta = "SELECT * FROM capacitacion order by capFecha desc";
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
               <th>Capacitacion</th>
               <th>Instructor</th>
               <th>Tema</th>             
               <th>Area</th>               
               <th>Fecha</th>
               <th>Hora</th>               
               <th>Estado</th>
               <th>Editar</th>
               <th>Eliminar</th>
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
                  <td align="center"><a href="capacitacionMenu.php?op=cambios&id=<?php echo $registro['idCapacitacion']?>"><img src="Imagenes/editar.jpg" width="29" height="24" title="Editar capacitacion" /></a></td>
         <td align="center"><a href="php/capacitacionEliminar.php?capTema=<?php echo $registro['capTema']?>"><img src="Imagenes/eliminar.jpg" width="29" height="24" title="Eliminar capacitacion" /></a></td>                                    
               </tr>
            <?php	
			}
           ?>
       </tbody>    
    </table> 
<?php	
}
?>
    </fieldset>
</form> 

















