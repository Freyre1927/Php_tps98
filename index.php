
<?php include("bd.php") ?>


<?php include("includes/header.php") ?>

<div class="col-12 ">
	<div class="d-flex">

<aside class="col-md-4">
	
	<h1>en este punto van las categorias</h1>
	<p>Lorem Ipsum es simplemente texto de relleno de la industria de la impresión y la composición tipográfica. Lorem Ipsum ha sido el texto de relleno estándar de la industria desde la década de 1500, cuando un impresor desconocido tomó una galera de tipos y la mezcló para hacer un libro de muestras tipográfico. Ha sobrevivido no solo a cinco siglos, sino también al salto a la composición tipográfica electrónica, permaneciendo esencialmente sin cambios. Se popularizó en la década de 1960 con el lanzamiento de hojas de Letraset que contienen pasajes de Lorem Ipsum y, más recientemente, con software de autoedición como Aldus PageMaker que incluye versiones de Lorem Ipsum</p> 
</aside>
<div class="col-md-7">

	<h1>
		aqui van las imagenes de los productos
	</h1>

	<p>
		¿Por qué lo usamos?
		Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página al mirar su diseño. El objetivo de usar Lorem Ipsum es que tiene una distribución de letras más o menos normal, en lugar de usar 'Contenido aquí, contenido aquí', lo que hace que parezca un inglés legible. Muchos paquetes de autoedición y editores de páginas web ahora usan Lorem Ipsum como su modelo de texto predeterminado, y una búsqueda de 'lorem ipsum' revelará muchos sitios web aún en su infancia. Varias versiones han evolucionado a lo largo de los años, a veces por accidente, a veces a propósito (humor inyectado y similares).
		Hay muchas variaciones de pasajes de Lorem Ipsum disponibles, pero la mayoría han sufrido alteraciones de alguna forma, por humor inyectado o palabras aleatorias que no parecen ni un poco creíbles. Si va a utilizar un pasaje de Lorem Ipsum, debe asegurarse de que no haya nada vergonzoso escondido en medio del texto. Todos los generadores de Lorem Ipsum en Internet tienden a repetir fragmentos predefinidos según sea necesario, lo que lo convierte en el primer generador verdadero en Internet. Utiliza un diccionario de más de 200 palabras latinas, combinado con un puñado de estructuras de oraciones modelo, para generar Lorem Ipsum que parece razonable. Por lo tanto, el Lorem Ipsum generado está siempre libre de repeticiones, humor inyectado o palabras no características, etc
	</p>
</div>
</div>

</div>



<div class="container p-5">
	
	<div class="row">
		
		<div class="col-md-4">
			
			<div class="card card-body">

				<form action="save.php" method="POST">
					
					<div class="form-group">

						<input type="text" name="usuario" class="form-control" placeholder="ingrese usuario" >

					</div>

					<div class="form-group">
						
						<input type="password" name="contraseña" class="form-control" placeholder=" ingrese contraseña">

					</div>


					<input type="submit" class="btn btn-success btn-block" name="enviar" value="entrar">

					<label> Si no posee un usuario registrese <a href="usuarios.php"> aqui </a> </label>

				</form>
				
			</div>


		</div>


	</div>

</div>



<?php include("includes/footer.php") ?>