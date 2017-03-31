<?php require 'inc/cabecera.inc'; ?>
<?php 
	if($_POST){
			 		extract($_POST, EXTR_OVERWRITE);
	                $nombre= strtolower($nombre); 
            		
  					//$validar_email=$conex->validar_datos('contra','usuario',$contrasena);
  					if($correo && $contrasena){
	  						$conex= new Database(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	  					    $validar_email=$conex->validar_datos('correo','usuario',$correo);
                   		if( preg_match($exp_regular,$correo )){
                   			

  							if($validar_email!=0){

	  						    $conex->preparar("SELECT nombre,correo, contra FROM usuario WHERE correo='$correo'");
	  						    $conex->ejecutar();
	  						    $conex->prep()->bind_result($bdnombre,$bdcontra,$bdcorreo);
    

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
				<div class="container-fluid">
				    <div class="row">
				    	 <div class="col-md-12 text-center">
				    	 	<h1>Portal Web</h1>
				    	 </div>
				    </div>

				    <div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="panel panel-default">
						 		 <div class="panel-body">

						 		 	<form action="admin/index_admin.php" method="POST" role="form">
						 		 		<legend>Logueate</legend>
						 		 	
						 		 		<div class="form-group">
						 		 			<input type="text" class="form-control" id="" placeholder="Su nombre de usuario es">
						 		 		</div>
										
										<div class="form-group">
						 		 			<input type="password" class="form-control" id="" placeholder="Su contraseña es" > 
						 		 		</div>
						 		 		<button type="submit" class="btn btn-primary">Ingresar</button>
						 		 		<a class="pull-right" href="registrarse_POO.php">Registrarse</a>
						 		 	</form>
						  		</div>
						</div>
						</div>
					</div>
<?php require 'inc/footer.inc'; ?>

		
