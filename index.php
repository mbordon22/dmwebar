<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DM - Desarrollo Web</title>
	<link rel="icon" href="img/logo.png">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap">
	<link rel="stylesheet" href="css/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900&display=swap">
	<link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body class="hidden" onload="removePreload()">
	<!-- Preload -->
	<div class="preload" id="preload">
		<div class="lds-roller">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>

	<!-- Banner -->
	<div class="banner parallax">
		<div class="contenedor">
			<h1 class="titulo"><span class="typed"></span></h1>
			<div class="titulo" id="cadenas-texto">
				<p>Desarrollo Web</p>
				<p>Diseño Responsive</p>
				<p>Tienda Online</p>
				<p>Sistemas Web</p>
			</div>
			<div class="linea"></div>

			<div class="redes-sociales">
				<a href="https://instagram.com/dm.webar" target="_blank"><i class="fab fa-instagram"></i></a>
				<a href="https://api.whatsapp.com/send?phone=3816173059&text=Hola,%20quiero%20asesorarme" target="_blank"><i class="fab fa-whatsapp"></i></a>
			</div>
		</div>
	</div>

	<!-- navegacion -->
	<nav class="navbar navbar-expand-lg navbar-dark hidden">
		<a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="Logo DM - Desarrollo Web"> </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#nosotros">Nosotros</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#servicios">Servicios</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#contacto">Contacto</a>
				</li>
			</ul>
		</div>
	</nav>

	<!-- Nosotros -->
	<section class="nosotros pb-5" id="nosotros">
		<h3 class="titulo-section text-center py-5">Nosotros</h3>
		<div class="container">
			<div class="row align-items-md-center">
				<div class="col-12 col-md-6 d-flex justify-content-center">
					<div class="logo-empresa">
						<img src="img/logo2.png" alt="Logo de la Empresa">
					</div>
				</div>
				<div class="col-12 col-md-6 mt-5 mt-md-0">
					<h5>En DM - Desarrollo Web apuntamos a que puedas digitalizar tu trabajo.</h5>
					<div class="descripcion-nosotros">
						<p>Conociendo en profundidad tus necesidades y apuntando al tipo de clientes que necesitás y querés atraer, para así brindarte el mejor servicio posible.</p>

						<p>Creemos en las relaciones de confianza, basadas en la calidad del servicio, las recomendaciones de los clientes y una apuesta por el largo plazo, que permite una mejor comprensión de las claves de negocio de cada industria.</p>

						<p>Garantizamos proximidad y flexibilidad para planteamientos y ejecución de trabajos con un alto grado de implicación y asesoramiento técnico.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Servicios -->
	<section class="servicios pb-5" id="servicios">
		<h3 class="titulo-section text-center pt-5 pb-3">Nuestros Servicios</h3>
		<div class="hero-section">
			<div class="card-grid">
				<div class="card">
					<div class="card__background" style="background-image: url(img/services-desarrollo.jpg)"></div>
					<div class="card__content">
						<h3 class="card__heading">Desarrollo Web</h3>
					</div>
				</div>
				<div class="card">
					<div class="card__background" style="background-image: url(img/services-responsive.jpg)"></div>
					<div class="card__content">
						<h3 class="card__heading">Diseños Web Responsive</h3>
					</div>
				</div>
				<div class="card">
					<div class="card__background" style="background-image: url(img/services-ecommerce.jpg)"></div>
					<div class="card__content">
						<h3 class="card__heading">Tienda Online</h3>
					</div>
				</div>
				<div class="card">
					<div class="card__background" style="background-image: url(img/services-sistemaweb.jpg)"></div>
					<div class="card__content">
						<h3 class="card__heading">Sistemas Web</h3>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Formulario de contacto -->
	<section class="contacto py-5" id="contacto">
		<h3 class="titulo-section text-center py-5">!Trabajemos Juntos!</h3>
		<div class="container">
			<form action="index.php" method="POST">
				<div class="form-group">
					<div class="row">
						<div class="col-12 col-md-6 mb-3 mb-md-0">
							<input type="text" name="nombre_contacto" class="form-control" placeholder="Nombre">
						</div>
						<div class="col-12 col-md-6">
							<input type="text" name="email_contacto" class="form-control" placeholder="Email">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-12">
							<input type="text" name="asunto_contacto" class="form-control" placeholder="Asunto">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-12">
							<textarea name="mensaje_contacto" id="" class="form-control" cols="30" rows="10" placeholder="Mensaje"></textarea>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-12">
							<input type="submit" class="btn btn-secondary btn-block" value="Enviar">
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>

</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="js/typed.js"></script>
<script src="js/index.js"></script>

</html>