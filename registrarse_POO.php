<?php require 'inc/cabecera.inc';?>		


	<div class="container-fluid">
	    <div class="row">
			<div class="col-sm-6 col-md-offset-3">
  
						 		 <?php
						 		 	require_once 'lib/conexion.php';
						 		    require 'lib/Database.php';
						 		    $ok=false;
						 		
						 		 	if($_POST){
						 		 		//Convirtiendo el array en variables
						 		 		extract($_POST, EXTR_OVERWRITE);
						 		 		//para crear la carpeta fotos si no existe
                                         if(!file_exists("fotos")){
                                         	mkdir("fotos",0777);//0777 es un tipo de permiso
                                         }
                                         //convertir a minuscula
                                         $nombre= strtolower($nombre); 
                                         // if(validar_datos($nombre)){
                                         // 	echo $nombre ;
                                         // 	var_dump($nombre);
                                         // 	echo $rutaSubida;
                                         // 	echo "<img class='img-responsive' src='$rutaSubida'>";
                                         // }
// 
                           			
                         			//si nombre no tendria un valor botaria false
                         			if($nombre && $apellido &&	$cargo && $email  && $user && $password && $confirm_contra){
                         				$conex= new Database(DB_HOST,DB_USER,DB_PASS,DB_NAME);
                        					
                         					$exp_regular='/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
                         					if( preg_match($exp_regular,$email )){
                         								if(strlen($password)>6){
                         									if($password == $confirm_contra){
                         										//te devuelve la cantidad de filas que cumplan con esto
                         										$validar_email=$conex->validar_datos('correo','usuario',$email);
                         											if($validar_email == 0){
                         												if( validar_datos($nombre)){       				   			
                  																if( $conex->preparar("INSERT INTO usuario values ('', '$user','$password','$nombre','$apellido','$email','$codigo','$cargo','$fecha_ingreso','$rutaSubida')"))
                 															    {
                         															$conex->ejecutar();
                         															trigger_error("se ha registrado correctamente", E_USER_NOTICE);
                         															$ok=true;
                         														
                         														} 
                         														else {
                         															echo "no se pudo preparar";
                         														}
                                         								 				
                                         								}
                                         								else{
                                         										echo $error;
                                         									}
                         											}
                         											else {
                         												 echo "ese email ya existe prueba con otro";
                         											}
                         									}
                         									else{
                         										echo "las contraseñas no son iguales";
                         									}

                         								}
                         								else{
                         									echo "la contraseña tiene que ser mayor a 6 caracteres";
                         								}
                         					   }

                         					else{
                         						echo "email no valido, por favor ingrese de nuevo";
                         					}
                         			 }


						 		 	}

						 	/*	 require 'lib/conexion.php';
						 		 require 'lib/Database.php';
						 		 $conex= new Database(DB_HOST,DB_USER,DB_PASS,DB_NAME);

						 		 $conex->preparar("SELECT nombre, apellido, cargo FROM usuario");
						 		 $conex->ejecutar();
						 		 $conex->prep()->bind_result($nombre_a,$apellido_b,$cargo_c);
						 		 //bind_result recibe variables en el mismo orden de la consulta hecha con preparar

						 		  echo "<table class='table table-cell'
						 		 		<thead>
						 		 			<tr>
						 		 					<td> Nombre </td>
						 		 					<td> apellido</td>
						 		 					<td> Cargo </td>
						 		 			</tr>
						 		 		 <tbody>
						 		 	  ";
						 		 while($conex->resultado()){
						 		 	echo "<tr>
						 		 			<td>$nombre_a</td>
						 		 			<td>$apellido_b</td>
						 		 			<td>$cargo_c</td>
						 		 		  </tr>";
						 		 			
						 		 }


						 		  echo "</tbody>
						 		      </table>";

						 		  echo  $conex->validar_datos('usuario','usuario','Foncy');*/


						 		   // esto para realizar una consulta en especifico  sobre una columna de una tabla

						 		 //var_dump($array);
						 		 /*echo "<table class='table table-cell'
						 		 		<thead>
						 		 			<tr>
						 		 					<td> ID </td>
						 		 					<td> USUARIO </td>
						 		 					<td> Contraseña </td>
						 		 					<td> Nombre </td>
						 		 					<td> apellido</td>
						 		 					<td> Codigo </td>
						 		 					<td> Cargo </td>
						 		 					<td> Fecha_Inicio </td>
						 		 			</tr>
						 		 		 <tbody>
						 		 	  ";

						 		  foreach ($array as $value) {
						 		  				echo "<tr>";
						 		  	foreach ($value as $value2) {
						 		  				echo "<td> $value2 </td>";
						 		  	}
						 		  				echo "</tr>";
						 		  	
						  	# c
						 		  }
						 		  	echo "</tbody";
						 		  	echo "</table>";
						 			
*/
						 		 ?>
			     	 
			</div>
		</div>
	</div>

		

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
  


					<?php if($ok) :   ?>
							<h2> Saludos <?php echo $nombre;  ?></h2>
							<img class='img-responsive'src="<?php echo $rutaSubida; ?>" alt="">
							<p>	
								Te has registrado correctamente, por favor dale clic al boton de abajo para que te logees 
							</p>

					<?php   else : ?>

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
						 		 			<input name = email type="text" class="form-control" id="" placeholder="correo">
						 		 		</div>

										<div class="form-group">
						 		 			<input name = user type="text" class="form-control" id="" placeholder="Usuario">
						 		 		</div>
						 		 		
										<div class="form-group">
										<input  name=password type="password" class="form-control" id="" placeholder="Contraseña">
						 		 		</div>

						 		 		<div class="form-group">
										<input  name=confirm_contra type="password" class="form-control" id="" placeholder="Confirmar Contraseña">
						 		 		</div>

						 		 		<div class="form-group">
						 		 			<label for=""> Elija su foto aqui</label>
						 		 			<input  name ="foto" type="file" class="form-control" id="">
						 		 		</div>

						 		 		<button type="submit" class="btn btn-primary">Registrar</button>
						 		 		<a class="pull-right" href="index.php">Clic aqui si ya tienes una cuenta</a>
						 		 	</form> 
			   			<?php endif; ?> 
					
					</div>
				</div>
			</div>
		</div>
	</div>
<?php require 'inc/footer.inc'; ?>

		