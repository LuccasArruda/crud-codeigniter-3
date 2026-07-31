<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<main class="mt-5 p-3 rounded-2 bg-white shadow-sm mx-2 table-responsive">
  <table class="table rounded-2 table-hover">
    <thead class="table-dark">
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Razão Social</th>
        <th scope="col">Nome Fantasia</th>
        <th scope="col">CNPJ</th>
        <th scope="col">Endereço</th>
        <th scope="col">Valor Faturamento</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($customers as $customer): ?>
      <tr class="align-middle">
        <th scope="row"><?php echo $customer['ID']; ?></th>
        <td><?php echo $customer['RAZAO_SOCIAL']; ?></td>
        <td><?php echo $customer['NOME_FANTASIA']; ?></td>
        <td><?php echo $customer['CNPJ']; ?></td>
        <td><?php echo $customer['ENDERECO']; ?></td>
        <td><?php echo $customer['VALOR_FATURAMENTO']; ?></td>
        <td>
          <a href="<?php echo base_url("index.php/customer/edit/{$customer['ID']}"); ?>" class="btn btn-outline-primary material-symbols-outlined text-decoration-none">Edit</a>
          <a href="<?php echo base_url("index.php/customer/delete/{$customer['ID']}"); ?>" class="btn btn-outline-danger material-symbols-outlined text-decoration-none">Delete</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</main>     
