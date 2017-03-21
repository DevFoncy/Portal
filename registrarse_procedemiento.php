<?php require 'inc/cabecera.inc';?>			

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

						 		 <?php

						 		 	$conexion = mysqli_connect("localhost","root","","portal");
						 		 	if( !$conexion){
						 		 		echo "no se pudo conetar a mysql <br>";
						 		 		echo mysqli_connect_errno(); //numero de error 
						 		 		echo mysqli_connect_error();  
						 		 		exit;
						 		 	}

						 		 	$resultado = mysqli_query($conexion,"SELECT * from usuario");

						 		 	// PHP procedimental

						 		   while($fila = mysqli_fetch_assoc($resultado)){//mostrar los resultados de cada fila
						 		 			$nombre_php= $fila ['nombre'];
						 		 			$usuario_php=$fila ['usuario'];
						 		 			$apellido_php= $fila['apellido'];
						 		 			$cargo_php= $fila['cargo'];	
						 		 			$codigo_php= $fila['codigo'];
						 		 			$fecha_inicio_php= $fila['fecha_inicio'];
						 		 			$contra_php= $fila['contra'];
						 		 	echo "$nombre_php $apellido_php <br>";
						 		 	
									}
									mysqli_free_result($conexion);
						 		 	mysqli_close();
						 		 ?>

						 		 	<form action="" enctype="multipart/form-data" method="POST" role="form">
						 		     <legend>Registrate</legend>
						 		 	
						 		    	<div class="form-group">
						 		 			<input name =nombre type="text" class="form-control" id="" placeholder="Nombre">
						 		 		</div>

						 		 		<div class="form-group">
						 		 			<input name = apellido type="text" class="form-control" id="" placeholder="Apellidos" >
						 		 		</div>

						 		 		<div class="form-group">
						 		 			<input name = codigo type="number" class="form-control" id="" placeholder="Código">
						 		 		</div>
						 		 		
						 		 		<div class="form-group">
						 		 			<input name = cargo type="text" class="form-control" id="" placeholder="Cargo">
						 		 		</div>
						 		 		
						 		 		<div class="form-group">
						 		 			<input name = fecha_ingreso type="date" class="form-control" id="" placeholder="Fecha de Ingreso">
						 		 		</div>

										<div class="form-group">
						 		 			<input name = user type="text" class="form-control" id="" placeholder="Usuario">
						 		 		</div>
						 		 		
										<div class="form-group">
										<input  contra type="password" class="form-control" id="" placeholder="Contraseña">
						 		 		</div>

						 		 		
						 		 		<div class="form-group">
						 		 			<label for=""> Elija su foto aqui</label>
						 		 			<input  name ="foto" type="file" class="form-control" id="">
						 		 		</div>


						 		 		<button type="submit" class="btn btn-primary">Registrar</button>
						 		 		<a class="pull-right" href="index.php">Clic aqui si ya tienes una cuenta</a>
						 		 	</form>
						    			
						  		</div>
						</div>
						</div>
					</div>
<?php require 'inc/footer.inc'; ?>

		