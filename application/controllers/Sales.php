<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {
    public function view($page = 'sales')
    {
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
            show_404();
        }

        $data['title'] = ucfirst($page);

        $this->load->helper('url');
        $this->load->view('pages/'.$page, $data);
    }
}