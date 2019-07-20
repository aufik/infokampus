<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
    {
			parent::__construct();
    		if ($this->session->userdata('login') == 0) redirect('auth/logout');
            $this->load->model('admin/model_lomba', 'dbObject');
    }

    
   public $tbl = 'profile';
    public $id_name = 'id_pt';

    public function update($param2='', $param1='')
    {
        $data['title'] = 'Atur Profil Perusahaan';
        $x['profile'] = $this->dbObject->get_general('profile');     
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/footer');
        $this->load->view('admin/profile/profile', $x);
        $this->load->view('admin/templates/subfooter');

        if ($param1=='do') {
                $id_pt = $this->input->post('id_pt');
                $nama_pt=$this->input->post('nama_pt');
                $no_telp=$this->input->post('no_telp');
                $email = $this->input->post('email');
                $alamat = $this->input->post('alamat');
                $tentang = $this->input->post('tentang');
                $visi = $this->input->post('visi');
                $misi = $this->input->post('misi');
                $identitas = $this->input->post('identitas');

            $data = array(
                        'id_pt' => $id_pt,
                        'nama_pt' => $nama_pt,
                        'no_telp' => $no_telp,
                        'email' => $email,
                        'alamat' => $alamat,
                        'tentang' => $tentang,
                        'visi' => $visi,
                        'misi' => $misi,
                        'identitas' => $identitas,
                    );
            if($this->dbObject->update_general($this->tbl, $this->id_name, $param2, $data)===TRUE)      // using direct parameter
            {
                ?>
                <script>
                    alert(" Data berhasil diubah. ");
                    location.replace("<?=base_url()?>index.php/admin/profile/update");
                </script>
                <?php
                
            }
            else {
                ?>
                <script>
                    alert(" Data gagal diubah. ");
                    location.replace("<?=base_url()?>index.php/admin/profile/update");
                </script>
                <?php
                
            }       
            }                                                                           
  }


}
