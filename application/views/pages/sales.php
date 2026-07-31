<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
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
    <main class="mt-5 rounded-2 p-3 bg-white shadow-sm mx-2 table-responsive">
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
          <tr class="align-middle">
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
