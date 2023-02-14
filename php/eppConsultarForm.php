<form action="" id="EPPConsultarForm" name="consultar_form" method="get">
    <fieldset>  
        <legend> CONSULTAR ELEMENTOS DE PROTECCION PERSONAL</legend>      
        <label for="consulta-lista">Tipo de Consulta: </label>
        <select name="consulta_slc" id="consulta-lista" required />
           <option value=""<?php if($_GET["consulta_slc"]==""){ echo " selected"; } ?>>- - -</option>            
           <option value="todos"<?php if($_GET["consulta_slc"]=="todos"){ echo " selected"; } ?>>Todos</option>           
           <option value="referencia"<?php if($_GET["consulta_slc"]=="referencia"){ echo " selected"; } ?>>Referencia</option>
           <option value="nombre"<?php if($_GET["consulta_slc"]=="nombre"){ echo " selected"; } ?>>Nombre</option>
           <option value="proveedor"<?php if($_GET["consulta_slc"]=="proveedor"){ echo " selected"; } ?>>Proveedor</option>                    
       </select> 
       <?php
	       switch($_GET["consulta_slc"])
		   {
			  case "todos":
			     include("php/eppConsulta-todos.php");
				 break;
			  case "referencia":
			     include("php/eppConsulta-referencia.php");
				 break;
			 case "nombre":
			     include("php/eppConsulta-nombre.php");
				 break;
			 case "proveedor":
			     include("php/eppConsulta-proveedor.php");
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