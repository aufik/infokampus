<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lomba extends CI_Controller {

	public function __construct()
    {
			parent::__construct();
    		if ($this->session->userdata('login') == 0) redirect('auth/logout');
            $this->load->model('admin/model_lomba', 'dbObject');
    }

   
    public $lomba = 'lomba';
    public $lomba_kate = 'lomba_kategori';
    public $id_lomba = 'lomba_id';
    public $id_lomba_kate = 'lomba_kategori_id';

	public function index()
	{   
        $data['lomba'] = $this->dbObject->get_general_2($this->lomba, $this->lomba_kate, $this->id_lomba, $this->id_lomba_kate);		
        
        $this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/footer');
        $this->load->view('admin/lomba/tampil', $data);
        $this->load->view('admin/templates/subfooter');

    }
    public function tambah()
	{   
        
        $this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/footer');
        $this->load->view('admin/lomba/tambah');
        $this->load->view('admin/templates/subfooter');

    }
    public function tambah_proses(){
        $lomba_judul=trim($this->input->POST('lomba_judul')); 
        $data = array(
            'lomba_judul' => $lomba_judul,
            'lomba_kat_id' => '1'
        );
        if($this->dbObject->create_general($this->lomba, $data)===TRUE)		// using direct parameter
        {
            ?>
            <script> 
                alert(" Data berhasil disimpan. ");
                location.replace("<?=base_url()?>index.php/admin/lomba"); 
            </script>
            <?php
            //redirect('master/jabatan','refresh');
        }
        else { 
            ?>
            <script> 
                alert(" Data gagal disimpan. ");
                location.replace("<?=base_url()?>index.php/admin/lomba/tambah"); 
            </script>
            <?php
            //redirect('master/jabatan_insert','refresh');
        }
    }

    public function permintaan_lomba(){
        $data['lomba'] = $this->dbObject->get_general_3($this->lomba, $this->lomba_kate, $this->id_lomba, $this->id_lomba_kate);		
        
        $this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/footer');
        $this->load->view('admin/lomba/tampil', $data);
        $this->load->view('admin/templates/subfooter');
    }



}
