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
        $data['lomba'] = $this->dbObject->get_general_tampil_lomba($this->lomba, $this->lomba_kate, $this->id_lomba, $this->id_lomba_kate);		
        
        $this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/footer');
        $this->load->view('admin/lomba/tampil', $data);
        $this->load->view('admin/templates/subfooter');

    }
    public function tambah()
	{   
        $data['kategori'] = $this->dbObject->get_general('lomba_kategori');
        $this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/footer');
        $this->load->view('admin/lomba/tambah', $data);
        $this->load->view('admin/templates/subfooter');
        

    }
    public function tambah_proses(){
        $config['upload_path']          = './assets/img/poster';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = (99999 * 9999);
		$config['max_width']            = (99999 * 9999);
		$config['max_height']           = (99999 * 9999);
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('poster')){
			}

			$lomba_judul = trim($this->input->post('lomba_judul'));
			$lomba_isi=trim($this->input->post('lomba_isi'));
			$lomba_link=trim($this->input->post('lomba_link'));
			$lomba_deadline=trim($this->input->post('lomba_deadline'));
			$lomba_tiket=trim($this->input->post('lomba_tiket'));
            $lomba_alamat=trim($this->input->post('lomba_alamat')); 
            $lomba_kat_id=trim($this->input->post('lomba_kat_id')); 
            $lomba_created_time=date("Y-m-d h:i:sa");
            $lomba_update_time=date("Y-m-d h:i:sa");
            $lomba_created_by_id = $this->session->user_id;
            $lomba_update_by_id = $this->session->user_id;
			$data = array(
				'lomba_judul' => $lomba_judul, 
				'lomba_isi' => $lomba_isi,
				'lomba_link' => $lomba_link, 
				'lomba_deadline' => $lomba_deadline,
				'lomba_tiket' => $lomba_tiket, 
				'lomba_alamat' => $lomba_alamat, 
                'lomba_gambar' => $this->upload->data('file_name'),
                'lomba_created_time' => $lomba_created_time, 
                'lomba_update_time' => $lomba_update_time, 
                'lomba_created_by_id' => $lomba_created_by_id, 
                'lomba_update_by_id' => $lomba_update_by_id,
                'lomba_kat_id'=>$lomba_kat_id
			);
			if($this->dbObject->create_general( $this->lomba, $data)===TRUE)		// using direct parameter
			{
				
				?>
				<script> 
					alert(" Data berhasil disimpan. ");
					location.replace("<?=base_url()?>index.php/admin/lomba/"); 
				</script>
				<?php
				//redirect('kepegawaian/jabatan','refresh');
			}
			else {
				?>
				<script> 
					alert(" Data gagal disimpan. ");
					location.replace("<?=base_url()?>index.php/admin/lomba/tambah"); 
				</script>
				<?php
				//redirect('kepegawaian/jabatan_insert','refresh');
			}
    }

    public function permintaan_lomba(){
        $data['lomba'] = $this->dbObject->get_general_permintaan_lomba($this->lomba, $this->lomba_kate, $this->id_lomba, $this->id_lomba_kate);		
        
        $this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/footer');
        $this->load->view('admin/lomba/tampil_permintaan', $data);
        $this->load->view('admin/templates/subfooter');
    }
    public function penentuan($param="", $param2=""){
        
        $lomba_keterangan=trim($this->input->post('keterangan'));
        $data = array(
            'status' => $param2,
            'lomba_keterangan'=>$lomba_keterangan
        );
        if($this->dbObject->update_general($this->lomba, 'lomba_id', $param, $data )===TRUE)		// using direct parameter
        {
            ?>
            <script> 
                alert("<?=$param2?>");
                location.replace("<?=base_url()?>index.php/admin/lomba/"); 
            </script>
            <?php
            //redirect('master/jabatan','refresh');
        }
        else {
            ?>
            <script> 
                alert(" Gagal Proses. ");
                location.replace("<?=base_url()?>index.php/admin/lomba/permintaan_lomba");   
            </script>
            <?php
            //redirect('master/jabatan_insert','refresh');
        }
    }
    public function edit_lomba($param=""){
        $data['lomba'] = $this->dbObject->get_general_4($param);		
        $this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/footer');
        $this->load->view('admin/lomba/edit', $data);
        $this->load->view('admin/templates/subfooter');

    }


}
