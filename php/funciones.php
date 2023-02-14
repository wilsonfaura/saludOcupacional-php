<?php
function borrar_imagenes($ruta,$extension)
{
	switch($extension){
		case ".jpg":
		    if(file_exists($ruta.".png"))
			    unlink($ruta.".png");
			if(file_exists($ruta.".gif"))
			    unlink($ruta.".gif");
			break;
		case ".gif":
		    if(file_exists($ruta.".png"))
			    unlink($ruta.".png");
			if(file_exists($ruta.".jpg"))
			    unlink($ruta.".jpg");
			break;
		case ".png":
		    if(file_exists($ruta.".jpg"))
			    unlink($ruta.".jpg");
			if(file_exists($ruta.".gif"))
			    unlink($ruta.".gif");
			break;						
		}	
}

function subir_imagen($tipo,$imagen,$id)
{
	if(strstr($tipo,"image"))
	{
		if(strstr($tipo,"jpeg"))
		   $extension = ".jpg";
		else if(strstr($tipo,"gif")) 
		   $extension = ".gif";
		else if(strstr($tipo,"png")) 
		   $extension = ".png"; 
		
		$tam_img = getimagesize($imagen);
		$ancho_img = $tam_img[0];
		$alto_img = $tam_img[1];		
		$ancho_img_deseado = 420;
		
		//si la imagen es mayor en su ancho que 420px, reajusto su tamaño
		if($ancho_img>$ancho_img_deseado)
		{    
		    //por una regla de 3 obtengo el alto de la imagen de manera proporcional al ancho nuevo de 420
			$nuevo_ancho_img = $ancho_img_deseado;
			$nuevo_alto_imag = ($alto_img/$ancho_img)*$nuevo_ancho_img;	
			//creo una imagen de color real con las nuevas dimensiones		
			$img_reajustada = imagecreatetruecolor($nuevo_ancho_img,$nuevo_alto_imag);
			//creo una imagen basada en la original, dependiendo de su extension
			
			switch($extension)
			{
				case ".jpg":
				    $img_original = imagecreatefromjpeg($imagen);
					//reajusto la imagen nueva con respecto a la original 
					imagecopyresampled($img_reajustada, $img_original, 0, 0, 0, 0, $nuevo_ancho_img, $nuevo_alto_imag, $ancho_img, $alto_img);
					//guardo la imagen reescalada en el sevidor
					$nombre_img_ext = "../imagenes/fotos/".$id.$extension;
					$nombre_img = "../imagenes/fotos/".$id;					
					imagejpeg($img_reajustada,$nombre_img_ext,100);
					//ejecuto la funcion para borar posibles imagenes dobles para el perfil
					borrar_imagenes($nombre_img,".jpg");
					break;
					
				case ".gif":
				    $img_original = imagecreatefromgif($imagen);
					imagecopyresampled($img_reajustada, $img_original, 0, 0, 0, 0, $nuevo_ancho_img, $nuevo_alto_imag, $ancho_img, $alto_img);
					$nombre_img_ext = "../imagenes/fotos/".$id.$extension;
					$nombre_img = "../imagenes/fotos/".$id;					
					imagegif($img_reajustada,$nombre_img_ext,100);
					borrar_imagenes($nombre_img,".gif");
					break;	
					
				case ".png":
				    $img_original = imagecreatefrompng($imagen);
					imagecopyresampled($img_reajustada, $img_original, 0, 0, 0, 0, $nuevo_ancho_img, $nuevo_alto_imag, $ancho_img, $alto_img);
					$nombre_img_ext = "../imagenes/fotos/".$id.$extension;
					$nombre_img = "../imagenes/fotos/".$id;					
					imagepng($img_reajustada,$nombre_img_ext);
					borrar_imagenes($nombre_img,".png");
					break;
			}
		}
		else
		{   
		    //guardo la ruta que tendra en el sevidor la imagen 
			$destino="../imagenes/fotos/".$id.$extension;
			//se sube la foto
			move_uploaded_file($imagen,$destino) or die("no se pudo subir la imagen al servidor :(");
			
			//ejecuto la funcion para borrar posibles imagenes dobles para el perfil
			$nombre_img = "../imagenes/fotos/".$id;
			borrar_imagenes($nombre_img,$extension);			
		}
		//Asigno el nombre de la foto que se guardara en la BD como cadena de texto
		$imagen=$id.$extension;
		return $imagen;
		    
	}
	else
	{
		return false;
	}
}
?>