<?php include("bd.php") ?>


<?php include("includes/header.php") ?>

<div class="container p-4">
	
	<div class="row">
		
		<div class="col-md-4">

			<?php if (isset($_SESSION['mensaje'])) { ?>

				<div class="alert alert-<?= $_SESSION['tipo_mensaje'] ?> alert-dismissible fade show" role="alert">
 				 <?= $_SESSION['mensaje']?>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
   				 <span aria-hidden="true">&times;</span>
  					</button>
				</div>
			<?php session_unset(); } ?>
			
			<div class="card card-body">

				<form action="save.php" method="POST">
					
					<div class="form-group">

						<input type="text" name="nombres" class="form-control" placeholder="ingrese nombre" autofocus>

					</div>

					<div class="form-group">
						
							<input type="text" name="apellidos" class="form-control" placeholder="ingrese apellido">
					</div>

					<div class="form-group">
						
							<input type="email" name="correo" class="form-control" placeholder="ingrese correo">
					</div>

					<div class="form-group">
						
							<input type="password" name="clave" class="form-control" placeholder="ingrese clave">
					</div>

					<div class="form-group">

						<input type="text" name="telefono" class="form-control" placeholder="ingrese telefono">
						
					</div>

					<div class="form-group">

						<input type="text" name="direccion" class="form-control" placeholder="ingrese direccion">
						
					</div>

					<div class="form-group">

						<input type="text" name="ciudad" class="form-control" placeholder="ingrese ciudad">
						
					</div>

					<div>
						
						<select name='rol'><?php
    						 include("bd.php");
       						$sql = "SELECT * FROM roles";
      						$resultado=mysqli_query($conn, $sql);
      						while ($fila=mysqli_fetch_assoc($resultado)) {
          					echo "<option value='$fila[idroles]'> $fila[descripcion] </option>";
      }
?> 
						</select>
					</div>


					<input type="submit" class="btn btn-success btn-block" name="enviar_usuario" value="enviar">

				</form>
				
			</div>


		</div>

		<div class="col-md-8">
			


		</div>

	</div>

</div>


<?php include("includes/footer.php") ?>