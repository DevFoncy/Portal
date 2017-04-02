<?php require 'inc/cabecera.inc'; ?>
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

						 		 	<form action="admin.php" method="POST" role="form">
						 		 		<legend>Logueate</legend>
						 		 	
						 		 		<div class="form-group">
						 		 			<input name="correo" type="text" class="form-control" id="" placeholder="Su email es">
						 		 		</div>
										
										<div class="form-group">
						 		 			<input name="contrasena" type="password" class="form-control" id="" placeholder="Su contraseña es" > 
						 		 		</div>
						 		 		<button type="submit" class="btn btn-primary">Ingresar</button>
						 		 		<a class="pull-right" href="registrarse_POO.php">Registrarse</a>
						 		 	</form>
						  		</div>
						</div>
						</div>
					</div>
<?php require 'inc/footer.inc'; ?>

		
