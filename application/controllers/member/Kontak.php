<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function __construct()
    {
			parent::__construct();
    		if ($this->session->userdata('login') == 0) redirect('auth/logout');
            $this->load->model('admin/kontak_model', 'dbObject');
    }

	public function index()
	{   
        $data['kontak'] = $this->db->query("select * from kontak  ORDER BY kontak_status ")->result();		
        $this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/footer');
        $this->load->view('admin/kontak/tampil', $data);
        $this->load->view('admin/templates/subfooter');

    }
    public function detail($param="")
	{   

        $data = array(
            'kontak_status' => "Sudah Dibaca"
        );
        if($this->dbObject->update_general('kontak', 'kontak_id', $param, $data)):
            $data['detail'] = $this->dbObject->get_by_id_general('kontak', 'kontak_id', $param);

            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/templates/footer');
            $this->load->view('admin/kontak/detail', $data);
            $this->load->view('admin/templates/subfooter');
        endif;
        

    }
    
}
