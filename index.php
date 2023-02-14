<?php 	
 session_start();
	
  if(!empty($_POST))
  {		
	  $usuario = $_POST['usuario'];
	  $password = $_POST['password'];
	  $error= '';
	
	  require "conexion.php";
	  $objConexion=conectarse();		
	  $sql="select * from usuario where usuIdentificacion='$usuario' AND usuPassword = '$password'";
	
	  $resultado = $objConexion->query($sql);
	  $existe=$resultado->num_rows;	
		
	  if ($existe > 0)
	  {		
		 $usuario=$resultado->fetch_assoc();		
		 $_SESSION['id_usuario']=$usuario['idUsuario'];
		 $_SESSION['nombre'] = $usuario['usuNombre'];		
		 $area =  $usuario['usuArea'];		
					
	     if ($area=='Gestion Humana')
	      {					
		    header('Location:menuAdminEjecutar.php');
	      }
	     else
	      {
		    header('Location:menuOtrosEjecutar.php');
	      }
	
	   }
	     else
	      {			
		    $error="El Usuario o Contrase&ntilde;a son incorrectos";
	      }		
  }
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sistema Salud Ocupacional</title>
<link rel="stylesheet" href="css/index.css" />
</head>

<body>
    <div id="apDiv3">
      <h2>Inicio de sesión </h2>
      <h3>Ingrese con su documento y contraseña </h3>
    </div>    
    <div id="apDiv1">
      <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
    <div>
       <label for="usuario">Usuario:</label>
       <input id="usuario" name="usuario" type="text" title="Ingrese su usuario" required />
    </div>
    <br/>
    <div>
       <label for="password">Password:</label><input id="password" name="password" type="password" title="Ingrese su contraseña" required />       
    </div>
    <br/>
    <div>
       <input name="login" type="submit" value="Ingresar">
    </div>
     </form>
    <br/>
    <div style="font-size:16px; color: #F00;"><?php echo isset($error)? utf8_decode ($error): '';?></div>
    </div>
    <p>&nbsp;</p>
    
    <div id="apDiv2"><img src="imagenes/index.png" width="263" height="171" alt="usuario">
    </div>   
</body>
</html>