<?php 
	include "conexion.php";
	$objConexion=conectarse();
	session_start();
	
	if (!isset($_SESSION['id_usuario']))
	{		
	  echo "no existe un session creada";
		header("location:index.php");
	}
	$usuario= $_SESSION['id_usuario'];	
	$sql="select * from usuario where idUsuario='$usuario'";
	$resultado = $objConexion->query($sql);
	$usuario=$resultado->fetch_assoc();
	$conexion->close();		
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sistema Salud Ocupacional</title>
</head>

<body>
  <h2><?php echo "Bienvenid@: " . $usuario['usuNombre'];?> &nbsp;&nbsp; <?php echo "Dependencia:   " . $usuario['usuArea'] . "<br/><br/>";
      ?>
  </h2>
      <?php include ('menuAdmin.php');
      ?>  
</body>
</html>