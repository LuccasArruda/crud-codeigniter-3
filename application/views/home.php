<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,200,0..1,-25..200"/>	
	<link rel="stylesheet" href="<?php echo base_url('public/assets/css/common.css'); ?>">
  </head>
  <body>
	<main class="container">
		<div class="position-absolute top-50 start-50 translate-middle">
			<h1 class="text-center mb-5"> Olá, Seja Bem Vindo!</h1>
			<div class="row">
				<div class="col-sm-6 mb-3 mb-sm-0">
					<a href="#" class="card text-decoration-none card-animation">
						<div class="card-body text-center">
							<i class="material-symbols-outlined" style="font-size: 6em;">
							shopping_cart
							</i>
							<h5 class="card-title text-center fw-lighter">Vendas</h5>
						</div>
					</a>
				</div>
				<div class="col-sm-6">
					<a href="<?php echo base_url('index.php/customer/view'); ?>" class="card text-decoration-none card-animation">
						<div class="card-body text-center">
							<i class="material-symbols-outlined" style="font-size: 6em;">
							person
							</i>
							<h5 class="card-title text-center fw-lighter">Clientes</h5>
						</div>
					</a>
				</div>
			</div>
		</div>
	</main>		
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
