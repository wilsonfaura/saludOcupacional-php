<form action="" id="capacitacionConsultarForm" name="consultar_form" method="get">
    <fieldset>  
        <legend><b>CONSULTAR CAPACITACIONES</b></legend>      
        <label for="consulta-lista">Tipo de Consulta: </label>
        <select name="consulta_slc" id="consulta-lista" required />
           <option value=""<?php if($_GET["consulta_slc"]==""){ echo " selected"; } ?>>- - -</option>            
           <option value="todos"<?php if($_GET["consulta_slc"]=="todos"){ echo " selected"; } ?>>Todos</option>           
           <option value="area"<?php if($_GET["consulta_slc"]=="area"){ echo " selected"; } ?>>Area</option>
           <option value="tema"<?php if($_GET["consulta_slc"]=="tema"){ echo " selected"; } ?>>Tema</option>
           <option value="fecha"<?php if($_GET["consulta_slc"]=="fecha"){ echo " selected"; } ?>>Fecha</option>                    
       </select> 
       <?php
	       switch($_GET["consulta_slc"])
		   {
			  case "todos":
			     include("php/capacitacionConsulta-todos.php");
				 break;
			  case "area":
			     include("php/capacitacionConsulta-area.php");
				 break;
			 case "tema":
			     include("php/capacitacionConsulta-tema.php");
				 break;
			 case "fecha":
			     include("php/capacitacionConsulta-fecha.php");
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