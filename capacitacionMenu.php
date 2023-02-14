<?php 
	require "conexion.php";
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
	$dependencia= $usuario['usuArea'];	
?>

<?php 
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
$op = $_GET["op"];
switch ($op)
{
	case "agregar";
		$contenido="php/capacitacionAgregarForm.php";
		$titulo = "Agregar Capacitacion";
		break;
	case "modificar";
		$contenido="php/capacitacionModificarForm.php";
		$titulo = "Modificar Capacitacion";
		break;
	case "consultas";
		$contenido="php/capacitacionConsultarForm.php";
		$titulo = "Consultar Capacitacion";
		break;
	case "cambios";
		$contenido="php/capacitacionEditarForm.php";
		$titulo = "Editar Capacitacion";
		break;	
	default:
		$contenido = "capacitacionHome.php";
		$titulo = "Gestion Capacitaciones";
		break;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title><?php echo $titulo; ?></title>
    <link rel="stylesheet" href="css/capacitacion.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>
    !window.jQuery && document.write("<script src='js/jquery.min.js'><\/script>");
    </script>
    <script src="js/trabajador.js"></script>
</head>

<body> 
    <br/>
    <h3>&nbsp;&nbsp;<?php echo "Usuario: " . $usuario['usuIdentificacion'];?> &nbsp;&nbsp; <?php echo "Dependencia:   " . $usuario['usuArea'] . "<br/><br/>";?> 
    </h3> 
    <section id="contenido"> 
      <nav>
        <ul>
	       <li><a class="cambio" href="capacitacionMenu.php">HOME</a></li>
	       <li><a class="cambio" href="?op=agregar">AGREGAR CAPACITACION</a></li>
           <li><a class="cambio" href="?op=modificar">MODIFICAR CAPACITACION</a></li>           
           <li><a class="cambio" href="?op=consultas">CONSULTAR CAPACITACION</a></li>
           <li><a class="cambio" href="?op=cambios"></a></li>
       </ul>     
      </nav>    
       <section id="principal">
       <?php include($contenido); ?>
       </section>
     </section>
    
     <span style="position: absolute; left: 1175px; top: 6px; width: 82px; height: 72px; z-index: 16;">
       <figure><a href="<?php
               if ($dependencia=='Gestion Humana')
			   {
	              echo "menuAdminEjecutar.php";
               }
			   else
			   {
	              echo "menuOtrosEjecutar.php";
               }
                        ?>"><img src="imagenes/menu principal.jpg" alt="usuarios" width="50" height="50"></a>
       <figcaption>Menu Principal</figcaption>
       </figure>
     </span>
     <span style="position: absolute; left: 1260px; top: 6px; width: 81px; height: 68px; z-index: 16;">
       <figure><a href="cerrar_session.php"><img src="imagenes/cerrar sesion.jpg" alt="usuarios" width="50" height="50"></a>
       <figcaption>Cerrar session</figcaption>
     </figure>
</span>
</body>
</html>