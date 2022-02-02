<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio</title>
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
	<nav class="navbar navbar-expand-lg navbar-dark">
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
	<section class="nosotros mb-5" id="nosotros">
		<h3 class="text-center my-5">Nosotros</h3>
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 d-flex justify-content-center">
					<div class="logo-empresa">
						<img src="img/logo2.png" alt="Logo de la Empresa">
					</div>
				</div>
				<div class="col-12 col-md-6 mt-5">
					<h5>En DM - Desarrollo Web apuntamos a que puedas digitalizar tu trabajo.</h5>
				</div>
			</div>
		</div>
	</section>

</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="js/index.js"></script>

</html>