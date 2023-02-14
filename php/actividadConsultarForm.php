<form action="" id="actividadConsultarForm" name="consultar_form" method="get">
    <fieldset>  
        <legend><b>CONSULTAR ACTIVIDADES</b></legend>      
        <label for="consulta-lista">Tipo de Consulta: </label>
        <select name="consulta_slc" id="consulta-lista" required />
           <option value=""<?php if($_GET["consulta_slc"]==""){ echo " selected"; } ?>>- - -</option>            
           <option value="todas"<?php if($_GET["consulta_slc"]=="todas"){ echo " selected"; } ?>>Todas</option>           
           <option value="area"<?php if($_GET["consulta_slc"]=="area"){ echo " selected"; } ?>>Area actividad</option>
           <option value="estado"<?php if($_GET["consulta_slc"]=="estado"){ echo " selected"; } ?>>Estado actividad</option>
           <option value="fecha"<?php if($_GET["consulta_slc"]=="fecha"){ echo " selected"; } ?>>Fecha actividad</option>                    
       </select> 
       <?php
	       switch($_GET["consulta_slc"])
		   {
			  case "todas":
			     include("php/actividadConsulta-todos.php");
				 break;
			  case "area":
			     include("php/actividadConsulta-area.php");
				 break;
			 case "estado":
			     include("php/actividadConsulta-estado.php");
				 break;
			 case "fecha":
			     include("php/actividadConsulta-fecha.php");
				 break;			  
		   }       
	   ?>     
     </fieldset>
</form>     
<script>
    window.onload = function()
	{
		var lista = document.getElementById("consulta-lista");
		lista.onchange = function()
		{
			window.location="?op=consultas&consulta_slc="+lista.value;
		};
	}
</script>