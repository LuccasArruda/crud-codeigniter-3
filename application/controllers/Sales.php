<?php
class Sales extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sale_model');
    }

    public function index()
    {
        $data['sales'] = $this->Sale_model->get_sales();
        $data['title'] = 'Sales';
        $data['translatedTitle'] = 'Vendas';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('pages/sales/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($id = NULL)
    {
        $data['sale'] = $this->Sale_model->get_sales($id);
        
        if (empty($data['sale'])) 
        {
            show_404();
        }

        $data['title'] = 'Sale Details';
        $data['translatedTitle'] = 'Detalhes da Venda';

        $this->load->view('templates/header', $data);
        $this->load->view('pages/sales/view', $data);
        $this->load->view('templates/footer');        

    }
}