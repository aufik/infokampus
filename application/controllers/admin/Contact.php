<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
    {
			parent::__construct();
    		if ($this->session->userdata('login') == 0) redirect('auth/logout');
			$this->load->model('contact_model', 'dbObject');
    }

    public $tbl = 'contact';
	public $id_name = 'contact_id';

	public function index()
	{
		$data['contact'] = $this->dbObject->get_general($this->tbl);		
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/contact/index', $data);
		$this->load->view('admin/templates/footer');

	}

	public function delete($param2='')
	{
		if($this->dbObject->delete_general($this->tbl, $this->id_name, $param2)===TRUE)		// using direct parameter
		{
			?>
			<script>
				alert(" Data berhasil dihapus. ");
				location.replace("<?=base_url()?>admin/contact");
			</script>
			<?php
		}
		else {
			?>
			<script>
				alert(" Data gagal dihapus. ");
				location.replace("<?=base_url()?>admin/contact");
			</script>
			<?php
		}
	}

}
