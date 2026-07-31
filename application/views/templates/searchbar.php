    <header>
      <nav>
        <div class="d-flex flex-row justify-content-between align-items-center bg-white shadow-sm p-3">
          <a class="d-flex text-decoration-none m-3" href="<?php echo base_url('index.php/home'); ?>">
            <span class="d-block text-primary material-symbols-outlined">arrow_left_alt</span>
            <span class="d-block text-primary me-2 ms-1">Voltar</span>
          </a>
          <h1 class="text-center fw-light text-secondary"><?php echo $translatedTitle; ?></h1>
        </div>
        <div class="d-flex flex-row align-items-center mt-5 mx-5 bg-white rounded-5 p-2 shadow-sm">
          <input type="text" class="form-control rounded-5" placeholder="Pesquisar">
          <a class="material-symbols-outlined text-decoration-none search-button mx-1 rounded-circle p-1" href="#">
            search
          </a>
        </div>
      </nav>
    </header>