<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
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
      <?php foreach($sales as $sale): ?>
      <tr class="align-middle">
        <th scope="row"><?php echo $sale['ID']; ?></th>
        <td><?php echo $sale['DATA_CRIACAO']; ?></td>
        <td><?php echo $sale['VALOR_TOTAL']; ?></td>
        <td><?php echo $sale['NOME_FANTASIA']; ?></td>
        <td>
          <a href="<?php echo base_url("index.php/sale/edit/{$sale['ID']}"); ?>" class="btn btn-outline-primary material-symbols-outlined text-decoration-none">Edit</a>
          <a href="<?php echo base_url("index.php/sale/delete/{$sale['ID']}"); ?>" class="btn btn-outline-danger material-symbols-outlined text-decoration-none">Delete</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</main>     
