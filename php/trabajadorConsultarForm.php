<form action="" id="trabajadorConsultarForm" name="consultar_form" method="get">
    <fieldset>  
        <legend> CONSULTAR TRABAJADORES</legend>      
        <label for="consulta-lista">Tipo de Consulta: </label>
        <select name="consulta_slc" id="consulta-lista" required>
           <option value=""<?php if($_GET["consulta_slc"]==""){ echo " selected"; } ?>>- - -</option>            
           <option value="todos"<?php if($_GET["consulta_slc"]=="todos"){ echo " selected"; } ?>>Todos</option>
           <option value="identificacion"<?php if($_GET["consulta_slc"]=="identificacion"){ echo " selected"; } ?>>Identificacion</option>
           <option value="inicial"<?php if($_GET["consulta_slc"]=="inicial"){ echo " selected"; } ?>>Inicial</option>
           <option value="area"<?php if($_GET["consulta_slc"]=="area"){ echo " selected"; } ?>>Area</option>
           <option value="cargo"<?php if($_GET["consulta_slc"]=="cargo"){ echo " selected"; } ?>>Cargo</option>
           <option value="sexo"<?php if($_GET["consulta_slc"]=="sexo"){ echo " selected"; } ?>>Sexo</option>
           <option value="rh"<?php if($_GET["consulta_slc"]=="rh"){ echo " selected"; } ?>>Rh</option>                    
       </select> 
       <?php
	       switch($_GET["consulta_slc"])
		   {
			  case "todos":
			     include("php/trabajadorConsulta-todos.php");
				 break;
			  case "identificacion":
			     include("php/trabajadorConsulta-identificacion.php");
				 break;
			 case "area":
			     include("php/trabajadorConsulta-area.php");
				 break;
			 case "cargo":
			     include("php/trabajadorConsulta-cargo.php");
				 break;
			 case "sexo":
			     include("php/trabajadorConsulta-sexo.php");
				 break;
			 case "rh":
			     include("php/trabajadorConsulta-rh.php");
				 break;
			 case "inicial":
			     include("php/trabajadorConsulta-inicial.php");
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