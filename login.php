<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icono.png" />

	<title>Login Sistema Documentario</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100" style="background-image: url('img/photos/fondo.jpg');">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4 ">
							<h1 class="h2 " style="color:white;font-weight: bold;">Bienvenido!</h1>
							<p class="lead text-white">Inicie Sesion para ingresar al sistema. </p>
						</div>

						<div class="card" style="background-color: #55555545;">
							<div class="card-body">

								<div class="text-center">
									<img src="img/photos/insignia.png" alt="" class="card-img w-50">
								</div>
								<div class="m-sm-3 text-white">
									<form>
										<div class="mb-3">
											<label class="form-label">Usuario</label>
											<input class="form-control form-control-lg" type="text" name="usuario"
												placeholder="Ingresa tu Usuario" />
										</div>
										<div class="mb-3">
											<label class="form-label">Contraseña</label>
											<input class="form-control form-control-lg" type="password"
												name="contraseña" placeholder="Ingresa tu Contraseña" />
										</div>

										<div class="d-grid gap-2 mt-3">
											<a href="index.php" id="boton" class="btn btn-lg btn-success">Ingresar</a>
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>
	<script src="js/app.js"></script>
</body>
</html>