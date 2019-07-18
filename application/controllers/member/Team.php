<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {

	public function __construct()
    {
			parent::__construct();
    		if ($this->session->userdata('login') == 0) redirect('auth/logout');
			$this->load->model('admin/team_model', 'dbObject');
    }

  	public $tbl = 'team';
	public $id_name = 'team_id';

	public function index()
	{
		$data['team'] = $this->dbObject->get_general($this->tbl);
		
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/templates/footer');
		$this->load->view('admin/team/tampil', $data);
		$this->load->view('admin/templates/subfooter');
		
	}

	public function tambah($param1='')
	{
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/templates/footer');
		$this->load->view('admin/team/tambah');
		$this->load->view('admin/templates/subfooter');


		if ($param1 == 'do_create') {
			$config['upload_path']          = './assets/img/team';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = (99999 * 9999);
		$config['max_width']            = (99999 * 9999);
		$config['max_height']           = (99999 * 9999);
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('foto')){
			}

			$team_nama = trim($this->input->post('nama'));
			$team_jabatan=trim($this->input->post('jabatan'));
			$team_isi=trim($this->input->post('isi'));
			$team_image=trim($this->input->post('foto'));
			$data = array(
				'team_nama' => $team_nama, 
				'team_jabatan' => $team_jabatan,
				'team_isi' => $team_isi, 
				'team_image' => $this->upload->data('file_name')
			);
			if($this->dbObject->create_general($this->tbl, $data)===TRUE)		// using direct parameter
			{
				
				?>
				<script> 
					alert(" Data berhasil disimpan. ");
					location.replace("<?=base_url()?>index.php/admin/team/"); 
				</script>
				<?php
				//redirect('kepegawaian/jabatan','refresh');
			}
			else {
				?>
				<script> 
					alert(" Data gagal disimpan. ");
					location.replace("<?=base_url()?>index.php/admin/team/tambah"); 
				</script>
				<?php
				//redirect('kepegawaian/jabatan_insert','refresh');
			}
		}
	}

	public function update($param2='', $param1='')
	{
		$data['data_team'] = $this->dbObject->get_by_id_general($this->tbl, $this->id_name, $param2);
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/team/update', $data);
		$this->load->view('admin/templates/footer');
		if ($param1 == 'do_update') {
			$team_nama=trim($this->input->post('team_nama'));
			$team_jabatan=trim($this->input->post('team_jabatan'));
			$team_isi=$this->input->post('team_isi');
			$config['upload_path']          = 'assets/img/team';
	        $config['allowed_types']        = 'gif|jpg|png|jpeg';
	        $config['max_size']             = 10000;
	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('team_image'))
	        {
          $data = array(
					'team_nama' => $team_nama,
					'team_isi' => $team_isi,
					'team_jabatan' => $team_jabatan,
					'team_update_by' => $this->session->userdata('user_id'),
					'team_update_time' => date('Y-m-d H:i:s')
				);
	        }
	        else
	        {
		        $data = array(
					'team_nama' => $team_nama,
					'team_image' => $this->upload->data('file_name'),
					'team_isi' => $team_isi,
					'team_jabatan' => $team_jabatan,
					'team_created_by' => $this->session->userdata('user_id'),
					'team_created_time' => date('Y-m-d H:i:s')
				);
	        }
			if($this->dbObject->update_general($this->tbl, $this->id_name, $param2, $data)===TRUE)		// using direct parameter
			{
				?>
				<script>
					alert(" Data berhasil diubah. ");
					location.replace("<?=base_url()?>admin/team/");
				</script>
				<?php
			}
			else {
				?>
				<script>
					alert(" Data gagal diubah. ");
					location.replace("<?=base_url()?>admin/team/");
				</script>
				<?php
			}
		}
	}

	public function delete($param2='')
	{
		if($this->dbObject->delete_general($this->tbl, $this->id_name, $param2)===TRUE)		// using direct parameter
		{
			?>
			<script>
				alert(" Data berhasil dihapus. ");
				location.replace("<?=base_url()?>admin/team");
			</script>
			<?php
		}
		else {
			?>
			<script>
				alert(" Data gagal dihapus. ");
				location.replace("<?=base_url()?>admin/team");
			</script>
			<?php
		}
	}

}
