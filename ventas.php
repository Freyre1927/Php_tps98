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

						<input type="date" name="fecha" class="form-control" placeholder="ingrese la fecha" autofocus>

					</div>

						<div class="form-group">

						<input type="text" name="cantidad" class="form-control" placeholder="ingrese cantidad">

					</div>

					<div class="form-group">

						<input type="text" name="valorapagar" class="form-control" placeholder="ingrese valor a pagar">
						
					</div>

					<input type="submit" class="btn btn-success btn-block" name="enviar" value="enviar">

				</form>
				
			</div>


		</div>

		<div class="col-md-8">
			


		</div>

	</div>

</div>


<?php include("includes/footer.php") ?>