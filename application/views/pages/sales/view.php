<main class="row align-items-center justify-content-center mt-5 p-3 mx-5 gap-5">
    <div class="col-md-6 col-sm-12 rounded-2 bg-white shadow-sm p-5">
        <div class="alert alert-danger <?= empty(validation_errors()) ? 'd-none' : ''; ?>" role="alert">
            <?php echo validation_errors(); ?>
        </div>
        <?php echo form_open($action); ?>
            <fieldset class="row">
                <legend class="text-center fs-2 mb-4 text-primary">Editar Venda</legend>
                <div class="col">
                    <label for="cliente" class="form-label">Cliente</label>
                    <select id="cliente" name="idCliente" class="form-select">
                        <?php foreach($customers as $customer): ?>
                            <option value="<?= isset($customer['ID']) ? $customer['ID'] : ''; ?>" <?php echo ($customer['ID'] == isset($sale['ID_CLIENTE'])) ? 'selected' : ''; ?>>
                                <?php echo empty($customer['NOME_FANTASIA']) ? $customer['RAZAO_SOCIAL'] : $customer['NOME_FANTASIA']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col">
                    <label for="valorTotal" class="form-label">Valor Total</label>
                    <div class="input-group">
                        <span class="input-group-text">R$</span>
                        <input type="number" id="valorTotal" name="valorTotal" class="form-control" placeholder="Valor Total" value="<?= isset($sale['VALOR_TOTAL']) ? $sale['VALOR_TOTAL'] : ''; ?>">
                    </div>
                </div>
                <div class="col">
                    <label for="dataCriacao" class="form-label">Data de Criação</label>
                    <input type="date" id="dataCriacao" name="dataCriacao" class="form-control" placeholder="Data de Criação" value="<?= isset($sale['DATA_CRIACAO']) ? $sale['DATA_CRIACAO'] : ''; ?>">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Salvar</button>
            </fieldset>
        <?php echo form_close(); ?>
    </div>
    <div class="col-md-4 col-sm-12">
        <img src="<?php echo base_url('public/assets/img/storysets/Price-cuate.svg'); ?>" alt="storyset" class="img-fluid">
    </div>
</main>