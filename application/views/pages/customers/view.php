<main class="row align-items-center justify-content-center mt-5 p-3 mx-5 gap-5">
    <div class="col-md-6 col-sm-12 rounded-2 bg-white shadow-sm p-5">
        <form>
            <fieldset class="row">
                <legend class="text-center fs-2 mb-4 text-primary">Editar Cliente</legend>
                <div class="col-6">
                    <label for="razaoSocial" class="form-label">Razão Social</label>
                    <input type="text" id="razaoSocial" class="form-control" placeholder="Razão Social" value="<?php echo $customer['RAZAO_SOCIAL']; ?>">
                </div>                
                <div class="col-6">
                    <label for="nomeFantasia" class="form-label">Nome Fantasia</label>
                    <input type="text" id="nomeFantasia" class="form-control" placeholder="Nome Fantasia" value="<?php echo $customer['NOME_FANTASIA']; ?>">
                </div>
                <div class="col">
                    <label for="cnpj" class="form-label">CNPJ</label>
                    <input type="text" id="cnpj" class="form-control" placeholder="CNPJ" value="<?php echo $customer['CNPJ']; ?>">
                </div>
                <div class="col">
                    <label for="valorFaturamento" class="form-label">Faturamento</label>
                    <div class="input-group">
                        <span class="input-group-text">R$</span>
                        <input type="text" id="valorFaturamento" class="form-control" placeholder="Valor Faturamento" value="<?php echo $customer['VALOR_FATURAMENTO']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <label for="endereco" class="form-label">Endereço</label>
                    <input type="text" id="endereco" class="form-control" placeholder="Endereço" value="<?php echo $customer['ENDERECO']; ?>">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Salvar</button>
            </fieldset>
        </form>
    </div>
    <div class="col-md-4 col-sm-12">
        <img src="<?php echo base_url('public/assets/img/storysets/Add User-cuate.svg'); ?>" alt="storyset" class="img-fluid">
    </div>
</main>