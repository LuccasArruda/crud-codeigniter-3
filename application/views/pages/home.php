<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<main class="container">
	<div class="position-absolute top-50 start-50 translate-middle">
		<h1 class="text-center mb-5 fw-light"> Olá, Seja Bem Vindo!</h1>
		<div class="row">
			<div class="col-sm-6 mb-3 mb-sm-0">
				<a href="<?php echo base_url('index.php/sales'); ?>" class="card text-decoration-none card-animation">
					<div class="card-body text-center">
						<i class="material-symbols-outlined" style="font-size: 6em;">
						shopping_cart
						</i>
						<h5 class="card-title text-center fw-lighter">Vendas</h5>
					</div>
				</a>
			</div>
			<div class="col-sm-6">
				<a href="<?php echo base_url('index.php/customers'); ?>" class="card text-decoration-none card-animation">
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
