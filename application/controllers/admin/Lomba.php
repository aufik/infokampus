<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lomba extends CI_Controller {

	public function __construct()
    {
			parent::__construct();
    		if ($this->session->userdata('login') == 0) redirect('auth/logout');
            $this->load->model('admin/model_lomba', 'dbObject');
    }

   

	public function index()
	{   
        $lomba = 'lomba';
        $lomba_kate = 'lomba_kategori';
        $id_lomba = 'lomba_id';
        $id_lomba_kate = 'lomba_kategori_id';
        
        $data['lomba'] = $this->dbObject->get_general_2($lomba, $lomba_kate, $id_lomba, $id_lomba_kate);		
        
        $this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/footer');
        $this->load->view('admin/lomba/tampil', $data);
        $this->load->view('admin/templates/subfooter');

	}


}
