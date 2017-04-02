<?php require 'inc/cabecera.inc'; ?>
<div class="container-fluid">
				    <div class="row">
				    	 <div class="col-md-12 text-center">
<?php 
    $ok=false;
    


	if($_POST){		
					require_once 'lib/conexion.php';
					require 'lib/Database.php';
				
					
			 		extract($_POST, EXTR_OVERWRITE);


            		
  					//$validar_email=$conex->validar_datos('contra','usuario',$contrasena);
  					if($correo && $contrasena){
	  						$conex= new Database(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	  					    $validar_email=$conex->validar_datos('correo','usuario',$correo);
	  					    $exp_regular='/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
                   		if( preg_match($exp_regular,$correo )){
                   			    
  							if($validar_email!=0){
  								//echo "depurando";

	  						    $conex->preparar("SELECT nombre, apellido , correo, contra, imagen FROM usuario WHERE correo='$correo'");
	  						    $conex->ejecutar();
	  						    $conex->prep()->bind_result($bdnombre,$bdapellido,$bdcorreo,$bdcontra,$bdruta);
                                $conex->resultado();
                                	if( $correo== $bdcorreo){
                                			if($contrasena == $bdcontra){
                                					$ok=true;
                                			}
                                			else{
                                				trigger_error("contraseña no coincide con el email ingresado, por favor intente nuevamente",E_USER_ERROR);
                                			}
                                	}
         

  							}
  							else{
  								trigger_error("Email no registrado, por favor registrate",E_USER_ERROR);
  							}

                   		}
                   		else{
                   			trigger_error("Email con sintaxis erronea",E_USER_ERROR);
                   		}

                   	}


                         										

	}
 ?>	
 				</div>
 		</div>
 </div>	
				<div class="container-fluid">
				    <div class="row">
				    	<?php if ($ok) :  ?>
				    	 <div class="col-sm-4 caja text-center col-sm-offset-3">
				    	 	<h2> Hola <?php  echo ucfirst ($bdnombre)." ".ucfirst ($bdapellido) ;  ?> Bienvenido a la Administracion </h2>
				    	 	 <img class="img-responsive img-thumbnail" src='<?php echo $bdruta;?>'>
				    	 </div>

				    	<?php endif; 
				    	?>
				    </div>



				    <div class="row">
						<div class="col-md-6 col-md-offset-3">
							
						</div>
					</div>
				</div>
<?php require 'inc/footer.inc'; ?>

		
