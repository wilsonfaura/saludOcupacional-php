<form action="" id="trabajadorConsultarForm" name="consultar_form" method="get">
    <fieldset>  
        <legend> CONSULTAR USUARIOS</legend>      
        <label for="consulta-lista">Tipo de Consulta: </label>
        <select name="consulta_slc" id="consulta-lista" required />
           <option value=""<?php if($_GET["consulta_slc"]==""){ echo " selected"; } ?>>- - -</option>            
           <option value="todos"<?php if($_GET["consulta_slc"]=="todos"){ echo " selected"; } ?>>Todos</option>
           <option value="identificacion"<?php if($_GET["consulta_slc"]=="identificacion"){ echo " selected"; } ?>>Identificacion</option>
           <option value="inicial"<?php if($_GET["consulta_slc"]=="inicial"){ echo " selected"; } ?>>Inicial</option>                            
       </select> 
       <?php
	       switch($_GET["consulta_slc"])
		   {
			  case "todos":
			     include("php/usuariosConsulta-todos.php");
				 break;
			  case "identificacion":
			     include("php/usuariosConsulta-identificacion.php");
				 break;			 
			 case "inicial":
			     include("php/usuariosConsulta-inicial.php");
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