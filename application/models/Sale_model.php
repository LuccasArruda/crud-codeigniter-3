<?php
class Sale_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function get_sales($id = FALSE) 
    {
        $this->db
             ->select('VENDAS.*, CLIENTES.NOME_FANTASIA AS NOME_FANTASIA')
             ->from('VENDAS')
             ->join('CLIENTES', 'VENDAS.ID_CLIENTE = CLIENTES.ID', 'left');

        if ($id !== FALSE) {
            $this->db->where('VENDAS.ID', $id);
            return $this->db->get()->row_array();
        }

        return $this->db->get()->result_array();
    }

    public function searchSales($searchTerm) 
    {
        $this->db
             ->select('VENDAS.*, CLIENTES.NOME_FANTASIA AS NOME_FANTASIA')
             ->from('VENDAS')
             ->join('CLIENTES', 'VENDAS.ID_CLIENTE = CLIENTES.ID', 'left')
             ->like('CLIENTES.NOME_FANTASIA', $searchTerm)
             ->or_like('CLIENTES.NOME_FANTASIA', $searchTerm)
             ->or_like('VENDAS.DATA_CRIACAO', $searchTerm)
             ->or_like('VENDAS.VALOR_TOTAL', $searchTerm);

        return $this->db->get()->result_array();
    }
}