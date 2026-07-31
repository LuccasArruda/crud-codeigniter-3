<?php
class Customers extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Customer_model');
    }

    public function index()
    {
        $data['customers'] = $this->Customer_model->get_customers();
        $data['title'] = 'Customers';
        $data['translatedTitle'] = 'Clientes';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('pages/customers/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($id = NULL)
    {
        $data['customer'] = $this->Customer_model->get_customers($id);
        
        if (empty($data['customer'])) 
        {
            show_404();
        }

        $data['title'] = $data['customer']['NOME_FANTASIA'];
        
        $this->load->view('templates/header', $data);
        $this->load->view('pages/customers/view', $data);
        $this->load->view('templates/footer');        

    }

}