<form action="" id="eventoConsultarForm" name="consultar_form" method="get">
    <fieldset>  
        <legend> CONSULTAR EVENTOS</legend>      
        <label for="consulta-lista">Tipo de Consulta: </label>
        <select name="consulta_slc" id="consulta-lista" required />
           <option value=""<?php if($_GET["consulta_slc"]==""){ echo " selected"; } ?>>- - -</option>            
           <option value="todos"<?php if($_GET["consulta_slc"]=="todos"){ echo " selected"; } ?>>Todos</option>
           <option value="vinculo"<?php if($_GET["consulta_slc"]=="vinculo"){ echo " selected"; } ?>>Vinculo del trabajdor</option>
           <option value="tipo"<?php if($_GET["consulta_slc"]=="tipo"){ echo " selected"; } ?>>Tipo de evento</option>
           <option value="fecha"<?php if($_GET["consulta_slc"]=="fecha"){ echo " selected"; } ?>>Fecha de evento</option>
           <option value="trabajador"<?php if($_GET["consulta_slc"]=="trabajador"){ echo " selected"; } ?>>trabajador</option>                      
       </select> 
       <?php
	       switch($_GET["consulta_slc"])
		   {
			  case "todos":
			     include("php/eventoConsulta-todos.php");
				 break;
			  case "vinculo":
			     include("php/eventoConsulta-vinculo.php");
				 break;
			 case "tipo":
			     include("php/eventoConsulta-tipo.php");
				 break;
			 case "fecha":
			     include("php/eventoConsulta-fecha.php");
				 break;
			 case "trabajador":
			     include("php/eventoConsulta-trabajador.php");
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