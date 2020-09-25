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

						<input type="text" name="nombre" class="form-control" placeholder="ingrese nombre del producto" autofocus>

					</div>

					<div class="form-group">
						
						<textarea name="descripcion" rows="2" class="form-control" placeholder="ingrese descripcion"></textarea>

					</div>

					<div class="form-group">

						<input type="text" name="cantidad" class="form-control" placeholder="ingrese la cantidad">
						
					</div>

					<div class="form-group">

						<input type="text" name="valorunitario" class="form-control" placeholder="ingrese valor unitario">
						
					</div>

					<div class="form-group">

						<input type="file" name="imagen" class="form-control" placeholder="ingrese imagen">
						
					</div>


					<input type="submit" class="btn btn-success btn-block" name="enviar_productos" value="enviar">

				</form>
				
			</div>


		</div>

		<div class="col-md-8">
			


		</div>

	</div>

</div>


<?php include("includes/footer.php") ?>