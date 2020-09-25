<!DOCTYPE html>
<html>
<head>
	<title>pagina principal</title>
	<meta charset="utf-8">

	<!-- bootstrap 4 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<header class="w-100">

		<div class="content-fixed">

			<div class="container p-2">

				<div class="row">

					<a href="index.php" class="col-md-2 col-2 p-lg-0 logo m-md-auto m-lg-0" >
						
							<img src="database/imagenes/compu.png" width="130" height="100">
					</a>
					
					<div class="col-md-3 col-7 p-0 content-search m-md-auto">

						<div class="input-group position-relative search-box"  id="main_search_input">
							
							<form action="search" method="GET" id="search_form" class="w-100">

								<input class="searchInput input-search w-100 ui-autocomplete-input" type="search" name="buscador" placeholder="¿que desea buscar?">
								
							</form>

						</div>

					</div>
					<div class="col-md-auto">

						<h1>aqui va el carrito de compras</h1>

					</div>


				</div>

			</div>

	<nav class="navbar navbar-dark bg-dark">

		<div class="container">

			<a href="index.php" class="navbar-brand"> Pagina principal</a>
			<a href="productos.php" class="navbar-brand"> productos</a>
			<a href="roles.php" class="navbar-brand"> roles</a>
			<a href="usuarios.php" class="navbar-brand"> usuarios</a>
			<a href="ventas.php" class="navbar-brand"> ventas</a>
			
		</div>
		
	</nav>
		</div>
</header>