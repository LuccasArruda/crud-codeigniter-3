<?php
class Customers extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Customer_model');
        $this->load->helper('form_helper');
    }

    public function index()
    {
        $data['customers'] = $this->Customer_model->get_customers();
        $data['title'] = 'Customers';
        $data['translatedTitle'] = 'Clientes';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/searchbar', $data);
        $this->load->view('pages/customers/index', $data);
        $this->load->view('templates/footer');
    }

    public function search()
    {
        $searchTerm = $this->input->get('search');
        $data['customers'] = $this->Customer_model->search_customers($searchTerm);
        $data['title'] = 'Search Results';
        $data['translatedTitle'] = 'Resultados da Pesquisa';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/searchbar', $data);
        $this->load->view('pages/customers/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($id = NULL)
    {
        $data['customer'] = $this->Customer_model->get_customers($id);
        $data['action'] = "customers/update/{$id}";


        if (empty($data['customer'])) 
        {
            show_404();
        }

        $data['title'] = $data['customer']['NOME_FANTASIA'];
        $data['translatedTitle'] = 'Detalhes do Cliente';
        
        $this->loadCustomerView($data);
    }

    public function new(){
        $data['action'] = 'customers/create';
        $data['title'] = 'Novo Cliente';
        $data['translatedTitle'] = 'Detalhes do Cliente';
        $data['customer'] = NULL;

        $this->loadCustomerView($data);
    }

    public function create(){

        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create Customer';
        $data['translatedTitle'] = 'Criar Cliente';

        $validCustomer = $this->validateCustomerInfo();
        if (!$validCustomer) {
            $this->loadCustomerView($data);
            return;
        }

        $this->db->insert('clientes', $this->returnCustomerData());
        redirect('customers');
    }

    public function update($id){
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['title'] = 'Update Customer';
        $data['translatedTitle'] = 'Atualizar Cliente';

        $validCustomer = $this->validateCustomerInfo();
        if (!$validCustomer) {
            $this->loadCustomerView($data);
            return;
        } 

        $this->db->where('ID', $id);
        $this->db->update('clientes', $this->returnCustomerData());
        redirect('customers');
    }

    public function delete($id){
        $this->db->where('ID', $id);
        $this->db->delete('clientes');
        redirect('customers');
    }

    public function returnCustomerData(){
        $data = array(
            'RAZAO_SOCIAL' => $this->input->post('razaoSocial'),
            'NOME_FANTASIA' => $this->input->post('nomeFantasia'),
            'CNPJ' => $this->input->post('cnpj'),
            'VALOR_FATURAMENTO' => $this->input->post('valorFaturamento'),
            'ENDERECO' => $this->input->post('endereco')
        );

        return $data;
    }

    public function validateCustomerInfo(){
        $this->form_validation->set_rules('razaoSocial', 'Razão Social', 'required');
        $this->form_validation->set_rules('nomeFantasia', 'Nome Fantasia', 'required');
        $this->form_validation->set_rules('cnpj', 'CNPJ', 'required');
        $this->form_validation->set_rules('valorFaturamento', 'Valor Faturamento', 'required');
        $this->form_validation->set_rules('endereco', 'Endereço', 'required');

        return $this->form_validation->run();
    }

    public function loadCustomerView($data){
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('pages/customers/view', $data);
        $this->load->view('templates/footer');        
    }
}
