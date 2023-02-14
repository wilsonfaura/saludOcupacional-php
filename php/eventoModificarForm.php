<form action="" id="eventoConsultarForm" name="consultar_form" method="get">
    <fieldset>
       <legend>MODIFICAR EVENTOS</legend> 
<?php  include("php/mensajes.php");?>         
<?php
$consulta = "SELECT * FROM evento JOIN trabajador WHERE evIdTrabajador=identificacion order by evFecha desc";
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
               <th>Apellido</th>               
               <th>Vinculo</th>
               <th>Tipo</th>               
               <th>Fecha</th>
               <th>Hora</th>
               <th>Lugar</th>
               <th>Actividad</th>
               <th>Descricion</th>
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
                  <td><?php echo utf8_encode($registro["idEvento"]); ?></td>
                  <td><?php echo utf8_encode($registro["evIdTrabajador"]); ?></td>
                  <td><?php echo utf8_encode($registro["traNombre"]); ?></td>                 
                  <td><?php echo utf8_encode($registro["traApellido"]); ?></td>
                  <td><?php echo utf8_encode($registro["evVinculo"]); ?></td> 
                  <td><?php echo utf8_encode($registro["evTipo"]); ?></td>
                  <td><?php echo utf8_encode($registro["evFecha"]); ?></td>
                  <td><?php echo utf8_encode($registro["evHora"]); ?></td>
                  <td><?php echo utf8_encode($registro["evLugar"]); ?></td>
                  <td><?php echo utf8_encode($registro["evActividad"]); ?></td>
                  <td><?php echo utf8_encode($registro["evDescripcion"]); ?></td>
                  <td align="center"><a href="eventoMenu.php?op=cambios&id=<?php echo $registro['idEvento']?>"><img src="Imagenes/editar.jpg" width="29" height="24" title="Editar actividad" /></a></td>
         <td align="center"><a href="php/eventoEliminar.php?idEvento=<?php echo $registro['idEvento']?>"><img src="Imagenes/eliminar.jpg" width="29" height="24" title="Eliminar actividad" /></a></td>                                    
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

















