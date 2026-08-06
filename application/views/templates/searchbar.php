    <header>
      <nav>
        <div class="d-flex flex-row justify-content-between align-items-center bg-white shadow-sm p-3">
          <a class="d-flex text-decoration-none m-3" href="<?php echo base_url(); ?>">
            <span class="d-block text-primary material-symbols-outlined">arrow_left_alt</span>
            <span class="d-block text-primary me-2 ms-1">Voltar</span>
          </a>
          <h1 class="text-center fw-light text-secondary"><?php echo $translatedTitle; ?></h1>
        </div>
        <form action="<?php echo base_url('index.php/customers/search'); ?>" method="get" class="d-flex flex-row align-items-center mt-5 mx-5 bg-white rounded-5 p-2 shadow-sm">
          <input type="text" class="form-control rounded-5 d-flex" placeholder="Pesquisar" name="search" id="search">
          <button class="btn btn-outline-primary d-flex rounded-circle px-2 ms-1" type="submit">
            <span class="material-symbols-outlined">search</span>
          </button>
        </form>
      </nav>
    </header>
