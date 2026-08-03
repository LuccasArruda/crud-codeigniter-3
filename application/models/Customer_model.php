<?php
class Customer_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_customers($id = FALSE)
    {
        if($id === FALSE){
            $query = $this->db->get('CLIENTES');
            return $query->result_array();
        }

        $query = $this->db->get_where('CLIENTES', array('id' => $id));
        return $query->row_array();
    }

    public function searchCustomers($searchTerm)
    {
        $this->db->like('NOME_FANTASIA', $searchTerm);
        $this->db->or_like('RAZAO_SOCIAL', $searchTerm);
        $this->db->or_like('CNPJ', $searchTerm);
        $this->db->or_like('ENDERECO', $searchTerm);
        $this->db->or_like('VALOR_FATURAMENTO', $searchTerm);
        $this->db->or_like('ID', $searchTerm);
        $query = $this->db->get('CLIENTES');
        return $query->result_array();
    }
}