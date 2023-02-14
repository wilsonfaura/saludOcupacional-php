<form action="" id="VehiculosConsultarForm" name="consultar_form" method="get">
    <fieldset>  
        <legend> CONSULTAR VEHICULOS</legend>      
        <label for="consulta-lista">Tipo de Consulta: </label>
        <select name="consulta_slc" id="consulta-lista" required />
           <option value=""<?php if($_GET["consulta_slc"]==""){ echo " selected"; } ?>>- - -</option>            
           <option value="todos"<?php if($_GET["consulta_slc"]=="todos"){ echo " selected"; } ?>>Todos</option>
           <option value="placas"<?php if($_GET["consulta_slc"]=="placas"){ echo " selected"; } ?>>Placas</option>
           <option value="tipo"<?php if($_GET["consulta_slc"]=="tipo"){ echo " selected"; } ?>>Tipo</option>
           <option value="trabajador"<?php if($_GET["consulta_slc"]=="trabajador"){ echo " selected"; } ?>>trabajador</option>  
           <option value="soat"<?php if($_GET["consulta_slc"]=="soat"){ echo " selected"; } ?>>Fecha Soat</option>
           <option value="tecno"<?php if($_GET["consulta_slc"]=="tecno"){ echo " selected"; } ?>>Fecha Tecno</option>                    
       </select> 
       <?php
	       switch($_GET["consulta_slc"])
		   {
			  case "todos":
			     include("php/vehiculosConsulta-todos.php");
				 break;
			  case "placas":
			     include("php/vehiculosConsulta-placas.php");
				 break;
			 case "tipo":
			     include("php/vehiculosConsulta-tipo.php");
				 break;
			 case "trabajador":
			     include("php/vehiculosConsulta-trabajador.php");
				 break;	
			case "soat":
			     include("php/vehiculosConsulta-soat.php");
				 break;
			 case "tecno":
			     include("php/vehiculosConsulta-tecno.php");
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