<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
	public function view($page = 'customer')
	{
		if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))
		{
			show_404();
		}

		$data['title'] = ucfirst($page);

		$this->load->view('pages/'.$page, $data);
	}
}
