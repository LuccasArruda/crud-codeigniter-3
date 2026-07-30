<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,300,0..1,-25..200"/>
    <link rel="stylesheet" href="<?php echo base_url('public/assets/css/search_bar.css'); ?>">
  </head>
  <body class="bg-body-tertiary">
    <header>
      <nav>
        <div class="d-flex flex-row justify-content-between align-items-center bg-white shadow-sm p-3">
          <a class="d-flex text-decoration-none m-3" href="<?php echo base_url('index.php/home'); ?>">
            <span class="d-block text-primary material-symbols-outlined">arrow_left_alt</span>
            <span class="d-block text-primary me-2 ms-1">Voltar</span>
          </a>
          <h1 class="text-center fw-light text-secondary">Vendas</h1>
        </div>
        <div class="d-flex flex-row align-items-center mt-5 mx-5 bg-white rounded-5 p-2 shadow-sm">
          <input type="text" class="form-control rounded-5" placeholder="Pesquisar">
          <a class="material-symbols-outlined text-decoration-none search-button mx-1 rounded-circle p-1" href="#">
            search
          </a>
        </div>
      </nav>
    </header>
    <main class="mt-5 rounded-2 p-5 bg-white shadow-sm container">
      <table class="table rounded-2 table-hover">
        <thead class="table-dark">
          <tr>
            <th scope="col">Código</th>
            <th scope="col">Data</th>
            <th scope="col">Valor</th>
            <th scope="col">Cliente</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>12/12/2026</td>
            <td>R$ 123,00</td>
            <td>Carlos</td>
            <td>
              <a href="#" class="btn btn-outline-primary material-symbols-outlined text-decoration-none">Edit</a>
              <a href="#" class="btn btn-outline-danger material-symbols-outlined text-decoration-none">Delete</a>
            </td>
          </tr>
        </tbody>
      </table>
    </main>     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
