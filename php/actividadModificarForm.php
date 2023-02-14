<form action="" id="actividadConsultarForm" name="consultar_form" method="get">
    <fieldset>
       <legend><b>MODIFICAR ACTIVIDADES</b></legend> 
<?php  include("php/mensajes.php");?>         
<?php
$consulta = "SELECT * FROM actividad order by actFechaIni desc";
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
               <th>Desripcion</th>             
               <th>Area</th>               
               <th>Fecha inicio</th>
               <th>Fecha fin</th>               
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
                  <td><?php echo utf8_encode($registro["idActividad"]); ?></td>
                  <td><?php echo utf8_encode($registro["actNombre"]); ?></td>
                  <td><?php echo utf8_encode($registro["actDescripcion"]); ?></td>                 
                  <td><?php echo utf8_encode($registro["actArea"]); ?></td>
                  <td><?php echo utf8_encode($registro["actFechaIni"]); ?></td> 
                  <td><?php echo utf8_encode($registro["actFechaFin"]); ?></td>
                  <td><?php echo utf8_encode($registro["actEstado"]); ?></td>
                  <td align="center"><a href="actividadMenu.php?op=cambios&id=<?php echo $registro['idActividad']?>"><img src="Imagenes/editar.jpg" width="29" height="24" title="Editar actividad" /></a></td>
         <td align="center"><a href="php/actividadEliminar.php?idActividad=<?php echo $registro['idActividad']?>"><img src="Imagenes/eliminar.jpg" width="29" height="24" title="Eliminar actividad" /></a></td>                                    
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

















