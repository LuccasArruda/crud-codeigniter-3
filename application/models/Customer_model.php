<?php
class Customer_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function get_customers($id = FALSE){
        if($id === FALSE){
            $query = $this->db->get('CLIENTES');
            return $query->result_array();
        }

        $query = $this->db->get_where('CLIENTES', array('id' => $id));
        return $query->row_array();
    }
}