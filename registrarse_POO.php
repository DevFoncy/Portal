<?php require 'inc/cabecera.inc';?>			

	<div class="container-fluid">
				    <div class="row">
				    	 <div class="col-md-12 text-center">
				    	 	<h1>Portal Web</h1>
				    	 </div>
				    </div>
				    <div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
						 		 <div class="panel-body">

						 		 <?php

						 		 require 'lib/conexion.php';
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

						 		  echo  $conex->validar_datos('usuario','usuario','Foncy');

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
						 

						 		 	<!-- <form action="" enctype="multipart/form-data" method="POST" role="form">
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
						 		 		<a class="pull-right" href="index.phep">Clic aqui si ya tienes una cuenta</a>
						 		 	</form> -->
						    			
						  		</div>
						</div>
						</div>
					</div>
<?php require 'inc/footer.inc'; ?>

		