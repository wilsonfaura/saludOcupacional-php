<form action="" id="eppEntregasConsultarForm" name="consultar_form" method="get">
    <fieldset>  
        <legend>CONSULTAR ENTREGAS EPP</legend>      
        <label for="consulta-lista">Tipo de Consulta: </label>
        <select name="consulta_slc" id="consulta-lista" required />
           <option value=""<?php if($_GET["consulta_slc"]==""){ echo " selected"; } ?>>- - -</option>            
           <option value="todos"<?php if($_GET["consulta_slc"]=="todos"){ echo " selected"; } ?>>Todos</option>
           <option value="trabajador"<?php if($_GET["consulta_slc"]=="trabajador"){ echo " selected"; } ?>>trabajador</option> 
           <option value="area"<?php if($_GET["consulta_slc"]=="area"){ echo " selected"; } ?>>Area</option>
           <option value="epp"<?php if($_GET["consulta_slc"]=="epp"){ echo " selected"; } ?>>Epp</option>
           <option value="fecha"<?php if($_GET["consulta_slc"]=="fecha"){ echo " selected"; } ?>>Fecha</option>                      
       </select> 
       <?php
	       switch($_GET["consulta_slc"])
		   {
			  case "todos":
			     include("php/eppConsultaEntrega-todos.php");
				 break;
			  case "trabajador":
			     include("php/eppConsultaEntrega-trabajador.php");
				 break;
			 case "area":
			     include("php/eppConsultaEntrega-area.php");
				 break;
			 case "epp":
			     include("php/eppConsultaEntrega-epp.php");
				 break;
			 case "fecha":
			     include("php/eppConsultaEntrega-fecha.php");
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
			window.location="?op=consultasEntrega&consulta_slc="+lista.value;
		};
	}
</script>