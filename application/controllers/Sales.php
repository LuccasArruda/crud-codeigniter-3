<?php
class Sales extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sale_model');
        $this->load->model('Customer_model');
        $this->load->helper('form_helper');
    }

    public function index()
    {
        $data['sales'] = $this->Sale_model->get_sales();
        $data['title'] = 'Sales';
        $data['translatedTitle'] = 'Vendas';

        $this->loadSaleIndex($data);
    }

    public function search()
    {
        $searchTerm = $this->input->get('search');
        $data['sales'] = $this->Sale_model->searchSales($searchTerm);
        $data['title'] = 'Search Results';
        $data['translatedTitle'] = 'Vendas';

        $this->loadSaleIndex($data);
    }

    public function loadSaleIndex($data)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/searchbar', $data);
        $this->load->view('pages/sales/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($id = NULL)
    {
        $data['sale'] = $this->Sale_model->get_sales($id);
        $data['customers'] = $this->Customer_model->get_customers();
        $data['action'] = "sale/update/{$id}";
        
        if (empty($data['sale'])){
            show_404();
        }

        $data['title'] = 'Sale Details';
        $data['translatedTitle'] = 'Detalhes da Venda';

        $this->loadSaleView($data);
    }

    public function new()
    {
        $data['sales'] = NULL;
        $data['customers'] = $this->Customer_model->get_customers();
        $data['title'] = 'New Sale';
        $data['translatedTitle'] = 'Nova Venda';
        $data['action'] = 'sale/create';

        $this->loadSaleView($data);
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create Sale';
        $data['translatedTitle'] = 'Criar Venda';
        $data['action'] = 'sale/create';

        $validSale = $this->validateSaleInfo();
        $data['customers'] = $this->Customer_model->get_customers();
        
        if(!$validSale){
            $this->loadSaleView($data);
            return;
        }
                
        $this->db->insert('vendas', $this->returnSaleData());
        redirect('sales');
    }

    public function update($id)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Update Sale';
        $data['translatedTitle'] = 'Atualizar Venda';
        $data['action'] = "sales/update/{$id}";

        $validSale = $this->validateSaleInfo();
        $data['sale'] = $this->Sale_model->get_sales($id);
        $data['customers'] = $this->Customer_model->get_customers();

        if(!$validSale){
            $this->loadSaleView($data);
            return;
        }

        $this->db->where('ID', $id);
        $this->db->update('vendas', $this->returnSaleData());
        redirect('sales');
    }

    public function delete($id)
    {
        $this->db->where('ID', $id);
        $this->db->delete('vendas');
        redirect('sales');
    }

    public function returnSaleData()
    {
        $data = array(
            'ID_CLIENTE' => $this->input->post('idCliente'),
            'DATA_CRIACAO' => $this->input->post('dataGeracao'),
            'VALOR_TOTAL' => $this->input->post('valorTotal')
        );

        return $data;
    }
 
    public function validateSaleInfo()
    {
        $this->form_validation->set_rules('idCliente', 'Cliente', 'required');
        $this->form_validation->set_rules('dataGeracao', 'Data de Geração', 'required|date');
        $this->form_validation->set_rules('valorTotal', 'Valor Total', 'required|numeric');

        return $this->form_validation->run();
    }

    public function loadSaleView($data)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('pages/sales/view', $data);
        $this->load->view('templates/footer');
    }
}