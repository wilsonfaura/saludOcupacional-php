<?php 

if(isset($_GET["mensaje"]))//isset si la variable existe
{
	$mensaje = $_GET["mensaje"];
	echo "<br /><span class='mensaje'>$mensaje</span><br />";
	
	}


?>