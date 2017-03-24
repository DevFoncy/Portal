<?php

	function validar_datos($nombre){
		global $dirsubida;
		global $rutaSubida;

		$dirsubida= "fotos/$nombre/";

                                         //para crear la carpeta foto/nombre
                                         if(!file_exists($dirsubida)){
                                         	mkdir($dirsubida,0777);
                                         }

						 		 		$foto = $_FILES['foto']; // array con toda la info

						 		 		$nombrefoto= $foto['name'];
						 		 		$nombreTmp = $foto['tmp_name'];
						 		 		$rutaSubida = "{$dirsubida}profile.jpg";
						 		 		//para obtener la extension de la imagen
						 		 		$extArchivo= preg_replace('/image\//','', $foto['type']);
						 		 		if($extArchivo == 'jpeg'|| $extArchivo == 'png'){
						 		 			//si la imagen es movido a la ruta de subida
						 		 			if(move_uploaded_file($nombreTmp, $rutaSubida)){
						 		 				return true;
						 		 				
						 		 			} 
						 		 			else{
						 		 				return false;
						 		 			}

						 		 		}
						 		 		else{
						 		 			trigger_error("no es un archivo de imagen valido",E_USER_WARNING);
						 		 		}

		}


?>
