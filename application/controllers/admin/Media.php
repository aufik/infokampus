<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller {

	public function __construct()
  	{   
  		parent::__construct();
  		if ($this->session->userdata('login') == 0) redirect('auth/logout');
		$this->load->model('admin/media_model', 'dbObject');
  	}

  	public $tbl = 'media';
	public $id_name = 'media_id';

	public function index()
	{
		$data['media'] = $this->dbObject->get_all_media_with_kategori();

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/post/see_post',$data);
		$this->load->view('admin/templates/footer');
	}

	public function create($param1='')
	{
		$data['kategori'] = $this->dbObject->get_general('media_kategori');

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/post/create_post', $data);
		$this->load->view('admin/templates/footer');

		if ($param1 == 'do_create') {
			$media_med_kat_id=trim($this->input->post('media_med_kat_id'));
			$media_judul=trim($this->input->post('media_judul'));
			$media_isi=$this->input->post('media_isi');
			$link=$this->input->post('link');
			$tiket=$this->input->post('tiket');
			$deadline=$this->input->post('deadline');

			$config['upload_path']          = 'assets/img/media';
		    $config['allowed_types']        = 'gif|jpg|png|jpeg';
		    $config['max_size']             = 10000;

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('media_gambar'))
      {
            $error = array('error' => $this->upload->display_errors());

            var_dump($error);die;
      }
      else
      {
        $data = array(
        			'link' => $link,
        			'tiket' => $tiket,
        			'deadline' => $deadline,
					'media_judul' => $media_judul,
					'media_gambar' => $this->upload->data('file_name'),
					'media_isi' => $media_isi,
					'media_med_kat_id' => $media_med_kat_id,
					'media_created_by' => $this->session->userdata('user_name'),
					'media_created_time' => date('Y-m-d H:i:s')
				);
      }

			if($this->dbObject->create_general($this->tbl, $data)===TRUE)		// using direct parameter
			{
				?>
				<script>
					alert(" Data berhasil disimpan. ");
					location.replace("<?=base_url()?>index.php/admin/media/");
				</script>
				<?php
				
			}
			else {
				?>
				<script>
					alert(" Data gagal disimpan. ");
					location.replace("<?=base_url()?>index.php/admin/media/");
				</script>
				<?php
				//redirect('master/jabatan_insert','refresh');
			}
		}
	}

	public function update($param2='', $param1='')
	{
		$data['kategori'] = $this->dbObject->get_general('media_kategori');
		$data['data_media'] = $this->dbObject->get_by_id_general($this->tbl, $this->id_name, $param2);

		// var_dump($data['data_media']); 

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/media/update', $data);
		$this->load->view('admin/templates/footer');

		if ($param1 == 'do_update') {
			$media_med_kat_id=trim($this->input->post('media_med_kat_id'));
			$media_judul=trim($this->input->post('media_judul'));
			$media_isi=$this->input->post('media_isi');
			$link=$this->input->post('link');
			$tiket=$this->input->post('tiket');
			$deadline=$this->input->post('deadline');

			$config['upload_path']          = 'assets/img/media';
	        $config['allowed_types']        = 'gif|jpg|png';
	        $config['max_size']             = 10000;

	        $this->load->library('upload', $config);

	        if ( ! $this->upload->do_upload('media_gambar'))
	        {
                $data = array(
                	'link' => $link,
        			'tiket' => $tiket,
        			'deadline' => $deadline,
					'media_judul' => $media_judul,
					'media_isi' => $media_isi,
					'media_med_kat_id' => $media_med_kat_id,
					'media_update_by' => $this->session->userdata('user_name'),
					'media_update_time' => date('Y-m-d H:i:s')
				);
	        }
	        else
	        {
		        $data = array(
					'media_judul' => $media_judul,
					'media_gambar' => $this->upload->data('file_name'),
					'media_isi' => $media_isi,
					'media_med_kat_id' => $media_med_kat_id,
					'media_update_by' => $this->session->userdata('user_id'),
					'media_update_time' => date('Y-m-d H:i:s')
				);
	        }

			if($this->dbObject->update_general($this->tbl, $this->id_name, $param2, $data)===TRUE)		// using direct parameter
			{
				?>
				<script>
					alert(" Data berhasil diubah. ");
					location.replace("<?=base_url()?>index.php/admin/media/");
				</script>
				<?php
				
			}
			else {
				?>
				<script>
					alert(" Data gagal diubah. ");
					location.replace("<?=base_url()?>index.php/admin/media/");
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
				location.replace("<?=base_url()?>index.php/admin/media");
			</script>
			<?php
			
		}
		else {
			?>
			<script>
				alert(" Data gagal dihapus. ");
				location.replace("<?=base_url()?>index.php/admin/media");
			</script>
			<?php
			
		}
	}

	public function detail($param1='')
	{
		$data['media'] = $this->dbObject->get_by_id_general($this->tbl, $this->id_name, $param1);
		$this->load->view('admin/media/detail', $data);
	}

	public function kategori($param1='')
	{
		$tbl_kat = 'media_kategori';
		if($param1 == 'create'){
			$kategori=trim($this->input->post('kategori'));
			$data = array(
				'med_kat_name' => $kategori
			);
			
			if($this->dbObject->create_general($tbl_kat, $data)===TRUE)		// using direct parameter
			{
				?>
				<script>
					alert(" Data berhasil disimpan. ");
					location.replace("<?=base_url()?>index.php/admin/media/create");
				</script>
				<?php
			}
			else {
				?>
				<script>
					alert(" Data gagal disimpan. ");
					location.replace("<?=base_url()?>index.php/admin/media/create");
				</script>
				<?php
			}
		}
	}
}
