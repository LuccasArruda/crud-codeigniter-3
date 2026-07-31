<main class="row align-items-center justify-content-center mt-5 p-3 mx-5 gap-5">
    <div class="col-md-6 col-sm-12 rounded-2 bg-white shadow-sm p-5">
        <form>
            <fieldset class="row">
                <legend class="text-center fs-2 mb-4 text-primary">Editar Venda</legend>
                <div class="col">
                    <label for="cliente" class="form-label">Cliente</label>
                    <select id="cliente" class="form-select">
                        <?php foreach($customers as $customer): ?>
                            <option value="<?php echo $customer['ID']; ?>" <?php echo ($customer['ID'] == $sale['ID_CLIENTE']) ? 'selected' : ''; ?>>
                                <?php echo $customer['NOME_FANTASIA']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col">
                    <label for="valorTotal" class="form-label">Valor Total</label>
                    <div class="input-group">
                        <span class="input-group-text">R$</span>
                        <input type="number" id="valorTotal" class="form-control" placeholder="Valor Total" value="<?php echo $sale['VALOR_TOTAL']; ?>">
                    </div>
                </div>
                <div class="col">
                    <label for="dataGeracao" class="form-label">Data de Criação</label>
                    <input type="date" id="dataGeracao" class="form-control" placeholder="Data de Geração" value="<?php echo $sale['DATA_CRIACAO']; ?>">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Salvar</button>
            </fieldset>
        </form>
    </div>
    <div class="col-md-4 col-sm-12">
        <img src="<?php echo base_url('public/assets/img/storysets/Price-cuate.svg'); ?>" alt="storyset" class="img-fluid">
    </div>
</main>